@extends('master')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endpush

@section('content')
    <main class="login-container">
        <section class="login-card">
            <header class="login-header">
                <h2>Welcome Back</h2>
                <p>Please login to you account</p>
            </header>

            <form action="" class="login-form">

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="hello@example.com">
                </div>

                <div class="form-group password-group">
                    <label for="password">Password</label>
                    <div class="password-wrapper">
                        <input type="password" name="password" id="password" placeholder="Enter your password">
                        <span class="toggle-password" onclick="togglePassword()">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>
                        </span>
                    </div>
                    <div class="forget-password-wrapper">
                        <a href="#" class="forget-password">Forget Password?</a>
                    </div>
                </div>

                <div class="form-actions" style="margin-bottom: 25px;"></div>

                <button type="submit" class="btn-login">Login</button>
            </form>

            <footer class="login-footer">
                <p>Don't have an account? <a href="">Sign Up</a></p>
            </footer>
        </section>
    </main>
@endsection