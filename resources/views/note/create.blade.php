<x-app-layout>
    <div class="create-container">
        <h1>Create a New Note</h1>
        <form action="{{ route('note.store') }}" method="POST" class="create-form">
            @csrf
            <div class="form-group">
                <label for="note" class="form-label">Note Content</label>
                <textarea id="note" name="note" class="form-textarea" rows="6" placeholder="Write your note here..." required></textarea>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Save Note</button>
                <a href="{{ route('note.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</x-app-layout>
