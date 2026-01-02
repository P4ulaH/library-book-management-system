@extends('layouts.auth-layout')

@section('title', 'Register')

@section('content')
    <nav>
        <a class="nav-button" href="{{ route('login') }}">Log in</a>
        <a class="nav-button" href="{{ route('register') }}">Register</a>
    </nav>

    <div class="center-container">
        <div class="main-section">
            <h2 class="auth-title">Create account</h2>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <label for="username">Username:</label><br>
                <input class="input-field" type="text" id="username" name="username" required><br><br>
                <label for="password">Password:</label><br>
                <input class="input-field" type="password" id="password" name="password" required><br><br>
                <label for="password_confirmation">Confirm password:</label><br>
                <input class="input-field" type="password" id="password_confirmation" name="password_confirmation" required><br><br>

                <button class="submit-button" type="submit">Create account</button>
            </form>
        </div>
    </div>
@endsection