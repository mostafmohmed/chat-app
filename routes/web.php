<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\usercontroller;
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
Route::post('/saveuser', [usercontroller::class,'save_chat'])->name('save');
Route::post('/load-chat', [usercontroller::class,'save_chat'])->name('save');
Route::get('/jhk',function(){
    return 'ghfh';
});
// Route::get('/', function () {
//     return view('dashboard');
// });

Route::get('/dashboard', [usercontroller::class,'load'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
