@extends('layouts.master')
@section('title','Jobs List | Creative Pub')
@section('content')

<div class="container-2xl py-5 mx-auto">
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
            <p class="ml-5 font-sans text-xs text-black">1 - 20 of {{count($jobs)}} Jobs</p>
        </div>
        <ul class="hidden md:flex flex-1 justify-end items-center gap-7 text-black text-xs mr-5 font-sans">
            <li class="cursor-pointer hover:text-register_orange">Show 20 rows</li>
            <li class="cursor-pointer hover:text-register_orange">Prev</li>
            <li class="cursor-pointer hover:text-register_orange">Next</li>
        </ul>
    </div>

    @foreach($jobs as $j) 
    <div class="container-2xl md:flex flex-1 mx-48 pl-10 pr-4 border border-line_cream">
        <div class="container-2xl md:flex flex-1 ">
            <div class="container-2xl w-8/12">
                <div class="container-2xl md:flex flex-1 mt-5 items-center">
                    <p class="font-sans text-xs font-light text-white">Posted <strong class="font-sans text-xs font-bold text-white"> {{$j->created_at}}</strong> </p>
                    <button class="bg-zinc-400 font-sans text-xs text-white rounded-md my-2 p-1 ml-10"> {{$j->categoryJob}} </button>
                </div>
                <p class="text-register_orange text-lg font-sans font-bold"> {{$j->titleJob}}</p>
                <p class="text-white text-sm font-sans mt-3">{{$j->descriptionJob}}</p>
            </div>
            <div class="container-2xl w-4/12">
                <div class="container-2xl md:flex flex-1 mt-7 justify-end items-center">
                    <div class="container-2xl">
                        <p class="font-sans font-bold text-white text-lg">{{$j->name}}</p>
                        <p class="font-sans font-light text-register_orange text-xs">{{$j->penggunaLocation}}</p>
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
            <div class="container-2xl items-start py-2">
                <button>
                    <div class="container-2xl md:flex flex-1 gap-1 items-center" data-dropdown-toggle="dropdownJobs">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.3989 0.65625C14.5726 0.656256 14.7418 0.711906 14.8821 0.815188C15.0225 0.91847 15.1267 1.06405 15.1799 1.23097L16.0822 4.0615C16.4612 4.24866 16.8238 4.459 17.1699 4.69584L20.0509 4.06978C20.2207 4.03317 20.3977 4.05193 20.5564 4.12337C20.715 4.1948 20.847 4.31522 20.9335 4.46728L23.2074 8.44062C23.2943 8.5926 23.331 8.76848 23.3125 8.94291C23.2939 9.11735 23.2209 9.28132 23.1041 9.41119L21.1271 11.614C21.1559 12.0364 21.1559 12.4603 21.1271 12.8827L23.1041 15.0888C23.2209 15.2187 23.2939 15.3827 23.3125 15.5571C23.331 15.7315 23.2943 15.9074 23.2074 16.0594L20.9335 20.0344C20.8468 20.1861 20.7146 20.3062 20.556 20.3773C20.3974 20.4485 20.2206 20.467 20.0509 20.4302L17.1699 19.8042C16.8254 20.0393 16.4612 20.2513 16.0838 20.4385L15.1799 23.269C15.1267 23.4359 15.0225 23.5815 14.8821 23.6848C14.7418 23.7881 14.5726 23.8437 14.3989 23.8438H9.85111C9.67744 23.8437 9.50825 23.7881 9.36791 23.6848C9.22757 23.5815 9.12332 23.4359 9.07017 23.269L8.16947 20.4402C7.7915 20.2536 7.42694 20.0405 7.07845 19.8025L4.19916 20.4302C4.0293 20.4668 3.85231 20.4481 3.69368 20.3766C3.53506 20.3052 3.40299 20.1848 3.3165 20.0327L1.0426 16.0594C0.955765 15.9074 0.918986 15.7315 0.937562 15.5571C0.956138 15.3827 1.02911 15.2187 1.14595 15.0888L3.12291 12.8827C3.09427 12.4614 3.09427 12.0386 3.12291 11.6173L1.14595 9.41119C1.02911 9.28132 0.956138 9.11735 0.937562 8.94291C0.918986 8.76848 0.955765 8.5926 1.0426 8.44062L3.3165 4.46562C3.40323 4.31387 3.5354 4.19379 3.69401 4.12266C3.85261 4.05153 4.02947 4.03302 4.19916 4.06978L7.07845 4.6975C7.42627 4.46066 7.79049 4.247 8.16947 4.05984L9.07181 1.23097C9.12479 1.06459 9.22854 0.919393 9.36822 0.816161C9.50791 0.712929 9.67636 0.656955 9.84947 0.65625H14.3973H14.3989ZM13.7985 2.3125H10.4516L9.5197 5.23909L8.89135 5.54881C8.58244 5.70142 8.28425 5.87517 7.99885 6.06888L7.41806 6.46637L4.43869 5.81713L2.76525 8.74537L4.80783 11.0277L4.75861 11.7299C4.73504 12.0762 4.73504 12.4238 4.75861 12.7701L4.80783 13.4723L2.76197 15.7546L4.43705 18.6829L7.41642 18.0353L7.99721 18.4311C8.28261 18.6248 8.5808 18.7986 8.8897 18.9512L9.51806 19.2609L10.4516 22.1875H13.8017L14.7369 19.2593L15.3636 18.9512C15.6722 18.7989 15.9698 18.6252 16.2545 18.4311L16.8336 18.0353L19.8146 18.6829L21.4881 15.7546L19.4438 13.4723L19.4931 12.7701C19.5167 12.4232 19.5167 12.0751 19.4931 11.7283L19.4438 11.026L21.4897 8.74537L19.8146 5.81713L16.8336 6.46306L16.2545 6.06888C15.9699 5.87479 15.6722 5.70101 15.3636 5.54881L14.7369 5.24075L13.8001 2.3125H13.7985ZM12.125 7.28125C13.4304 7.28125 14.6823 7.80474 15.6053 8.73656C16.5283 9.66838 17.0469 10.9322 17.0469 12.25C17.0469 13.5678 16.5283 14.8316 15.6053 15.7634C14.6823 16.6953 13.4304 17.2188 12.125 17.2188C10.8197 17.2188 9.56776 16.6953 8.64473 15.7634C7.7217 14.8316 7.20314 13.5678 7.20314 12.25C7.20314 10.9322 7.7217 9.66838 8.64473 8.73656C9.56776 7.80474 10.8197 7.28125 12.125 7.28125ZM12.125 8.9375C11.2548 8.9375 10.4202 9.28649 9.80482 9.90771C9.18947 10.5289 8.84377 11.3715 8.84377 12.25C8.84377 13.1285 9.18947 13.9711 9.80482 14.5923C10.4202 15.2135 11.2548 15.5625 12.125 15.5625C12.9953 15.5625 13.8299 15.2135 14.4452 14.5923C15.0606 13.9711 15.4063 13.1285 15.4063 12.25C15.4063 11.3715 15.0606 10.5289 14.4452 9.90771C13.8299 9.28649 12.9953 8.9375 12.125 8.9375Z" fill="#FFF3CD"/>
                        </svg>
                        <svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.0625 1.59375L5.4375 6.01042L9.8125 1.59375" stroke="#FFF3CD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>   
                </button>                 
                <div id="dropdownJobs" class="z-10 hidden bg-content_box divide-y divide-gray-100 rounded shadow w-auto dark:bg-gray-700">
                            <ul class="py-1 text-sm text-white dark:text-gray-200" aria-labelledby="dropdownDefault">
                            <li>
                                <a href="/edit_jobs" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-content_box">Edit</a>
                            </li>
                            <li>
                                <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-content_box" data-modal-toggle="<?php echo htmlspecialchars($j->titleJob); ?>">Delete</a>
                            </li>
                            </ul>
                </div>
            
            </div>
        </div>
    </div>

    @endforeach

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
                            <button class="bg-register_orange font-sans text-sm text-white w-auto px-5 rounded-md my-2 py-1 font-medium" data-modal-toggle="applyCreatorModal"> Accept </button>
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

