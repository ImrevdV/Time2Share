<x-layout>
    <header class="form-header">
        <h2 class="form-title">Register</h2>
        <p class="form-subtitle">Create an account to start posting and sharing items</p>
    </header>
    
    <form method="POST" action="/users" class="form">
        @csrf
        <div class="form-group">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-input" name="name" value="{{ old('name') }}" />
            @error('name')
            <p class="error-message">{{ $message }}</p>
            @enderror
        </div>
    
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
            <label for="password2" class="form-label">Confirm Password</label>
            <input type="password" class="form-input" name="password_confirmation" value="{{ old('password_confirmation') }}" />
            @error('password_confirmation')
            <p class="error-message">{{ $message }}</p>
            @enderror
        </div>
    
        <div class="form-group">
            <button type="submit" class="submit-button">Sign Up</button>
        </div>
    
        <div class="form-footer">
            <p>Already have an account? <a href="/login" class="form-link">Login</a></p>
        </div>
    </form>    
  </x-layout>