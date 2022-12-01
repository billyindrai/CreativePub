@extends('layouts.master')
@section('title','CreativePub')
@section('content')

<div class=" container-2xl flex items-center bg-content_box bg-opacity-20 mx-auto">
    <div class=" flex-initial items-center px-44 my-28">
        <img class="items-center" src="https://cdn.discordapp.com/attachments/711190437922209833/946664293779243048/unknown.png" alt="">
    </div>
    <div class=" flex items-center">
        <img class="" src="https://cdn.discordapp.com/attachments/711190437922209833/946664774991753256/unknown.png" alt="">
    </div>
</div>
<div class=" container-2xl md:flex justify-center items-center mx-auto">
    <div class="items-center mt-9 mb-3 md:flex justify-center">
        <form  method="POST" action="search_gallery">
            @csrf
            <input name="search" class=" placeholder:text-white bg-search_button rounded-md text-white py-1 px-2 w-64 shadow-md" type="text" placeholder="Find the content you need...">
            <button class="bg-register_orange hover:bg-transparent text-white rounded-md p-2 font-sans" type="submit">Search</button>
        </form>
    </div>
</div>
<div class="container-2xl md:flex justify-center ">
    <ul class="hidden md:flex flex-1 justify-center items-center gap-7 text-gray-50 text-base mr-5 font-sans pb-2">
            <a href="/">
                <button class=" bg-register_orange hover:bg-transparent text-white rounded-md p-2 font-sans">Gallery</button>
            </a>
            <a href="/home_collection_all">
                <button class=" hover:bg-register_orange bg-transparent text-white rounded-md p-2 font-sans">Collection</button>
            </a>
    </ul>
</div>
<div class="container-2xl md:flex justify-center items-center mx-auto">
    <ul class="hidden md:flex flex-1 justify-center items-center gap-7 text-gray-50 text-base mr-5 font-sans">
        <a href="/">
            <button class=" hover:bg-register_orange bg-transparent text-white rounded-md p-2 font-sans">All</button>
        </a>
        <a href="/gallery_images">
            <button class=" hover:bg-register_orange bg-transparent text-white rounded-md p-2 font-sans">Images</button>
        </a>
        <a href="/gallery_video">
            <button class=" hover:bg-register_orange bg-transparent text-white rounded-md p-2 font-sans">Video</button>
        </a>
        <a href="/gallery_audio">
            <button class=" hover:bg-register_orange bg-transparent text-white rounded-md p-2 font-sans">Audio</button>
        </a>
        <a href="/gallery_script">
            <button class=" bg-register_orange text-white rounded-md p-2 font-sans">Script</button>
        </a>
        
    </ul>
</div>

<div class="container-2xl grid grid-cols-6  mx-auto px-6 gap-6 py-5">
    @foreach($gallery as $g)
    <div class="container bg-content_box rounded-lg shadow-lg p-4">
        <div class="container md:flex items-center">
            <img class="rounded-full float-left w-12 h-12" src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="">
            <div class="px-3.5">
                <p class="font-semibold font-sans text-white">{{$g->name}}</p>
                <p class="font-thin font-sans text-register_orange">{{$g->categoryGallery}}</p>
            </div>
        </div>

        <div class="container relative overflow-hidden py-2">
            <img src="{{$g->coverGallery}}" alt="" class="object-cover w-80 h-60 rounded-md" />
            <div class="absolute py-2.5 bottom-2 inset-x-0 opacity-80 bg-black text-white text-xs text-center leading-4 rounded-b-md font-sans font-medium">
                <form id="commentForm<?php echo htmlspecialchars($g->idGallery); ?>" method="POST" action="/show_comments">
                            @csrf
                                <input type="hidden" id="token<?php echo htmlspecialchars($g->idGallery); ?>" value="{{ @csrf_token() }}">
                                <input type="hidden" name="galleryId" id="galleryId<?php echo htmlspecialchars($g->idGallery); ?>" value="{{$g->idGallery}}">
                                <button type="submit" data-modal-toggle="<?php echo htmlspecialchars($g->idGallery); ?>"> {{$g->titleGallery}}</button>
                </form>
            </div>
        </div>
        <div class="container md:flex justify-end items-center">
            <img class="w-5" src="https://cdn.discordapp.com/attachments/752542767128772668/947775687748616202/unknown.png" alt="">
            <p class="px-2 text-white text-xs">202</p>
            <img class="w-5" src="https://cdn.discordapp.com/attachments/752542767128772668/947777319311904768/unknown.png" alt="">
            <p class="px-2 text-white text-xs">61.5 K</p>
        </div>
    </div> 
    @endforeach
