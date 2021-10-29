<?php

// use app\Http\Controllers\UserController2;

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


Route::get('/namasiswa',"SiswaController@index");
Route::get('/lakek',"SiswaController@lakek");
Route::get('/a',"SiswaController@index");


Route::get('/', function () {
    return view('welcome');
});

Route::get('/coba', "UserController2@index");

// Route::get('/coba-routing', function () {
//     return "Kok bisa bg";
// });

Route::get('/coba-routing/{siapa}', function ($nama) {
    return "Kok bisa bg $nama";
});

Route::get('/coba-routing/{siapa?}', function ($nama = "Guest") { //opsional parameter
    return "Kok bisa bg $nama";
});

// Route::get('/users', "UserController@index")->name('list-user'); //btul + penamaan
// Route::get('/users', "UserController@index"); //btul
// Route::get('/users', [UserController::class, 'index']); //error // harus masukkan use di atas sue "use app\Http\Controllers\namacontroller"


// // login belum didefinisikan
// Route::middleware(['auth'])->group(function() { //semua route dalam ini otomatis middleware auth
//     //Route ini menggunakan middleware auth
//     Route::get('/users', "UserController@index")->name('list-user');

//     Route::get('users/profile', function() {

//     });
// });


Route::prefix('users')->group(function() { //semua route di dalam ini otomatis menuju users*
    // URI Route otomatis diawalin users/
    Route::get('/', "UserController@index")->name('list-user');

    Route::get('/profile', function() {
        return 2;
    });
});

// // error penamaan grupnya
// Route::resource('user', UserController2::class)->name([
//     'index' => 'user.list' //index diberi nama user.list?
// ]);
// Route::resource('user', UserController2::class);

// Route::resource('user', [UserController2::class, 'index'], [ //gtau dah error
//     "nama" => "kok"
// ]);