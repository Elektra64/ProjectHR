@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Left Graphics Section -->
        <div class="col-md-4 d-none d-md-block p-0" style="background: url('your-image.jpg') center/cover; min-height: 100vh;">
            <div class="position-absolute top-50 start-0 translate-middle-y ps-5 text-white">
                <h2 class="display-4 fw-bold">Verify Email</h2>
                <p class="fs-5">Secure access to your account</p>
            </div>
        </div>

        <!-- Right Content Section -->
        <div class="col-md-8 d-flex align-items-center justify-content-center bg-light" style="min-height: 100vh;">
            <div class="w-75 text-center" style="max-width: 400px;">
                <div class="mb-5">
                    <h2 class="display-4">{{ __('Verify Your Email') }}</h2>
                    <p class="text-muted mt-3">{{ __('Account security verification') }}</p>
                </div>

                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        @if (session('resent'))
                            <div class="alert alert-success mb-4" role="alert">
                                {{ __('A fresh verification link has been sent to your email.') }}
                            </div>
                        @endif

                        <p class="lead">
                            {{ __('Before proceeding, please check your email for a verification link.') }}
                        </p>

                        <p class="text-muted">
                            {{ __('If you did not receive the email') }}
                        </p>

                        <form method="POST" action="{{ route('verification.resend') }}" class="mt-4">
                            @csrf
                            <button type="submit" class="btn btn-primary w-100 py-2">
                                {{ __('Resend Verification Email') }}
                            </button>
                        </form>

                        <div class="mt-4">
                            <a href="{{ route('login') }}" class="text-decoration-none">
                                {{ __('Return to Login') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Consistent styling with other pages */
    .card {
        border-radius: 12px;
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
    
    .alert-success {
        border-radius: 8px;
        padding: 1rem;
    }
    
    .lead {
        font-size: 1.1rem;
        line-height: 1.7;
    }
</style>
@endsection