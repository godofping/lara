@extends('layouts.layout')

@section('title','Create Project')

@section('content')


    <div class="row">
        <h1>Create Project Form</h1>
    </div>
    


    <form action="/projects" method="POST" class="form">
    @csrf

    @include('errors')

    <div class="row">
        <div class="col-4">
            <div class="form-group">
                <label for="">Title</label>
                <input class="form-control" type="text" name="title" placeholder="Title here" value="{{ old('title') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-4">
            <div class="form-group">
                <label for="">Description</label>
                <textarea class="form-control" name="description" placeholder="Description here">{{ old('description') }}</textarea>
            </div>
        </div>
    </div>

    
    
    <br>
    <input class="btn btn-success" type="submit" value="save">
    </form>
    
@endsection