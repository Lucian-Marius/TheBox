        <x-heading>Create concept</x-heading>


<x-layout>
@auth

        <form method="POST" action="/concepts">
        @csrf
    
        <div class="add-form">

            <div class="radio-category">
                <div class="radio-group">
                    
                    <div class="radio-option">
                        <input type="radio" id="category-technology" name="category" value="Technology">
                        <label for="category-technology"><img class="card-deco" src="{{ Vite::asset('resources/images/tech-gear.png') }}"</label>
                    </div>
                    
                    <div class="radio-option">
                        <input type="radio" id="category-creative" name="category" value="Creative">
                        <label for="category-creative"><img class="card-deco" src="{{ Vite::asset('resources/images/art-gear-2.png') }}"</label>
                    </div>
                    
                    <div class="radio-option">
                        <input type="radio" id="category-business" name="category" value="Business">
                        <label for="category-business"><img class="card-deco" src="{{ Vite::asset('resources/images/buss-gear.png') }}"</label>
                    </div>
                    
                    <div class="radio-option">
                        <input type="radio" id="category-science" name="category" value="Science">
                        <label for="category-science"><img class="card-deco" src="{{ Vite::asset('resources/images/nature-gear.png') }}"</label>
                    </div>
                    
                    <div class="radio-option">
                        <input type="radio" id="category-other" name="category" value="Other">
                        <label for="category-other"><img class="card-deco" src="{{ Vite::asset('resources/images/other-gear.png') }}"</label>
                    </div>
                
                </div>
            </div>

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
        @if ($errors->any())
            <div class="error-messages">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            
            
@endauth

@guest
    <h1 class="guest-message">You must be logged in in order to add a concept</h1>
    <div class="guest-auth-links">
        {{-- <div class="navbar-auth"><a class="nav-link" href="/login">login</a></div>
        <div class="navbar-auth"><a class="nav-link" href="/register">register</a></div> --}}
    </div>
@endguest

</x-layout>

