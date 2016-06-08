@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Evidencija predmeta</div>

                <div class="panel-body">
                    
                    @if (Auth::user())
                
                    <a href="{{ url('/subjects') }}">Kontrolna tabla</a>
                    @else
                Početna strana
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection