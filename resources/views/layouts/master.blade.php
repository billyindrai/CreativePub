<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://unpkg.com/flowbite@1.4.1/dist/datepicker.js"></script>
    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
</head>

<body class="antialiased bg-background">
    <header class="bg-nav_bar">
        <nav class=" container flex items-center bg-nav_bar py-5 mx-auto">
            <div class=" w-52 ml-5 py-1">
                <img src="{{ asset('images/CreativePub-tittle.png') }}" alt="">
            </div>
            @if(Auth::check())
            <ul class="hidden md:flex flex-1 justify-end items-center gap-7 text-white text-base mr-5 font-sans">
                <a href="/">
                    <li class="cursor-pointer hover:text-hover_text_nav">Home</li>
                </a>
                    <li>
                        <button id="dropdownDefault" data-dropdown-toggle="dropdown" class="text-white text-sans" type="button">Jobs</button>
                        <!-- Dropdown menu -->
                        <div id="dropdown" class="z-10 hidden bg-content_box divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700">
                            <ul class="py-1 text-sm text-white dark:text-gray-200" aria-labelledby="dropdownDefault">
                            <li>
                                <a href="/jobs" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-content_box">Jobs</a>
                            </li>
                            <li>
                                <a href="/my_jobs" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-content_box">My Jobs</a>
                            </li>
                            <li>
                                <a href="/posted_jobs" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-content_box">Posted Jobs</a>
                            </li>
                            <li>
                                <a href="/draft_jobs" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-content_box">Draft Jobs</a>
                            </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="/premium">
                            <button class="text-register_orange  bg-white rounded-md p-2 font-sans">
                            <div class="container-2xl md:flex flex-1 justify-center items-center gap-2">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.5 17.5H3.5C3.225 17.5 3 17.7812 3 18.125V19.375C3 19.7188 3.225 20 3.5 20H16.5C16.775 20 17 19.7188 17 19.375V18.125C17 17.7812 16.775 17.5 16.5 17.5ZM18.5 5C17.6719 5 17 5.83984 17 6.875C17 7.15234 17.05 7.41016 17.1375 7.64844L14.875 9.34375C14.3938 9.70312 13.7719 9.5 13.4937 8.89062L10.9469 3.32031C11.2812 2.97656 11.5 2.46094 11.5 1.875C11.5 0.839844 10.8281 0 10 0C9.17188 0 8.5 0.839844 8.5 1.875C8.5 2.46094 8.71875 2.97656 9.05313 3.32031L6.50625 8.89062C6.22813 9.5 5.60313 9.70312 5.125 9.34375L2.86562 7.64844C2.95 7.41406 3.00312 7.15234 3.00312 6.875C3.00312 5.83984 2.33125 5 1.50312 5C0.675 5 0 5.83984 0 6.875C0 7.91016 0.671875 8.75 1.5 8.75C1.58125 8.75 1.6625 8.73438 1.74063 8.71875L4 16.25H16L18.2594 8.71875C18.3375 8.73438 18.4188 8.75 18.5 8.75C19.3281 8.75 20 7.91016 20 6.875C20 5.83984 19.3281 5 18.5 5Z" fill="#FF8A00"/>
                                </svg>
                                <p class="font-sans font-medium text-base "> PREMIUM</p>
                            </div>
    
                            </button>
                        </a>
                    </li>
                    <li>
                        <button class="items-center">
                            <img class="rounded-full object-cover w-10 h-10" data-dropdown-toggle="dropdownProfile" src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="">
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdownProfile" class="z-10 hidden bg-content_box divide-y divide-gray-100 rounded shadow w-60 dark:bg-gray-700">
                            <ul class="py-1 text-sm text-white dark:text-gray-200" aria-labelledby="dropdownDefault">
                            <li>
                                <a href="/profile" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-content_box">
                                <div class="container-2xl md:flex flex-1 p-2 items-center">
                                    <img class="rounded-full object-cover w-10 h-10" data-dropdown-toggle="dropdownProfile" src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="">
                                    <div class="container-2xl px-3 gap-2">
                                        <p class="font-sans text-lg font-medium">{{Auth::user()->name}}</p>
                                        <p class="font-sans text-sm font-normal">{{Auth::user()->email}}</p>
                                    </div>
                                </div>
                                </a>
                            </li>
                            <li>
                                <a href="/profile" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-content_box">Profile</a>
                            </li>
                            <li>
                                <a href="/edit_profile" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-content_box">Edit Profile</a>
                            </li>
                            <li>
                                <a href="/monetize" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-content_box">Monetize</a>
                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                        <button :href="route('logout')" onclick="event.preventDefault();this.closest('form').submit();" class="block text-start w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-content_box">
                                        <div class="container-2xl md:flex flex-1 justify-start w-full">
                                            <p>Logout</p>
                                        </div>
                                        </button>
                                </form>
                            </li>
                            </ul>
                        </div>
                    </li>
                </a>
                <button class=" bg-register_orange hover:bg-orange-700 text-white rounded-md p-2 font-sans" data-modal-toggle="uploadModal">Upload</button>
            </ul>
            @else
            <ul class="hidden md:flex flex-1 justify-end items-center gap-7 text-white text-base mr-5 font-sans">
                <a href="/">
                    <li class="cursor-pointer hover:text-hover_text_nav">Home</li>
                </a>
                    <li>
                        <button id="dropdownDefault" data-dropdown-toggle="dropdown" class="text-white text-sans" type="button">Jobs</button>
                        <!-- Dropdown menu -->
                        <div id="dropdown" class="z-10 hidden bg-content_box divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700">
                            <ul class="py-1 text-sm text-white dark:text-gray-200" aria-labelledby="dropdownDefault">
                            <li>
                                <a href="/jobs" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-content_box">Jobs</a>
                            </li>
                            </ul>
                        </div>
                    </li>
                </a>
                <a href="/login">        
                    <button class=" bg-register_orange hover:bg-orange-700 text-white rounded-md p-2 font-sans">Login</button>
                </a>
            </ul>
            @endif
        </nav>
        <div id="uploadModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full ">
            <div class="relative container md:flex justify-center flex-1 p-4 w-full max-w-2xl h-full md:h-auto ">
                <div class="container-2xl py-16 px-36 items-center bg-zinc-800 rounded-lg">
                    <p class="font-sans text-center text-white text-2xl">WHAT DO YOU WANT TO UPLOAD</p>
                    <div class="container-2xl justify-center md:flex flex-1 pt-8 gap-9">
                        <a href="/upload_galery">
                            <button class="bg-register_orange hover:bg-orange-700 w-28 text-white rounded-md p-2 text-base font-sans">GALLERY</button>  
                        </a>
                        <a href="/upload_collection">
                            <button class="bg-register_orange hover:bg-orange-700 w-28 text-white rounded-md p-2 text-base font-sans">COLLECTION</button>  
                        </a>
                        <a href="/upload_job">
                            <button class="bg-register_orange hover:bg-orange-700 w-28 text-white rounded-md p-2 text-base font-sans">JOB</button>  
                        </a>
                    </div>
                </div>
                <div class="container-2xl h-20">
                    <button type="button" class="text-register_orange bg-transparent hover:bg-orange-700 hover:text-gray-900 rounded-lg text-sm p-1.5 mx-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="uploadModal">
                            <svg class="h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
            </div>
        </div>
    </header>
    @yield('content')
    <footer class="text-center bg-nav_bar text-white">
        <div class="container-2xl px-6 pt-6">
            <div class="flex justify-center mb-6">

                <a href="#!" type="button" class="rounded-full border-2 border-white text-white leading-normal uppercase hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1">
                    <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google" class="w-3 h-full mx-auto" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512">
                        <path fill="currentColor" d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"></path>
                    </svg>
                </a>

                <a href="#!" type="button" class="rounded-full border-2 border-white text-white leading-normal uppercase hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1">
                    <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" class="w-3 h-full mx-auto" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
                    </svg>
                </a>

                <a href="https://github.com/billyindrai/creativePub" type="button" class="rounded-full border-2 border-white text-white leading-normal uppercase hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1">
                    <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="github" class="w-3 h-full mx-auto" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                        <path fill="currentColor" d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path>
                    </svg>
                </a>
            </div>

            <!-- <div class="mb-6">
                <p class="text-register_orange text-base">
                    even creators needs a pub. 
                </p>
            </div> -->

            <div class="text-center pb-6 bg-nav_bar">
                © 2021 Copyright:
                <a class="text-white" href="/">CreativePub</a>
            </div>
        </div>
    </footer>
</body>

</html>