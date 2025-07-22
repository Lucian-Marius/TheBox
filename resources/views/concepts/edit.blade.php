<x-layout>
    
    <h2 class="edit-title">Edit this concept</h2>
        <form method="POST" action="{{ route('concepts.update', $concept) }}" class="add-form-container">
        @csrf
        @method('PATCH')

    
        <div class="add-form">
            
            <div>
                <label for="title" class="add-form-label" >Title</label>
                <input type="text" class="add-form-input" id="title" name="title" value="{{ $concept->title }}">
            </div>

    
            
            <div>
                <label for="description" class="add-form-label-description" >Description</label>
                <textarea type="textarea" class="add-form-input-description" id="description" name="description">{{ $concept->description }}
                </textarea>
            </div>
            
            <div>
            <button type="submit" class="button">Save</button>
            <a class="button-link" style="padding: 14px" href="{{ route('concepts.show', $concept) }}">Cancel</a>
            </div>
        </div>
        </form>

</x-layout>

