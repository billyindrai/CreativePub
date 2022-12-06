@extends('layouts.master')
@section('title','CreativePub')
@section('content')





<div class=" container-2xl p-8 md:flex justify-center items-center mx-auto">
    <p class="font-sans text-register_orange font-bold text-3xl">
        BE A PREMIUM MEMBER
    </p>
</div>

<form method="POST" id="paymentForm" action="/pay_premium" enctype="multipart/form-data">
    @csrf
    <div class="container-2xl md:flex flex-1 p-6 gap-10 justify-center">
        <div class="container-2xl bg-content_box w-3/12 px-7 rounded-lg ">
            <div class="container-2xl md:flex flex-1 justify-center gap-6 py-3 border-amber-200 border-b">
                <p class="font-sans text-white font-bold text-lg">
                    Checkout to start your free trial
                </p>
            </div>
            <div class="container-2xl md:flex flex-1 w-full justify-center">
                <div class="container-2xl gap-3 py-3 w-full px-4">
                    <p class="font-sans text-white font-medium">
                        Name
                    </p>
                    <input name="namaBilling" class=" bg-white rounded-lg w-full h-10 mt-2" type="text" required>
                </div>
            </div>
            <div class="container-2xl md:flex flex-1 w-full justify-center">
                <div class="container-2xl gap-3 py-3 w-full px-4">
                    <p class="font-sans text-white font-medium">
                        Company Name
                    </p>
                    <input name="companyBilling" class=" bg-white rounded-lg w-full h-10 mt-2" type="text">
                </div>
            </div>
            <div class="container-2xl md:flex flex-1 w-full justify-center">
                <div class="container-2xl gap-3 py-3 w-full px-4">
                    <p class="font-sans text-white font-medium">
                        Country
                    </p>
                    <select form="paymentForm" name="countryBilling" class="bg-white rounded-lg w-full h-10 mt-2" name="category" id="category" required>
                        <option value="image">Indonesia</option>
                        <option value="video">Other</option>
                    </select>
                </div>
            </div>
            <div class="container-2xl md:flex flex-1 w-full justify-center">
                <div class="container-2xl gap-3 py-3 w-full px-4">
                    <p class="font-sans text-white font-medium">
                        Address
                    </p>
                    <textarea id="addressPayment" name="addressPayment" class="bg-white rounded-lg w-full h-32 mt-2" form="paymentForm" required></textarea>
                </div>
            </div>
            <div class="container-2xl gap-3 py-3 w-full px-4">
                    <p class="font-sans text-white font-medium">
                        City
                    </p>
                    <input name="cityBilling" class=" bg-white rounded-lg w-full h-10 mt-2" type="text" required>
            </div>
            <div class="container-2xl gap-3 py-3 w-full px-4">
                    <p class="font-sans text-white font-medium">
                        Province / Region
                    </p>
                    <select class="bg-white rounded-lg w-full h-10 mt-2" name="regionBilling" form="paymentForm"  id="regionBilling" required>
                                <option value="ACEH">
                                    ACEH
                                </option>
                                <option value="SUMATERA UTARA">
                                    SUMATERA UTARA
                                </option>
                                <option value="SUMATERA BARAT">
                                    SUMATERA BARAT
                                </option>
                                <option value="RIAU">
                                    RIAU
                                </option>
                                <option value="JAMBI">
                                    JAMBI
                                </option>
                                <option value="SUMATERA SELATAN">
                                    SUMATERA SELATAN
                                </option>
                                <option value="BENGKULU">
                                    BENGKULU
                                </option>
                                <option value="LAMPUNG">
                                    LAMPUNG
                                </option>
                                <option value="KEPULAUAN BANGKA BELITUNG">
                                    KEPULAUAN BANGKA BELITUNG
                                </option>
                                <option value="KEPULAUAN RIAU">
                                    KEPULAUAN RIAU
                                </option>
                                <option value="DKI JAKARTA">
                                    DKI JAKARTA
                                </option>
                                <option value="JAWA BARAT">
                                    JAWA BARAT
                                </option>
                                <option value="JAWA TENGAH">
                                    JAWA TENGAH
                                </option>
                                <option value="DI YOGYAKARTA">
                                    DI YOGYAKARTA
                                </option>
                                <option value="JAWA TIMUR">
                                    JAWA TIMUR
                                </option>
                                <option value="BANTEN">
                                    BANTEN
                                </option>
                                <option value="BALI">
                                    BALI
                                </option>
                                <option value="NUSA TENGGARA BARAT">
                                    NUSA TENGGARA BARAT
                                </option>
                                <option value="NUSA TENGGARA TIMUR">
                                    NUSA TENGGARA TIMUR
                                </option>
                                <option value="KALIMANTAN BARAT">
                                    KALIMANTAN BARAT
                                </option>
                                <option value="KALIMANTAN TENGAH">
                                    KALIMANTAN TENGAH
                                </option>
                                <option value="KALIMANTAN SELATAN">
                                    KALIMANTAN SELATAN
                                </option>
                                <option value="KALIMANTAN TIMUR">
                                    KALIMANTAN TIMUR
                                </option>
                                <option value="SULAWESI UTARA">
                                    SULAWESI UTARA
                                </option>
                                <option value="SULAWESI SELATAN">
                                    SULAWESI SELATAN
                                </option>
                                <option value="SULAWESI TENGGARA">
                                    SULAWESI TENGGARA
                                </option>
                                <option value="GORONTALO">
                                    GORONTALO
                                </option>
                                <option value="SULAWESI BARAT">
                                    SULAWESI BARAT
                                </option>
                                <option value="MALUKU">
                                    MALUKU
                                </option>
                                <option value="MALUKU UTARA">
                                    MALUKU UTARA
                                </option>
                                <option value="PAPUA">
                                    PAPUA
                                </option>
                                <option value="PAPUA BARAT">
                                    PAPUA BARAT
                                </option>
                                <option value="SULAWESI TENGAH">
                                    SULAWESI TENGAH
                                </option>
                                <option value="KALIMANTAN UTARA">
                                    KALIMANTAN UTARA
                                </option>
                    </select>
            </div>
            <div class="container-2xl md:flex flex-1 w-full justify-center">
                <div class="container-2xl gap-3 pt-3 pb-5 w-full px-4">
                    <p class="font-sans text-white font-medium">
                        Post Code / Zip
                    </p>
                    <input name="postalBilling" class=" bg-white rounded-lg w-full h-10 mt-2" type="text">
                </div>
            </div>
        </div>
        <div class="container-2xl bg-content_box w-3/12 px-7 rounded-lg">
            <div class="container-2xl md:flex flex-1 justify-start border-b border-amber-200">
                <p class="font-sans text-white font-bold text-lg py-3">
                    Order Premium Member
                </p>
            </div>
            <div class="container-2xl pt-3 pb-3 border-b border-amber-200">
                <p class="font-sans font-medium text-white ">
                    Select your choice
                </p>
                <div class="container-2xl md:flex flex-1 justify-start items-center gap-6 py-4">
                    <input checked id="default-radio-1" type="radio" value="480000" name="radio" class="w-6 h-6 text-blue-600 bg-transparent border-white focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="default-radio-1" >
                        <div class="container-2xl">
                            <p class="font-sans font-semibold text-lg text-white">1 YEAR</p>
                            <p class="font-sans text-base text-white"> <strong class="font-sans text-base font-bold text-register_orange"> RP40.000 </strong> / month</p>
                            <p class="font-sans text-xs text-white"> <strong class="font-sans text-xs font-bold text-register_orange"> * </strong> includes tax</p>
                        </div>
                    </label>
                </div>
                <div class="container-2xl md:flex flex-1 justify-start items-center gap-6 py-4">
                    <input id="default-radio-2" type="radio" value="300000" name="radio" class="w-6 h-6 text-blue-600 bg-transparent border-white focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="default-radio-2" >
                        <div class="container-2xl">
                            <p class="font-sans font-semibold text-lg text-white">6 MONTHS</p>
                            <p class="font-sans text-base text-white"> <strong class="font-sans text-base font-bold text-register_orange"> RP50.000 </strong> / month</p>
                            <p class="font-sans text-xs text-white"> <strong class="font-sans text-xs font-bold text-register_orange"> * </strong> includes tax</p>
                        </div>
                    </label>
                </div>
                <div class="container-2xl md:flex flex-1 justify-start items-center gap-6 py-4">
                    <input id="default-radio-3" type="radio" value="70000" name="radio" class="w-6 h-6 text-blue-600 bg-transparent border-white focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="default-radio-3" >
                        <div class="container-2xl">
                            <p class="font-sans font-semibold text-lg text-white">1 MONTH</p>
                            <p class="font-sans text-base text-white"> <strong class="font-sans text-base font-bold text-register_orange"> RP70.000 </strong> / month</p>
                            <p class="font-sans text-xs text-white"> <strong class="font-sans text-xs font-bold text-register_orange"> * </strong> includes tax</p>
                        </div>
                    </label>
                </div>
            </div>
            <!-- <div class="container-2xl pt-3 pb-7 border-b border-amber-200">
                <p class="font-sans font-medium text-white ">
                    Select your payment
                </p>
                <div class="container-2xl md:flex flex-1 justify-start items-center gap-6 py-4">
                    <input id="radio-payment-1" type="radio" value="" name="radio-payment" class="w-6 h-6 text-blue-600 bg-transparent border-white focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="radio-payment-1" >
                        <div class="container-2xl md:flex flex-1 gap-4 items-center">
                            <img class="w-8 h-8" src="https://cdn.discordapp.com/attachments/752542767128772668/989799464501936158/gopay.png" alt="">
                            <p class="font-sans font-medium text-white ">
                                Gopay
                            </p>
                        </div>
                    </label>
                </div>
                <div class="container-2xl md:flex flex-1 justify-start items-center gap-6 py-4">
                    <input id="radio-payment-2" type="radio" value="" name="radio-payment" class="w-6 h-6 text-blue-600 bg-transparent border-white focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="radio-payment-2" >
                        <div class="container-2xl md:flex flex-1 gap-4 items-center">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/7/72/Logo_dana_blue.svg" alt="">
                            <p class="font-sans font-medium text-white ">
                                Dana
                            </p>
                        </div>
                    </label>
                </div>
                <div class="container-2xl md:flex flex-1 justify-start items-center gap-6 pt-4">
                    <input id="radio-payment-3" type="radio" value="" name="radio-payment" class="w-6 h-6 text-blue-600 bg-transparent border-white focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="radio-payment-3" >
                        <div class="container-2xl md:flex flex-1 gap-4 items-center">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/e/eb/Logo_ovo_purple.svg" alt="">
                            <p class="font-sans font-medium text-white ">
                                OVO
                            </p>
                        </div>
                    </label>
                </div>
            </div> -->
            <!-- <div class="container-2xl pt-3 pb-3 border-b border-amber-200">
                <div class="container-2xl md:flex flex-1 py-2">
                    <div class="container-2xl md:flex flex-1 justify-start">
                        <p class="font-sans text-white font-normal">
                            Price
                        </p>
                    </div>
                    <div class="container-2xl md:flex flex-1 justify-end">
                        <p class="font-sans text-white font-normal">
                            Rp 50.000/month
                        </p>
                    </div>
                </div>
                <div class="container-2xl md:flex flex-1 py-2">
                    <div class="container-2xl md:flex flex-1 justify-start">
                        <p class="font-sans text-white font-normal">
                            Tax
                        </p>
                    </div>
                    <div class="container-2xl md:flex flex-1 justify-end">
                        <p class="font-sans text-white font-normal">
                            Rp 0/month
                        </p>
                    </div>
                </div>
                <div class="container-2xl md:flex flex-1 py-2">
                    <div class="container-2xl md:flex flex-1 justify-start">
                        <p class="font-sans text-white font-bold">
                            Total
                        </p>
                    </div>
                    <div class="container-2xl md:flex flex-1 justify-end">
                        <p class="font-sans text-white font-bold">
                            Rp 50.000/month
                        </p>
                    </div>
                </div>  
            </div> -->
            <div class="container-2xl py-3 md:flex flex-1 items-center gap-3">
                <input type="checkbox" class="bg-transparent default:ring-2 w-4 h-4">
                    <p class="font-sans text-lg text-white">
                        I Agree to the <strong class="font-sans text-lg font-bold text-register_orange">Licence Terms </strong>and <strong class="font-sans text-lg font-bold text-register_orange">User Terms </strong>
                    </p>
            </div>
            <div class="container-2xl py-3">
                <button type="submit" id="pay-button" class="bg-register_orange rounded-lg w-full h-10 text-white text-base font-medium" data-modal-toggle="paymentConfirmationModal">Complete Order</button>
            </div>
        </div>
        
    </div>
