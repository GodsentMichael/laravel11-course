<x-layout>
    <div class="show-container">
        <h1>Note Details {{$note->created_at}}</h1>
        <div class="note-content">
            <p>{{ $note->note }}</p>
        </div>
        <div class="note-actions">
            <a href="{{ route('note.edit', $note->id) }}" class="btn btn-edit">Edit</a>
            <form action="{{ route('note.destroy', $note->id) }}" method="POST" class="btn-form">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-delete">Delete</button>
            </form>
            <a href="{{ route('note.index') }}" class="btn btn-secondary">Back to Notes</a>
        </div>
    </div>
</x-layout>
