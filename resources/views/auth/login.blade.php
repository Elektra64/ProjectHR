@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Left Graphics Section -->
        <div class="col-md-4 d-none d-md-block p-0" style="background: url('your-image.jpg') center/cover; min-height: 100vh;">
            <!-- Add your graphical content here -->
            <!-- You can add text overlay or other elements -->
        </div>

        <!-- Right Login Form Section -->
        <div class="col-md-8 d-flex align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="w-75" style="max-width: 400px;">
                <div class="text-center mb-5">
                    <h2 class="display-4">{{ __('Welcome Back') }}</h2>
                    <p class="text-muted">{{ __('Please login to continue') }}</p>
                </div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="email" class="form-label">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                               name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                               name="password" required autocomplete="current-password">
                        
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-4 d-flex justify-content-between align-items-center">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" 
                                   id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                        
                        @if (Route::has('password.request'))
                            <a class="text-decoration-none" href="{{ route('password.request') }}">
                                {{ __('Forgot Password?') }}
                            </a>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-primary w-100 py-2 mb-3">
                        {{ __('Login') }}
                    </button>

                    <div class="text-center mt-4">
                        <span class="text-muted">{{ __("Don't have an account?") }}</span>
                        <a href="{{ route('register') }}" class="text-decoration-none">
                            {{ __('Create Account') }}
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    /* Consistent styling with login page */
    .form-control {
        height: 45px;
        border-radius: 8px;
        border: 1px solid #e0e0e0;
    }
    
    .btn {
        border-radius: 8px;
        font-weight: 600;
        transition: all 0.3s ease;
    }
    
    .btn-primary:hover {
        opacity: 0.9;
        transform: translateY(-1px);
    }
    
    .invalid-feedback {
        font-weight: 500;
    }
</style>
@endsection