<?php

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
Route::get("/auth/login", "Auth\LoginController@index")->name("auth.login");
Route::post("/auth/login","Auth\LoginController@login");

Route::get("/auth/logout","Auth\loginController@logout");

Route::get("/auth/register","Auth\RegisterController@index");
Route::post("/auth/register","Auth\RegisterController@store");


Route::get("/admin/dashboard","Admin\DashboardController@index")->name("admin.dashboard")->middleware([adminLogin::class]);
Route::get("/admin/product","Admin\DashboardController@product");
Route::get("/admin/product/insert", "Admin\DashboardController@create")->name("admin.create");
Route::get("/admin/product/edit/{id}","Admin\DashboardController@edit");
Route::patch("/admin/product/edit/{id}","Admin\DashboardController@update");
Route::post("/admin/product", "Admin\DashboardController@store");
Route::delete("/admin/product/delete/{id}", "Admin\DashboardController@destroy");
Route::get("/admin/order", "Admin\DashboardController@order");

Route::get("/admin/category", "Admin\DashboardController@category");
Route::post("/admin/category", "Admin\DashboardController@cateStore");

Route::delete("/admin/category/delete/{id}", "Admin\DashboardController@cateDestroy");

Route::get("/home","User\HomeController@index")->name("home");
Route::get("/home/{cateName}/{id}", "User\HomeController@categoryProduct");
Route::get("/home/detail/{detail}/{id}","User\HomeController@detail");

Route::get("/user/cart","User\Homecontroller@cart");
Route::get("/user/cart/{id}","User\Homecontroller@cartStore");
Route::get("/user/cart/{id}/increment","User\Homecontroller@increate");
Route::get("/user/cart/{id}/decrement","User\Homecontroller@decreate");
Route::delete("/user/cart/{pro}/{user}", "User\Homecontroller@destroy");
Route::get("/user/order","User\Homecontroller@order");
Route::post("/order","User\HomeController@orderProduct");
Route::get("/search","User\HomeController@search");