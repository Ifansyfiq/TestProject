<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/user/{id}', function ($id) {
//     return 'user'.$id;
// });

Route::get('/user', [UserController::class, 'index'])->name('user');
Route::get('/user/create', [UserController::class, 'create']);
Route::get('/user/edit', [UserController::class, 'edit']);

Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/create', [BlogController::class, 'create']); //create form
Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store'); //save to db
Route::get('/blog/{id}/edit', [BlogController::class, 'edit']); //update form
Route::post('/blog/update', [BlogController::class, 'update'])->name('blog.update'); //save to db (update) form  
    

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
