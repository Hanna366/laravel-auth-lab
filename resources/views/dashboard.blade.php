@extends('layouts.bootstrap-app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="h2 mb-0 text-primary">
                    {{ __('Dashboard') }}
                </h1>
                <div class="breadcrumb bg-transparent p-0 mb-0">
                    <span>Home</span> <span class="mx-2">/</span> <span class="text-muted">Dashboard</span>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Welcome Banner -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-0">
                    <div class="position-relative">
                        <!-- Gradient Header -->
                        <div class="bg-gradient bg-primary text-white p-4" style="background: linear-gradient(135deg, #0d6efd, #0b5ed7);">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <div class="avatar bg-white bg-opacity-25 rounded-circle d-flex align-items-center justify-content-center" style="width: 120px; height: 120px; font-size: 2.5rem;">
                                        <span class="fw-bold">{{ strtoupper(substr(Auth::user()->name, 0, 1)) }}</span>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-4">
                                    <h2 class="mb-1">Welcome back, <span class="text-white">{{ Auth::user()->name }}</span>!</h2>
                                    <p class="text-white opacity-75 mb-0">You are successfully logged into your dashboard. Here's your account overview.</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Action Buttons -->
                        <div class="position-absolute top-0 end-0 p-4">
                            <a href="#" class="btn btn-light btn-sm me-2">
                                View Profile
                            </a>
                            <a href="#" class="btn btn-outline-light btn-sm">
                                Edit Account
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Stats Summary Cards -->
    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body text-center p-4">
                    <div class="bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 50px; height: 50px;">
                        <i class="fas fa-user-check text-primary"></i>
                    </div>
                    <h5 class="mb-1">{{ Auth::user()->is_active ? 'Active' : 'Inactive' }}</h5>
                    <p class="text-muted mb-0 small">Account Status</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body text-center p-4">
                    <div class="bg-success bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 50px; height: 50px;">
                        <i class="fas fa-calendar text-success"></i>
                    </div>
                    <h5 class="mb-1">{{ Auth::user()->created_at->format('M Y') }}</h5>
                    <p class="text-muted mb-0 small">Member Since</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body text-center p-4">
                    <div class="bg-info bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 50px; height: 50px;">
                        <i class="fas fa-clock text-info"></i>
                    </div>
                    <h5 class="mb-1">
                        @if(Auth::user()->last_login)
                            {{ Auth::user()->last_login->diffForHumans() }}
                        @else
                            Just Now
                        @endif
                    </h5>
                    <p class="text-muted mb-0 small">Last Login</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body text-center p-4">
                    <div class="bg-warning bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 50px; height: 50px;">
                        <i class="fas fa-hashtag text-warning"></i>
                    </div>
                    <h5 class="mb-1">#{{ Auth::user()->id }}</h5>
                    <p class="text-muted mb-0 small">User ID</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Main Content Cards -->
    <div class="row g-4">
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-header bg-white border-0 py-3">
                    <h5 class="mb-0 d-flex align-items-center">
                        Profile Information
                    </h5>
                </div>
                <div class="card-body pt-3">
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <p class="text-muted mb-1 small fw-semibold d-flex align-items-center">
                                        Username
                                    </p>
                                </div>
                                <div class="col-8">
                                    <p class="mb-1 fw-medium">{{ Auth::user()->username }}</p>
                                </div>
                            </div>
                            <hr class="my-2">
                        </div>
                        <div class="col-12">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <p class="text-muted mb-1 small fw-semibold d-flex align-items-center">
                                        Full Name
                                    </p>
                                </div>
                                <div class="col-8">
                                    <p class="mb-1 fw-medium">{{ Auth::user()->name }}</p>
                                </div>
                            </div>
                            <hr class="my-2">
                        </div>
                        <div class="col-12">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <p class="text-muted mb-1 small fw-semibold d-flex align-items-center">
                                        Email
                                    </p>
                                </div>
                                <div class="col-8">
                                    <p class="mb-1 fw-medium text-primary">{{ Auth::user()->email }}</p>
                                </div>
                            </div>
                            <hr class="my-2">
                        </div>
                        <div class="col-12">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <p class="text-muted mb-1 small fw-semibold d-flex align-items-center">
                                        Status
                                    </p>
                                </div>
                                <div class="col-8">
                                    <span class="badge bg-{{ Auth::user()->is_active ? 'success' : 'warning' }} rounded-pill px-3 py-2 fs-6">
                                        {{ Auth::user()->is_active ? 'Active' : 'Inactive' }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-header bg-white border-0 py-3">
                    <h5 class="mb-0 d-flex align-items-center">
                        Login History
                    </h5>
                </div>
                <div class="card-body pt-3">
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <p class="text-muted mb-1 small fw-semibold d-flex align-items-center">
                                        Last Login
                                    </p>
                                </div>
                                <div class="col-8">
                                    <p class="mb-1 fw-medium">
                                        @if(Auth::user()->last_login)
                                            {{ Auth::user()->last_login->format('M j, Y g:i A') }}
                                            <small class="text-muted d-block">({{ Auth::user()->last_login->diffForHumans() }})</small>
                                        @else
                                            First time logging in
                                        @endif
                                    </p>
                                </div>
                            </div>
                            <hr class="my-2">
                        </div>
                        <div class="col-12">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <p class="text-muted mb-1 small fw-semibold d-flex align-items-center">
                                        Account Created
                                    </p>
                                </div>
                                <div class="col-8">
                                    <p class="mb-1 fw-medium">{{ Auth::user()->created_at->format('M j, Y g:i A') }}</p>
                                    <small class="text-muted">({{ Auth::user()->created_at->diffForHumans() }})</small>
                                </div>
                            </div>
                            <hr class="my-2">
                        </div>
                        <div class="col-12">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <p class="text-muted mb-1 small fw-semibold d-flex align-items-center">
                                        User ID
                                    </p>
                                </div>
                                <div class="col-8">
                                    <p class="mb-1 fw-medium">#{{ Auth::user()->id }}</p>
                                </div>
                            </div>
                            <hr class="my-2">
                        </div>
                        <div class="col-12">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <p class="text-muted mb-1 small fw-semibold d-flex align-items-center">
                                        Member Since
                                    </p>
                                </div>
                                <div class="col-8">
                                    <p class="mb-1 fw-medium">{{ Auth::user()->created_at->diffForHumans() }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection