<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Styles -->
    <!-- <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style> -->
</head>

<body class="antialiased">
    <header class=" bg-zinc-800">
        <nav class=" container flex items-center bg-zinc-800 py-9 mx-auto">
            <div class=" w-52 ml-5 py-1">
                <img src="https://cdn.discordapp.com/attachments/711190437922209833/946645863227359283/unknown.png" alt="">
            </div>
            <ul class="hidden md:flex flex-1 justify-end items-center gap-7 text-gray-50 text-base mr-5 font-sans">
                <li class="cursor-pointer hover:text-orange-500">Home</li>
                <li class="cursor-pointer hover:text-orange-500">Jobs</li>
                <button class=" bg-orange-500 hover:bg-orange-700 text-white rounded-md p-2 font-sans"> <a href="/login">Login</a></button>
            </ul>
        </nav>
    </header>
    <div class=" container-2xl flex items-center bg-zinc-600 mx-auto">
        <div class=" flex-initial items-center px-44 my-28">
            <img class="items-center" src="https://cdn.discordapp.com/attachments/711190437922209833/946664293779243048/unknown.png" alt="">
        </div>
        <div class=" flex items-center">
            <img class="" src="https://cdn.discordapp.com/attachments/711190437922209833/946664774991753256/unknown.png" alt="">
        </div>
    </div>
    



        <div class=" container-2xl md:flex justify-center items-center bg-zinc-800 mx-auto">
            <div class="items-center mt-9 mb-3 md:flex justify-center">
                <input class=" placeholder:text-white bg-zinc-400 rounded-md text-white py-1 px-2 w-64 shadow-md" type="text" placeholder="Search...">
            </div>
        </div>
        <div class="container-2xl md:flex justify-center items-center bg-zinc-800 mx-auto">
            <ul class="hidden md:flex flex-1 justify-center items-center gap-7 text-gray-50 text-base mr-5 font-sans">
                <button class=" hover:bg-orange-500 bg-transparent text-white rounded-md p-2 font-sans">All</button>
                <button class=" hover:bg-orange-500 bg-transparent text-white rounded-md p-2 font-sans">Images</button>
                <button class=" hover:bg-orange-500 bg-transparent text-white rounded-md p-2 font-sans">Video</button>
                <button class=" hover:bg-orange-500 bg-transparent text-white rounded-md p-2 font-sans">Audio</button>
                <button class=" hover:bg-orange-500 bg-transparent text-white rounded-md p-2 font-sans">Script</button>                
            </ul>
        </div>
        <div class="container-2xl md:flex justify-center items-center bg-zinc-800 mx-auto px-12 space-x-12 py-5">
            <div class="container bg-zinc-700 rounded-lg shadow-lg p-4">
                <div class="container md:flex items-center">
                    <img class="rounded-full float-left w-12 h-12" src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="">
                    <div class="px-3.5">
                        <p class="font-semibold font-sans text-white">Fajar</p>
                        <p class="font-thin font-sans text-orange-500">Images</p>
                    </div>
                </div>
                
                <div class="container relative overflow-hidden py-2">
                    <img src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="" class="object-cover w-full h-full rounded-md" />
                    <div class="absolute py-2.5 bottom-2 inset-x-0 opacity-80 bg-black text-white text-xs text-center leading-4 rounded-b-md font-sans font-medium">Abstract Mode</div>
                </div>
                <div class="container md:flex justify-end items-center">
                    <img class="w-5" src="https://cdn.discordapp.com/attachments/752542767128772668/947775687748616202/unknown.png" alt="">
                    <p class="px-2 text-amber-100">202</p>
                    <img class="w-5" src="https://cdn.discordapp.com/attachments/752542767128772668/947777319311904768/unknown.png" alt="">
                    <p class="px-2 text-amber-100">61.5 K</p>
                </div>
            </div>
            <div class="container bg-zinc-700 rounded-lg shadow-lg p-4">
                <div class="container md:flex items-center">
                    <img class="rounded-full float-left w-12 h-12" src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="">
                    <div class="px-3.5">
                        <p class="font-semibold font-sans text-white">Fajar</p>
                        <p class="font-thin font-sans text-orange-500">Images</p>
                    </div>
                </div>
                
                <div class="container relative overflow-hidden py-2">
                    <img src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="" class="object-cover w-full h-full rounded-md" />
                    <div class="absolute py-2.5 bottom-2 inset-x-0 opacity-80 bg-black text-white text-xs text-center leading-4 rounded-b-md font-sans font-medium">Abstract Mode</div>
                </div>
                <div class="container md:flex justify-end items-center">
                    <img class="w-5" src="https://cdn.discordapp.com/attachments/752542767128772668/947775687748616202/unknown.png" alt="">
                    <p class="px-2 text-amber-100">202</p>
                    <img class="w-5" src="https://cdn.discordapp.com/attachments/752542767128772668/947777319311904768/unknown.png" alt="">
                    <p class="px-2 text-amber-100">61.5 K</p>
                </div>
            </div>
            <div class="container bg-zinc-700 rounded-lg shadow-lg p-4">
                <div class="container md:flex items-center">
                    <img class="rounded-full float-left w-12 h-12" src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="">
                    <div class="px-3.5">
                        <p class="font-semibold font-sans text-white">Fajar</p>
                        <p class="font-thin font-sans text-orange-500">Images</p>
                    </div>
                </div>
                
                <div class="container relative overflow-hidden py-2">
                    <img src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="" class="object-cover w-full h-full rounded-md" />
                    <div class="absolute py-2.5 bottom-2 inset-x-0 opacity-80 bg-black text-white text-xs text-center leading-4 rounded-b-md font-sans font-medium">Abstract Mode</div>
                </div>
                <div class="container md:flex justify-end items-center">
                    <img class="w-5" src="https://cdn.discordapp.com/attachments/752542767128772668/947775687748616202/unknown.png" alt="">
                    <p class="px-2 text-amber-100">202</p>
                    <img class="w-5" src="https://cdn.discordapp.com/attachments/752542767128772668/947777319311904768/unknown.png" alt="">
                    <p class="px-2 text-amber-100">61.5 K</p>
                </div>
            </div>
            <div class="container bg-zinc-700 rounded-lg shadow-lg p-4">
                <div class="container md:flex items-center">
                    <img class="rounded-full float-left w-12 h-12" src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="">
                    <div class="px-3.5">
                        <p class="font-semibold font-sans text-white">Fajar</p>
                        <p class="font-thin font-sans text-orange-500">Images</p>
                    </div>
                </div>
                
                <div class="container relative overflow-hidden py-2">
                    <img src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="" class="object-cover w-full h-full rounded-md" />
                    <div class="absolute py-2.5 bottom-2 inset-x-0 opacity-80 bg-black text-white text-xs text-center leading-4 rounded-b-md font-sans font-medium">Abstract Mode</div>
                </div>
                <div class="container md:flex justify-end items-center">
                    <img class="w-5" src="https://cdn.discordapp.com/attachments/752542767128772668/947775687748616202/unknown.png" alt="">
                    <p class="px-2 text-amber-100">202</p>
                    <img class="w-5" src="https://cdn.discordapp.com/attachments/752542767128772668/947777319311904768/unknown.png" alt="">
                    <p class="px-2 text-amber-100">61.5 K</p>
                </div>
            </div>
            <div class="container bg-zinc-700 rounded-lg shadow-lg p-4">
                <div class="container md:flex items-center">
                    <img class="rounded-full float-left w-12 h-12" src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="">
                    <div class="px-3.5">
                        <p class="font-semibold font-sans text-white">Fajar</p>
                        <p class="font-thin font-sans text-orange-500">Images</p>
                    </div>
                </div>
                
                <div class="container relative overflow-hidden py-2">
                    <img src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="" class="object-cover w-full h-full rounded-md" />
                    <div class="absolute py-2.5 bottom-2 inset-x-0 opacity-80 bg-black text-white text-xs text-center leading-4 rounded-b-md font-sans font-medium">Abstract Mode</div>
                </div>
                <div class="container md:flex justify-end items-center">
                    <img class="w-5" src="https://cdn.discordapp.com/attachments/752542767128772668/947775687748616202/unknown.png" alt="">
                    <p class="px-2 text-amber-100">202</p>
                    <img class="w-5" src="https://cdn.discordapp.com/attachments/752542767128772668/947777319311904768/unknown.png" alt="">
                    <p class="px-2 text-amber-100">61.5 K</p>
                </div>
            </div>   
        </div>
        <div class="container-2xl md:flex justify-center items-center bg-zinc-800 mx-auto px-12 space-x-12 py-5">
            <div class="container bg-zinc-700 rounded-lg shadow-lg p-4">
                <div class="container md:flex items-center">
                    <img class="rounded-full float-left w-12 h-12" src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="">
                    <div class="px-3.5">
                        <p class="font-semibold font-sans text-white">Fajar</p>
                        <p class="font-thin font-sans text-orange-500">Images</p>
                    </div>
                </div>
                
                <div class="container relative overflow-hidden py-2">
                    <img src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="" class="object-cover w-full h-full rounded-md" />
                    <div class="absolute py-2.5 bottom-2 inset-x-0 opacity-80 bg-black text-white text-xs text-center leading-4 rounded-b-md font-sans font-medium">Abstract Mode</div>
                </div>
                <div class="container md:flex justify-end items-center">
                    <img class="w-5" src="https://cdn.discordapp.com/attachments/752542767128772668/947775687748616202/unknown.png" alt="">
                    <p class="px-2 text-amber-100">202</p>
                    <img class="w-5" src="https://cdn.discordapp.com/attachments/752542767128772668/947777319311904768/unknown.png" alt="">
                    <p class="px-2 text-amber-100">61.5 K</p>
                </div>
            </div>
            <div class="container bg-zinc-700 rounded-lg shadow-lg p-4">
                <div class="container md:flex items-center">
                    <img class="rounded-full float-left w-12 h-12" src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="">
                    <div class="px-3.5">
                        <p class="font-semibold font-sans text-white">Fajar</p>
                        <p class="font-thin font-sans text-orange-500">Images</p>
                    </div>
                </div>
                
                <div class="container relative overflow-hidden py-2">
                    <img src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="" class="object-cover w-full h-full rounded-md" />
                    <div class="absolute py-2.5 bottom-2 inset-x-0 opacity-80 bg-black text-white text-xs text-center leading-4 rounded-b-md font-sans font-medium">Abstract Mode</div>
                </div>
                <div class="container md:flex justify-end items-center">
                    <img class="w-5" src="https://cdn.discordapp.com/attachments/752542767128772668/947775687748616202/unknown.png" alt="">
                    <p class="px-2 text-amber-100">202</p>
                    <img class="w-5" src="https://cdn.discordapp.com/attachments/752542767128772668/947777319311904768/unknown.png" alt="">
                    <p class="px-2 text-amber-100">61.5 K</p>
                </div>
            </div>
            <div class="container bg-zinc-700 rounded-lg shadow-lg p-4">
                <div class="container md:flex items-center">
                    <img class="rounded-full float-left w-12 h-12" src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="">
                    <div class="px-3.5">
                        <p class="font-semibold font-sans text-white">Fajar</p>
                        <p class="font-thin font-sans text-orange-500">Images</p>
                    </div>
                </div>
                
                <div class="container relative overflow-hidden py-2">
                    <img src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="" class="object-cover w-full h-full rounded-md" />
                    <div class="absolute py-2.5 bottom-2 inset-x-0 opacity-80 bg-black text-white text-xs text-center leading-4 rounded-b-md font-sans font-medium">Abstract Mode</div>
                </div>
                <div class="container md:flex justify-end items-center">
                    <img class="w-5" src="https://cdn.discordapp.com/attachments/752542767128772668/947775687748616202/unknown.png" alt="">
                    <p class="px-2 text-amber-100">202</p>
                    <img class="w-5" src="https://cdn.discordapp.com/attachments/752542767128772668/947777319311904768/unknown.png" alt="">
                    <p class="px-2 text-amber-100">61.5 K</p>
                </div>
            </div>
            <div class="container bg-zinc-700 rounded-lg shadow-lg p-4">
                <div class="container md:flex items-center">
                    <img class="rounded-full float-left w-12 h-12" src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="">
                    <div class="px-3.5">
                        <p class="font-semibold font-sans text-white">Fajar</p>
                        <p class="font-thin font-sans text-orange-500">Images</p>
                    </div>
                </div>
                
                <div class="container relative overflow-hidden py-2">
                    <img src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="" class="object-cover w-full h-full rounded-md" />
                    <div class="absolute py-2.5 bottom-2 inset-x-0 opacity-80 bg-black text-white text-xs text-center leading-4 rounded-b-md font-sans font-medium">Abstract Mode</div>
                </div>
                <div class="container md:flex justify-end items-center">
                    <img class="w-5" src="https://cdn.discordapp.com/attachments/752542767128772668/947775687748616202/unknown.png" alt="">
                    <p class="px-2 text-amber-100">202</p>
                    <img class="w-5" src="https://cdn.discordapp.com/attachments/752542767128772668/947777319311904768/unknown.png" alt="">
                    <p class="px-2 text-amber-100">61.5 K</p>
                </div>
            </div>
            <div class="container bg-zinc-700 rounded-lg shadow-lg p-4">
                <div class="container md:flex items-center">
                    <img class="rounded-full float-left w-12 h-12" src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="">
                    <div class="px-3.5">
                        <p class="font-semibold font-sans text-white">Fajar</p>
                        <p class="font-thin font-sans text-orange-500">Images</p>
                    </div>
                </div>
                
                <div class="container relative overflow-hidden py-2">
                    <img src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="" class="object-cover w-full h-full rounded-md" />
                    <div class="absolute py-2.5 bottom-2 inset-x-0 opacity-80 bg-black text-white text-xs text-center leading-4 rounded-b-md font-sans font-medium">Abstract Mode</div>
                </div>
                <div class="container md:flex justify-end items-center">
                    <img class="w-5" src="https://cdn.discordapp.com/attachments/752542767128772668/947775687748616202/unknown.png" alt="">
                    <p class="px-2 text-amber-100">202</p>
                    <img class="w-5" src="https://cdn.discordapp.com/attachments/752542767128772668/947777319311904768/unknown.png" alt="">
                    <p class="px-2 text-amber-100">61.5 K</p>
                </div>
            </div>
            
    </body>
</html>
