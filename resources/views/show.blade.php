@extends('layouts.app')

@section('title', $task->title)

@section('content')
    <p class="mb-2">{{ $task->description }}</p>

    @if ($task->long_description)
        <p class="mb-5">{{ $task->long_description }}</p>
    @endif

    <a href="{{ route('tasks.index') }}" class="button bg-gray-500">Back</a>

    <a href="{{ route('tasks.edit', $task) }}" class="button">Edit</a>

    <form action="{{route('tasks.complete',$task)}}" method="post" class="inline-block">
        @csrf
        @method('PUT')
        <button type="submit" class="button bg-green-700">Complete</button>
    </form>

    <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="inline-block">
        @csrf
        @method('DELETE')
        <button type="submit" class="button bg-red-700">Delete</button>
    </form>

@endsection
