@extends('layouts.app')
@section('content')
    <h1 class="font-display text-2xl mb-6">Edit task</h1>
    <form action="{{ route('tasks.update', $task) }}" method="POST" class="space-y-5 bg-paper rounded-2xl p-6">
        @csrf @method('PUT')
        @include('tasks._form')
        <button class="bg-ink text-cream text-sm font-medium px-5 py-2.5 rounded-full hover:bg-coral transition-colors">Save changes</button>
    </form>
@endsection
