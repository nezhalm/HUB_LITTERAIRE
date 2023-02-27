<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\livreController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
 Route::get('/test', [ProfileController::class, 'livre']);
 Route::get('/usersaffichage', [ProfileController::class, 'afficheUser']);
 Route::get('/groupesaffichage', [ProfileController::class, 'affichegroupes']);
 Route::get('/categoriesaffichage', [ProfileController::class, 'affichecategories']);
 Route::get('/add_categorie',[CategorieController::class,'index'])->middleware(['auth'])->name('add_categorie');
 Route::post('/categorieController/create',[CategorieController::class,'store'])->middleware(['auth']);
 Route::get('/view/{id}',[CategorieController::class,'show'])->middleware(['auth']);
 Route::get('/delete_categorie/{id}',[CategorieController::class,'destroy'])->middleware(['auth']);
 Route::get('/edit_categorie/{id}',[CategorieController::class,'edit'])->middleware(['auth']);
 Route::post('/update_categorie/{id}',[CategorieController::class,'update'])->middleware(['auth']);
 Route::get('/favoris/{id}',[livreController::class,'create'])->middleware(['auth']);
 Route::get('/favorisT',[livreController::class,'index'])->middleware(['auth'])->name('favorisT');

 Route::get('/groupe', function () {
    return view('groupe');
});

// Route::get('/favoris',[livreController::class,'create']);


Route::get('/aa',[livreController::class,'index'])->middleware(['auth']);


require __DIR__.'/auth.php';
