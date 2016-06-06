<?php

namespace App\Http\Controllers;
use App\Subjects;

use Illuminate\Http\Request;

use App\Http\Requests;

class SubjectsControler extends Controller
{
    public function __construct()
    {

        $this->middleware('auth');

    }



    public function index(){

    	$subjects = \Auth::user()->subjects->all();
        return view('subjects', compact('subjects'));

    	/*$pages = pages::all();
    	*/

    }
    /*
    public function show($id){


    	$pages = pages::all();
    	$article = articles::find($id);
    	return view('articles.show', compact('pages','article'));

    }

     public function create(){

     	$pages = pages::all();
     	return view('articles.create', compact('pages'));

    }

    public function store(ArticleRequest $request){

    	$article= new articles ($request->all());

        \Auth::user()->articles()->save($article);

    	

    	return redirect('articles');
     	
    }

    public function edit($id){

    	

    	$pages = pages::all();
    	$article = articles::findOrFail($id);
     	return view('articles.edit', compact('pages','article'));
     	
    }

    public function update($id, ArticleRequest $request){

    	

    	
    	$article = articles::findOrFail($id);
     	
     	$article->update($request->all());

     	return redirect('articles');
     	
    }*/
}
