<nav class="navbar">
        
        <div>
        <img src="{{ Vite::asset('resources/images/gear-logo.png') }}" alt="Pandora Logo" class="logo">
        </div>
        
        <div class="navbar-link"><a class="nav-link" href="/">Concepts</a></div>
        <div class="navbar-link"><a class="nav-link" href="/concepts/create"> Add a concept</a></div>


        <div style="margin-left: 60px; align-items: flex-top; display: flex;">
        <img src="{{ Vite::asset('resources/images/complex-gear-deco.png') }}" alt="Pandora Logo" class="nav-deco">
        </div>

        <div style="margin-left: 10px;">
        <img src="{{ Vite::asset('resources/images/single-gear-deco.png') }}" alt="Pandora Logo" class="nav-deco">
        </div>

        <div style="margin-left: 50px;">
        <img src="{{ Vite::asset('resources/images/linked-gear.png') }}" alt="Pandora Logo" class="nav-deco-invert">
        </div>

        <div style="margin-left: 180px; align-items: flex-top; display: flex;">
        <img src="{{ Vite::asset('resources/images/single-full-gear-deco.png') }}" alt="Pandora Logo" class="nav-deco">
        </div>

      
        @guest
        <div class="navbar-login"><a class="nav-link" href="/login">login</a></div>
        <div class="navbar-auth"><a class="nav-link" href="/register">register</a></div>
        @endguest

        @auth
        <form method="POST" action="/logout" class="navbar-auth" style="display: inline;">
            @csrf
            <button type="submit" class="nav-link" style="background: none; border: none; padding: 0; cursor: pointer; font-weight: bold; font-size: 1rem;">logout</button>
        </form>
        @endauth
        <div>
        <img src="{{ Vite::asset('resources/images/single-gear.png') }}" alt="Pandora Logo" class="nav-deco-invert">
        </div>
        
    </nav>