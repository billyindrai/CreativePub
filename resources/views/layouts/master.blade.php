<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="https://unpkg.com/flowbite@1.4.1/dist/datepicker.js"></script>
    </head>
    <body class="antialiased bg-background">
        <header>
            <nav class=" container flex items-center bg-nav_bar py-5 mx-auto">
                <div class=" w-52 ml-5 py-1">
                    <img src="{{ asset('images/CreativePub-tittle.png') }}" alt="">
                </div>
                <ul class="hidden md:flex flex-1 justify-end items-center gap-7 text-white text-base mr-5 font-sans">
                    <a href="/"><li class="cursor-pointer hover:text-hover_text_nav">Home</li></a>
                    <a href="/jobs"><li class="cursor-pointer hover:text-hover_text_nav">Jobs</li></a>
                    <img class="rounded-full object-cover float-left w-10 h-10" src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="">
                    <button class=" bg-register_orange hover:bg-orange-700 text-white rounded-md p-2 font-sans">Upload</button>
                </ul>
            </nav>
        </header>      
        
        @yield('content')
    </body>
</html>

