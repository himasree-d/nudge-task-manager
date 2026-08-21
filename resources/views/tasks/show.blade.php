@extends('layouts.app')
@section('content')
    @php
        $badge = match ($task->status) {
            'pending' => ['bg-butterlight', 'text-butter'],
            'in_progress' => ['bg-corallight', 'text-coral'],
            default => ['bg-sagelight', 'text-sage'],
        };
    @endphp
    <div class="bg-paper rounded-2xl p-6">
        <span class="{{ implode(' ', $badge) }} text-[11px] font-medium px-2.5 py-0.5 rounded-full">
            {{ ucfirst(str_replace('_', ' ', $task->status)) }}
        </span>
        <h1 class="font-display text-2xl mt-3">{{ $task->title }}</h1>
        <p class="text-mute text-sm mt-2 leading-relaxed">{{ $task->description ?: 'No description.' }}</p>
        @if ($task->due_date)
            <p class="text-xs text-mute mt-4">Due {{ \Carbon\Carbon::parse($task->due_date)->format('M j, Y') }}</p>
        @endif
        <a href="{{ route('tasks.index') }}" class="inline-block mt-6 text-sm text-ink hover:text-coral transition-colors">← Back</a>
    </div>
@endsection
