<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ui\MainController;


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


Route::get('/contact', function () {
    return view('ui.pages.contact');
});

Route::get('/blog', function () {
    return view('ui.pages.blog');
});
Route::get('/blog_details', function () {
    return view('ui.pages.blog_details');
});  

Route::get('/pastoral_care', function () {
    return view('ui.pages.pastoral_care');
});  

Route::get('/health_wellbeing', function () {
    return view('ui.pages.health_wellbeing');
});  

Route::get('/security_safety', function () {
    return view('ui.pages.security_safety');
});

Route::get('/food_nutrition', function () {
    return view('ui.pages.food_nutrition');
});  


Route::get('/admission', function () {
    return view('ui.pages.admission');
});  

Route::get('/withdrawal_policy', function () {
    return view('ui.pages.withdrawal_policy');
});  

Route::get('/affiliation_cbse', function () {
    return view('ui.pages.affiliation_cbse');
});  


Route::get('/library', function () {
    return view('ui.pages.library');
});  

Route::get('/career_guidance_cell', function () {
    return view('ui.pages.career_guidance_cell');
});  

Route::get('/curriculum', function () {
    return view('ui.pages.curriculum');
});  
Route::get('/online-registration', function () {
    return view('ui.pages.online-registration');
});  



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
