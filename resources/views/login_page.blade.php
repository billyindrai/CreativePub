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
                <div class="container mt-12">
                    <li class="text-white text-xl font-light">email or phone number</li>
                    <input class=" bg-white rounded-lg w-80 h-10 mt-0.5" type="email">
                </div>
                <div class="container mt-6">
                    <li class="text-white text-xl font-light">password</li>
                    <input class=" bg-white rounded-lg w-80 h-10 mt-0.5" type="password">
                </div>
                <div class="container mt-6">
                    <button class="bg-register_orange text-white rounded-lg w-80 h-10 text-2xl font-bold">Login</button>
                </div>
                <div class="relative flex mt-6 items-center">
                    <div class="flex-grow border-t border-cream_line"></div>
                    <span class="flex-shrink mx-4 text-white text-sm font-extralight"> or login with</span>
                    <div class="flex-grow border-t border-cream_line"></div>
                </div>
                <div class="container mt-7">
                    <ul class="md:flex flex-1 justify-center">
                        <button class="bg-white rounded-lg w-10 h-10 mr-3">
                            <svg class="m-auto" viewBox="0 0 24 24" width="24" height="24" xmlns="http://www.w3.org/2000/svg">
                                <g transform="matrix(1, 0, 0, 1, 27.009001, -39.238998)">
                                    <path fill="#4285F4" d="M -3.264 51.509 C -3.264 50.719 -3.334 49.969 -3.454 49.239 L -14.754 49.239 L -14.754 53.749 L -8.284 53.749 C -8.574 55.229 -9.424 56.479 -10.684 57.329 L -10.684 60.329 L -6.824 60.329 C -4.564 58.239 -3.264 55.159 -3.264 51.509 Z" />
                                    <path fill="#34A853" d="M -14.754 63.239 C -11.514 63.239 -8.804 62.159 -6.824 60.329 L -10.684 57.329 C -11.764 58.049 -13.134 58.489 -14.754 58.489 C -17.884 58.489 -20.534 56.379 -21.484 53.529 L -25.464 53.529 L -25.464 56.619 C -23.494 60.539 -19.444 63.239 -14.754 63.239 Z" />
                                    <path fill="#FBBC05" d="M -21.484 53.529 C -21.734 52.809 -21.864 52.039 -21.864 51.239 C -21.864 50.439 -21.724 49.669 -21.484 48.949 L -21.484 45.859 L -25.464 45.859 C -26.284 47.479 -26.754 49.299 -26.754 51.239 C -26.754 53.179 -26.284 54.999 -25.464 56.619 L -21.484 53.529 Z" />
                                    <path fill="#EA4335" d="M -14.754 43.989 C -12.984 43.989 -11.404 44.599 -10.154 45.789 L -6.734 42.369 C -8.804 40.429 -11.514 39.239 -14.754 39.239 C -19.444 39.239 -23.494 41.939 -25.464 45.859 L -21.484 48.949 C -20.534 46.099 -17.884 43.989 -14.754 43.989 Z" />
                                </g>
                            </svg>
                        </button>
                        <button class="bg-white rounded-lg w-10 h-10">
                            <svg class="m-auto" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="16" cy="16" r="14" fill="url(#paint0_linear_140_228)" />
                                <path d="M21.2137 20.2816L21.8356 16.3301H17.9452V13.767C17.9452 12.6857 18.4877 11.6311 20.2302 11.6311H22V8.26699C22 8.26699 20.3945 8 18.8603 8C15.6548 8 13.5617 9.89294 13.5617 13.3184V16.3301H10V20.2816H13.5617V29.8345C14.2767 29.944 15.0082 30 15.7534 30C16.4986 30 17.2302 29.944 17.9452 29.8345V20.2816H21.2137Z" fill="white" />
                                <defs>
                                    <linearGradient id="paint0_linear_140_228" x1="16" y1="2" x2="16" y2="29.917" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#18ACFE" />
                                        <stop offset="1" stop-color="#0163E0" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </button>
                    </ul>
                </div>
                <div class="container mt-6">
                    <a class="flex justify-center" href="/forgot_password">
                        <li class="text-register_orange font-semibold text-sm cursor-pointer hover:underline">Forgot email or password</li>
                    </a>
                </div>
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