<x-layout>
    <div class="note-container">
        <!-- Header Section -->
        <div class="notes-header">
            <h1>Notes</h1>
            <a href="{{ route('note.create') }}" class="btn btn-primary">Create Note</a>
        </div>

        <!-- Notes Grid -->
        <div class="notes-grid">
            @foreach($notes as $note)
                <div class="note-card">
                    <div class="note-content">
                        <p>{{ Str::words($note->note, 50) }}</p>
                    </div>
                    <div class="note-actions">
                        <a href="{{ route('note.show', $note->id) }}" class="btn btn-view">View</a>
                        <a href="{{ route('note.edit', $note->id) }}" class="btn btn-edit">Edit</a>
                        <form action="{{ route('note.destroy', $note->id) }}" method="POST" class="btn-form">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-delete">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
