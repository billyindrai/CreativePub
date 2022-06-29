@extends('layouts.master')
@section('title','Jobs List | Creative Pub')
@section('content')

<div class="container-2xl py-1 mx-auto">
    <div class="container-2xl md:flex flex-1  py-2 mt-5 h-fit mx-48 gap-5">
        <input class=" placeholder:text-gray_font bg-white rounded-md text-white py-2 px-2 w-9/12 shadow-md text-xs" type="text" placeholder="Search...">
        <div class="container-2xl md:flex flex-1 gap-5 justify-end">
            <button class="text-dark_font  bg-white rounded-md p-2 font-sans">
                <div class="container-2xl md:flex flex-1 justify-center items-center gap-2">
                    <p class="font-sans font-medium text-xs "> All Category</p>
                    <svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.96973 7.60198C4.26262 7.244 4.7375 7.244 5.03039 7.60198L9.00006 12.4538L12.9697 7.60198C13.2626 7.244 13.7375 7.244 14.0304 7.60198C14.3233 7.95996 14.3233 8.54036 14.0304 8.89834L9.53039 14.3983C9.2375 14.7563 8.76262 14.7563 8.46973 14.3983L3.96973 8.89834C3.67684 8.54036 3.67684 7.95996 3.96973 7.60198Z" fill="#18191F"/>
                    </svg>
                </div>
            </button>
            <button class="text-dark_font  bg-white rounded-md p-2 font-sans">
                <div class="container-2xl md:flex flex-1 justify-center items-center gap-2">
                    <p class="font-sans font-medium text-xs "> Newest</p>
                    <svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.96973 7.60198C4.26262 7.244 4.7375 7.244 5.03039 7.60198L9.00006 12.4538L12.9697 7.60198C13.2626 7.244 13.7375 7.244 14.0304 7.60198C14.3233 7.95996 14.3233 8.54036 14.0304 8.89834L9.53039 14.3983C9.2375 14.7563 8.76262 14.7563 8.46973 14.3983L3.96973 8.89834C3.67684 8.54036 3.67684 7.95996 3.96973 7.60198Z" fill="#18191F"/>
                    </svg>
                </div>
            </button>
        </div>    
    </div>
    <div class="container-2xl md:flex flex-1 rounded-t-md py-4 mt-5 mx-48 bg-line_cream">
        <div>
            <p class="ml-5 font-sans text-xs text-black">1 - 20 of 200 Jobs</p>
        </div>
        <ul class="hidden md:flex flex-1 justify-end items-center gap-7 text-black text-xs mr-5 font-sans">
            <li class="cursor-pointer hover:text-register_orange">Show 20 rows</li>
            <li class="cursor-pointer hover:text-register_orange">Prev</li>
            <li class="cursor-pointer hover:text-register_orange">Next</li>
        </ul>
    </div>

    @for ($i = 0; $i <= 4; $i++) 
    <div class="container-2xl md:flex flex-1 mx-48 px-10 border border-line_cream">
        <div class="container-2xl md:flex flex-1 ">
            <div class="container-2xl w-8/12">
                <div class="container-2xl md:flex flex-1 mt-5 items-center">
                    <p class="font-sans text-xs font-light text-white">Posted <strong class="font-sans text-xs font-bold text-white"> 9 mins ago</strong> </p>
                    <button class="bg-zinc-400 font-sans text-xs text-white rounded-md my-2 p-1 ml-10"> Images </button>
                </div>
                <p class="text-register_orange text-lg font-sans font-bold"> Photo retouch for social media(instagram)</p>
                <p class="text-white text-sm font-sans mt-3">We build custom wall beds and cabinetry and take many photos. Unfortunately, we don't always have ideal space or lighting for really professional photos. We would like them to be retouched and sized for social media accounts and portfolio pages on our website.</p>
            </div>
            <div class="container-2xl w-4/12">
                <div class="container-2xl md:flex flex-1 mt-7 justify-end items-center">
                    <div class="container-2xl">
                        <p class="font-sans font-bold text-white text-lg">Gulali Ayam</p>
                        <p class="font-sans font-light text-register_orange text-xs">Cilacap</p>
                    </div>
                    <img class="ml-4 rounded-full object-cover w-14 h-14" src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="">
                </div>
                <div class="container-2xl md:flex flex-1 mt-20 mb-4 justify-end">
                    <div class="container-2xl">
                        <p class="font-sans text-sm font-f text-white">Send before <strong class="font-sans text-sm font-bold text-white"> Aug, 17 2022</strong> </p>
                        <div class="container-2xl md:flex flex-1 justify-center">
                            <a href="/job_details"><button class="bg-register_orange font-sans text-sm text-white w-28 rounded-md my-2 p-1 font-medium"> Get Job </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endfor
</div>
@endsection