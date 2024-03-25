@extends('layouts.app')

@section('title', 'registration')

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

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
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
        <form id="registrationForm" action="{{route('sign-up')}}" method="POST">
            @csrf
            <h2>User Sign Up</h2>
            <div class="form-group">
                <label for="name">Name</label>
                <input name="name" type="text" id="name" placeholder="Enter your name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input name="email" type="email" id="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input name="password" type="password" id="password" placeholder="Enter your password" required>
            </div>
            <div class="form-group">
                <label for="confirmPassword">Confirm Password</label>
                <input type="password" id="confirmPassword" placeholder="Re-enter your password" required>
            </div>
            <button style="background-color: crimson" type="submit">Register</button>
        </form>
        <div>
            Have account? <a href="{{route('login')}}">Sign In</a>
        </div>
    </div>

    <script>
        document.getElementById("registrationForm").addEventListener("submit", function(e) {
            const password = document.getElementById("password").value;
            const confirmPassword = document.getElementById("confirmPassword").value;

            if (password !== confirmPassword) {
                alert("Passwords do not match");
                e.preventDefault();
            }
        });
    </script>
@endsection
