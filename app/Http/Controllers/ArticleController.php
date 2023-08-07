<?php

namespace App\Http\Controllers;

use App\Models\Article;

//use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function articles(){

       

        $title = 'articoli';

        $subtitle = 'Lorem';

        
    
    
    
        

        $articles = \App\Models\Article::all();

        return view('articoli', compact('title', 'subtitle', 'articles'));



    }

    public function article($id){ 

        $article = Article::findOrFail($id);

        return view('articoli', compact('article'));
    }

    public function create(){

        return view('account.create');
    }

    public function store(Request $request){

        $article = new Article();

        $article->title = $request->title;
        $article->categori = $request->categori;
        $article->description = $request->description;
        $article->body = $request->body;

        $article->save();

    }
};
