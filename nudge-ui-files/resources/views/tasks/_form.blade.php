<div>
    <label class="block text-xs font-medium text-mute mb-1.5 uppercase tracking-wide">Title</label>
    <input type="text" name="title" value="{{ old('title', $task->title ?? '') }}"
        class="w-full bg-cream border-none rounded-xl px-4 py-2.5 text-sm focus:ring-2 focus:ring-coral outline-none">
    @error('title') <p class="text-coral text-xs mt-1">{{ $message }}</p> @enderror
</div>

<div>
    <label class="block text-xs font-medium text-mute mb-1.5 uppercase tracking-wide">Description</label>
    <textarea name="description" rows="3"
        class="w-full bg-cream border-none rounded-xl px-4 py-2.5 text-sm focus:ring-2 focus:ring-coral outline-none">{{ old('description', $task->description ?? '') }}</textarea>
</div>

<div class="grid grid-cols-2 gap-4">
    <div>
        <label class="block text-xs font-medium text-mute mb-1.5 uppercase tracking-wide">Status</label>
        <select name="status" class="w-full bg-cream border-none rounded-xl px-4 py-2.5 text-sm focus:ring-2 focus:ring-coral outline-none">
            @foreach (['pending', 'in_progress', 'completed'] as $status)
                <option value="{{ $status }}" @selected(old('status', $task->status ?? '') == $status)>
                    {{ ucfirst(str_replace('_', ' ', $status)) }}
                </option>
            @endforeach
        </select>
    </div>
    <div>
        <label class="block text-xs font-medium text-mute mb-1.5 uppercase tracking-wide">Due date</label>
        <input type="date" name="due_date" value="{{ old('due_date', $task->due_date ?? '') }}"
            class="w-full bg-cream border-none rounded-xl px-4 py-2.5 text-sm focus:ring-2 focus:ring-coral outline-none">
    </div>
</div>
