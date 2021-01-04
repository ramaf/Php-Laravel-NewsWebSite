<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::redirect('/anasayfa','/home')->name('anasayfa');

Route::get('/', function () {
    return view('home.index');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');

Route::middleware('auth')->prefix('admin')->group(function (){
    Route::get('/',[\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');

    Route::get('category',[\App\Http\Controllers\Admin\CategoryController::class,'index'])->name('admin_category');
    Route::get('category/add',[\App\Http\Controllers\Admin\CategoryController::class,'add'])->name('admin_category_add');
    Route::post('category/create',[\App\Http\Controllers\Admin\CategoryController::class,'create'])->name('admin_category_create');
    Route::post('category/update/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'update'])->name('admin_category_update');
    Route::get('category/edit/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'edit'])->name('admin_category_edit');
    Route::get('category/delete/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'destroy'])->name('admin_category_delete');
    Route::get('category/show',[\App\Http\Controllers\Admin\CategoryController::class,'show'])->name('admin_category_show');

    Route::prefix('news')->group(function (){
        Route::get('/',[\App\Http\Controllers\Admin\NewsController::class,'index'])->name('admin_newss');
        Route::get('create',[\App\Http\Controllers\Admin\NewsController::class,'create'])->name('admin_news_create');
        Route::post('store',[\App\Http\Controllers\Admin\NewsController::class,'store'])->name('admin_news_store');
        Route::get('edit/{id}',[\App\Http\Controllers\Admin\NewsController::class,'edit'])->name('admin_news_edit');
        Route::post('update/{id}',[\App\Http\Controllers\Admin\NewsController::class,'update'])->name('admin_news_update');
        Route::get('delete/{id}',[\App\Http\Controllers\Admin\NewsController::class,'destroy'])->name('admin_news_delete');
        Route::get('show',[\App\Http\Controllers\Admin\NewsController::class,'show'])->name('admin_news_show');

    });
    #News Image Gallery
    Route::prefix('image')->group(function (){

        Route::get('create/{news_id}',[\App\Http\Controllers\Admin\ImageController::class,'create'])->name('admin_image_add');
        Route::post('store/{news_id}',[\App\Http\Controllers\Admin\ImageController::class,'store'])->name('admin_image_store');
        Route::get('delete/{id}/{news_id}',[\App\Http\Controllers\Admin\ImageController::class,'destroy'])->name('admin_image_delete');
        Route::get('show',[\App\Http\Controllers\Admin\ImageController::class,'show'])->name('admin_image_show');

    });

    #Settings

    Route::get('setting',[\App\Http\Controllers\Admin\SettingController::class,'index'])->name('admin_setting');
    Route::post('setting/update',[\App\Http\Controllers\Admin\SettingController::class,'update'])->name('admin_setting_update');


});

Route::get('/admin/login',[HomeController::class,'login'])->name('admin_login');
Route::post('/admin/logincheck',[HomeController::class,'logincheck'])->name('admin_logincheck');
Route::get('/admin/logout',[HomeController::class,'logout'])->name('admin_logout');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
