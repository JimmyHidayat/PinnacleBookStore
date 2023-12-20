<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
// use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use App\Models\Post;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\PostController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
//     return view('home');
// });

// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/login', function () {
//     return view('login.index');
// });

// Route::get('/register', function () {
//     return view('register.index');
// });

Route::get('/navbar', function () {
    return view('navbar');
});

Route::get('/', function () {
    return view('home',
    [
        "title" => "Home",
        'posts' => Post::all()
    ]
);
});



Route::get('/categories', function () {
    return view('categories');
});

Route::get('/MyBooks', function () {
    return view('MyBooks');
});

Route::get('/dashboard', function() {
    return view('dashboard.index');
});


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


// Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/auth/google', [GoogleAuthController::class, 'redirect'])->name('google-auth');
Route::get('/auth/google/call-back', [GoogleAuthController::class, 'callbackGoogle']);

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::post('/create', [PostController::class, 'store'])->name('create_post');
Route::get('/show/{post:title}', [PostController::class, 'show'])->name('show_post');
