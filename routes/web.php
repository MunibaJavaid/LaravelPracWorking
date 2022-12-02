<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Employee;
use App\Http\Controllers\ProductController;

// use App\Http\Controllers\ProductController;

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

Route::get('/AboutUs', function () {
    return view('basicLaravel');
});

Route::get('/ContactUs', function () {
    return view('contact');
});
Route::get('/show','Employee@Show');

Route::get('/showProd',[Employee::class,'InsProd']);




Route::resource('/products','ProductController');


















Route::get('/add', function () {
    return view('employee.add');
});

// Route::post('/save_record', 'Employee@insert_emp');
