<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
  public function showChangePasswordForm(){
    return view('client.layouts.partials.change-password');
  }

//   public function changePassword(Request $request){

//            $request->validate([
//             'current_password' => 'required',
//             'new_password' => 'required|min:8|confirmed',
//         ]);


//         if (!Hash::check($request->current_password, Auth::user()->password)) {
//             return back()->withErrors(['current_password' => 'Mật khẩu hiện tại không đúng.']);
//         }

//         $user = Auth::user();
//         $user->password = Hash::make($request->new_password);
//         $user->save();


//         return back()->with('status', 'Mật khẩu đã được thay đổi thành công.');

//   }

}

