<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Article;

class Test extends Controller
{
    public function view($id){

    	$article = Article::find($id);
    	$article->category;
    	$article->user;
    	$article->tags;
    	
    	return view('example/index',['article' => $article]);
    }
}
