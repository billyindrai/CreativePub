@extends('layouts.master')
@section('title','Jobs List | Creative Pub')
@section('content')


<div class="container-2xl md:flex flex-1 justify-center items-center">

    <div class="container-2xl m-8 w-auto">
        <div class="container-2xl hover:bg-register_orange rounded-lg justify-center md:flex flex-1 ">
            <a  href="/admin">
                <p class="font-sans my-2 text-lg font-semibold text-white "> Account</p>
            </a>
        </div>
        <div class="container-2xl hover:bg-register_orange rounded-lg justify-center md:flex flex-1 ">
            <a  href="/admin_job">
                <p class="font-sans my-2 text-lg font-semibold text-white "> Job</p>
            </a>
        </div>
        <div class="container-2xl bg-register_orange rounded-lg justify-center md:flex flex-1 ">
            <a  href="/admin_collection">
                <p class="font-sans my-2 text-lg font-semibold text-white "> Collection</p>
            </a>
        </div>
        <div class="container-2xl hover:bg-register_orange rounded-lg justify-center md:flex flex-1 ">
            <a  href="/admin_gallery">
                <p class="font-sans my-2 text-lg font-semibold text-white "> Gallery</p>
            </a>
        </div>
        <div class="container-2xl hover:bg-register_orange rounded-lg justify-center md:flex flex-1 ">
            <a  href="/admin_approval">
                <p class="font-sans my-2 text-lg font-semibold text-white "> Approval</p>
            </a>
        </div>
        <div class="container-2xl hover:bg-register_orange rounded-lg justify-center md:flex flex-1 ">
            <a  href="/admin_monetize">
                <p class="font-sans my-2 text-lg font-semibold text-white "> Monetize</p>
            </a>
        </div>
        <div class="container-2xl hover:bg-register_orange rounded-lg justify-center md:flex flex-1 ">
            <a  href="/admin_premium">
                <p class="font-sans my-2 text-lg font-semibold text-white "> Premium Request</p>
            </a>
        </div>
        
        
    </div>

    <div class="container-2xl py-5 ">
        
            <form method="POST" action="/search_collection">
                @csrf
                <div class="container-2xl md:flex flex-1  py-2 mt-5 h-fit gap-5">
                    <input name="keywordSearch" class=" placeholder:text-gray_font bg-white rounded-md text-black py-2 px-2 w-9/12 shadow-md text-xs" type="text" placeholder="Search...">
                    <button type="submit" class=" bg-register_orange hover:bg-orange-700 text-white rounded-md p-2 font-sans">Search</button>  
                </div>
            </form>
            
       
        @if (session('status'))
        <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
            {{session('status')}}
        </div>
        @endif

        <div class="container-2xl md:flex flex-1 justify-center">
        <table class="table-auto rounded-lg border border-line_cream">
            <thead class="font-sans  rounded-lg text-lg rounded-t-md py-4 mt-5 mx-48 bg-line_cream">
                    <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Category</th>
                    <th>Action</th>
                    </tr>
            </thead>
            <tbody class="font-sans text-base text-white">
        @foreach($collection as $c)
         
                

                
                    <tr>
                    <td class="p-5" >{{$c->idCollection}}</td>
                    <td class="p-5" >{{$c->titleCollection}}</td>
                    <td class="p-5" >{{$c->categoryCollection}}</td>
                    <td class="p-5" >
                        <button data-modal-toggle="<?php echo htmlspecialchars($c->idCollection); ?>" class=" bg-register_orange hover:bg-orange-700 text-white rounded-md p-2 font-sans">View Content</button>
                    </td>
                    <td class="p-5" >
                        <form method="POST" action="/delete_collection">
                            @csrf 
                            <input type="hidden" name="collectionId" value="{{$c->idCollection}}">
                            <button class=" bg-register_orange hover:bg-orange-700 text-white rounded-md p-2 font-sans">Delete</button>
                        </form>
                        
                    </td>
                    <tr>
                
                
        @endforeach
        </tbody>
        </table>
        </div>


            <div class="container-2xl md:flex flex-1 mt-2 justify-center">
            {{$collection->links()}}
            </div>
    </div>
</div>
 

@foreach($collection as $g)
    <div id="<?php echo htmlspecialchars($g->idCollection); ?>" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full ">
        <div class="relative container bg-zinc-800 md:flex flex-1 p-4 w-full max-w-2xl h-auto ">
            <div class="container-2xl w-full py-3 px-16 rounded-md">
         
                @if($g->categoryCollection == 'image' )
                <div class="relative rounded-lg" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
                        <!-- Item 1 -->
                            <img src="{{$g->contentCollection}}" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                    </div>
                    
                </div>
                @elseif($g->categoryCollection == 'video')
                <div class="container-2xl rounded-md">
                    <video class="rounded-md w-full h-full" controls>
                        <source src="{{$g->contentCollection}}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                @elseif($g->categoryCollection == 'audio')
                <div class="container-2xl rounded-md">
                    <video class="rounded-md w-full h-full" controls>
                        <source src="{{$g->contentCollection}}" type="audio/mp3">
                        Your browser does not support the video tag.
                    </video>
                </div>
                @elseif($g->categoryCollection == 'script')
                <div class="relative rounded-lg" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
                        <!-- Item 1 -->
                            <img src="{{$g->coverCollection}}" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                    </div>
                    
                </div>
                @endif

                
                <div class="container-2xl w-full mx-auto my-3">
                    <p class="text-white font-sans text-xs leading-relaxed">{{$g->descriptionCollection}} </p>
                </div>
            </div>
            <div class="container-2xl w-20">
                <button type="button" class="text-register_orange bg-transparent hover:bg-orange-700 hover:text-gray-900 rounded-lg text-sm p-1.5 mx-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="<?php echo htmlspecialchars($g->idCollection); ?>">
                            <svg class="h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                </button>
            </div>
            
        </div>
    </div>
@endforeach



 








@endsection