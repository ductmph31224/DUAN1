<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Client\UserController;
use App\Http\Controllers\Auth\ForgotPasswordController;

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
Route::middleware(['auth', 'isAdmin'])->prefix('admins')
->as('admins.')
->group( function () {
    // Giao diện admin
   //Route người dùng
   Route::resource('users', AdminUserController::class);
    Route::get('/index', [AdminController::class, 'indexAdmin'])->name('indexAdmin');
    // Các route khác cho admin
    Route::prefix('products')
    ->as('products.')
    ->group(function(){
        Route::get('/',[ProductController::class,'index'])->name('index');
        Route::get('create',[ProductController::class,'create'])->name('create');
        Route::post('store',[ProductController::class,'store'])->name('store');
        Route::get('{id}/edit',[ProductController::class,'edit'])->name('edit');
        Route::put('update/{id}',[ProductController::class,'update'])->name('update');
        Route::delete('destroy/{id}',[ProductController::class,'destroy'])->name('destroy');
    });

     Route::prefix('categories')
    ->as('categories.')
    ->group(function(){
        Route::get('/',[CategoryController::class,'index'])->name('index');
        Route::get('create',[CategoryController::class,'create'])->name('create');
        Route::post('store',[CategoryController::class,'store'])->name('store');
        Route::get('{id}/edit',[CategoryController::class,'edit'])->name('edit');
        Route::put('update/{id}',[CategoryController::class,'update'])->name('update');
        Route::delete('destroy/{id}',[CategoryController::class,'destroy'])->name('destroy');
    });
});








