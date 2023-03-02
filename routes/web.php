<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\postscontroller;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

Route::get('/post',[postscontroller::class, 'getposts'])->name('post.index')->middleware('auth');
Route::get('/viewpost/{post_Id}',[postscontroller::class, 'viewpost'])->middleware('auth');

Route::get('/create', [postscontroller::class, 'create'])->name('post.create')->middleware('auth');
Route::post('/store', [postscontroller::class, 'store'])->name('post.store')->middleware('auth');


Route::delete('/delete/{id}', [postscontroller::class, 'destroy'])->name('post.destroy')->middleware('auth');


Route::get('/update/{id}', [postscontroller::class, 'update'])->name('post.update')->middleware('auth');
Route::put('/edit/{id}', [postscontroller::class, 'edit'])->name('post.edit')->middleware('auth');

Route::get('/users', [postscontroller::class, 'getusers'])->name('user')->middleware('auth');



Route::get('/userposts/{id}', [postscontroller::class, 'viewuser'])->name('viewuser')->middleware('auth');

