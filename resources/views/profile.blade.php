@extends('layouts.master')
@section('title','Profile Page | Creative Pub')
@section('content')

<div class=" container-2xl flex items-center bg-zinc-600 mx-auto">
    <div class=" flex items-center">
        <img class="h-64 w-screen object-cover" src="https://cdn.discordapp.com/attachments/711190437922209833/946664774991753256/unknown.png" alt="">
    </div>
</div>

<div class=" grid grid-cols-6 container-2xl md:flex pl-20 items-start bg-zinc-800 mx-auto pt-5">
    <div class="absolute top-72 float-left col-span-3 w-64 container bg-white opacity-90 rounded-lg shadow-lg p-4">
        <div class="container md:flex flex-1 justify-center pt-3 items-center">
            <img class="rounded-full object-cover w-14 h-14" src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="">
        </div>
        <div class="container md:flex flex-1 gap-2 pt-3 justify-center">
            <div>
                <p class="text-center text-sm font-sans font-bold">200</p>
                <p class="text-center text-sm font-sans font-extralight">content</p>
            </div>
            <div>
                <p class="text-center text-sm font-sans font-bold">123</p>
                <p class="text-center text-sm font-sans font-extralight">followers</p>
            </div>
            <div>
                <p class="text-center text-sm font-sans font-bold">1</p>
                <p class="text-center text-sm font-sans font-extralight">following</p>
            </div>
        </div>
        <div class="container py-3">
            <p class="text-center text-2xl font-sans font-bold">TONO SUCIPTO</p>
            <p class="text-center font-sans text-sm font-light">Digital Artist, Yogyakarta</p>
            <p class="text-center font-sans font-normal text-xs">Ambitious Digital Artist Seeking for Opportunity</p>
        </div>
        <div class="container md:flex flex-1 gap-2 py-2 mb-5 justify-center">
            <div class="bg-gray-200 w-10 h-10 rounded-full"></div>
            <div class="bg-gray-200 w-10 h-10 rounded-full"></div>
            <div class="bg-gray-200 w-10 h-10 rounded-full"></div>
        </div>
        <div class="border-2 border-r-transparent border-l-transparent border-b-black border-t-black md:flex flex-1 justify-center py-5">
            <button class=" bg-orange-500 hover:bg-orange-700 text-white rounded-md p-2 w-64 font-sans">Follow</button>
        </div>
        <div class="border-2 border-r-transparent border-l-transparent border-b-black py-3">
            <p class="text-sm font-sans font-semibold">Quotes</p>
            <p class="text-xs font-sans font-light">Be Better for the Future</p>
        </div>
    </div>
    <div class="pl-80">
        <ul class="hidden md:flex flex-1 justify-start items-start gap-7 text-gray-50 text-base mr-5 font-sans border-2 border-b-white border-t-transparent border-r-transparent border-l-transparent pb-2">
            <button class=" hover:bg-orange-500 bg-transparent text-white rounded-md p-2 font-sans">Gallery</button>
            <button class=" hover:bg-orange-500 bg-transparent text-white rounded-md p-2 font-sans">Favorites</button>
            <button class=" hover:bg-orange-500 bg-transparent text-white rounded-md p-2 font-sans">Collection</button>
        </ul>
        <div class="hidden md:flex flex-1 gap-3 py-5 pr-5 justify-center">
            <div>
                <div>
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
            </div>
            <div>
                <div>
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
            </div>
            <div>
                <div>
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
            </div>
            <div>
                <div>
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
            </div>
        </div>
    </div>
</div>
@endsection