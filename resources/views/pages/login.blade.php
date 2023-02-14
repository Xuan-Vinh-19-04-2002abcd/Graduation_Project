<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            height: 90vh;
            width: 100vw;
            overflow: hidden;
            background-position: 50% 50%;
            background-repeat: 0;
            background-size: cover;
            color: #b1a684;
        }
        main {
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            height: 100%;
            width: 100%;
        }
        main form {
            width: 30%;
            text-align: center
        }
        main h1 {
            text-align: center;
            font-size: 3rem;
            font-weight: bold;
        }
        input[type="text"],
        input[type="password"] {
            height: 3rem;
            width: 75%;
            padding: 0 2rem;
            border: 1px solid black;
            border-radius: 1.5rem;
            font-size: 1.2rem;
        }
        input[type="text"]:focus,
        input[type="password"]:focus {
            transform: scale(1.1)
        }
        .password-block {
            position: relative;
            margin-top: 2rem;
        }
        .icon {
            position: absolute;
            top: 1rem;
            right: 3.2rem;
        }
        .btn-block {
            text-align: center;
            margin-top: 3rem;
        }
        .btn-block button {
            font-size: 1.5rem;
            padding: 0.5rem 3rem;
            border: 2px solid black;
            border-radius: 1.5rem;
            background: transparent;
        }
        .btn-block button:hover {
            transform: scale(1.03);
            font-weight: bold;
        }
        .error {
            color: red;
            text-align: center;
            margin: 2rem;
        }
    </style>
</head>

<body>
    <main>
        <h1>Login as role  <br /> Admin</h1>
    
        <form  action="{{ route('loginAdmin') }}" method="post">
            @csrf
            <input type="text" name="username" placeholder="Username...">
            <div class="password-block">
                <input type="password" name="password" placeholder="Password...">
                <i class="fas fa-eye-slash icon"></i>
            </div>
            <div class="btn-block">
            <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    </main>
    </body>
</html>