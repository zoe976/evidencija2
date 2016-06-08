@extends('layouts.app')

@section('content')
 @include('includes._nav')
<div class="container">
    <div class="row">
        <h2>Kreiraj predmet</h2>

    <hr/>

    {!! Form::open(['url'=>'subjects']) !!}

    @include('includes._form',['submitButtonText'=>'Kreiraj predmet'])
    {!! Form::close() !!}

    

    </div>
</div>

@endsection