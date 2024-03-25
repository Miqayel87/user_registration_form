@extends('layouts.app')

@section('title', 'login')

@section('content')
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 400px;
            margin: 100px auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            display: block;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="checkbox"] {
            margin-right: 5px;
        }

        button[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-bottom: 20px;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

    </style>
    <div class="container">
        <form id="loginForm" method="post" action="{{route('login')}}">
            @csrf
            <h2>User Sign In</h2>
            <div class="form-group">
                <label for="email">Email</label>
                <input name="email" type="email" id="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input name="password" type="password" id="password" placeholder="Enter your password" required>
            </div>
            <div class="form-group">
                <input name="remember" value="true" type="checkbox" id="remember">
                <label for="remember">Remember Me</label>
            </div>
            <button type="submit">Login</button>
            <div>
                No account? <a href="{{route('showRegistrationForm')}}">Sign Up</a>
            </div>
        </form>
    </div>

@endsection
