@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Left Graphics Section (30%) -->
        <div class="col-md-4 d-none d-md-block p-0" style="background: url('your-image.jpg') center/cover; min-height: 100vh;">
            <div class="position-absolute top-50 start-0 translate-middle-y ps-5 text-white">
                <h2 class="display-4 fw-bold">Reset Password</h2>
                <p class="fs-5">Secure your account with a new password</p>
            </div>
        </div>

        <!-- Right Form Section (70%) -->
        <div class="col-md-8 d-flex align-items-center justify-content-center bg-light" style="min-height: 100vh;">
            <div class="w-75" style="max-width: 400px;">
                <div class="text-center mb-5">
                    <h2 class="display-4">{{ __('Reset Password') }}</h2>
                    <p class="text-muted">{{ __('Create a new password for your account') }}</p>
                </div>

                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="mb-4">
                        <label for="email" class="form-label">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                               name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                        
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label">{{ __('New Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                               name="password" required autocomplete="new-password">
                        
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control" 
                               name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <button type="submit" class="btn btn-primary w-100 py-2 mb-3">
                        {{ __('Reset Password') }}
                    </button>

                    <div class="text-center mt-4">
                        <a href="{{ route('login') }}" class="text-decoration-none">
                            {{ __('Return to Login') }}
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    /* Consistent styling with other auth pages */
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