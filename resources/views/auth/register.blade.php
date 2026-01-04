@extends('layouts.auth-layout')

@section('title', 'Register')

@section('content')

    <div class="center-container">
        <div class="main-section">
            <h2 class="auth-title">Create account</h2>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                
                <label for="username">Username:</label><br>
                <input 
                    class="input-field" 
                    type="text" 
                    name="username" 
                    value="{{ old('username') }}"
                    required
                >
                <br><br>
                
                <label for="password">Password:</label><br>
                <input 
                    class="input-field" 
                    type="password" 
                    name="password" 
                    required
                >
                <br><br>

                <label for="password_confirmation">Confirm password:</label><br>
                <input 
                    class="input-field" 
                    type="password" 
                    name="password_confirmation" 
                    required
                >
                <br><br>

                <button class="submit-button" type="submit">Create account</button>

                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible show position-fixed top-0 start-50 translate-middle-x mt-4" role="alert" style="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

            </form>

        </div>
    </div>
@endsection