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
<div class=" container-2xl p-8 md:flex justify-center items-center mx-auto">
    <p class="font-sans text-register_orange font-bold text-3xl">
        BE A PREMIUM MEMBER
    </p>
</div>
<div class="container-2xl md:flex flex-1 p-6 gap-10 justify-center">
    <div class="container-2xl bg-content_box w-5/12 px-7 rounded-lg ">
        <div class="container-2xl md:flex flex-1 justify-end gap-6 py-3 border-amber-200 border-b">
            <p class="font-sans text-white font-bold text-lg">
                FREE
            </p>
            <p class="font-sans text-white font-bold text-lg">
                PREMIUM
            </p>
        </div>
        
        <div class="container-2xl md:flex flex-1 pr-7 pl-4 py-5">
            <div class="container-2xl md:flex flex-1 justify-start">
                <p class="font-sans text-white font-medium text-base">Premium Collection</p>
            </div>
            <div class="container-2xl md:flex flexx-1 justify-end gap-12">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M23.6663 2.68337L21.3163 0.333374L11.9997 9.65004L2.68301 0.333374L0.333008 2.68337L9.64968 12L0.333008 21.3167L2.68301 23.6667L11.9997 14.35L21.3163 23.6667L23.6663 21.3167L14.3497 12L23.6663 2.68337Z" fill="#FF8A00"/>
                </svg>
                <svg width="30" height="23" viewBox="0 0 30 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.0003 17.95L3.05026 11L0.683594 13.35L10.0003 22.6667L30.0003 2.66665L27.6503 0.31665L10.0003 17.95Z" fill="#FF8A00"/>
                </svg>
            </div>
        </div>
        <div class="container-2xl md:flex flex-1 pr-7 pl-4 py-5">
            <div class="container-2xl md:flex flex-1 justify-start">
                <p class="font-sans text-white font-medium text-base">Unlimited Downloads</p>
            </div>
            <div class="container-2xl md:flex flexx-1 justify-end gap-12">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M23.6663 2.68337L21.3163 0.333374L11.9997 9.65004L2.68301 0.333374L0.333008 2.68337L9.64968 12L0.333008 21.3167L2.68301 23.6667L11.9997 14.35L21.3163 23.6667L23.6663 21.3167L14.3497 12L23.6663 2.68337Z" fill="#FF8A00"/>
                </svg>
                <svg width="30" height="23" viewBox="0 0 30 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.0003 17.95L3.05026 11L0.683594 13.35L10.0003 22.6667L30.0003 2.66665L27.6503 0.31665L10.0003 17.95Z" fill="#FF8A00"/>
                </svg>
            </div>
        </div>
        <div class="container-2xl md:flex flex-1 pr-7 pl-4 py-5">
            <div class="container-2xl md:flex flex-1 justify-start">
                <p class="font-sans text-white font-medium text-base">No Ads</p>
            </div>
            <div class="container-2xl md:flex flexx-1 justify-end gap-12">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M23.6663 2.68337L21.3163 0.333374L11.9997 9.65004L2.68301 0.333374L0.333008 2.68337L9.64968 12L0.333008 21.3167L2.68301 23.6667L11.9997 14.35L21.3163 23.6667L23.6663 21.3167L14.3497 12L23.6663 2.68337Z" fill="#FF8A00"/>
                </svg>
                <svg width="30" height="23" viewBox="0 0 30 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.0003 17.95L3.05026 11L0.683594 13.35L10.0003 22.6667L30.0003 2.66665L27.6503 0.31665L10.0003 17.95Z" fill="#FF8A00"/>
                </svg>
            </div>
        </div>
    </div>
    <div class="container-2xl bg-content_box w-5/12 px-7 rounded-lg">
        <div class="container-2xl md:flex flex-1 pt-8 px-8 items-center">
            <div class="container-2xl md:flex flex-1 justify-start">
                <div class="container-2xl">
                    <p class="font-sans font-semibold text-xl text-white">1 YEAR</p>
                    <p class="font-sans text-base text-white"> <strong class="font-sans text-lg font-bold text-register_orange"> $100 </strong> / month</p>
                    <p class="font-sans text-xs text-white"> <strong class="font-sans text-xs font-bold text-register_orange"> * </strong> includes tax</p>
                </div>
            </div>
            <div class="container-2xl md:flex flex-1 justify-end">
                <a href="/payment" class="w-full md:flex flex-1 container-2xl justify-end">
                    <button class="bg-register_orange rounded-lg w-4/6 h-10 text-white text-base font-medium">Premium Now</button>
                </a>               
            </div>
        </div>
        <div class="container-2xl md:flex flex-1 pt-8 px-8 items-center">
            <div class="container-2xl md:flex flex-1 justify-start">
                <div class="container-2xl">
                    <p class="font-sans font-semibold text-xl text-white">6 MONTHS</p>
                    <p class="font-sans text-base text-white"> <strong class="font-sans text-lg font-bold text-register_orange"> $50 </strong> / month</p>
                    <p class="font-sans text-xs text-white"> <strong class="font-sans text-xs font-bold text-register_orange"> * </strong> includes tax</p>
                </div>
            </div>
            <div class="container-2xl md:flex flex-1 justify-end">
                <a href="/payment" class="w-full md:flex flex-1 container-2xl justify-end">
                    <button class="bg-register_orange rounded-lg w-4/6 h-10 text-white text-base font-medium">Premium Now</button>
                </a>            
            </div>
        </div>
        <div class="container-2xl md:flex flex-1 py-8 px-8 items-center">
            <div class="container-2xl md:flex flex-1 justify-start">
                <div class="container-2xl">
                    <p class="font-sans font-semibold text-xl text-white">1 MONTH</p>
                    <p class="font-sans text-base text-white"> <strong class="font-sans text-lg font-bold text-register_orange"> $10 </strong> / month</p>
                    <p class="font-sans text-xs text-white"> <strong class="font-sans text-xs font-bold text-register_orange"> * </strong> includes tax</p>
                </div>
            </div>
            <div class="container-2xl md:flex flex-1 justify-end">
                <a href="/payment" class="w-full md:flex flex-1 container-2xl justify-end">
                    <button class="bg-register_orange rounded-lg w-4/6 h-10 text-white text-base font-medium">Premium Now</button>
                </a>
            </div>
        </div>
    </div>
</div>



@endsection