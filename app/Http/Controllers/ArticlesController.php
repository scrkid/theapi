<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Article;


class ArticlesController extends Controller
{
    public function index(){

        $articles = Article::all();


//        $articles = ['IoT', 'Startups', 'SaaS'];
//
        return view('articles.index', compact('articles'));
    }

    public function show($id){
        $article = Article::find($id);
        if(is_null($article)){
            abort(404);
        }
        return view('articles.show', compact('article'));
    }

    public function create(){
        return view('articles.create');
    }
}
