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
        <div class="container-2xl bg-register_orange rounded-lg justify-center md:flex flex-1 ">
            <a  href="/admin_job">
                <p class="font-sans my-2 text-lg font-semibold text-white "> Job</p>
            </a>
        </div>
        <div class="container-2xl hover:bg-register_orange rounded-lg justify-center md:flex flex-1 ">
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
            <a  href="">
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
        
            <form method="POST" action="/search_job">
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
                    <th>Job Title</th>
                    <th>Job Creator</th>
                    <th>Action</th>
                    </tr>
            </thead>
            <tbody class="font-sans text-base text-white">
        @foreach($job as $j)
         
                

                
                    <tr>
                    <td class="p-5" >{{$j->idJob}}</td>
                    <td class="p-5" >{{$j->titleJob}}</td>
                    <td class="p-5" >{{$j->name}}</td>
                    <td class="p-5" >
                        <form method="POST" action="/delete_job">
                            @csrf 
                            <input type="hidden" name="jobId" value="{{$j->idJob}}">
                            <button class=" bg-register_orange hover:bg-orange-700 text-white rounded-md p-2 font-sans">Delete</button>
                        </form>
                    </td>
                    <tr>
                
                
        @endforeach
        </tbody>
        </table>
        </div>


            <div class="container-2xl md:flex flex-1 mt-2 justify-center">
            {{$job->links()}}
            </div>
    </div>
</div>
 





 








@endsection