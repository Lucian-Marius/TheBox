<nav class="navbar">
       
          
        <div class="navbar-link">
            <img src="{{ Vite::asset('resources/images/gear-icon.png') }}" alt="Pandora Logo" class="logo">
        </div>

        <div class="navbar-link">
            <a class="nav-link" href="/">Concepts</a>
        </div>

        <div class="navbar-link">
            <a class="nav-link" href="/concepts/create">Add concept</a>
        </div>

        <div class="navbar-link">
            <a class="nav-link" href="/resources">Credits</a>
        </div>
      
        @guest
        <div class="navbar-login"><a class="nav-link" href="/login">login</a></div>
        <div class="navbar-auth"><a class="nav-link" href="/register">register</a></div>
        @endguest

       
        
        
    </nav>