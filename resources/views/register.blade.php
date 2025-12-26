@extends('master')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endpush

@section('content')
<main class="register-container">
    <section class="register-card">
        <header class="register-header">
            <h2>Create Account</h2>
            <p>Join us to book you futsal games.</p>
        </header>

        <form action="" class="register-form">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" name="name" id="name" placeholder="Enter your full name">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="hello@example.com">
            </div>

            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" name="phone" id="phone" placeholder="Enter you phone number">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <div class="password-wrapper">
                    <input type="password" name="password" id="password" placeholder="Enter your password">
                    <span class="toggle-password" onclick="togglePassword('password', this)">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label for="confirm-password">Confirm Password</label>
                <div class="password-wrapper">
                    <input type="password" name="confirm-password" id="confirm-password"
                        placeholder="Confirm your password">
                    <span class="toggle-password" onclick="togglePassword('confirm-password', this)">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                    </span>
                </div>
            </div>

            <div class="form-actions" style="margin-bottom: 25px"></div>

            <button type="submit" class="btn-register">Register</button>

            <footer class="register-footer">
                <p>Already have an account? <a href="">Login</a></p>
            </footer>
        </form>
    </section>
</main>
@endsection