<x-heading>Login</x-heading>

<x-layout>
    </h1>
        <form method="POST" action="/login" class="auth-form-container">
            @csrf
            <div>
                <label for="name" class="auth-label">Name</label>
                <input class="auth-input-field" id="name" name="name" type="text" required>
            </div>
            
            <div>
                <label for="email" class="auth-label">Email</label>
                <input class="auth-input-field" id="email" name="email" type="email" required>
            </div>
            
            <div>
                <label for="password" class="auth-label">Password</label>
                <input class="auth-input-field" id="password" name="password" type="password" required>
            </div>
            <div class="auth-button-container">
                <button type="submit" class="button">Login</button>
            </div>
        </form>

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