<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ui\MainController;
use App\Http\Controllers\Ui\FormController;


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



Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/why', [MainController::class, 'why_ddha'])->name('why');
Route::get('/learning', [MainController::class, 'learning'])->name('learning');
Route::get('/personalized', [MainController::class, 'personalized'])->name('personalized');
Route::get('/organic', [MainController::class, 'organic'])->name('organic');
Route::get('/benefits', [MainController::class, 'benefits'])->name('benefits');
Route::get('/affiliation-cbse', [MainController::class, 'affiliation_cbse'])->name('affiliation-cbse');
Route::get('/curriculum', [MainController::class, 'curriculum'])->name('curriculum');
Route::get('/career-guidance-cell', [MainController::class, 'career_guidance_cell'])->name('career-guidance-cell');
Route::get('/library', [MainController::class, 'library'])->name('library');
Route::get('/admission-at-ddha', [MainController::class, 'admission_at_ddha'])->name('admission-at-ddha');
Route::get('/withdrawal-policy', [MainController::class, 'withdrawal_policy'])->name('withdrawal-policy');
Route::get('/contact-us', [MainController::class, 'contact'])->name('contact-us');
Route::get('/blog', [MainController::class, 'blog'])->name('blog');
Route::get('/blog/{slug?}', [MainController::class, 'blog_view'])->name('blog-view');
Route::get('/news', [MainController::class, 'news'])->name('news');
Route::get('/news/{slug?}', [MainController::class, 'news_view'])->name('news-view');
Route::get('/event', [MainController::class, 'event'])->name('event');
Route::get('/event/{slug?}', [MainController::class, 'event_view'])->name('event-view');

Route::post('save', [FormController::class, 'save'])->name('save');


Route::get('/online-registration', function () {
    return view('ui.pages.online-registration');
});  
Route::get('/thankyou', function () {
    return view('ui.pages.thankyou');
})->name('thankyou');  


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/admin.php';
Route::get('{slug?}', [MainController::class, 'dynamic'])->where('slug', '(.*)')->name('dynamic');
