<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmprestimoController;
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
    return view('auth.login');
});




// Route::get('/clientes', function () {
//     return view('customers.index');
// });

Route::get('/customer', function () {
    return view('customers.show');
});


Route::get('/emprestimos', function () {
    return view('loans.index');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::group(['middleware' => ['auth']], function() {


    Route::get('customers', [CustomerController::class, 'index'])->name('customers');
    Route::get('emprestimos', [EmprestimoController::class, 'index'])->name('emprestimos');
    Route::get('roles', [RoleController::class, 'index'])->name('roles');


    Route::resource('users', UserController::class);

    Route::get('/home', function () {
        return view('home.home');
    });
});

require __DIR__.'/auth.php';