</form>

<!-- <div id="paymentConfirmationModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full ">
            <div class="relative container md:flex justify-center flex-1 p-4 w-full max-w-2xl h-full md:h-auto ">
                <div class="container-2xl py-16 px-36 items-center bg-zinc-800 rounded-lg">
                    
                        <div class="container-2xl md:flex flex-1 justify-center py-3">
                            <svg width="84" height="84" viewBox="0 0 84 84" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M61.1247 23.5833L33.6663 51.0416L18.708 36.125L12.833 42L33.6663 62.8333L66.9997 29.5L61.1247 23.5833ZM41.9997 0.333313C18.9997 0.333313 0.333008 19 0.333008 42C0.333008 65 18.9997 83.6667 41.9997 83.6667C64.9997 83.6667 83.6664 65 83.6664 42C83.6664 19 64.9997 0.333313 41.9997 0.333313ZM41.9997 75.3333C23.583 75.3333 8.66634 60.4167 8.66634 42C8.66634 23.5833 23.583 8.66665 41.9997 8.66665C60.4163 8.66665 75.333 23.5833 75.333 42C75.333 60.4167 60.4163 75.3333 41.9997 75.3333Z" fill="#FF8A00"/>
                            </svg>

                        </div>
                        
                        <p class="font-sans font-normal text-white text-lg text-center">
                            Transaction Successfull
                        </p>
                        <p class="font-sans font-normal text-white text-lg text-center">
                            You're now a premium member!
                        </p>
                        <div class="container-2xl md:flex flex-1 justify-center">
                            <button class="bg-register_orange hover:bg-orange-700 w-28 text-white rounded-md p-2 text-base font-sans mt-10" data-modal-toggle="paymentConfirmationModal">Done</button>  
                        </div>

                  
                </div>
                
            </div>
</div> -->



@endsection