@extends('layouts.master')
@section('title','Jobs List | Creative Pub')
@section('content')

<div class="container-2xl py-5 mx-auto">
    <ul class="hidden md:flex flex-1 justify-center items-center gap-7 text-gray-50 text-base mr-5 font-sans">
        <button class=" bg-register_orange text-white rounded p-2 font-sans text-xs">My Jobs</button>
        <input class=" placeholder:text-white bg-search_button rounded-md text-white py-2 px-2 w-96 shadow-md text-xs" type="text" placeholder="Search...">
        <button class=" bg-register_orange text-white rounded p-2 font-sans text-xs">All Category</button>
        <button class=" bg-register_orange text-white rounded p-2 font-sans text-xs">Show Filters</button>
        <button class=" bg-register_orange text-white rounded p-2 font-sans text-xs">Newest</button>
    </ul>
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

    @for ($i = 0; $i <= 4; $i++) <div class="container-2xl md:flex flex-1 mx-48 px-10 border border-line_cream">
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
                        <p class="font-sans font-light text-white text-xs">Cilacap</p>
                    </div>
                    <img class="ml-4 rounded-full object-cover w-14 h-14" src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="">
                </div>
                <div class="container-2xl md:flex flex-1 mt-20 mb-4 justify-end">
                    <div class="container-2xl">
                        <p class="font-sans text-sm font-f text-white">Send before <strong class="font-sans text-sm font-bold text-white"> Aug, 17 2022</strong> </p>
                        <div class="container-2xl md:flex flex-1 justify-center">
                            <a href="/job_details"><button class="bg-applied_job font-sans text-sm text-white w-28 rounded-md my-2 p-1 font-medium"> Applied Job </button>
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