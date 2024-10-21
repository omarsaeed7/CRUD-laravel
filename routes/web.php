<?php
use App\Http\Controllers\HelloController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('home');})->name('home');
// Posts View  Page
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
// Creating Post Page
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
// Return to View Page after creating new post
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
// Editing post page
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
// Update Post in DB
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
//Delete posts
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
// View Posts
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');// name is like an alias for the route to use it in href of anchor tag in html to make it easy to maintain







// Route::get('/', function () {
//     return view('welcome');
// })->name('welcome');


// Route::get('/test', function () {

//     return view('hello', ['name' => 'ahmad', 'age' => 25, 'books' => ["html", "css", "js"]]); // is the name of the variable in the view
// });

// Route::get('/hello', [HelloController::class,'helloAction']);
// Route::get('/hello2', [HelloController::class,'helloAction2']);
