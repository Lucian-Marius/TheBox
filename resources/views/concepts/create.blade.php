<x-layout>
@auth
    
    <h2>Create a new concept</h2>
        <form method="POST" action="/concepts" class="add-form-container">
        @csrf

    
        <div class="add-form">
            <div>
                <label for="name" class="add-form-label">Author</label>
                <input type="text" class="add-form-input" id="name" name="name" required>
            </div>
            
            
            <div>
                <label for="title" class="add-form-label">Title</label>
                <input type="text" class="add-form-input" id="title" name="title" required>
            </div>

    
            
            <div>
                <label for="description" class="add-form-label-description">Description</label>
                <textarea type="textarea" class="add-form-input-description" id="description" name="description" required>
                </textarea>
            </div>
            
            <div>
                <label for="tags" class="add-form-label">Tags (comma separated)</label>
                <input type="text" class="add-form-input" id="tags" name="tags">
            </div>

            <div>
            <button type="submit" class="button">Create Concept</button>
            </div>
        </div>
        </form>
        
            
            
@endauth

@guest
    <h1 class="guest-message">You must be logged in in order to add a concept</h1>
    <div class="guest-auth-links">
        <div class="navbar-auth"><a class="nav-link" href="/login">login</a></div>
        <div class="navbar-auth"><a class="nav-link" href="/register">register</a></div>
    </div>
    @endguest

</x-layout>

