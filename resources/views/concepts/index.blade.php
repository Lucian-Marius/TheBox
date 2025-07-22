<x-heading> The Box 
</x-heading>



<x-layout>
    
    @auth
    <div class="search-logout">
        <form action="/search" class="search-form">
            <button class="search-button" type="submit">Search</button>
            <input class="search-bar" type="text" name='q' placeholder="find ideas...">
        </form>

 
    </div>

    
        <section class="welcome-user">
            <h3>Welcome, {{ auth()->user()->name }} !</h3>
            <p>Explore concepts, share your ideas, and connect with others.</p>
        </section>
    @endauth

    @guest
    <h1 class="guest-message">You must be logged in in order to explore our page</h1>
    {{-- <div class="guest-auth-links">
        {{-- <div class="navbar-auth"><a class="nav-link" href="/login">login</a></div>
        <div class="navbar-auth"><a class="nav-link" href="/register">register</a></div>
    </div> --}}
    @endguest

    
    @auth
        
    <section class="welcome">
        <h3 class="welcome-title">Categories</h3>
        <div class="category-buttons">
            <a href="/" class="{{ !request('category') ? ' active' : '' }}"><img src="{{ Vite::asset('resources/images/gear-settings.png') }}" alt="Pandora Logo" class="logo"></a>

            <a href="/?category=Technology" class="{{ request('category') === 'Technology' ? ' active' : '' }}">            <img src="{{ Vite::asset('resources/images/tech-gear.png') }}" alt="Pandora Logo" class="logo"></a>

            <a href="/?category=Creative" class="{{ request('category') === 'Creative' ? ' active' : '' }}"><img src="{{ Vite::asset('resources/images/art-gear-2.png') }}" alt="Pandora Logo" class="logo"></a>
            
            <a href="/?category=Business" class="{{ request('category') === 'Business' ? ' active' : '' }}"><img src="{{ Vite::asset('resources/images/buss-gear.png') }}" alt="Pandora Logo" class="logo"></a>
            
            <a href="/?category=Science" class="{{ request('category') === 'Science' ? ' active' : '' }}">
                <img src="{{ Vite::asset('resources/images/nature-gear.png') }}" alt="Pandora Logo" class="logo"></a>
            
            <a href="/?category=Other" class="{{ request('category') === 'Other' ? ' active' : '' }}"><img src="{{ Vite::asset('resources/images/other-gear.png') }}" alt="Pandora Logo" class="logo"></a>

        </div>
    </section>

        <h3 class="tags-title">tags</h3>

    <section class="card-tags">
            @foreach($tags as $tag)
                    <x-tag :$tag />
            @endforeach
    </section>


        <div class="x-card-container">
            @foreach ($concepts as $concept)
                <x-card :concept="$concept"></x-card>
            @endforeach
        </div>
    @endauth

    {{-- 
    
    TO DO:

    1.Move logout button to Header.
    2.Complete the credits page.
    3.Create Profile page accessible through the logo icon.
    4.Link Categoies with gear icons.
    5.Make an avatar list for user registration.
    6.Add delete confirmation when deleting a concept.
    7.When editing a concept, allow the user to also edit the tags and category.
    8.Change science category to nature.
    9.Change creative category to art.
    10.Add back or cancel buttons?
    
    --}}

</x-layout>

   





