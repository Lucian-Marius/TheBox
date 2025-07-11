<nav class="navbar">
       
        <div class="navbar-link"><a class="nav-link" href="/">Concepts</a></div>
        <div class="navbar-link"><a class="nav-link" href="/concepts/create"> Add concept</a></div>


        

      
        @guest
        <div class="navbar-login"><a class="nav-link" href="/login">login</a></div>
        <div class="navbar-auth"><a class="nav-link" href="/register">register</a></div>
        @endguest

        @auth
        <form method="POST" action="/logout" class="navbar-auth" style="display: inline;">
            @csrf
            <button type="submit" class="button">logout</button>
        </form>
        @endauth
        
        
    </nav>