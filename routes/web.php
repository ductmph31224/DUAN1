<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Client\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//route đang ky, login
//route login
Route::get('/login', [AuthController::class, 'ShowFormLogin'])->name('login'); // Hiển thị form đăng nhập
Route::post('/Checklogin', [AuthController::class, 'Login'])->name('loginUser');    // Xử lý đăng nhập

//route đang ký tài khoản user
Route::get('/dang-ky',[AuthController::class,'ShowFrom_dangky'])->name('dangky');
Route::Post('/dang-ky',[AuthController::class,'dangky'])->name('dangkyUser');
//route khôi phục mật khẩu
route::get('/Khoi-phuc-mat-khau', [ForgotPasswordController::class, 'ShowFormForpassWork'])->name('khoiphucmatkhau');
route::post('checkform',[ForgotPasswordController::class,'sendResetLinkEmail'])->name('sendResetLinkEmail');
// route nội dung email
//route::get('email',[ForgotPasswordController::class,'resesst'])->name('resesst');

//show form thông tin tài khoản
route::get('My-acc',[AuthController::class,'ShowFormMyAcc'])->name('ShowFormMyAcc');

// route user
Route::get('/',[UserController::class,'indexUser'] )->name('index');


//route admin
Route::group([
    'prefix' => 'admin',
    'middleware' => ['auth', 'isAdmin']
], function () {
    // Giao diện admin
    Route::get('/index', [AdminController::class, 'indexAdmin'])->name('indexAdmin');
    // Các route khác cho admin
});

Route::view('/myacc','client.layouts.partials.my-account');
Route::get('/change',function(){
return view('client.layouts.partials.change-account');
})->name('change');


