<?php

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

/*route::get('seeder', function (){

    $article = new App\Models\Article();

    $article->title = 'Articolo #9';
    $article->categori = 'informatica';
    $article->description = 'Lorem';
    $article->body = '...';

    $article->save();
    
}); */ 

//return view('pages.chi_siamo');

use App\Http\Controllers\PageController;

use App\Http\Controllers\ArticleController;

use App\Http\Controllers\ContactController;

use App\Http\Controllers\AnimeController;

Route::get('/', [PageController::class, 'home']);


Route::get('/chi_siamo', [PageController::class, 'about'])->name('about');


Route::get('/articoli',[ArticleController::class, 'articles'])->name('articles');



Route::get('/articolo/{$id}', [ArticleController::class, 'article'])->name('article');


Route::get('/contatti', [ContactController::class, 'form'])->name('contact');

Route::post('/contatti/save', [ContactController::class, 'save'])->name('contact.save');

route::get('/anime/genres', [AnimeController::class, 'genres'])->name('anime.genres');

route::get('/anime/genres/{$id}', [AnimeController::class, 'animecategory'])->name('anime.category');

route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');  

route::post('/article/store', [ArticleController::class, 'store'])->name('article.store'); 