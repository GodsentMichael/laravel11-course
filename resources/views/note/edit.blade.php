<x-layout>
    <div class="edit-container">
        <h1>Edit Note</h1>
        <form action="{{ route('note.update', $note->id) }}" method="POST" class="edit-form">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="note" class="form-label">Edit Note Content</label>
                <textarea id="note" name="note" class="form-textarea" rows="6" required>{{ $note->note }}</textarea>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Update Note</button>
                <a href="{{ route('note.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</x-layout>
