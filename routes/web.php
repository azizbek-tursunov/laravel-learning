<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
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

// Route::get('/', [UserController::class, 'index']);
// Route::post('/store', [UserController::class, 'store']);

Route::controller(UserController::class)->group(function() {
    Route::get('/', 'index');
    Route::get('/store');
});






Route::get('/greating', function() {
    return 'Assalomu alaykum';
});

Route::view('/salom', 'salom');


// **********------------------------********************
Route::prefix('admin')->group(function () {
   Route::get('/app', function() {
    return "Bu admin route";
   });
   
   Route::get('/home', function() {
    return "Admin HomePage";
   });
});


Route::group(['prefix' => '/admin'], function() {
    Route::get('/app', function() {
        return "Bu admin route ni boshqacha varianti";
    });

    Route::get('/home', function() {
        return "bu AdminHomePageni boshqacha ko'rinishi";
    });
});



//************************************


Route::get('/user/{user?}', function($user = 'default user') {
    return "User: $user";
})->whereAlphaNumeric('user');