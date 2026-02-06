<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
    <!-- Modern SaaS Registration Layout -->
    <div class="min-vh-100 d-flex align-items-start pt-3" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Left Side - Branding Section (Desktop Only) -->
                <div class="col-lg-5 d-none d-lg-flex align-items-center">
                    <div class="text-center text-white p-3">
                        <!-- Branding Header -->
                        <div class="mb-4">
                            <h2 class="h3 fw-bold text-white mb-3">Create Account</h2>
                            <h1 class="h4 fw-bold text-white-50">Join Our Platform</h1>
                        </div>
                        <p class="lead opacity-75">Join our platform and start managing your dashboard today</p>
                        
                        <!-- Feature Highlights -->
                        <div class="mt-4">
                            <div class="d-flex justify-content-center gap-4">
                                <div class="text-center">
                                    <div class="bg-white bg-opacity-25 rounded-circle d-flex align-items-center justify-content-center mx-auto mb-2" style="width: 50px; height: 50px;">
                                        <i class="fas fa-user-plus"></i>
                                    </div>
                                    <small>Easy Setup</small>
                                </div>
                                <div class="text-center">
                                    <div class="bg-white bg-opacity-25 rounded-circle d-flex align-items-center justify-content-center mx-auto mb-2" style="width: 50px; height: 50px;">
                                        <i class="fas fa-sync"></i>
                                    </div>
                                    <small>Sync Data</small>
                                </div>
                                <div class="text-center">
                                    <div class="bg-white bg-opacity-25 rounded-circle d-flex align-items-center justify-content-center mx-auto mb-2" style="width: 50px; height: 50px;">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <small>Analytics</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Right Side - Registration Form Section -->
                <div class="col-lg-5 mt-4">
                    <div class="card border-0 shadow-lg fade-in" style="border-radius: 15px; max-width: 450px; margin: 0 auto; margin-top: 1rem;">
                        <div class="card-body p-5">
                            <!-- Mobile Branding -->
                            <div class="d-lg-none text-center mb-4">
                                <h2 class="h4 mb-2 text-primary fw-bold">Create Account</h2>
                                <p class="text-muted mb-0">Join us today and get started</p>
                            </div>
                            
                            <!-- Desktop Branding Header -->
                            <div class="d-none d-lg-block text-center mb-4">
                                <h2 class="h4 mb-2 text-primary fw-bold">Sign Up</h2>
                                <p class="text-muted mb-0">Create your account to get started</p>
                            </div>
                            
                            <!-- Registration Form -->
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <!-- Username Input with Icon -->
                                <div class="mb-4">
                                    <label for="username" class="form-label fw-semibold">
                                        <i class="fas fa-user-tag me-2 text-muted"></i>{{ __('Username') }}
                                    </label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-end-0">
                                            <i class="fas fa-user-tag text-muted"></i>
                                        </span>
                                        <input 
                                            id="username" 
                                            type="text" 
                                            class="form-control border-start-0 @error('username') is-invalid @enderror" 
                                            name="username" 
                                            value="{{ old('username') }}" 
                                            required 
                                            autocomplete="username" 
                                            placeholder="Choose a username">
                                    </div>
                                    @error('username')
                                        <div class="invalid-feedback d-block mt-1">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <!-- Name Input with Icon -->
                                <div class="mb-4">
                                    <label for="name" class="form-label fw-semibold">
                                        <i class="fas fa-user me-2 text-muted"></i>{{ __('Full Name') }}
                                    </label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-end-0">
                                            <i class="fas fa-user text-muted"></i>
                                        </span>
                                        <input 
                                            id="name" 
                                            type="text" 
                                            class="form-control border-start-0 @error('name') is-invalid @enderror" 
                                            name="name" 
                                            value="{{ old('name') }}" 
                                            required 
                                            autocomplete="name" 
                                            autofocus
                                            placeholder="Enter your full name">
                                    </div>
                                    @error('name')
                                        <div class="invalid-feedback d-block mt-1">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <!-- Email Input with Icon -->
                                <div class="mb-4">
                                    <label for="email" class="form-label fw-semibold">
                                        <i class="fas fa-envelope me-2 text-muted"></i>{{ __('Email Address') }}
                                    </label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-end-0">
                                            <i class="fas fa-envelope text-muted"></i>
                                        </span>
                                        <input 
                                            id="email" 
                                            type="email" 
                                            class="form-control border-start-0 @error('email') is-invalid @enderror" 
                                            name="email" 
                                            value="{{ old('email') }}" 
                                            required 
                                            autocomplete="username"
                                            placeholder="Enter your email address">
                                    </div>
                                    @error('email')
                                        <div class="invalid-feedback d-block mt-1">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <!-- Password Input with Icon -->
                                <div class="mb-4">
                                    <label for="password" class="form-label fw-semibold">
                                        <i class="fas fa-lock me-2 text-muted"></i>{{ __('Password') }}
                                    </label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-end-0">
                                            <i class="fas fa-lock text-muted"></i>
                                        </span>
                                        <input 
                                            id="password" 
                                            type="password" 
                                            class="form-control border-start-0 @error('password') is-invalid @enderror" 
                                            name="password" 
                                            required 
                                            autocomplete="new-password"
                                            placeholder="Create a strong password">
                                    </div>
                                    @error('password')
                                        <div class="invalid-feedback d-block mt-1">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <!-- Confirm Password Input with Icon -->
                                <div class="mb-4">
                                    <label for="password_confirmation" class="form-label fw-semibold">
                                        <i class="fas fa-lock me-2 text-muted"></i>{{ __('Confirm Password') }}
                                    </label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-end-0">
                                            <i class="fas fa-lock text-muted"></i>
                                        </span>
                                        <input 
                                            id="password_confirmation" 
                                            type="password" 
                                            class="form-control border-start-0" 
                                            name="password_confirmation" 
                                            required 
                                            autocomplete="new-password"
                                            placeholder="Confirm your password">
                                    </div>
                                </div>

                                <!-- Register Button -->
                                <div class="d-grid mb-4">
                                    <button type="submit" class="btn btn-primary btn-lg py-3 fw-semibold">
                                        <i class="fas fa-user-plus me-2"></i>{{ __('Create Account') }}
                                    </button>
                                </div>

                                <!-- Login Link -->
                                <div class="text-center">
                                    <p class="mb-0 text-muted small">
                                        {{ __('Already have an account?') }} 
                                        <a class="text-decoration-none text-primary fw-semibold" href="{{ route('login') }}">
                                            {{ __('Sign In') }}
                                        </a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Custom Styles -->
    <style>
        /* Fade-in animation for registration card */
        .fade-in {
            animation: fadeIn 0.5s ease-in;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        /* Input group focus styling */
        .input-group:focus-within .input-group-text,
        .input-group:focus-within .form-control {
            border-color: #0d6efd;
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
        }
        
        /* Button hover animation */
        .btn:hover {
            transform: translateY(-2px);
            transition: all 0.2s ease-in-out;
        }
        
        /* Card hover effect */
        .card {
            transition: all 0.3s ease-in-out;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
        }
        
        /* Responsive adjustments */
        @media (max-width: 991.98px) {
            .card {
                margin-top: 2rem;
            }
        }
    </style>
    </body>
</html>