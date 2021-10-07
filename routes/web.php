<?php

use App\Models\Category;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;



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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Danuartha",
        "email" => "danuartha14gmail.com",
        "img" => "random1.jpg"
    ]);
});


Route::get('/lessons', [PostController::class, 'tampilkan']);

Route::get('lessons/{lesson:slug}', [PostController::class, 'tampilDetail']);

Route::get('/categories', function() {

    return view('categories', [
        'title' => 'Categories',
        'categories' => Category::all()
    ]);
});


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'register']);


Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');




// tidak dipakai karena sudah ditangani oleh model Lessons

// Route::get('/categories/{category:slug}', function(Category $category) {

//     return view('lessons', [
//         'title' => "Category : $category->name",
//         'lessons' => $category->lessons->load('category', 'author')
//     ]);
// });

// Route::get('/authors/{author:username}', function(User $author) {
//     return view('lessons', [
//         'title' => "Author : $author->name",
//         'lessons' => $author->lessons->load('category', 'author')
//     ]);
// });

