<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tag;
use Laracasts\Flash\Flash;
use App\Http\Requests\TagRequest;

class TagsController extends Controller
{
    public function index(Request $request){

    	$tags = Tag::Search($request->name)->orderBy('name','ASC')->paginate(5);
    	return view('admin.tags.index')->with('tags',$tags);

    }

    public function create(){
    	return view('admin.tags.create');
    }

    public function store(TagRequest $request){
    	$tag = new Tag($request->all());
    	$tag->save();

    	Flash::success("Tag ".$tag->name." registrado exitosamente");
    	return redirect()->route('admin.tags.index');
    }

    public function show($id){

    }

    public function edit($id){
    	$tag = Tag::find($id);
    	return view('admin.tags.edit')->with('tag',$tag);
    }

    public function update(TagRequest $request, $id){
    	$tag = Tag::find($id);
    	$anterior = $tag->name;
    	$tag->fill($request->all());
    	$tag->save();

    	Flash::info('Tag '.$anterior.' actualizada a '.$tag->name);
    	return redirect()->route('admin.tags.index');
    }

    public function destroy($id){
    	$tag = Tag::find($id);
    	$tag->delete();

    	Flash::error('Tag '.$tag->name." eliminado(a)");
    	return redirect()->route('admin.tags.index');
    }
}
