@extends('layouts.app')
@section('content')
    <form action="{{ route('tasks.store') }}" method="POST" class="space-y-4 bg-white p-6 rounded border">
        @csrf
        @include('tasks._form')
        <button class="bg-slate-800 text-white px-4 py-2 rounded">Create Task</button>
    </form>
@endsection
