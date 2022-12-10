<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
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
            <ul class="mr-12">
                <li class="text-white text-6xl font-bold text-center">Create Account</li>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="container md:flex mt-9 justify-center">
                    <ul>
                        <li class="text-white text-xl font-light">name</li>
                        <input id="name" type="text" name="name" :value="old('name')" required autofocus class=" bg-white rounded-lg w-52 h-10 mt-0.5">
                    </ul>
                    <ul class="ml-3">
                        <li class="text-white text-xl font-light">username</li>
                        <input id="username" name="username" class=" bg-white rounded-lg w-24 h-10 mt-0.5" type="text">
                    </ul>
                    </div>
                    <div class="container mt-3 md:flex justify-center">
                        <ul>
                            <li class="text-white text-xl font-light">email</li>
                            <input id="email" name="email" :value="old('email')" required class=" bg-white rounded-lg w-80 h-10 mt-0.5" type="email">
                        </ul>
                    </div>
                    <div class="container mt-3 md:flex justify-center">
                        <ul>
                            <li class="text-white text-xl font-light">password</li>
                            <input id="password" name="password" required autocomplete="new-password" class=" bg-white rounded-lg w-80 h-10 mt-0.5" type="password">
                        </ul>
                    </div>
                    <div class="container mt-3 md:flex justify-center">
                        <ul>
                            <li class="text-white text-xl font-light">password confirmation</li>
                            <input id="password_confirmation" type="password" name="password_confirmation" class=" bg-white rounded-lg w-80 h-10 mt-0.5" type="password" required>
                        </ul>
                    </div>
                    @if ($errors->has('password'))
                    <div class="p-4 my-2 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                        <span class="font-medium">{{ $errors->first('password') }}</span> 
                    </div>
                    @endif
                    <div class="container md:flex mt-3 justify-center">
                        <div class="w-80 md:flex">
                            <ul class="mr-2">
                                <input id="checkbox" name="checkbox" type="checkbox" class="default:ring-2" required>
                            </ul>
                            <ul>
                                <li class="text-white text-sm font-light">Creating an account means you’re okay with our <strong class="text-register_orange font-bold w-fit">Terms of
                                        Service</strong> , <strong class="text-register_orange font-bold w-fit"> Policy </strong> , and our default <strong class="text-register_orange font-bold w-fit">Notification Settings.</strong>.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="container mt-3 md:flex justify-center">
                        <button class="bg-register_orange text-white rounded-lg w-80 h-10 text-2xl font-bold">Create Account</button>
                    </div>

                </form>
                
                
            </ul>
        </div>
        <div>
            <ul class="container text-base  mt-6 mr-6 ">
                <a class="flex" href="/login">
                    <li class="text-white">Already a Member?</li>
                    <li class="text-register_orange cursor-pointer hover:underline ml-0.5">Login Now</li>
                </a>
            </ul>
        </div>
    </div>
    <div class="md:flex justify-end mr-6">
        <img class="absolute bottom-4 object-cover w-1/5 h-auto" src="{{ asset('images/logo_cpub.png') }}"></img>
    </div>
</body>

</html>