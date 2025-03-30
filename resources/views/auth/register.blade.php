@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Left Graphics Section (30%) -->
        <div class="col-md-4 d-none d-md-block p-0" style="background: url('your-image.jpg') center/cover; min-height: 100vh;">
            <!-- Optional overlay text -->
            <div class="position-absolute top-50 start-0 translate-middle-y ps-5 text-white">
                <h2 class="display-4 fw-bold">Join Us</h2>
                <p class="fs-5">Create your account and manage HR operations efficiently</p>
            </div>
        </div>

        <!-- Right Registration Form Section (70%) -->
        <div class="col-md-8 d-flex align-items-center justify-content-center bg-light" style="min-height: 100vh;">
            <div class="w-75" style="max-width: 400px;">
                <div class="text-center mb-5">
                    <h2 class="display-4">{{ __('Create Account') }}</h2>
                    <p class="text-muted">{{ __('Get started with your free account') }}</p>
                </div>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="name" class="form-label">{{ __('Full Name') }}</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" 
                               name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="email" class="form-label">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                               name="email" value="{{ old('email') }}" required autocomplete="email">
                        
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                                   name="password" required autocomplete="new-password">
                        </div>
                        
                        <div class="col-md-6">
                            <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control" 
                                   name="password_confirmation" required autocomplete="new-password">
                        </div>
                        
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-4 form-check">
                        <input type="checkbox" class="form-check-input" id="terms">
                        <label class="form-check-label" for="terms">
                            I agree to the <a href="#" class="text-decoration-none">Terms of Service</a>
                        </label>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 py-2 mb-3">
                        {{ __('Register') }}
                    </button>

                    <div class="text-center mt-4">
                        <span class="text-muted">{{ __("Already have an account?") }}</span>
                        <a href="{{ route('login') }}" class="text-decoration-none">
                            {{ __('Login Here') }}
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