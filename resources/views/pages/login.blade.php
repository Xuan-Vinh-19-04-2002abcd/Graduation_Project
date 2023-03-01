<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            height: 90vh;
            width: 100vw;
            overflow: hidden;
            background-image: url("/assets/Images/logback.jpeg");
            /* background-color: #cccccc; */
            background-position: 50% 50%;
            background-repeat: 0;
            background-size: cover;
            color: #8B0000

;
        }
        main {
            display: flex;
            align-items: center;
            justify-content: space-around;
            height: 100%;
            width: 100%;
        }
        main form {
            width: 30%;
            margin-right: 40px;
            text-align: center;
        }
        main h1 {
            text-align: center;
            font-size: 3rem;
            font-weight: bold;
        }
        input[type="text"],
        input[type="password"] {
            height: 3rem;
            width: 85%;
            padding: 0 2rem;
            border: 1px solid rgb(114 25 25);
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
        .password-block span {
          display: none;
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
            /* border: 2px solid black; */
            border-radius: 1.5rem;
            background: transparent;
            color: aliceblue
        }
        .btn-block button:hover {
            transform: scale(1.03);
            font-weight: bold;
            color: rgb(219, 68, 41)
        }
        .error {
            color: red;
            text-align: center;
            margin: 2rem;
        }
        input:valid ~ span{
            display: block;
        }
        .password-block span i.hide-btn::before{
            content: "\f070";
        }
    </style>
</head>

<body>
    
    <main>
        {{-- <h1>Login as role  <br /> Admin</h1> --}}
        
        <form  action="{{ route('loginAdmin') }}" method="post">
            @if(\Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <div class="alert-body">
                    {{ \Session::get('success') }}
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            {{ \Session::forget('success') }}
            @if(\Session::get('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <div class="alert-body">
                    {{ \Session::get('error') }}
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @csrf

            <input type="text" name="username" placeholder="Username..." >
            @error('username')
                <div class="error">{{$message}}</div>
            @enderror
            <div class="password-block">
                <input type="password" class ="password" name="password" placeholder="Password..." >
                <span class="show-btn"><i class="fas fa-eye icon"></i></span>
            </div>
            @error("password") 
                <div class="error">{{$message}}</div>
            @enderror

            <div class="btn-block">
            <button type="submit" >Login</button>
            </div>
        </form>
    </main>
    </body>
    <script>
        const passField = document.querySelector(".password");
        const showBtn = document.querySelector("span i");
        showBtn.onclick = (()=>{
         if(passField.type === "password"){
           passField.type = "text";
           showBtn.classList.add("hide-btn");
         }else{
           passField.type = "password";
           showBtn.classList.remove("hide-btn");
         }
       });
    </script>
</html>