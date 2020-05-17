@extends('layout')

@section('title')
    Tasks
@endsection

@section('content')
    <div class="px-64">
        <h1 class="font-bold text-2xl">Tasks List</h1><br>
        <ul>
            @foreach($tasks as $task)
                <li class="border m-3 p-3">Title: {{ $task->title }} <small
                        class="float-right">Create at: {{ $task->created_at }}</small></li>
            @endforeach
        </ul>
    </div>
@endsection
