<x-heading> The Box </x-heading>



<x-layout>
    @auth
        <form action="/search" class="search-form">
            <button class="search-button" type="submit">Search</button>
            <input class="search-bar" type="text" name='q' placeholder="find ideas...">
        </form>

    
        <section class="welcome-user">
            <h3>Welcome, {{ auth()->user()->name }} !</h3>
            <p>Explore concepts, share your ideas, and connect with others.</p>
        </section>
    @endauth

    @guest
    <h1 class="guest-message">You must be logged in in order to explore our page</h1>
    <div class="guest-auth-links">
        <div class="navbar-auth"><a class="nav-link" href="/login">login</a></div>
        <div class="navbar-auth"><a class="nav-link" href="/register">register</a></div>
    </div>
    @endguest

    
    @auth
        
    <section class="welcome">
        <h3 class="welcome-title">Browse by Category</h3>
        <div class="category-buttons">
            <a href="/" class="button"{{ !request('category') ? ' active' : '' }}">All</a>
            <a href="/?category=Technology" class="button{{ request('category') === 'Technology' ? ' active' : '' }}">Technology</a>
            <a href="/?category=Creative" class="button{{ request('category') === 'Creative' ? ' active' : '' }}">Art</a>
            <a href="/?category=Business" class="button{{ request('category') === 'Business' ? ' active' : '' }}">Business</a>
            <a href="/?category=Science" class="button{{ request('category') === 'Science' ? ' active' : '' }}">Science</a>
            <a href="/?category=Other" class="button{{ request('category') === 'Other' ? ' active' : '' }}">Other</a>
        </div>
    </section>


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

   





