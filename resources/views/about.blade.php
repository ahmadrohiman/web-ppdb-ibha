@extends('layouts.maintemplate')

@section('containerr')

<article>
    <h1>Halaman About</h1>
    <h3> {{ $name }} </h3>
    <p> {{ $email }} </p>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200">
</article>

@endsection

