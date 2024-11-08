<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function ShowFormLogin()
    {
        return view('client.layouts.partials.login');
    }
    public function Login(Request $request)
    {
        // dd($request); die;
        // Thực hiện xác thực đầu vào
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ],[
            'email.required' => 'Vui lòng nhập email.',
            'email.email' => 'Email không đúng định dạng.',
            'password.required' => 'Vui lòng nhập mật khẩu.',
            'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự.',
        ]);


        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            $userRole = Auth::user()->role;

            if ($userRole === 'admin') {
                return redirect()->route('indexAdmin');
            }
            return redirect()->route('index');
        }

        // Trả về thông báo lỗi nếu đăng nhập không thành công
        return redirect()->route('login')->withErrors(['email' => 'Email hoặc mật khẩu không đúng']);
    }

    public function UseLogout()
    {
        Auth::logout();
        return redirect()->route('index');
    }
    // đăng ký tài khoản user
    //showform đăng ký
    public function ShowFrom_dangky()
    {
        return view('client.layouts.partials.register');
    }
    public function dangky(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|digits_between:10,15',
            'address' => 'required|string|max:255',
            'password' => 'required|string|confirmed|min:6',

        ], [
            'name.required' => 'Họ và tên là bắt buộc.',
            'email.required' => 'Email là bắt buộc.',
            'email.email' => 'Email không hợp lệ.',
            'email.unique' => 'Email đã được sử dụng.',
            'phone.required' => 'Số điện thoại là bắt buộc.',
            'phone.digits_between' => 'Số điện thoại phải có từ 10 đến 15 chữ số.',
            'address.required' => 'Địa chỉ là bắt buộc.',
            'password.required' => 'Mật khẩu là bắt buộc.',
            'password.confirmed' => 'Mật khẩu xác nhận không khớp.',
            'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự.',

        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'password' => Hash::make($request->password),
        ]);

        // Auth::login($user);

        return redirect()->route('login')->with('success', 'Đăng ký thành công! Bạn đã đăng nhập.');
    }
    public function ShowFormMyAcc(){
        return view('client.layouts.partials.my-account');
    }


}
