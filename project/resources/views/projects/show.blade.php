@extends('layouts.layout')


@section('title','show project')

@section('content')
    <h1>{{ $project -> title }}</h1>

    @if ($project->tasks->count())
    <ul>
        @foreach ($project->tasks as $task)
        <li>
        <form action="/tasks/{{ $task->id }}" method="POST">
                @method('PATCH')
                @csrf

                <label class="{{ $task -> completed ? 'checked' : '' }}" for="completed">{{ $task->description }}</label>
                <input type="checkbox" name="completed" onchange="this.form.submit()" {{ $task -> completed ? 'checked' : '' }} >
                
            </form>
        </li>
        @endforeach
    </ul>
    @endif

    <div class="row">
        <div class="col-4">

        @include('errors')

        <form method="POST" action="/projects/{{ $project -> id }}/tasks">
                @csrf
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" name="description">
                </div>
       
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    

@endsection