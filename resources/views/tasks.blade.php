@extends('layouts.app')

@section('content')

<h1 class="text-2xl font-bold mb-5">
    Task List
</h1>

<div>
    @forelse ($tasks as $task)
        <div>
            <a href="{{ route('tasks.show',['task' =>$task->id])}}" @class(['font-semibold' => $task->completed, 'line-through' => $task->completed])>{{$task->title}}</a>
        </div>
    @empty
        <p>No tasks</p>
    @endforelse
    <div style="margin-top: 1rem">
        <a href="{{ route('task.create') }}"><button class="button mb-5 ">Create Task</button></a>
    </div>

    @if ($tasks->hasPages())
        {{ $tasks->links() }}        
    @endif
</div>

@endsection