@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Kontrolna tabla</div>

                <div class="panel-body">
                    @foreach ($subjects as $subject)
                       <li ><h2>{{ $subject->name }}</h2></li>
                    @endforeach
                </div>
            </div>
           
        </div>

        @include('includes._nav')
    </div>
</div>

@endsection