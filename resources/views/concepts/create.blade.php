<x-layout>
@auth
    
    <h2>Create a new concept</h2>
        <form method="POST" action="/concepts" class="add-form-container">
        @csrf

    
        <div class="add-form">
            <div class="m-3">
                <label for="name" class="add-form-label">Author</label>
                <input type="text" class="add-form-input" id="name" name="name" required>
            </div>
            
            
            <div class="m-3">
                <label for="title" class="add-form-label">Title</label>
                <input type="text" class="add-form-input" id="title" name="title" required>
            </div>

            <div class="m-3">
                <label for="title" class="add-form-label">Tag</label>
                <input type="text" class="add-form-input" id="tag" name="tag" required>
            </div>
            
            <div class="m-3">
                <label for="description" class="add-form-label-description">Description</label>
                <textarea type="textarea" class="add-form-input-description" id="description" name="description" required>
                </textarea>
            </div>

            <button type="submit" class="button">Create Concept</button>
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

