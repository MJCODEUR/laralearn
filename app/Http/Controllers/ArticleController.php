<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use App\models\Article;

class ArticleController extends Controller
{
    public function index (){


        $articles = Article::all();

        $numero = ["1", "2", "3", "4"];
        $nom = "Mj codeur";
        return view('home', [
            "articles" => $articles,

                            // "nom" => $nom,
                            // "age" => 16,
                            // "product" => "",
                            // "nums" => $numero

        ]);
    }

    public function store (Article $article, ArticleRequest $request) {
        Article::create([
            'titre' => $request->titre
        ]);

        return redirect()->back()->with('success', 'L\'article a bien été enregistré');
    }
}
