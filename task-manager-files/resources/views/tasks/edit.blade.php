@extends('layouts.app')
@section('content')
    <form action="{{ route('tasks.update', $task) }}" method="POST" class="space-y-4 bg-white p-6 rounded border">
        @csrf @method('PUT')
        @include('tasks._form')
        <button class="bg-slate-800 text-white px-4 py-2 rounded">Update Task</button>
    </form>
@endsection
