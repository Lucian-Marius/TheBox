<x-heading> The Box </x-heading>



<x-layout>
    
    @auth
    <div class="search-logout">
        <form action="/search" class="search-form">
            <button class="search-button" type="submit">Search</button>
            <input class="search-bar" type="text" name='q' placeholder="find ideas...">
        </form>

        @auth
            <form method="POST" action="/logout" class="navbar-auth" style="display: inline;">
                @csrf
                <button type="submit" class="button">logout</button>
            </form>
        @endauth
    </div>

    
        <section class="welcome-user">
            <h3>Welcome, {{ auth()->user()->name }} !</h3>
            <p>Explore concepts, share your ideas, and connect with others.</p>
        </section>
    @endauth

    @guest
    <h1 class="guest-message">You must be logged in in order to explore our page</h1>
    <div class="guest-auth-links">
        {{-- <div class="navbar-auth"><a class="nav-link" href="/login">login</a></div>
        <div class="navbar-auth"><a class="nav-link" href="/register">register</a></div> --}}
    </div>
    @endguest

    
    @auth
        
    <section class="welcome">
        <h3 class="welcome-title">Browse by Category</h3>
        <div class="category-buttons">
            <a href="/" class="{{ !request('category') ? ' active' : '' }}"><img src="{{ Vite::asset('resources/images/other-gear.png') }}" alt="Pandora Logo" class="logo"></a>
            <a href="/?category=Technology" class="{{ request('category') === 'Technology' ? ' active' : '' }}">            <img src="{{ Vite::asset('resources/images/tech-gear.png') }}" alt="Pandora Logo" class="logo"></a>

            <a href="/?category=Creative" class="{{ request('category') === 'Creative' ? ' active' : '' }}"><img src="{{ Vite::asset('resources/images/art-gear-2.png') }}" alt="Pandora Logo" class="logo"></a>
            

            <a href="/?category=Business" class="{{ request('category') === 'Business' ? ' active' : '' }}"><img src="{{ Vite::asset('resources/images/buss-gear.png') }}" alt="Pandora Logo" class="logo"></a>
            

            <a href="/?category=Science" class="{{ request('category') === 'Science' ? ' active' : '' }}">
                <img src="{{ Vite::asset('resources/images/nature-gear.png') }}" alt="Pandora Logo" class="logo"></a>
            
            <a href="/?category=Other" class="{{ request('category') === 'Other' ? ' active' : '' }}"><img src="{{ Vite::asset('resources/images/gear-settings.png') }}" alt="Pandora Logo" class="logo"></a>
</a>
        </div>
    </section>

        <h3 class="tags-title">or by tags</h3>

    <section class="tags-section card-tags ">
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
    

</x-layout>

   





