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

    @for ($i = 0; $i <= 2; $i++) <div class="container-2xl md:flex flex-1 mx-48 px-10 border border-line_cream">
        <div class="container-2xl md:flex flex-1 ">
            <div class="container-2xl w-8/12">
                <div class="container-2xl md:flex flex-1 mt-5 items-center">
                    <p class="font-sans text-xs font-light text-white">Posted <strong class="font-sans text-xs font-bold text-white"> 9 mins ago</strong> </p>
                    <button class="bg-zinc-400 font-sans text-xs text-white rounded-md my-2 p-1 ml-10"> Images </button>
                </div>
                <p class="text-register_orange text-lg font-sans font-bold"> Photo retouch for social media(instagram)</p>
                <p class="text-white text-sm font-sans mt-3">We build custom wall beds and cabinetry and take many photos. Unfortunately, we don't always have ideal space or lighting for really professional photos. We would like them to be retouched and sized for social media accounts and portfolio pages on our website.</p>
                <div class="container-2xl md:flex flex-1 gap-3 items-center mt-10 pb-5">
                    <p class="font-sans font-bold text-white text-base">Requested Tool</p>
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.99999 0.333496L5.82499 1.5085L10.475 6.16683H0.333328V7.8335H10.475L5.82499 12.4918L6.99999 13.6668L13.6667 7.00016L6.99999 0.333496Z" fill="#E67C00"/>
                    </svg>
                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 10.1333C0 6.58633 0 4.81283 0.690292 3.45806C1.29749 2.26637 2.26637 1.29749 3.45806 0.690292C4.81283 0 6.58633 0 10.1333 0H17.8667C21.4137 0 23.1872 0 24.5419 0.690292C25.7336 1.29749 26.7025 2.26637 27.3097 3.45806C28 4.81283 28 6.58633 28 10.1333V17.8667C28 21.4137 28 23.1872 27.3097 24.5419C26.7025 25.7336 25.7336 26.7025 24.5419 27.3097C23.1872 28 21.4137 28 17.8667 28H10.1333C6.58633 28 4.81283 28 3.45806 27.3097C2.26637 26.7025 1.29749 25.7336 0.690292 24.5419C0 23.1872 0 21.4137 0 17.8667V10.1333Z" fill="#00005B"/>
                        <path d="M11.7893 17.5638H7.4504L6.56759 20.3819C6.54308 20.4864 6.44685 20.5604 6.34218 20.5553H4.14454C4.01922 20.5553 3.97539 20.4847 4.01306 20.3434L7.76969 9.29263C7.80729 9.17706 7.84483 9.06407 7.88243 8.91625C7.93156 8.65922 7.95672 8.39797 7.95756 8.13605C7.94679 8.05865 8.01358 7.99014 8.08905 8.00117H11.0756C11.1631 8.00117 11.2131 8.03329 11.2258 8.09752L15.4897 20.3626C15.5272 20.4912 15.4896 20.5554 15.377 20.5553H12.9351C12.8495 20.565 12.7677 20.5063 12.7473 20.4204L11.7893 17.5638ZM8.12659 15.1877H11.0944C10.6068 13.5215 10.0565 11.8773 9.6105 10.1981C9.10509 11.9399 8.63843 13.5553 8.12659 15.1877Z" fill="#9999FF"/>
                        <path d="M18.6608 16.4757C18.8335 17.9066 20.0351 18.5888 21.3656 18.5597C22.1159 18.545 22.9177 18.4285 23.6188 18.1448C23.6812 18.0937 23.7127 18.1256 23.7127 18.2412V20.0713C23.7186 20.1665 23.6788 20.2516 23.6 20.3025C22.7286 20.6983 21.7284 20.8177 20.7833 20.8025C17.9655 20.8025 16.0304 18.8171 16.0312 15.9285C16.0238 13.1911 17.7997 10.8817 20.5579 10.8817C22.896 10.8211 24.5147 12.693 24.5212 15.0231C24.5212 15.4474 24.4975 15.8733 24.4461 16.2945C24.4361 16.3813 24.3622 16.4487 24.277 16.4487C22.4097 16.4487 20.5333 16.4757 18.6608 16.4757ZM18.6608 14.7207C19.7015 14.7207 20.7482 14.7575 21.7882 14.7111C21.9445 14.6951 22.0606 14.6654 22.0606 14.5029C22.0389 13.6391 21.3099 12.9286 20.464 12.9617C19.442 12.8983 18.7879 13.7611 18.6608 14.7207Z" fill="#9999FF"/>
                    </svg>
                </div>
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
                        <div class="container-2xl md:flex flex-1 justify-center mr-8">
                            <a href="/job_details">
                                @if($i==0)
                                <p class="font-sans font-bold text-lg text-center text-applied_job">Applied</p>
                                @elseif($i==1)
                                <p class="font-sans font-bold text-lg text-center text-waiting_job">Waiting</p>
                                @else 
                                <p class="font-sans font-bold text-lg text-center text-cancelled_job">Cancelled</p>
                                @endif
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