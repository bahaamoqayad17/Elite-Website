<?php

use App\Http\Controllers\LanguageController;
use App\Http\Controllers\SiteController;
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

Route::name('site.')->group(function () {
    Route::get('/', [SiteController::class, 'index'])->name('index');
    Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
    Route::get('/faq', [SiteController::class, 'faq'])->name('faq');
    Route::get('/blogs', [SiteController::class, 'blogs'])->name('blogs');
    Route::get('/blog/{id}', [SiteController::class, 'blog'])->name('blog');
    Route::get('/login', [SiteController::class, 'login'])->name('login');
    Route::get('/register', [SiteController::class, 'register'])->name('register');
    Route::get('/courses', [SiteController::class, 'courses'])->name('courses');
    Route::get('/course/{id}', [SiteController::class, 'course'])->name('course');
    Route::get('/profile', [SiteController::class, 'profile'])->name('profile');
    Route::get('/notification', [SiteController::class, 'notification'])->name('notification');
    Route::get('/clients', [SiteController::class, 'clients'])->name('clients');
    Route::get('/posts', [SiteController::class, 'posts'])->name('posts');
    Route::get('/plan/{id}', [SiteController::class, 'plan'])->name('plan');
    Route::get('/plans', [SiteController::class, 'plans'])->name('plans');
    Route::get('/subscribe-course', [SiteController::class, 'subscribe_course'])->name('subscribe_course');
    Route::get('/recorded-course', [SiteController::class, 'recorded_course'])->name('recorded_course');
    Route::get('/privacy-policy', [SiteController::class, 'privacy_policy'])->name('privacy_policy');
    Route::get('/crypto-currencies', [SiteController::class, 'crypto_currencies'])->name('crypto_currencies');
    Route::get('/bot-terms', [SiteController::class, 'bot_terms'])->name('bot_terms');
    Route::get('/code-bot', [SiteController::class, 'code_bot'])->name('code_bot');
    Route::get('/forget-password', [SiteController::class, 'forget_password'])->name('forget_password');
    Route::get('/create-bot', [SiteController::class, 'create_bot'])->name('create_bot');
    Route::get('/bot-transactions', [SiteController::class, 'bot_transactions'])->name('bot_transactions');
    Route::get('lang/{lang}', [LanguageController::class, 'changeLanguage'])->name('lang');
});
