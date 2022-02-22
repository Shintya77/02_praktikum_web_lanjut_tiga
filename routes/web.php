<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ContactController;

Route::pattern('id', '[0-9]+');

Route::get('/', [HomeController::class, 'home']);
Route::prefix('category')->group(function() {
    Route::get('/marbel-edu-games', [ProdukController::class, 'marbelEduGames']);
    Route::get('/marbel-and-friends-kids-games', [ProdukController::class, 'merbelAndFriends']);
    Route::get('/riri-story-books', [ProdukController::class, 'ririStoryBook']);
    Route::get('/kolak-kids-songs', [ProdukController::class, 'kolakKidsSongs']);
});
Route::get('/news/{id}', [NewsController::class, 'beritaid']);
Route::get('/news/{subkategori}', [NewsController::class, 'beritaSubKategori']);
Route::prefix('program')->group(function() {
    Route::get('/magang',[ProgramController::class, 'magang']);
    Route::get('/karir',[ProgramController::class, 'karir']);
    Route::get('/kunjungan-industri',[ProgramController::class, 'kunjunganIndustri']);
});
Route::get('/about-us', function () {
    echo "<a href=https://www.educastudio.com/about-us>About Us</a>";
});
Route::resource('contact', ContactController::class);


// Route::get('/', function () {
//     return view('welcome');
// });
