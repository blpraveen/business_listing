<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\FrontEnd\BusinessController as ListingController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [ListingController::class, 'all']);
Route::get('/listing/{id}', [ListingController::class, 'view']);
Route::get('/fetch_listing', [ListingController::class, 'fetch_listing'])->name('fetch_listing');
Route::post('/rating', [ListingController::class, 'rating'])->name('rating');
Route::get('/admin/login', [AdminController::class, 'loginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login']);
Route::get('/admin/logout', [AdminController::class, 'logout']);
#Route::get('/admin/login', 'AdminController@loginForm')->name('admin.login');
#Route::post('/admin/login', 'AdminController@login');
#Route::get('/admin/logout', 'AdminController@logout');


Route::middleware(['auth.admin'])->group(function () {
   
   Route::get('/admin', function()
{
	return view('admin.dashboard');
});

/**Admin Business Routing**/


Route::get('/download', [AdminController::class, 'loginForm'])->name('admin.login');
Route::get('admin/business/create', [BusinessController::class, 'showCreate']);
Route::post('/admin/business/create', [BusinessController::class, 'create']);
Route::get('admin/business/manage', [BusinessController::class, 'manage']);
Route::get('admin/business/delete/{id}',[BusinessController::class, 'delete'] );
Route::get('admin/business/status/{action}/{id}',[BusinessController::class, 'status']);
Route::get('admin/business/edit/{id}',[BusinessController::class, 'showEdit']);
Route::post('admin/business/edit/{id}',[BusinessController::class, 'update']);
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
