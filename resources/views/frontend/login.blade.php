@extends('layout._master')
    <style>
        body {
               font-family: Arial, sans-serif;
               margin: 0;
               padding: 0;
               background-color: #f4f4f4;
           }
           .loingin {
               max-width: 400px;
               margin: 50px auto;
               padding: 20px;
               background-color: #fff;
               border-radius: 8px;
               box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
           }
           input[type="text"],
           input[type="password"],
           input[type="email"],
           input[type="tel"] {
               width: 100%;
               padding: 10px;
               margin: 8px 0;
               box-sizing: border-box;
               border: 1px solid #ccc;
               border-radius: 4px;
           }
           input[type="submit"] {
               width: 100%;
               background-color: #4caf50;
               color: white;
               padding: 14px 20px;
               margin: 8px 0;
               border: none;
               border-radius: 4px;
               cursor: pointer;
           }
           input[type="submit"]:hover {
               background-color: #45a049;
           }
           .hide {
               display: none;
           }
           h2 {
               text-align: center;
           }
           p {
               text-align: center;
           }
           a {
               color: #4caf50;
               text-decoration: none;
               transition: color 0.3s ease;
           }
           a:hover {
               color: #45a049;
           }
           .form-container {
               padding: 20px;
               transition: transform 0.3s ease;
           }
   </style>

@section('main_content')
<br>
<br>
<br>
<div class="container loingin">
    <div id="login-form" class="form-container">
        <h2>Login</h2>
        <form action="#" method="post">
            <label for="login-username">Username or Email:</label>
            <input type="text" id="login-username" name="login-username" required>

            <label for="login-password">Password:</label>
            <input type="password" id="login-password" name="login-password" required>

            <input type="submit" value="Login">
        </form>
        <p>Don't have an account? <a href="#" id="show-register" class="text-danger">Register here</a>.</p>
    </div>

    <div id="register-form" class="form-container hide">
        <h2>Register</h2>
        <form action="#" method="post">
            <label for="register-name">Name:</label>
            <input type="text" id="register-name" name="register-name" required>

            <label for="register-email">Email:</label>
            <input type="email" id="register-email" name="register-email" required>

            <label for="register-phone">Phone:</label>
            <input type="tel" id="register-phone" name="register-phone" required>

            <label for="register-address">Address:</label>
            <input type="text" id="register-address" name="register-address" required>

            <input type="submit" value="Register">
        </form>
        <p>Already have an account? <a href="#" id="show-login">Login here</a>.</p>
    </div>
</div>

@endsection

