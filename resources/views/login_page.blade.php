<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <style>
        * {
            border: 1px solid white;
        }
    </style> -->
</head>

<body class="antialiased bg-background">
    <div class="md:flex flex-1 grid grid-cols-3 gap-4 font-sans">
        <div>
            <img class="w-max h-screen" src="{{ asset('images/login_photo.png') }}"></img>
        </div>
        <div class="container md:flex flex-1 justify-center mt-28 ml-6">
            <ul class="mr-12  ">
                <li class="text-white text-6xl font-bold text-center">Log in</li>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="container mt-12">
                    <li class="text-white text-xl font-light">email</li>
                        <input id="email"  name="email" :value="old('email')" required autofocus class=" bg-white rounded-lg w-80 h-10 mt-0.5" type="email">
                    </div>
                    
                    <div class="container mt-6">
                        <li class="text-white text-xl font-light">password</li>
                        <input id="password" name="password" required autocomplete="current-password"  class=" bg-white rounded-lg w-80 h-10 mt-0.5" type="password">
                    </div>

                    @if ($errors->has('email'))
                    <div class="p-4 my-2 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                        <span class="font-medium">{{ $errors->first('email') }}</span> 
                    </div>
                    @endif  
                    <div class="container mt-6">
                            <button class="bg-register_orange text-white rounded-lg w-80 h-10 text-2xl font-bold">Login</button>
                    </div>
                </form>
            </ul>
        </div>
        <div>
            <ul class="container text-base  mt-6 mr-6 ">
                <a class="flex" href="/register">
                    <li class="text-white">Not a Member?</li>
                    <li class="text-register_orange cursor-pointer hover:underline ml-0.5">Register Now</li>
                </a>
            </ul>
        </div>
    </div>
    <div class="md:flex justify-end mr-6">
        <img class="absolute bottom-4 object-cover w-1/5 h-auto" src="{{ asset('images/logo_cpub.png') }}"></img>
    </div>
</body>

</html>