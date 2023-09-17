@extends('layouts.app')

@section('title', isset($task) ? 'Edit Task' : 'Add Task')

@section('styles')
    <style>
        .error-message {
            color: red;
            font-size: 0.8rem;
        }
    </style>
@endsection

@section('content')
    <form method="POST" class="flex flex-col gap-2" action="{{ isset($task) ? route('tasks.update', ['task' => $task->id]) : route('tasks.store') }}">
        @csrf
        @isset($task)
            @method('PUT')
        @endisset
        <div class="flex flex-col gap-1">
            <label for="title" class="font-bold">
                Title
            </label>
            <input text="text" @class(['input-text','border' => $errors->has('title'),'border-red-600' => $errors->has('title')]) name="title" id="title" value="{{ $task->title ?? old('title') }}" />
            @error('title')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex flex-col gap-1">
            <label for="description" class="font-bold">Description</label>
            <textarea name="description" @class(['input-text','border' => $errors->has('title'),'border-red-600' => $errors->has('description')])  id="description" rows="5">{{ $task->description ?? old('description') }}</textarea>
            @error('description')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex flex-col gap-1">
            <label for="long_description" class="font-bold">Long Description</label>
            <textarea name="long_description" @class(['input-text','border' => $errors->has('title'),'border-red-600' => $errors->has('long_description')])  id="long_description" rows="10">{{ $task->long_description ?? old('long_description') }}</textarea>
            @error('long_description')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <button type="submit" class="mt-5 button">
                @isset($task)
                    Update Task
                @else
                    Add Task
                @endisset
            </button>
        </div>
    </form>
@endsection
