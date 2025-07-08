<x-layout>
    <h1 class="auth-h1">
        Login
    </h1>
    <div class="auth-form-container">
        <form method="POST" action="/login">
            @csrf
            <div>
                <label for="name" class="auth-label">Name</label>
                <input class="auth-input-field" id="name" name="name" type="text" required autofocus>
            </div>
            <div>
                <label for="email" class="auth-label">Email</label>
                <input class="auth-input-field" id="email" name="email" type="email" required>
            </div>
            <div>
                <label for="password" class="auth-label">Password</label>
                <input class="auth-input-field" id="password" name="password" type="password" required>
            </div>
         
            <button type="submit" class="button">Login</button>
        </form>
    </div>
</x-layout>