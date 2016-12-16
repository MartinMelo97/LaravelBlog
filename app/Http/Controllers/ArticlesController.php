<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Laracasts\Flash\Flash;
use App\Article;
use App\Http\Request\ArticleRequest;
use App\Category;
use App\Tag;
use App\Image;

class ArticlesController extends Controller
{
    public function index(){

    	$array = [];
    	$articles = Article::orderBy('title','DESC')->paginate(5);
    	$articles->each(function($articles){
    		$articles->category;
    		$articles->user;
    	});
    	return view('admin.articles.index')->with('articles',$articles);

    }

    public function create(){
    	$categories = Category::orderBy('name','ASC')->lists('name','id');
    	$tags = Tag::orderBy('name','ASC')->lists('name','id');
    	return view('admin.articles.create')->with('categories',$categories)->with('tags',$tags);

    }

    public function store(Request $request){

    	//Manipulacion de imagenes
    	if($request->file('image'))
    	{
	    	$file = $request->file('image');
	    	$name = 'blogfacilito_' . time() . '.' . $file->getClientOriginalExtension();
	    	$path = public_path().'/images/articles';
	    	$file->move($path, $name);
	    }	

	    $article = new Article($request->all());
	    if(\Auth::check()){
	    $article->user_id = \Auth::user()->id;
	    }
	    else
	    {$article->user_id = 1;}
	    $article->save();

	    $image = new Image();
	    $image->name = $name;
	    $image->articles()->associate($article);
	    $image->save();

	    $article->tags()->sync($request->tags);

	    Flash::success('Se ha creado el articulo '. $article->title);
	    return redirect()->route('admin.articles.index');

    }

    public function show($id){

    }

    public function edit($id){

    }

    public function update(ArticleRequest $request, $id){

    }

    public function destroy($id){

    }
}
