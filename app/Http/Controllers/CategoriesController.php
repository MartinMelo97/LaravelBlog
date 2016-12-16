<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use Laracasts\Flash\Flash;
use App\Http\Requests\CategoriesRequest;

class CategoriesController extends Controller
{
    public function index(){
    	$categories = Category::orderBy('name','desc')->paginate(10);
    	return view('admin.categories.index')->with('categories',$categories);
    }

    public function create(){
    	return view('admin.categories.create');
    }

    public function store(CategoriesRequest $request){
    	$category = new Category($request->all());
    	$category->save();

    	Flash::success('Categoria '.$category->name." creada con exito");
    	return redirect()->route('admin.categories.index');

    }

    public function show($id){

    }

    public function edit($id){
    	$category = Category::find($id);
    	return view('admin.categories.edit')->with('category',$category);
    }

    public function update(CategoriesRequest $request, $id){
    	$category = Category::find($id);
    	$anterior = $category->name;
    	$category->fill($request->all());
    	$category->save();

    	Flash::info('Categoria '.$anterior." actualizada a ".$category->name);
    	return redirect()->route('admin.categories.index');
    }

    public function destroy($id){
    	$category = Category::find($id);
    	$category->delete();

    	Flash::error('Categoria '.$category->name.' eliminada');
    	return redirect()->route('admin.categories.index');

    }
}
