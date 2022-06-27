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
                        <div class="container-2xl md:flex flex-1 justify-center">
                            <button class="bg-register_orange font-sans text-sm text-white w-28 rounded-md my-2 p-1 font-medium" data-modal-toggle="applicantsModal"> Applicants </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endfor

<div id="applicantsModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full ">
            <div class="relative container md:flex justify-center flex-1 p-4 w-8/12 max-w-2xl h-full md:h-auto ">
                <div class="container-2xl py-8 px-3  items-center bg-zinc-800  w-10/12 rounded-lg">
                    <p class="font-sans text-center text-white text-lg mb-4">Applicants List</p>
                    @for ($i = 0; $i <= 4; $i++) 
                    <div class="container-2xl md:flex flex-1 items-center px-4 py-4 border-b border-amber-200">
                        <div class="container-2xl md:flex flex-1 gap-2 items-center">
                            <img class="rounded-full object-cover w-14 h-14" src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="">
                            <div class="container-2xl gap-2">
                                <p class="font-sans text-lg text-center text-white font-medium">TONO SUCIPTO</p>
                                <p class="font-sans text-xs text-center text-white font-light">Digital Artist, Yogyakarta</p>
                                <div class="container-2xl md:flex flex-1 gap-3">
                                    <div class="container-2xl">
                                        <p class="text-center text-white font-medium text-xs">200</p>
                                        <p class="text-center text-white font-light text-xs">content</p>
                                    </div>
                                    <div class="container-2xl">
                                        <p class="text-center text-white font-medium text-xs">123</p>
                                        <p class="text-center text-white font-light text-xs">followers</p>
                                    </div>
                                    <div class="container-2xl">
                                        <p class="text-center text-white font-medium text-xs">123</p>
                                        <p class="text-center text-white font-light text-xs">likes</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-2xl md:flex flex-1 items-center justify-end">
                            <button class="bg-register_orange font-sans text-sm text-white w-auto px-5 rounded-md my-2 py-1 font-medium" data-modal-toggle="applyCreatorModal"> Apply </button>
                        </div>

                    </div>
                    @endfor
                </div>
                <div class="container-2xl h-20">
                    <button type="button" class="text-register_orange bg-transparent hover:bg-orange-700 hover:text-gray-900 rounded-lg text-sm p-1.5 mx-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="applicantsModal">
                            <svg class="h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
            </div>
</div>
<div id="applyCreatorModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full ">
            <div class="relative container md:flex justify-center flex-1 p-4 w-full max-w-2xl h-full md:h-auto ">
                <div class="container-2xl py-16 px-36 items-center bg-zinc-800 rounded-lg">
                    
                        <div class="container-2xl md:flex flex-1 justify-center py-3">
                            <svg width="84" height="84" viewBox="0 0 84 84" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M61.1247 23.5833L33.6663 51.0416L18.708 36.125L12.833 42L33.6663 62.8333L66.9997 29.5L61.1247 23.5833ZM41.9997 0.333313C18.9997 0.333313 0.333008 19 0.333008 42C0.333008 65 18.9997 83.6667 41.9997 83.6667C64.9997 83.6667 83.6664 65 83.6664 42C83.6664 19 64.9997 0.333313 41.9997 0.333313ZM41.9997 75.3333C23.583 75.3333 8.66634 60.4167 8.66634 42C8.66634 23.5833 23.583 8.66665 41.9997 8.66665C60.4163 8.66665 75.333 23.5833 75.333 42C75.333 60.4167 60.4163 75.3333 41.9997 75.3333Z" fill="#FF8A00"/>
                            </svg>

                        </div>
                        
                        <p class="font-sans font-normal text-white text-lg text-center">
                            Apply Creator is Successfull
                        </p>
                        <p class="font-sans font-normal text-white text-lg text-center">
                            Please check your email to follow up!
                        </p>
                        <div class="container-2xl md:flex flex-1 justify-center">
                            <button class="bg-register_orange hover:bg-orange-700 w-28 text-white rounded-md p-2 text-base font-sans mt-10" data-modal-toggle="applyCreatorModal">Done</button>  
                        </div>

                  
                </div>
                
            </div>
</div>

</div>
@endsection