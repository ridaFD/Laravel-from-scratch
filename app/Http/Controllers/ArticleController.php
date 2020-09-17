<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Tag;


class ArticleController extends Controller
{
    public function index() {
        if(request('tag')) {
            $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;
            // return $articles;
        } 
        else {
            $articles = Article::latest()->get();
        }

        return view('articles.index', [
            'articles' => $articles]);
    }

    public function show (Article $article) { // Article::where('id', 1)->first();
        
        return view('articles.show', [
            'article' => $article
        ]);
    }

    public function create () {
        return view('articles.create');
    }

    public function store () {
        // dump(request()->all());

        Article::create($this->validateArticle());

        return redirect(route('articles.index'));
    }

    public function edit(Article $article) {

        return view('articles.edit', compact('article'));
    }

    public function update(Article $article) {
        $article->update($this->validateArticle());

        return redirect($article->path());
    }

    protected function validateArticle() {

        return request()->validate ([
            'title' => 'required',
            'caption' => 'required',
            'body' => 'required'
        ]);
    }
}
