<?php

namespace App\Http\Controllers;



use App\Http\Requests;
use App\Article;
use Carbon\Carbon;
use App\Http\Requests\CreateArticlesRequest;
use App\Http\Requests\Request;


class ArticlesController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){



        $articles = Article::where('user_id', \Auth::user()->id)->orderBy('published_at', 'desc')->get();


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

    public function store(CreateArticlesRequest $request){
        //$request fetches value from form. nothing to do user.pwith database.
        $input = $request->all();
        $input['published_at']=Carbon::now();
        $input['user_id'] = \Auth::user()->id;

        Article::create($input);

        return redirect('articles');
    }

    public function edit($id){
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }

    public function update($id, Requests\UpdateArticleRequest $request){
        //get the user id and set it.

        $article = Article::where('id', $id)->first();
        $user_id = \Auth::user()->id;
        $article['user_id'] = $user_id;
        $article['published_at'] = Carbon::now();
        $article->update($request->all());

        return redirect('articles');
    }
}
