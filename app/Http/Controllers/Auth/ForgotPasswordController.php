<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    public function ShowFormForpassWork(){
        return view('client.layouts.partials.forgot-password');
    }
    public function sendResetLinkEmail(Request $req){
        $req ->validate([
            'email'=>'required|email|exists:users,email'
        ],[
            'email.required'=>'Bạn Không Được Để Trống!',
            'email.email'=>'Bạn Nhập Đúng Email!',
            'email.exists' =>"Email Không Khớp!"
        ]);
        // tạo một token ngẫu nhiên
        $token = str::random(50);
        // lưu vào bảng password_resets
        DB::table('password_resets')->updateOrInsert(
            [
                'email'=>$req->email
            ],[
                'token'=>$token,
                'created_at'=> Carbon::now()
            ]
        );
        // gửi email cài đặt lại mật khẩu
        $email = $req->email;
        Mail::send('resesst',['token'=>$token],
        function ($message) use($email){
            $message->to($email);
            $message->subject('Yêu Cầu Đặt Lại Mật Khẩu Mới');
        }
    );
    return redirect()-> back()->with('status','Đã Gửi Email Tới tài khoản của bạn');

    }
    public function resesst(){
        view('client.layouts.partials.resets');
    }
}
