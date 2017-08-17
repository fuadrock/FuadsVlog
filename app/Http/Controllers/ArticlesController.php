<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\User;
use Illuminate\Support\Facades\Auth;

class ArticlesController extends Controller
{

    public function index()
    {


      $articles =  Article::orderBy('created_at', 'desc')->paginate(10);

        return view('articles.index',compact('articles'));
    }

    public function create()
    {
        return view('articles.create');

    }


    public function store(Request $request)
    {

        Article::create($request->all());
       return redirect('/articles');
    }

    public function show($id)
    {


    }


    public function edit($id)
    {


        $article = Article::findOrFail($id);
        if($article->user->id != Auth::user()->id ){
            return response("Unorthorised Access",401);
        }
        return view('articles.edit',compact('article'));
    }


    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        if(!isset($request->live))
            $article->update(array_merge($request->all(),['live' => false]));
        else
             $article->update($request->all());
        return redirect('/articles');
    }


    public function destroy($id)
    {

    }
}