@foreach($jobs as $j)
<div id="<?php echo htmlspecialchars($j->titleJob); ?>" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full ">
            <div class="relative container md:flex justify-center flex-1 p-4 w-full max-w-2xl h-full md:h-auto ">
                <div class="container-2xl py-16 px-36 items-center bg-zinc-800 rounded-lg">
                    
                        <div class="container-2xl md:flex flex-1 justify-center py-3">
                        <svg width="60" height="81" viewBox="0 0 60 81" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M59.875 30.1247L55.7083 37.333L5.16667 8.16634L9.33333 0.958008L22 8.24967L27.6667 6.70801L45.7083 17.1247L47.25 22.833L59.875 30.1247ZM0 72.1663V22.1663H21.125L50 38.833V72.1663C50 74.3765 49.122 76.4961 47.5592 78.0589C45.9964 79.6217 43.8768 80.4997 41.6667 80.4997H8.33333C6.1232 80.4997 4.00358 79.6217 2.44078 78.0589C0.877973 76.4961 0 74.3765 0 72.1663ZM8.33333 72.1663H41.6667V43.833L18.5833 30.4997H8.33333V72.1663Z" fill="#FF8A00"/>
                        </svg>
                        </div>
                        <p class="font-sans font-normal text-white text-lg text-center">
                            Are you sure want to delete <strong class="font-sans text-amber_font font-bold text-lg">{{$j->titleJob}}</strong>
                        </p>
                        
                        <div class="container-2xl md:flex flex-1 justify-center gap-8">
                            <button class="text-register_orange hover:bg-orange-700 w-28 bg-white rounded-md p-2 text-base font-sans mt-10" data-modal-toggle="<?php echo htmlspecialchars($j->titleJob); ?>">Cancel</button>
                            <form method="POST" action="/delete_posted_job">
                            @csrf
                                <input type="hidden" name="jobId" id="jobId" value="{{$j->idJob}}">
                                <button class="bg-register_orange hover:bg-orange-700 w-28 text-white rounded-md p-2 text-base font-sans mt-10" >Delete</button>  
                            </form>
                        </div>


                  
                </div>
                
            </div>
        </div>

</div>
@endforeach
@endsection