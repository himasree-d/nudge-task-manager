@extends('layouts.app')
@section('content')
    <div class="bg-white border rounded p-6">
        <h2 class="text-xl font-bold">{{ $task->title }}</h2>
        <p class="text-slate-600 mt-2">{{ $task->description ?: 'No description.' }}</p>
        <p class="mt-4 text-sm">Status: <strong>{{ ucfirst(str_replace('_', ' ', $task->status)) }}</strong></p>
        @if($task->due_date)<p class="text-sm">Due: {{ $task->due_date }}</p>@endif
        <a href="{{ route('tasks.index') }}" class="inline-block mt-4 text-blue-600">← Back to list</a>
    </div>
@endsection
