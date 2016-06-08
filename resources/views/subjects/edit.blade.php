@extends('layouts.app')

@section('content')
 @include('includes._nav')
<div class="container">
    <div class="row">
        <h2>Prepravi predmet: {!! $subject->name!!}</h2>

    <hr/>

    
    {!! Form::model($subject, ['method' => 'PATCH', 'action' =>['SubjectsController@update', $subject->id]]) !!}

    @include('includes._form',['submitButtonText'=>'Prepravi predmet'])
    {!! Form::close() !!}

    

    </div>
</div>

@endsection