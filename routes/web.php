<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;
use App\Models\Article;

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
// Doesn't work anymore this type of route
Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    $articles = Article::all()->take(4);

    return view('about', [
        'articles' => $articles
    ]);
});

Route::get('/articles', [ArticleController::class, 'index']);
Route::post('/articles', [ArticleController::class, 'store']);
Route::get('/articles/create', [ArticleController::class, 'create']);
Route::get('/articles/{id}', [ArticleController::class, 'show']);
