<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <style>
        .login-button, .register-button, a {
            display: inline-block;
            padding: 10px 20px;
            color: #fff;
            background-color: #007bff;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            margin: 10px;
        }
        .container {
            text-align: center;
            margin-top: 50px;
        }
        .button-container {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Selamat datang di M Store</h1>
        <img src="{{ asset('madura.jpg') }}" alt="Store Image">

        <!-- Button Container -->
        <div class="button-container">
            <a href="{{ route('login') }}" class="btn btn-primary login-button">Login</a>
            <a href="{{ route('login') }}" class="btn btn-primary register-button">Register</a>
        </div>
    </div>
</body>
</html>

