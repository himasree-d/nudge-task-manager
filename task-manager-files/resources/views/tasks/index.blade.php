@extends('layouts.app')
@section('content')
    <a href="{{ route('tasks.create') }}" class="inline-block bg-slate-800 text-white px-4 py-2 rounded mb-4">+ New Task</a>

    <div class="space-y-3">
        @forelse ($tasks as $task)
            <div class="border rounded p-4 flex justify-between items-center bg-white">
                <div>
                    <a href="{{ route('tasks.show', $task) }}" class="font-semibold hover:underline">{{ $task->title }}</a>
                    <div class="text-sm text-slate-500">{{ ucfirst(str_replace('_', ' ', $task->status)) }}
                        @if($task->due_date) · due {{ $task->due_date }} @endif
                    </div>
                </div>
                <div class="flex gap-3 text-sm">
                    <a href="{{ route('tasks.edit', $task) }}" class="text-blue-600">Edit</a>
                    <form action="{{ route('tasks.destroy', $task) }}" method="POST" onsubmit="return confirm('Delete this task?')">
                        @csrf @method('DELETE')
                        <button class="text-red-600">Delete</button>
                    </form>
                </div>
            </div>
        @empty
            <p class="text-slate-500">No tasks yet.</p>
        @endforelse
    </div>
@endsection
