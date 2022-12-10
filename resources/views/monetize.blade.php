@extends('layouts.master')
@section('title','Monetize | CreativePub')
@section('content')


<div class=" container-2xl p-8 md:flex justify-center items-center mx-auto">
    <p class="font-sans text-register_orange font-bold text-3xl">
        MONETIZE YOUR CONTENT
    </p>
</div>
<div class="container-2xl md:flex flex-1 p-6 gap-10 justify-center">
    <div class="container-2xl w-4/12 bg-content_box rounded-lg p-5">
        <div class="container-2xl md:flex flex-1 gap-2 py-3 border-b border-amber-200">
            <img class="rounded-full object-cover float-left w-12 h-12" src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="">
            <div class="contaienr-2xl gap-2">
                <p class="font-sans text-xl font-bold text-white"> {{Auth::user()->name}}</p>
                <p class="font-sans text-xs font-light text-white"> {{Auth::user()->penggunaProfession}}</p>
            </div>
        </div>
        <div class="container-2xl md:flex flex-1 pt-4">
            <div class="container-2xl md:flex flex-1 justify-start">
                <p class="font-sans text-gray_font">
                    Content
                </p>
            </div>
            <div class="container-2xl md:flex flex-1 justify-end">
                <p class="font-sans text-gray_font">
                    {{$countCollection}} x Rp {{$basicMonetize}}
                </p>
            </div>    
        </div>
        <div class="container-2xl md:flex flex-1 pt-4">
            <div class="container-2xl md:flex flex-1 justify-start">
                <p class="font-sans text-gray_font">
                    Tax (10%)
                </p>
            </div>
            <div class="container-2xl md:flex flex-1 justify-end">
                <p class="font-sans text-gray_font">
                    Rp {{$taxMonetize}}
                </p>
            </div>    
        </div>
        <div class="container-2xl md:flex flex-1 pt-4">
            <div class="container-2xl md:flex flex-1 justify-start">
                <p class="font-sans text-white font-bold">
                    Total
                </p>
            </div>
            <div class="container-2xl md:flex flex-1 justify-end">
                <p class="font-sans text-white font-bold">
                    Rp {{$totalMonetize}}
                </p>
            </div>    
        </div>
        <div class="container-2xl py-3">
            <form id="monetizeForm" method="POST" action="/withdraw_monetize">
                @csrf
                <input type="hidden" id="token" value="{{ @csrf_token() }}">
                <input type="hidden" id="amountMonetize" name="amountMonetize" value="{{$totalMonetize}}">
                <button type="submit" class="bg-register_orange rounded-lg w-full h-10 text-white text-base font-bold" data-modal-toggle="monetizeModal">Withdraw</button>
            </form>
        </div>
    </div>
</div>

<div id="monetizeModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full ">
            <div class="relative container md:flex justify-center flex-1 p-4 w-full max-w-2xl h-full md:h-auto ">
                <div class="container-2xl py-16 px-36 items-center bg-zinc-800 rounded-lg">
                    
                        <div class="container-2xl md:flex flex-1 justify-center py-3">
                            <svg width="84" height="84" viewBox="0 0 84 84" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M61.1247 23.5833L33.6663 51.0416L18.708 36.125L12.833 42L33.6663 62.8333L66.9997 29.5L61.1247 23.5833ZM41.9997 0.333313C18.9997 0.333313 0.333008 19 0.333008 42C0.333008 65 18.9997 83.6667 41.9997 83.6667C64.9997 83.6667 83.6664 65 83.6664 42C83.6664 19 64.9997 0.333313 41.9997 0.333313ZM41.9997 75.3333C23.583 75.3333 8.66634 60.4167 8.66634 42C8.66634 23.5833 23.583 8.66665 41.9997 8.66665C60.4163 8.66665 75.333 23.5833 75.333 42C75.333 60.4167 60.4163 75.3333 41.9997 75.3333Z" fill="#FF8A00"/>
                            </svg>

                        </div>
                        
                        <p class="font-sans font-normal text-white text-lg text-center">
                            Monetize request successfully sent!
                        </p>
                        <p class="font-sans font-normal text-white text-lg text-center">
                            Please check your bank account periodically!
                        </p>
                        <div class="container-2xl md:flex flex-1 justify-center">
                            <a href="/">
                                <button class="bg-register_orange hover:bg-orange-700 w-28 text-white rounded-md p-2 text-base font-sans mt-10" data-modal-toggle="monetizeModal">Done</button>  
                            </a>
                        </div>

                  
                </div>
                
            </div>
</div>

<script>
    $(document).ready(function(){
        $("#monetizeForm").submit(function(e){
            e.preventDefault();
            let url = $(this).attr('action');

            $.post(url, {
                '_token': $("#token").val(),
                amountMonetize: $("#amountMonetize").val()
            }, function(response){
                
            });
            
        })
    })
</script>

@endsection