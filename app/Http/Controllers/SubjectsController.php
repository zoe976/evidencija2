<?php

namespace App\Http\Controllers;
use App\Subjects;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\SubjectsRequest;


use App\Http\Controllers\Auth;
use App\User;

class SubjectsController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth');

    }



    public function index(){

    	$subjects = \Auth::user()->subjects->all();
        return view('subjects.index', compact('subjects'));

    	/*$pages = pages::all();
    	*/

    }
    
    public function show($id){


    	$subject = Subjects::find($id);
    	return view('subjects.show', compact('subject'));

    }

     public function create(){

     	
     	return view('subjects.create');

    }

    public function store(SubjectsRequest $request){

    	$subject = new Subjects ($request->all());

       \Auth::user()->subjects()->save($subject);

    	return redirect('subjects');
     	
    }

    public function edit($id){

    	
    	$subject = Subjects::findOrFail($id);
     	return view('subjects.edit', compact('subject'));
     	
    }

    public function update($id, SubjectsRequest $request){

    	$subject = Subjects::findOrFail($id);
     	
     	$subject->update($request->all());

     	return redirect('subjects/'.$id);
     	
    }
}
