<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\userController;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here    ===is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();


// / For users with row 1
// Route::group(['middleware' => ['check.row'], 'row' => '0'], function () {
//     Route::get('/page1', [adminController::class, 'page1'])->name('row1.page1');
//     Route::get('/page2', [adminController::class, 'page2'])->name('row1.page2');
//     Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// });

// // For users with row 2
// Route::group(['middleware' => ['check.row'], 'row' => '1'], function () {
//     Route::get('/page3', [userController::class, 'page3'])->name('row2.page3');
//     Route::get('/page4', [userController::class, 'page4'])->name('row2.page4');
//     Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// });

// Route::get('/page3', [userController::class, 'page3'])->name('row2.page3')->middleware('check.row');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.overview')->middleware('check.row');

Route::get('/page3', [App\Http\Controllers\HomeController::class, 'page3'])->name('user.create.new');


Route::get('/create', function () {
    return view('admin.create-new');

});

Route::get('/creattte', function () {
    return view('user.create-new');

});

Route::get('/note', function () {
    return view('admin.note');

});
Route::get('/relrec', function () {
    return view('admin.related-records');

});
Route::get('/resinfo', function () {
    return view('admin.resolution-info');

});
Route::get('/history',[HomeController::class,'historyy']);


Route::get('/historry', function () {
    return view('user.history');

});

Route::get('/incidentedit', function () {
    return view('admin.editincident');

});



Route::post('/addincident',[HomeController::class,'addinci',]);

Route::post('/adddincident',[HomeController::class,'adddinci',]);
Route::get('assigned',[HomeController::class,'getassigned']);


Route::get('/open',[HomeController::class,'getopen']);
Route::get('/overview', function () {
    return view('admin.overview');
});
Route::get('/open-unassigned',[HomeController::class,'getopenunassigned']);
Route::get('/all',[HomeController::class,'getall']);

Route::get('/resolved',[HomeController::class,'getresolve']);

Route::get('/overview',[HomeController::class,'getoverview']);
Route::get('/roledit',[HomeController::class,'getuser']);

Route::get('/editrole-{id}',[HomeController::class,'editroll']);


Route::post('/postrole/{id}',[HomeController::class,'posteditroll']);
Route::post('/upload',[HomeController::class,'store']);























