@extends('layouts.app')

@section('content')
 @include('includes._nav')
<div class="container">
    <div class="row">
    <h2>Naziv predmeta: {{ $subject->name}}</h2>
    <h2>Tuzilac: {{ $subject->tuzilac}}</h2>
    <h2>Tuzeni: {{ $subject->tuzeni}}</h2>
    <h2>Broj predmeta: {{ $subject->broj_predmeta}}</h2>
    <h2>Sudija: {{ $subject->sudija}}</h2>
    <h2>Sudnica: {{ $subject->sudnica}}</h2>

    <a href="/subjects/{{ $subject->id }}/edit" type="button" class="btn btn-success">Izmeni predmet</a>

    </div>

</div>




@endsection