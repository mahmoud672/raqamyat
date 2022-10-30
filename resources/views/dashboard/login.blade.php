<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('dashboard/css/login/ionicons.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/css/login/index.css')}}">
    <title>Login</title>

    <style>


    </style>
</head>

<body>
{{--<div class="login-wrapper">
    <div class="logo-div">
        <img src="{{asset('dashboard/img/logo.png')}}" alt="logo">
    </div>
    <form action="{{ route('login') }}" class="login-form" method="post">
        @csrf
        <div class="form-div">
            <input type="text" name="email" placeholder="Username" class="{{ $errors->has('email') ? ' is-invalid' : '' }}">
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-div">
            <input type="password" name="password" placeholder="Password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}">
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
            @endif
        </div>
        <button type="submit">
            <i class="ion-log-in"></i>
            <span>
          Login
        </span>
        </button>
    </form>
</div>--}}

<h2>Welcome To Raqamyat </h2>
<div class="container" id="container">
    <div class="form-container sign-up-container">
        <form action="{{ route('login') }}" method="post">
            @csrf
            <h1>Create Account</h1>
            <div class="social-container">
                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <span>or use your email for registration</span>
            <input type="text" placeholder="Name" />
            <input type="email" placeholder="Email" />
            <input type="password" placeholder="Password" />
            <button>Sign Up</button>
        </form>
    </div>
    <div class="form-container sign-in-container">
        <form action="{{ route('login') }}" method="post">
            @csrf
            <h1>Sign in</h1>
            <div class="social-container">
                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <span>or use your account</span>
            <div class="input-group">
                <input type="email" name="email" value="{{old("email")}}" placeholder="Email" />
                @error("email")  <span class="error text-danger">{{$message}}</span>@enderror
            </div>
            <div class="input-group">
                <input type="password" name="password" value="{{old("password")}}" placeholder="Password" />
                @error("password")  <span class="error text-danger">{{$message}}</span>@enderror
            </div>

            <a href="#">Forgot your password?</a>
            <button>Sign In</button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Welcome Back!</h1>
                <p>To keep connected with us please login with your personal info</p>
                <button class="ghost" id="signIn">Sign In</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Hello, Friend!</h1>
                <p>Enter your personal details and start journey with us</p>
                {{--<button class="ghost" id="signUp">Sign Up</button>--}}
            </div>
        </div>
    </div>
</div>


<script>
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");
    });

    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
    });
</script>

</body>

</html>
