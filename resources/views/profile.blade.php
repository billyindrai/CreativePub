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
            <button class=" bg-register_orange hover:bg-orange-500 text-white rounded-md p-2 w-64 font-sans">Follow</button>
        </div>
        <div class="border-2 border-r-transparent border-l-transparent border-b-black py-3">
            <p class="text-sm font-sans font-semibold">Quotes</p>
            <p class="text-xs font-sans font-light">Be Better for the Future</p>
        </div>
        <div class="border-2 border-r-transparent border-l-transparent border-b-black py-3">
            <p class="text-sm font-sans font-semibold">Tools Used</p>
            <div class="container mt-2 md:flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                    <path d="M2 12.1333C2 8.58633 2 6.81283 2.69029 5.45806C3.29749 4.26637 4.26637 3.29749 5.45806 2.69029C6.81283 2 8.58633 2 12.1333 2H19.8667C23.4137 2 25.1872 2 26.5419 2.69029C27.7336 3.29749 28.7025 4.26637 29.3097 5.45806C30 6.81283 30 8.58633 30 12.1333V19.8667C30 23.4137 30 25.1872 29.3097 26.5419C28.7025 27.7336 27.7336 28.7025 26.5419 29.3097C25.1872 30 23.4137 30 19.8667 30H12.1333C8.58633 30 6.81283 30 5.45806 29.3097C4.26637 28.7025 3.29749 27.7336 2.69029 26.5419C2 25.1872 2 23.4137 2 19.8667V12.1333Z" fill="#00005B" />
                    <path d="M8 21.7957V9.20796C8 9.12233 8.0351 9.0734 8.11701 9.0734C9.32624 9.0734 10.5349 9 11.7445 9C13.7071 9 15.8323 9.68403 16.5772 11.7769C16.7527 12.2907 16.8463 12.8167 16.8463 13.3672C16.8463 14.4192 16.6123 15.2877 16.1442 15.9728C14.8368 17.8864 12.5706 17.8567 10.5392 17.8567V21.7834C10.5551 21.8997 10.4579 21.9547 10.3637 21.9547H8.14042C8.04681 21.9547 8 21.9058 8 21.7957ZM10.5509 11.4344V15.5446C11.3564 15.6048 12.1992 15.6113 12.9731 15.3489C13.8275 15.0977 14.2954 14.3439 14.2954 13.4406C14.3192 12.6709 13.9077 11.9323 13.2072 11.6546C12.4426 11.3305 11.3763 11.3111 10.5509 11.4344Z" fill="#9999FF" />
                    <path d="M18.4325 12.2119H20.4861C20.5993 12.213 20.701 12.2947 20.7309 12.4089C20.8814 12.7582 20.9 13.1795 20.9005 13.5566C21.2527 13.1279 21.6773 12.7708 22.1533 12.5029C22.6638 12.201 23.2425 12.0479 23.8289 12.0598C23.9263 12.0452 24.0124 12.1353 23.9985 12.237V14.6201C23.9985 14.7122 23.9355 14.758 23.8101 14.758C22.9409 14.6953 21.5877 14.91 20.9561 15.6246V21.821C20.9561 21.9392 20.9059 21.9983 20.8054 21.9983H18.6021C18.4939 22.0145 18.3984 21.9127 18.4137 21.8013V15.0731C18.4137 14.1716 18.4324 13.2429 18.3007 12.3498C18.2804 12.2676 18.3556 12.1912 18.4325 12.2119Z" fill="#9999FF" />
                </svg>

                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                    <path d="M2 12.1333C2 8.58633 2 6.81283 2.69029 5.45806C3.29749 4.26637 4.26637 3.29749 5.45806 2.69029C6.81283 2 8.58633 2 12.1333 2H19.8667C23.4137 2 25.1872 2 26.5419 2.69029C27.7336 3.29749 28.7025 4.26637 29.3097 5.45806C30 6.81283 30 8.58633 30 12.1333V19.8667C30 23.4137 30 25.1872 29.3097 26.5419C28.7025 27.7336 27.7336 28.7025 26.5419 29.3097C25.1872 30 23.4137 30 19.8667 30H12.1333C8.58633 30 6.81283 30 5.45806 29.3097C4.26637 28.7025 3.29749 27.7336 2.69029 26.5419C2 25.1872 2 23.4137 2 19.8667V12.1333Z" fill="#00005B" />
                    <path d="M12.9607 19.8809H8.52632L7.62409 22.7658C7.59904 22.873 7.5007 22.9489 7.39372 22.9437H5.14772C5.01964 22.9437 4.97485 22.8712 5.01335 22.7263L8.85264 11.3448C8.89107 11.2263 8.92948 11.0913 8.96786 10.9397C9.01808 10.6761 9.04379 10.4082 9.04465 10.1395C9.03365 10.0601 9.10315 9.99004 9.17902 10.0012H12.2312C12.3207 10.0012 12.3719 10.0341 12.3848 10.1L16.7425 22.7461C16.7809 22.8779 16.7425 22.9438 16.6273 22.9437H14.1317C14.0442 22.9537 13.9606 22.8934 13.9398 22.8054L12.9607 19.8809ZM9.21739 17.3912H12.2505C11.7521 15.6823 11.1898 13.9958 10.734 12.2735C10.2422 13.9987 9.70562 15.7169 9.21739 17.3912Z" fill="#9999FF" />
                    <path d="M25.9019 13.0852V20.6088C25.9019 21.125 25.898 21.6458 25.9499 22.1599C25.9691 22.351 25.985 22.4655 25.9979 22.597C26.0105 22.7026 25.9659 22.7551 25.8636 22.7551H23.8095C23.7127 22.7656 23.6179 22.7087 23.5791 22.6168C23.5293 22.4347 23.4856 22.2413 23.4831 22.0513C22.75 22.7247 21.7813 22.992 20.8148 22.9997C18.7227 23.0256 17.5428 21.2673 17.5898 19.1861V13.105C17.5772 13.0142 17.6552 12.9339 17.7434 12.9469H20.0247C20.1128 12.934 20.1908 13.0143 20.1783 13.105V18.87C20.1783 19.9232 20.6936 20.6088 21.7555 20.6088C22.3139 20.6159 22.8683 20.3864 23.3181 20.0555V13.0852C23.3181 12.9932 23.3757 12.9469 23.4909 12.9469H25.7676C25.8446 12.9357 25.9128 13.0059 25.9019 13.0852Z" fill="#9999FF" />
                </svg>
            </div>
        </div>
    </div>
    <div class="pl-80">
        <ul class="hidden md:flex flex-1 justify-start items-start gap-7 text-gray-50 text-base mr-5 font-sans border-2 border-b-line_cream border-t-transparent border-r-transparent border-l-transparent pb-2">
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