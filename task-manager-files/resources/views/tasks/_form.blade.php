<div>
    <label class="block text-sm font-medium mb-1">Title</label>
    <input type="text" name="title" value="{{ old('title', $task->title ?? '') }}" class="w-full border rounded px-3 py-2">
    @error('title') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
</div>

<div>
    <label class="block text-sm font-medium mb-1">Description</label>
    <textarea name="description" class="w-full border rounded px-3 py-2">{{ old('description', $task->description ?? '') }}</textarea>
</div>

<div>
    <label class="block text-sm font-medium mb-1">Status</label>
    <select name="status" class="w-full border rounded px-3 py-2">
        @foreach (['pending', 'in_progress', 'completed'] as $status)
            <option value="{{ $status }}" @selected(old('status', $task->status ?? '') == $status)>
                {{ ucfirst(str_replace('_', ' ', $status)) }}
            </option>
        @endforeach
    </select>
</div>

<div>
    <label class="block text-sm font-medium mb-1">Due date</label>
    <input type="date" name="due_date" value="{{ old('due_date', $task->due_date ?? '') }}" class="w-full border rounded px-3 py-2">
</div>
