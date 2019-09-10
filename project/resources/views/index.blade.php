@extends('layouts.layout')

@section('title', 'Home page')

@section('content')
    <h1>this is the index page</h1>

    <h2>Animals</h2>

    <ul>
        @foreach($datas as $data)
        <li>{{ $data }}</li>
        @endforeach
    </ul>

@endsection('content')
