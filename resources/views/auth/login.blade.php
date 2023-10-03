{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

        <link rel="stylesheet" href={{ asset('frontend/css/bootstrap/css/bootstrap.min.css') }} />
    <link rel="stylesheet" href={{ asset('frontend/css/login.css') }}>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-5 login-form">
                <h4>LOGIN FORM</h4>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session()->has('message'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session()->get('message') }}.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <form method="POST" action="{{ route('login') }}" class="row g-3 mt-3">
                    @csrf
                    <input type="hidden" name="device_token" id="device_token">
                    <div class="col-12">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" name="loginCred" class="form-control" placeholder="Enter email">
                    </div>
                    <div class="col-12">
                        <label for="inputPassword4" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="inputPassword4"
                            placeholder="******">
                    </div>
                    <div class="col-12 mt-4 d-flex justify-content-between">
                        <div class="mb-3">
                            <a class="ms-2 text-dark" href="{{ route('password.request') }}">Forgot Password?</a>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="button form-control">Sign In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html> --}}
@extends('frontend.layouts.default')

@section('content')

<section class="py-5 py-lg-5 px-4 px-lg-5 signin-bg">
    <div class="row ">
        <div class="col-12 col-lg-6 p-4 p-lg-5  fw-bold ">
            <h2 class="mb-2 mb-lg-5">LOGIN</h2>
            @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            <form method="POST" action="{{ route('login') }}">
                @csrf
            <div class="mb-4">
                <label for="email" class="d-block text-uppercase mb-2">Email</label>
                <input class="w-100 w-lg-75 px-2 py-3 rounded" type="email" name="loginCred" id="" placeholder="Email">
            </div>
            <div class="mb-5">
                <label for="password" class="d-block text-uppercase mb-2 ">Password</label>
                <input type="password" class="w-100 w-lg-75 px-2 py-3 rounded" name="password" id=""
                    placeholder="Password">
            </div>
            <div class="w-100 w-lg-75 border text-center px-2 py-3
             bg-black">
                {{-- <a href="index.html" class="text-decoration-none "> --}}
                    <button type="submit" class="btn btn-outline text-white text-uppercase">
                        Sign in
                    </button>
                {{-- </a> --}}

            </div>
            </form>
            <div class="w-100 w-lg-75 mt-2">
                <p class="text-center">
                    <a class="text-uppercase text-decoration-none text-black " href="">Forget
                        Password</a>
                </p>
            </div>
        </div>
        <div class="col-12 col-lg-6 mt-5 mt-lg-0 p-0 px-lg-2 mb-5 d-none d-lg-block">
            <img class="w-100 h-100 "
                src="https://plus.unsplash.com/premium_photo-1681487814165-018814e29155?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTN8fGxvZ2lufGVufDB8fDB8fHww&auto=format&fit=crop&w=800&q=60"
                alt="">
        </div>
    </div>
</section>
@endsection
