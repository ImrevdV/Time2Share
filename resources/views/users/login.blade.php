<x-layout>
    <header class="form-header">
        <h2 class="form-title">Login</h2>
        <p class="form-subtitle">Log into your account to start posting and sharing items</p>
    </header>
    
    <form method="POST" action="/users/authenticate" class="form">
        @csrf
    
        <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-input" name="email" value="{{ old('email') }}" />
            @error('email')
            <p class="error-message">{{ $message }}</p>
            @enderror
        </div>
    
        <div class="form-group">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-input" name="password" value="{{ old('password') }}" />
            @error('password')
            <p class="error-message">{{ $message }}</p>
            @enderror
        </div>
    
        <div class="form-group">
            <button type="submit" class="submit-button">Sign In</button>
        </div>
    
        <div class="form-footer">
            <p>
                Don't have an account?
                <a href="/register" class="form-link">Register</a>
            </p>
        </div>
    </form>    
  </x-layout>