</div>
<div class="container-2xl md:flex flex-1 justify-center">
    {{$gallery->links()}}
</div>

@foreach($gallery as $g)
    <div id="<?php echo htmlspecialchars($g->idGallery); ?>" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full ">
        <div class="relative container bg-zinc-800 md:flex flex-1 p-4 w-full max-w-2xl h-full ">
            <div class="container-2xl w-full py-3 px-16 rounded-md">
                <div class="container-2xl md:flex flex-1 mb-3 items-center">
                    <img class="rounded-full object-cover float-left w-12 h-12" src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="">
                    <div class="px-3.5">
                        <p class="font-semibold font-sans text-white">{{$g->titleGallery}}</p>
                        <p class="font-thin font-sans text-xs text-white">{{$g->name}} <strong class="font-sans text-xs font-bold text-register_orange"> Follow </strong></p>
                    </div>
                    <div class="container-2xl md:flex flex-1 justify-end items-end gap-3">
                        <button class="bg-register_orange text-white rounded-md p-2 text-xs font-sans">
                            <div class="container-2xl md:flex flex-1 gap-1">
                                <p class="font-sans text-xs text-white"> 3.5k</p>
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.984375 13.125H3.48568V5.625H0.984375V13.125ZM14.7415 6.25C14.7415 5.5625 14.1787 5 13.4909 5H9.54508L10.1391 2.14375L10.1579 1.94375C10.1579 1.6875 10.0516 1.45 9.88276 1.28125L9.21991 0.625L5.10527 4.74375C4.8739 4.96875 4.73633 5.28125 4.73633 5.625V11.875C4.73633 12.5625 5.29912 13.125 5.98698 13.125H11.6149C12.1339 13.125 12.5779 12.8125 12.7655 12.3625L14.654 7.95625C14.7103 7.8125 14.7415 7.6625 14.7415 7.5V6.25Z" fill="white" fill-opacity="0.9"/>
                                </svg>
                            </div>    
                        </button>
                        <button class="bg-register_orange text-white rounded-md p-2 text-xs font-sans">
                            <div class="container-2xl md:flex items-center flex-1 gap-1">
                                <p class="font-sans text-xs text-white"> 2.8k</p>
                                    <svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.85938 0.8125C4.73438 0.8125 2.06562 2.75625 0.984375 5.5C2.06562 8.24375 4.73438 10.1875 7.85938 10.1875C10.9844 10.1875 13.6531 8.24375 14.7344 5.5C13.6531 2.75625 10.9844 0.8125 7.85938 0.8125ZM7.85938 8.625C6.13438 8.625 4.73438 7.225 4.73438 5.5C4.73438 3.775 6.13438 2.375 7.85938 2.375C9.58438 2.375 10.9844 3.775 10.9844 5.5C10.9844 7.225 9.58438 8.625 7.85938 8.625ZM7.85938 3.625C6.82188 3.625 5.98438 4.4625 5.98438 5.5C5.98438 6.5375 6.82188 7.375 7.85938 7.375C8.89687 7.375 9.73438 6.5375 9.73438 5.5C9.73438 4.4625 8.89687 3.625 7.85938 3.625Z" fill="#FFF3CD"/>
                                    </svg>
                            </div>    
                        </button>     
                    </div>
                </div>
                <div id="default-carousel" class="relative rounded-lg" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800"></span>
                            <img src="{{$g->contentGallery}}" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                        </div>
                        <!-- Item 2 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{$g->contentGallery}}" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                        </div>
                        <!-- Item 3 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{$g->contentGallery}}" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                        </div>
                    </div>
                    <!-- Slider indicators -->
                    <div class="flex absolute bottom-5 mt-3 left-1/2 z-30 space-x-3 -translate-x-1/2">
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                    </div>
                    <!-- Slider controls -->
                    <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
                        <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                            <span class="hidden">Previous</span>
                        </span>
                    </button>
                    <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
                        <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            <span class="hidden">Next</span>
                        </span>
                    </button>
                </div>

                
                <div class="container-2xl w-full mx-auto my-3">
                    <p class="text-white font-sans text-xs leading-relaxed">tes </p>
                </div>
                <div class="container-2xl md:flex flex-1 pb-3 border-b border-amber-200 gap-3">
                    <button class="bg-register_orange text-white rounded-md p-2 text-xs font-sans">{{$g->tagsGallery}}</button>
                </div>
                <div class="container-2xl my-3">
                    <p class="font-sans text-white">Comment <sup id="totalComments<?php echo htmlspecialchars($g->idGallery); ?>" class="font-sans text-base text-register_orange"></sup></p>
                </div>

                <div id="commentsList<?php echo htmlspecialchars($g->idGallery); ?>" class="container-2xl items-center">
                    <!-- <img class="rounded-full object-cover float-left w-12 h-12" src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="">
                    <div class="px-3.5">
                        <p class="font-semibold font-sans text-white">Billy Indra</p>
                        <p class="font-thin font-sans text-white">Looks so good</p>
                        <p class="font-thin font-sans text-xs text-white">About <strong class="font-sans text-xs font-bold text-register_orange"> 3 hours </strong></p>
                    </div> -->
                </div>
                @if(Auth::check())
                <div class="container-2xl bg-content_box rounded-lg p-4">
                    <div class="container-2xl md:flex flex-1 mb-3 items-center pb-3 border-b border-amber-200">
                        <img class="rounded-full object-cover float-left w-12 h-12" src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="">
                            <div class="px-3.5">
                                <p class="font-semibold font-sans text-white">{{Auth::user()->name}}</p>
                            </div>
                    </div>
                    <form id="inputCommentForm<?php echo htmlspecialchars($g->idGallery); ?>" method="POST" action="/input_comment">
                    @csrf
                        <div class="container-2xl p-3 h-20">
                            <input type="hidden" name="galleryId" value="{{$g->idGallery}}">
                            <input name="isiKomentar" class=" placeholder:text-white bg-content_box rounded-md text-white px-2 w-full border-transparent h-full" type="text" placeholder="Write your comment here">
                        </div>
                        <div class="container-2xl md:flex flex-1 justify-end items-end">
                            <button type="submit" class="bg-register_orange hover:bg-orange-700 text-white rounded-md p-2 text-xs font-sans">Comment</button>  
                        </div> 
                    </form>
                </div>
                @endif
            </div>
            <div class="container-2xl w-20">
                <button type="button" class="text-register_orange bg-transparent hover:bg-orange-700 hover:text-gray-900 rounded-lg text-sm p-1.5 mx-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="<?php echo htmlspecialchars($g->idGallery); ?>">
                            <svg class="h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                </button>
                <div class="container-2xl mt-24">
                    <button class="py-3">
                        <svg width="41" height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.949219 5C0.949219 2.23858 3.18779 0 5.94922 0H35.9701C38.7315 0 40.9701 2.23858 40.9701 5V35C40.9701 37.7614 38.7315 40 35.9701 40H5.94921C3.18779 40 0.949219 37.7614 0.949219 35V5Z" fill="#FF8A00"/>
                            <path d="M26.9629 24.08C26.2025 24.08 25.5221 24.38 25.0019 24.85L17.8682 20.7C17.9182 20.47 17.9582 20.24 17.9582 20C17.9582 19.76 17.9182 19.53 17.8682 19.3L24.9218 15.19C25.4621 15.69 26.1725 16 26.9629 16C28.6238 16 29.9645 14.66 29.9645 13C29.9645 11.34 28.6238 10 26.9629 10C25.302 10 23.9613 11.34 23.9613 13C23.9613 13.24 24.0014 13.47 24.0514 13.7L16.9977 17.81C16.4574 17.31 15.7471 17 14.9566 17C13.2958 17 11.9551 18.34 11.9551 20C11.9551 21.66 13.2958 23 14.9566 23C15.7471 23 16.4574 22.69 16.9977 22.19L24.1214 26.35C24.0714 26.56 24.0414 26.78 24.0414 27C24.0414 28.61 25.3521 29.92 26.9629 29.92C28.5737 29.92 29.8844 28.61 29.8844 27C29.8844 25.39 28.5737 24.08 26.9629 24.08Z" fill="white"/>
                        </svg>
                        <p class="font-sans text-xs text-white">Share</p>
                    </button>
                    <button class="py-3">
                        <svg width="41" height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.948242 5C0.948242 2.23858 3.18682 0 5.94824 0H35.9691C38.7305 0 40.9691 2.23858 40.9691 5V35C40.9691 37.7614 38.7305 40 35.9691 40H5.94824C3.18681 40 0.948242 37.7614 0.948242 35V5Z" fill="#FF8A00"/>
                            <path d="M30.9545 12C30.9545 10.9 30.0641 10 28.9635 10H12.9551C11.8546 10 10.9541 10.9 10.9541 12V24C10.9541 25.1 11.8546 26 12.9551 26H26.9624L30.9645 30L30.9545 12Z" fill="white"/>
                        </svg>
                        <p class="font-sans text-xs text-white">Comment</p>
                    </button>
                    <button class="py-3">
                        <svg width="41" height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.949219 5C0.949219 2.23858 3.18779 0 5.94922 0H35.9701C38.7315 0 40.9701 2.23858 40.9701 5V35C40.9701 37.7614 38.7315 40 35.9701 40H5.94921C3.18779 40 0.949219 37.7614 0.949219 35V5Z" fill="#FF8A00"/>
                            <path d="M10.4541 17.1C10.4541 14.4398 10.4541 13.1096 10.9721 12.0935C11.4277 11.1998 12.1548 10.4731 13.049 10.0177C14.0656 9.5 15.3964 9.5 18.0581 9.5H23.8611C26.5227 9.5 27.8535 9.5 28.8701 10.0177C29.7644 10.4731 30.4914 11.1998 30.9471 12.0935C31.465 13.1096 31.465 14.4398 31.465 17.1V22.9C31.465 25.5602 31.465 26.8904 30.9471 27.9065C30.4914 28.8002 29.7644 29.5269 28.8701 29.9823C27.8535 30.5 26.5227 30.5 23.8611 30.5H18.0581C15.3964 30.5 14.0656 30.5 13.049 29.9823C12.1548 29.5269 11.4277 28.8002 10.9721 27.9065C10.4541 26.8904 10.4541 25.5602 10.4541 22.9V17.1Z" fill="#001E36"/>
                            <path d="M14.9561 24.8872V15.6526C14.9561 15.5897 14.9823 15.5538 15.0436 15.5538C15.9483 15.5538 16.8526 15.5 17.7575 15.5C19.2259 15.5 20.8158 16.0018 21.3731 17.5372C21.5045 17.9141 21.5745 18.3 21.5745 18.7038C21.5745 19.4756 21.3994 20.1128 21.0492 20.6154C20.071 22.0193 18.3756 21.9974 16.8558 21.9974V24.8782C16.8677 24.9635 16.795 25.0038 16.7245 25.0038H15.0611C14.9911 25.0038 14.9561 24.968 14.9561 24.8872ZM16.8645 17.2859V20.3013C17.4672 20.3454 18.0977 20.3502 18.6767 20.1577C19.3159 19.9734 19.666 19.4204 19.666 18.7577C19.6838 18.193 19.3759 17.6512 18.8518 17.4474C18.2798 17.2097 17.482 17.1955 16.8645 17.2859Z" fill="#31A8FF"/>
                            <path d="M27.0348 19.7055C26.7699 19.566 26.4878 19.4639 26.1962 19.4021C25.8214 19.314 24.3433 19.0053 24.3427 19.7778C24.3558 20.209 25.0408 20.4203 25.3434 20.5435C26.4059 20.9081 27.6082 21.5598 27.5845 22.8698C27.617 24.5006 26.0361 25.1525 24.681 25.1527C23.9755 25.16 23.2406 25.0508 22.5949 24.7481C22.5333 24.7155 22.4936 24.6458 22.4963 24.5747V23.0143C22.4893 22.9517 22.5565 22.897 22.609 22.942C23.2416 23.3244 23.9915 23.5101 24.7233 23.52C25.0463 23.52 25.6866 23.4887 25.6817 23.0143C25.6817 22.559 24.9158 22.3497 24.6105 22.234C24.1679 22.0761 23.7483 21.8574 23.3631 21.5839C22.8248 21.2001 22.4871 20.5848 22.4963 19.9078C22.4931 18.3723 23.9483 17.683 25.2589 17.6827C25.8715 17.6777 26.5295 17.723 27.0998 17.9717C27.1818 17.9958 27.1988 18.0821 27.1984 18.1595V19.6188C27.2036 19.7094 27.103 19.7403 27.0348 19.7055Z" fill="#31A8FF"/>
                        </svg>

                        <p class="font-sans text-xs text-white">Tools</p>
                    </button>
                    <button class="py-3">
                        <svg width="41" height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.949219 5C0.949219 2.23858 3.18779 0 5.94922 0H35.9701C38.7315 0 40.9701 2.23858 40.9701 5V35C40.9701 37.7614 38.7315 40 35.9701 40H5.94921C3.18779 40 0.949219 37.7614 0.949219 35V5Z" fill="#FF8A00"/>
                            <path d="M9.9541 29H13.9562V17H9.9541V29ZM31.9656 18C31.9656 16.9 31.0651 16 29.9645 16H23.6512L24.6017 11.43L24.6317 11.11C24.6317 10.7 24.4617 10.32 24.1915 10.05L23.131 9L16.5475 15.59C16.1773 15.95 15.9572 16.45 15.9572 17V27C15.9572 28.1 16.8577 29 17.9583 29H26.963C27.7934 29 28.5038 28.5 28.8039 27.78L31.8255 20.73C31.9155 20.5 31.9656 20.26 31.9656 20V18Z" fill="white" fill-opacity="0.9"/>
                        </svg>
                        <p class="font-sans text-xs text-white">Like</p>
                    </button>

                </div>
            </div>
            
        </div>
    </div>
@endforeach
</div>

@foreach($gallery as $g)
<script>
    $(document).ready(function(){
        $("#commentForm"+{!! $g->idGallery!!}).submit(function(e){
            e.preventDefault();
            let url = $(this).attr('action');

            $.post(url, {
                '_token': $("#token"+{!! $g->idGallery!!}).val(),
                galleryId: $("#galleryId"+{!! $g->idGallery!!}).val()
            }, function(response){
                var num;
                var htmlCode = "";
                for (i = 0; i < response.length; i++) {


                htmlCode  =  htmlCode + '<div class="container-2xl md:flex flex-1 mb-3 items-center">'+
                    '<img class="rounded-full object-cover float-left w-12 h-12" src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="">' +
                    '<div class="px-3.5">' +
                        '<p class="font-semibold font-sans text-white">' + response[i].name + '</p>' +
                        '<p class="font-thin font-sans text-white">' + response[i].isiKomentar + '</p>' +
                    '</div>'
                    +'</div>';
                $('#commentsList'+{!! $g->idGallery!!}).html(htmlCode);
                $('#totalComments'+{!! $g->idGallery!!}).html(response.length);








                } 
            });
            
        })
    })
</script>
@endforeach



@endsection