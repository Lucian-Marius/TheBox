<div class="heading-title">
<h1 > {{ $slot}}</h1>
       @auth
            <form method="POST" action="/logout">
                @csrf
                <button type="submit" class="button-logout">log out</button>
            </form>
        @endauth
</div>