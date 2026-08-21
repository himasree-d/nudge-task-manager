@extends('layouts.app')
@section('content')
    <div class="flex items-center justify-between mb-7">
        <h1 class="font-display text-2xl">Your tasks</h1>
        <a href="{{ route('tasks.create') }}" class="bg-ink text-cream text-sm font-medium px-4 py-2.5 rounded-full hover:bg-coral transition-colors">+ New</a>
    </div>

    @if ($tasks->isEmpty())
        <div class="text-center py-16 text-mute">
            <svg width="46" height="46" viewBox="0 0 48 48" fill="none" class="mx-auto mb-4 opacity-60">
                <circle cx="24" cy="24" r="20" stroke="currentColor" stroke-width="1.6"/>
                <path d="M16 25l5 5 11-12" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <p class="text-sm">Nothing here yet — add your first task.</p>
        </div>
    @else
        <div class="space-y-3">
            @foreach ($tasks as $task)
                @php
                    $badge = match ($task->status) {
                        'pending' => ['bg-butterlight', 'text-butter'],
                        'in_progress' => ['bg-corallight', 'text-coral'],
                        default => ['bg-sagelight', 'text-sage'],
                    };
                @endphp
                <div class="bg-paper rounded-2xl px-5 py-4 flex items-center justify-between gap-4">
                    <div class="min-w-0">
                        <a href="{{ route('tasks.show', $task) }}" class="font-medium hover:text-coral transition-colors truncate block">{{ $task->title }}</a>
                        <div class="flex items-center gap-2 mt-1.5">
                            <span class="{{ implode(' ', $badge) }} text-[11px] font-medium px-2.5 py-0.5 rounded-full">
                                {{ ucfirst(str_replace('_', ' ', $task->status)) }}
                            </span>
                            @if ($task->due_date)
                                <span class="text-xs text-mute">· {{ \Carbon\Carbon::parse($task->due_date)->format('M j') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="flex items-center gap-3 text-xs shrink-0">
                        <a href="{{ route('tasks.edit', $task) }}" class="text-mute hover:text-ink transition-colors">Edit</a>
                        <form action="{{ route('tasks.destroy', $task) }}" method="POST" onsubmit="return confirm('Delete this task?')">
                            @csrf @method('DELETE')
                            <button class="text-mute hover:text-coral transition-colors">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection
