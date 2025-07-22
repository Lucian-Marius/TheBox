<x-heading>Register</x-heading>
<x-layout>
  
    <div>
        <form method="POST" action="/register" class="auth-form-container">
            @csrf
            @method('POST')
            <div class="auth-input-container">
                <label for="name" class="auth-label">Name</label>
                <input class="auth-input-field" id="name" name="name" type="text" required autofocus>
            </div>
            <div class="auth-input-container">
                <label for="email" class="auth-label">Email</label>
                <input class="auth-input-field" id="email" name="email" type="email" required>
            </div>
            <div class="auth-input-container">
                <label for="password" class="auth-label">Password</label>
                <input class="auth-input-field" id="password" name="password" type="password" required>
            </div>
            <div class="auth-input-container">
                <label for="password_confirmation" class="auth-label">Confirm Password</label>
                <input class="auth-input-field" id="password_confirmation" name="password_confirmation" type="password" required>
            </div>

            <hr style="width: 50%; margin: 20px;">
            
            <div class="auth-input-container">
                <label for="boxuser" class="auth-label">User Name</label>
                <input class="auth-input-field" id="boxuser" name="boxuser" type="text" required autofocus>
            </div>
            <div>
                <button type="submit" class="button">Register</button>
            </div>
        </form>
    </div>
            @if ($errors->any())
            <div class="error-messages">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
</x-layout>