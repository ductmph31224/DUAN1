<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\PublisherController;
use App\Http\Controllers\Client\UserController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Client\ClientCategoryController;
use App\Http\Controllers\Client\ProfileController;
use App\Http\Controllers\search\searchController;

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
Route::get('/dang-ky', [AuthController::class, 'ShowFrom_dangky'])->name('dangky');
Route::Post('/dang-ky', [AuthController::class, 'dangky'])->name('dangkyUser');
//route khôi phục mật khẩu
// route nội dung email
//route::get('email',[ForgotPasswordController::class,'resesst'])->name('resesst');

route::post('checkform',[ForgotPasswordController::class,'sendResetLinkEmail'])->name('sendResetLinkEmail');
// route show form khôi phục mật khẩu
route::get('khôi-phuc-mat-khau-moi',[ForgotPasswordController::class,'ShowFormResetPasswoek'])->name('ShowFormResetPasswoek');
route::post('check-form-khoi-phuc',[ForgotPasswordController::class,'passwordupdate'])->name('passwordupdate');


// logou tài khaoanr
route::post('logout',[AuthController::class,'UseLogout'])->name('logout');
//show form thông tin tài khoản
route::get('My-acc', [AuthController::class, 'ShowFormMyAcc'])->name('ShowFormMyAcc');

// route user

Route::get('/', [UserController::class, 'indexUser'])->name('index');
Route::get('by-category/{id}', [ClientCategoryController::class, 'byCategory'])->name('byCategory');




Route::get('/',[UserController::class,'indexUser'] )->name('index');
// route tìm kiếm
route::get('searchProducts',[searchController::class,'searchProducts'])->name('searchProducts');
// route trả kết quả tìm kiếm


//route admin
Route::middleware(['auth', 'isAdmin'])->prefix('admins')
->as('admins.')
->group( function () {
    // route trang chủ index
    // Giao diện admin
   //Route người dùng
   Route::resource('users', AdminUserController::class);
   Route::put('My-acc/update-profile',[AdminUserController::class,'update'])->name('doithongtin');
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
            ->group(function () {
                Route::get('/', [CategoryController::class, 'index'])->name('index');
                Route::get('create', [CategoryController::class, 'create'])->name('create');
                Route::post('store', [CategoryController::class, 'store'])->name('store');
                Route::get('{id}/edit', [CategoryController::class, 'edit'])->name('edit');
                Route::put('update/{id}', [CategoryController::class, 'update'])->name('update');
                Route::delete('destroy/{id}', [CategoryController::class, 'destroy'])->name('destroy');
                Route::get('category-by-product/{id}', [CategoryController::class, 'categoryByProduct'])->name('categoryByProduct');
            });

    });

        
        Route::prefix('authors')
            ->as('authors.')
            ->group(function () {
                Route::get('/', [AuthorController::class, 'index'])->name('index');
                Route::get('create', [AuthorController::class, 'create'])->name('create');
                Route::post('store', [AuthorController::class, 'store'])->name('store');
                Route::get('{id}/edit', [AuthorController::class, 'edit'])->name('edit');
                Route::put('update/{id}', [AuthorController::class, 'update'])->name('update');
                Route::delete('destroy/{id}', [AuthorController::class, 'destroy'])->name('destroy');
            });

        Route::prefix('publishers')
            ->as('publishers.')
            ->group(function () {
                Route::get('/', [PublisherController::class, 'index'])->name('index');
                Route::get('create', [PublisherController::class, 'create'])->name('create');
                Route::post('store', [PublisherController::class, 'store'])->name('store');
                Route::get('{id}/edit', [PublisherController::class, 'edit'])->name('edit');
                Route::put('update/{id}', [PublisherController::class, 'update'])->name('update');
                Route::delete('destroy/{id}', [PublisherController::class, 'destroy'])->name('destroy');
            });

});


// route::get('My-acc/doi-mk',function(){
//     return view('client.layouts.partials.change-account');

// });




// Route::view('/checkout','client.layouts.partials.forgot-password');
route::get('product/detail/{id}', [UserController::class, 'detailProduct'])->name('detailProduct');
Route::resource('acc', ProfileController::class);
Route::get('My-acc/doi-mk', [ProfileController::class, 'editPass'])->name('doimatkhau');
Route::put('My-acc/update-pass/{user}', [ProfileController::class, 'updatePass'])->name('update-pass');
Route::get('My-acc/profile', [ProfileController::class, 'profile'])->name('profile');
Route::put('My-acc/update-profile/{user}', [ProfileController::class, 'updateProfile'])->name('update-profile');

