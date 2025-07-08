<x-layout>
    <h1 class="auth-h1">
        Register
    </h1>
    <div class="auth-form-container">
        <form method="POST" action="/register">
            @csrf
            @method('POST')
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
            <div>
                <label for="password_confirmation" class="auth-label">Confirm Password</label>
                <input class="auth-input-field" id="password_confirmation" name="password_confirmation" type="password" required>
            </div>
            <hr>
            <label for="boxuser" class="auth-label">User Name</label>
                <input class="auth-input-field" id="boxuser" name="boxuser" type="text" required autofocus>
            

            <button type="submit" class="button">Register</button>
        </form>
    </div>
</x-layout>