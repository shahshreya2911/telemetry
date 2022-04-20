<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ManageRolesController;
use App\Http\Controllers\ManageUsersController;
use App\Http\Controllers\ManageProfileController;
use App\Http\Controllers\ManageChartsController;
use App\Http\Controllers\TestController;

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
Route::get('/test', [TestController::class, 'index'])->name('test');

Route::get('/', function () {
    // return redirect()->action([HomeController::class, 'index']);
    return redirect()->action([DashboardController::class, 'index']);
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/user', [UserController::class, 'index'])->name('user.index');


Route::get('/category', [CategoryController::class, 'index'])->name('category');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('/category/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('/category/storeedit', [CategoryController::class, 'update'])->name('category.update');
Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');


Route::group(['prefix' => 'roles'], function () {
   	Route::get('/', [ManageRolesController::class, 'index'])->name('roles');
    Route::get('create', [ManageRolesController::class, 'create'])->name('roles.create');
    Route::post('store', [ManageRolesController::class, 'store'])->name('roles.store');
    Route::get('edit/{id}', [ManageRolesController::class, 'edit'])->name('roles.edit');
    Route::post('storeedit', [ManageRolesController::class, 'storeedit'])->name('roles.storeedit');
    Route::get('delete/{id}', [ManageRolesController::class, 'delete'])->name('roles.delete');
});


// ADMIN ROUTES
Route::group([ 'middleware' => [ 'Admin' ]], function () {
    Route::group(['prefix' => 'users'], function () {
        Route::get('/', [ManageUsersController::class, 'index'])->name('users');
        Route::get('create', [ManageUsersController::class, 'create'])->name('users.create');
        Route::post('store', [ManageUsersController::class, 'store'])->name('users.store');
        Route::get('edit/{id}', [ManageUsersController::class, 'edit'])->name('users.edit');
        Route::post('storeedit', [ManageUsersController::class, 'storeedit'])->name('users.storeedit');
        Route::get('delete/{id}', [ManageUsersController::class, 'delete'])->name('users.delete');
    });    
});


Route::get('/myprofile', [ManageProfileController::class, 'index'])->name('myprofile');
Route::post('myprofile/update', [ManageProfileController::class, 'update'])->name('myprofile.update');
// chart 
Route::get('/charts', [ManageChartsController::class, 'index'])->name('charts');


////////// Original user routes
// Route::get('/user.get_data',[UserController::class, 'get_data'])->name('get_data');

// Route::resource('users', UsersController::class);
// Route::resource('users', ManageUsersController::class);
