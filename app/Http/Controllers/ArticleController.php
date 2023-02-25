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
            'titre' => $request->titre,
            'description' => $request->description
        ]);

        return redirect()->back()->with('success', 'L\'article a bien été enregistré');
    }


    // public function show($id){
    public function show(Article $article){


        // $article = Article::find($id);
        // dd( $article);
        return view('articles.show', [
            "article" => $article,
        ]);

    }
    public function edit(Article $article){

  return view('articles.edit', [
            "article" => $article,
        ]);


    }
    public function update(Article $article, ArticleRequest $request){


// la variable $article recuppere ls données à modifier

// c'est la variable $request qui recuppère les données modifiées

$article->titre = $request->titre;
$article->description = $request->description;

// dd($article->titre);
$article->SAVE();
return redirect('/')->with('success', 'L\'article a bien été mis à jour');
    }

    public function delete(Article $article){

$article->DELETE();
return redirect('/')->with('success', 'L\'article a bien été supprimé');
    }
}
