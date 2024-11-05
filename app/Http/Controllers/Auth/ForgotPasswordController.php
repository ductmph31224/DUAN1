<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\PasswordReset;
use App\Models\User;
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
    public function sendResetLinkEmail(Request $req)
    {
        // Xác thực đầu vào
        $req->validate([
            'email' => 'required|email|exists:users,email',
        ], [
            'email.required' => 'Bạn Không Được Để Trống!',
            'email.email' => 'Bạn Nhập Đúng Email!',
            'email.exists' => "Email Không Khớp!",
        ]);

        // Tạo một token ngẫu nhiên
        $token = Str::random(50);

        // Lưu token vào bảng users hoặc bảng password_resets
        User::where('email', $req->email)->update(['reset_token' => $token]);

        // Gửi email cài đặt lại mật khẩu
        $email = $req->email;
        Mail::send('emails.reset', ['token' => $token], function ($message) use ($email) {
            $message->to($email);
            $message->subject('Yêu Cầu Đặt Lại Mật Khẩu Mới');
        });

        return redirect()->back()->with('status', 'Đã Gửi Email Tới tài khoản của bạn');
    }
    // public function resesst(){
    //     view('client.layouts.partials.resets');
    // }
}
