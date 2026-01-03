@extends('layouts.auth-layout')

@section('title', 'Login')

@section('content')

    <div class="center-container">
        <div class="main-section">
            <h2 class="auth-title">Log into your account</h2>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <label for="username">Username:</label><br>
                <input class="input-field" type="text" id="username" name="username" required><br><br>
                <label for="password">Password:</label><br>
                <input class="input-field" type="password" id="password" name="password" required><br><br>

                <p class="register-text">Don't have an account? <a class="" href="{{ route('register') }}">Register</a> now!</p>

                <button class="submit-button" type="submit">Log in</button>
            </form>
        </div>
    </div>
@endsection