<?php

use App\Models\Blog;
use Livewire\Volt\Volt;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\LoginController;

//main routes
Route::get("/", function () {
    return view("main.home");
})->name("home");
Route::view('/services', 'main.services')->name('services');
Route::view('/about', 'main.about')->name('about');
Route::view('/contact', 'main.contact')->name('contact');
Route::view('/pricing', 'main.pricing')->name('pricing');
Route::view('/faqs', 'main.faqs')->name('faqs');
Route::view('/career', 'main.career')->name('career');
Route::view('/terms', 'main.terms')->name('terms');
Route::view('/privacy', 'main.privacy')->name('privacy');
Route::view('/404', 'main.404')->name('404');

// Blog routes
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');


// admin routes


Route::prefix('admin')->group(function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [LoginController::class, 'login'])->middleware('throttle:3,1');

    Route::middleware(['admin'])->group(function () {
    	Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('messages', [AdminController::class, 'messages'])->name('admin.messages');
        Route::get('blogs', function () {
            return view('admin.blogs');
        })->name('admin.blogs');
        Route::get('blogs/create', function () {
            return view('admin.blog-create');
        })->name('admin.blogs.create');
        Route::get('blogs/{blog}', function (Blog $blog) {
            return view('admin.blog-show', compact('blog'));
        })->name('admin.blogs.show');
        Route::get('blogs/{blog}/edit', function (Blog $blog) {
            return view('admin.blog-edit', compact('blog'));
        })->name('admin.blogs.edit');
        // Add more admin-protected routes here
    });
});




//user dashboard routes

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

Route::post('/contact', [ContactController::class, 'store'])
    ->middleware('throttle:5,1')
    ->name('contact.store');

require __DIR__.'/auth.php';
