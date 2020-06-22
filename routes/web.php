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
Route::get("/admin/dashboard","Admin\DashboardController@index")->name("admin.dashboard");
Route::get("/home","User\HomeController@index")->name("home");
Route::get("/admin/product/insert", "Admin\DashboardController@create")->name("admin.create");
Route::post("/admin/product", "Admin\DashboardController@store");
Route::get("/admin/product","Admin\DashboardController@product");
Route::delete("/admin/product/delete/{id}", "Admin\DashboardController@destroy");
Route::get("/admin/product/edit/{id}","Admin\DashboardController@edit");
Route::patch("/admin/product/edit/{id}","Admin\DashboardController@update");
Route::get("/home/{detail}/{id}","User\HomeController@detail");
Route::get("/auth/logout","Auth\loginController@logout");
Route::get("/home/cart/{{id}}","User\HomeController@addCart");