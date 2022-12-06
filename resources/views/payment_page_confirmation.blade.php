@extends('layouts.master')
@section('title','CreativePub')
@section('content')





<div class=" container-2xl p-8 md:flex justify-center items-center mx-auto">
    <p class="font-sans text-register_orange font-bold text-3xl">
        CONFIRM YOUR ORDER
    </p>
</div>

    <div class="container-2xl md:flex flex-1 p-6 gap-10 justify-center">
        <div class="container-2xl bg-content_box w-3/12 px-7 rounded-lg ">
            <div class="container-2xl md:flex flex-1 justify-center gap-6 py-3 border-amber-200 border-b">
                <p class="font-sans text-white font-bold text-lg">
                    Order Details
                </p>
            </div>
            <div class="container-2xl md:flex flex-1 w-full justify-center">
                <div class="container-2xl gap-3 py-3 w-full px-4">
                    <p class="font-sans text-white font-medium">
                        Name: {{$name}}
                    </p>
                </div>
            </div>
            <div class="container-2xl md:flex flex-1 w-full justify-center">
                <div class="container-2xl gap-3 py-3 w-full px-4">
                    <p class="font-sans text-white font-medium">
                        Address: {{$address}}
                    </p>
                </div>
            </div>
        
            <div class="container-2xl md:flex flex-1 w-full justify-center">
                <div class="container-2xl gap-3 py-3 w-full px-4">
                    <p class="font-sans text-white font-medium">
                        Order: {{$order}}
                    </p>
                </div>
            </div>
            <div class="container-2xl md:flex flex-1 w-full justify-center">
                <div class="container-2xl gap-3 py-3 w-full px-4">
                    <p class="font-sans text-white font-medium">
                        Total: Rp {{$total}}
                    </p>
                </div>
            </div>
            <form id="FinishPayment" method="POST" action="/payment_finish">
                @csrf
                <input type="hidden" id="token" value="{{ @csrf_token() }}">
                <input type="hidden" id="order" value="{{ $order }}">
                <button type="submit" id="pay-button" class="bg-register_orange rounded-lg w-full h-10 mb-3 text-white text-base font-medium" data-modal-toggle="paymentConfirmationModal">Confirm Order</button>
            </form>

            
        </div>
        
        
    </div>

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

<?php
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'SB-Mid-server-vg9xdjx-fHJrfLSkEMVxIEAf';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        

            $params = array(
                'transaction_details' => array(
                    'order_id' => rand(),
                    'gross_amount' => $total,
                )
            );

        

        

        $snapToken = \Midtrans\Snap::getSnapToken($params);
?>

<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-IGi6jx4lV3_C1YMX"></script>
    <script type="text/javascript">
      document.getElementById('pay-button').onclick = function(){
        // SnapToken acquired from previous step
        snap.pay('<?=$snapToken?>', {
          // Optional
          onSuccess: function(result){
            /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
          },
          // Optional
          onPending: function(result){
            /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
          },
          // Optional
          onError: function(result){
            /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
          }
        });
      };
</script>

<script>
    $(document).ready(function(){
        $("#FinishPayment").submit(function(e){
            e.preventDefault();
            let url = $(this).attr('action');

            $.post(url, {
                '_token': $("#token").val(),
                order: $("#order").val()
            }, function(response){
                
                
            });
            
        })
    })
</script>

@endsection