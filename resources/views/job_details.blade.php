@extends('layouts.master')
@section('title','Job Details | Creative Pub')
@section('content')

<div class="container-2xl bg-zinc-700">
    <div class="container-2xl md:flex flex-1 bg-zinc-700 mx-32 border-amber-200 border-b">
        <div class="container-2xl mt-6 mb-3 w-10/12">
            <p class="font-sans text-xs font-light text-white">Posted <strong class="font-sans text-xs font-bold text-white"> 9 mins ago</strong> </p>
            <p class="text-orange-500 text-lg font-sans font-bold"> Photo retouch for social media(instagram)</p>
            <div class="container-2xl md:flex flex-1 mt-5">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2L6.5 11H17.5L12 2Z" fill="#FFF3CD"/>
                    <path d="M17.5 22C19.9853 22 22 19.9853 22 17.5C22 15.0147 19.9853 13 17.5 13C15.0147 13 13 15.0147 13 17.5C13 19.9853 15.0147 22 17.5 22Z" fill="#FFF3CD"/>
                    <path d="M3 13.5H11V21.5H3V13.5Z" fill="#FFF3CD"/>
                </svg>
                <button class="bg-zinc-400 font-sans text-xs text-white rounded-md mx-2 p-1"> Images </button>
                <svg class="items-center" width="20" height="20" viewBox="0 -2 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.0007 3.33301L8.82565 4.50801L13.4756 9.16634H3.33398V10.833H13.4756L8.82565 15.4913L10.0007 16.6663L16.6673 9.99967L10.0007 3.33301Z" fill="#E67C00"/>
                </svg>
                <button class="bg-zinc-400 font-sans text-xs text-white rounded-md mx-2 p-1"> Graphic Design </button>
            </div>
        </div>
        <div class="container-2xl mt-6 w-2/12">
            <div class="container-2xl md:flex flex-1 justify-center">
                <p class="font-sans text-sm text-white">Send before <strong class="font-sans text-sm font-bold text-white"> Aug, 17 2022</strong> </p>
            </div>
            <div class="container-2xl md:flex flex-1 justify-center">
                <button class="bg-teal-700 font-sans text-sm text-white w-28 rounded-md my-2 p-1 font-medium"> Get Job </button>
            </div>
            <div class="container-2xl md:flex flex-1 mt-1 justify-center">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 16.08C17.24 16.08 16.56 16.38 16.04 16.85L8.91 12.7C8.96 12.47 9 12.24 9 12C9 11.76 8.96 11.53 8.91 11.3L15.96 7.19C16.5 7.69 17.21 8 18 8C19.66 8 21 6.66 21 5C21 3.34 19.66 2 18 2C16.34 2 15 3.34 15 5C15 5.24 15.04 5.47 15.09 5.7L8.04 9.81C7.5 9.31 6.79 9 6 9C4.34 9 3 10.34 3 12C3 13.66 4.34 15 6 15C6.79 15 7.5 14.69 8.04 14.19L15.16 18.35C15.11 18.56 15.08 18.78 15.08 19C15.08 20.61 16.39 21.92 18 21.92C19.61 21.92 20.92 20.61 20.92 19C20.92 17.39 19.61 16.08 18 16.08Z" fill="#FF8A00"/>
                </svg>
                <p class="font-sans text-sm ml-1 text-white">Share This Job</p>
            </div>
        </div>
    </div>
    <div class="container-2xl md:flex flex-1 bg-zinc-700 mx-32">
        <div class="container-2xl mt-6 mr-6 w-9/12">
            <p class="text-white text-sm font-sans">
                We build custom wall beds and cabinetry and take many photos.  Unfortunately, we don't always have ideal space or lighting for really professional photos. We would like them to be retouched and sized for social media accounts and portfolio pages on our website. We build custom wall beds and cabinetry and take many photos.  Unfortunately, we don't always have ideal space or lighting for really professional photos. We would like them to be retouched and sized for social media accounts and portfolio pages on our website. We build custom wall beds and cabinetry and take many photos.  Unfortunately, we don't always have ideal space or lighting for really professional photos. We would like them to be retouched and sized for social media accounts and portfolio pages on our website. We build custom wall beds and cabinetry and take many photos.  Unfortunately, we don't always have ideal space or lighting for really professional photos. We would like them to be retouched and sized for social media accounts and portfolio pages on our website. We build custom wall beds and cabinetry and take many photos.  Unfortunately, we don't always have ideal space or lighting for really professional photos. We would like them to be retouched and sized for social media accounts and portfolio pages on our website. 
            </p>
        </div>
        <div class="container-2xl w-3/12 mt-6">
            <div class="container-2xl py-1 md:flex flex-1 rounded-t-md bg-amber-200 justify-center">
                    <p class="font-sans text-md text-black">Posted by</p>     
            </div>
            <div class="container-2xl pt-3 pb-2 border border-amber-200">
                <div class="container-2xl  md:flex flex-1 mx-8 justify-start ">
                    <img class="ml-4 rounded-full object-cover w-14 h-14" src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="">
                    <div class="container-2xl ml-3">
                        <p class="font-sans font-bold text-white text-lg">Gulali Ayam</p>
                        <p class="font-sans font-light text-white text-xs">Cilacap</p>
                    </div>
                </div>
                <div class="container-2xl md:flex flex-1 border-t mt-2 mx-8 py-1 border-b border-amber-200">
                    <p class="font-sans font-light text-white text-xs">Total spent</p>
                    <div class="container-2xl md:flex flex-1 justify-end">
                        <p class="font-sans font-bold text-white text-xs">$100</p>
                    </div>
                </div>
                <div class="container-2xl md:flex flex-1 mx-8 py-1 border-b border-amber-200">
                    <p class="font-sans font-light text-white text-xs">Jobs posted</p>
                    <div class="container-2xl md:flex flex-1 justify-end">
                        <p class="font-sans font-bold text-white text-xs">10</p>
                    </div>
                </div>
                <div class="container-2xl md:flex flex-1 mx-8 py-1 border-b border-amber-200">
                    <p class="font-sans font-light text-white text-xs">Jobs paid</p>
                    <div class="container-2xl md:flex flex-1 justify-end">
                        <p class="font-sans font-bold text-white text-xs">9</p>
                    </div>
                </div>
                <div class="container-2xl md:flex flex-1 mx-8 py-1 ">
                    <p class="font-sans font-light text-white text-xs">Feedback</p>
                    <div class="container-2xl md:flex flex-1 justify-end">
                        <p class="font-sans font-bold text-white text-xs">15</p>
                    </div>
                </div>
            </div>
        </div>  
    </div>

    <div class="container-2xl bg-zinc-700 mx-32 mb-5 w-7/12">
        <div class="container-2xl py-1 md:flex flex-1 rounded-t-md bg-amber-200 justify-center">
            <p class="font-sans text-md text-black">More Jobs From Gulali Ayam</p>     
        </div>
        <div class="container-2xl border border-amber-200">
            <div class="container-2xl mx-5 mt-6 md:flex flex-1 border-b border-amber-200 pb-2">
                <div class="container-2xl">
                    <p class="font-sans text-xs font-light text-white">Posted <strong class="font-sans text-xs font-bold text-white"> 9 mins ago</strong> </p>
                    <p class="text-orange-500 text-md font-sans font-bold"> Photo editing</p>
                </div>
                <div class="container-2xl md:flex flex-1 justify-end">
                    <div class="container-2xl">
                        <div class="container-2xl md:flex flex-1 justify-center">
                            <p class="font-sans text-xs text-white">Send before <strong class="font-sans text-xs font-bold text-white"> Aug, 17 2022</strong> </p>
                        </div>
                        <div class="container-2xl md:flex flex-1 justify-center">
                            <button class="bg-teal-700 font-sans text-xs text-white w-20 rounded-md my-2 p-1 font-medium"> Get Job </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-2xl mx-5 mt-6 md:flex flex-1 border-b border-amber-200 pb-2">
                <div class="container-2xl">
                    <p class="font-sans text-xs font-light text-white">Posted <strong class="font-sans text-xs font-bold text-white"> 9 mins ago</strong> </p>
                    <p class="text-orange-500 text-md font-sans font-bold"> Photo editing</p>
                </div>
                <div class="container-2xl md:flex flex-1 justify-end">
                    <div class="container-2xl">
                        <div class="container-2xl md:flex flex-1 justify-center">
                            <p class="font-sans text-xs text-white">Send before <strong class="font-sans text-xs font-bold text-white"> Aug, 17 2022</strong> </p>
                        </div>
                        <div class="container-2xl md:flex flex-1 justify-center">
                            <button class="bg-teal-700 font-sans text-xs text-white w-20 rounded-md my-2 p-1 font-medium"> Get Job </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-2xl mx-5 mt-6 md:flex flex-1 pb-2">
                <div class="container-2xl">
                    <p class="font-sans text-xs font-light text-white">Posted <strong class="font-sans text-xs font-bold text-white"> 9 mins ago</strong> </p>
                    <p class="text-orange-500 text-md font-sans font-bold"> Photo editing</p>
                </div>
                <div class="container-2xl md:flex flex-1 justify-end">
                    <div class="container-2xl">
                        <div class="container-2xl md:flex flex-1 justify-center">
                            <p class="font-sans text-xs text-white">Send before <strong class="font-sans text-xs font-bold text-white"> Aug, 17 2022</strong> </p>
                        </div>
                        <div class="container-2xl md:flex flex-1 justify-center">
                            <button class="bg-teal-700 font-sans text-xs text-white w-20 rounded-md my-2 p-1 font-medium"> Get Job </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-2xl bg-zinc-700 mx-32 mb-5 w-7/12">
        <div class="container-2xl py-1 md:flex flex-1 rounded-t-md bg-amber-200 justify-center">
            <p class="font-sans text-md text-black">Similar Jobs</p>     
        </div>
        <div class="container-2xl border border-amber-200">
            <div class="container-2xl mx-5 mt-6 md:flex flex-1 border-b border-amber-200 pb-2">
                <div class="container-2xl">
                    <p class="font-sans text-xs font-light text-white">Posted <strong class="font-sans text-xs font-bold text-white"> 9 mins ago</strong> </p>
                    <p class="text-orange-500 text-md font-sans font-bold"> Photo editing</p>
                </div>
                <div class="container-2xl md:flex flex-1 justify-end">
                    <div class="container-2xl">
                        <div class="container-2xl md:flex flex-1 justify-center">
                            <p class="font-sans text-xs text-white">Send before <strong class="font-sans text-xs font-bold text-white"> Aug, 17 2022</strong> </p>
                        </div>
                        <div class="container-2xl md:flex flex-1 justify-center">
                            <button class="bg-teal-700 font-sans text-xs text-white w-20 rounded-md my-2 p-1 font-medium"> Get Job </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-2xl mx-5 mt-6 md:flex flex-1 border-b border-amber-200 pb-2">
                <div class="container-2xl">
                    <p class="font-sans text-xs font-light text-white">Posted <strong class="font-sans text-xs font-bold text-white"> 9 mins ago</strong> </p>
                    <p class="text-orange-500 text-md font-sans font-bold"> Photo editing</p>
                </div>
                <div class="container-2xl md:flex flex-1 justify-end">
                    <div class="container-2xl">
                        <div class="container-2xl md:flex flex-1 justify-center">
                            <p class="font-sans text-xs text-white">Send before <strong class="font-sans text-xs font-bold text-white"> Aug, 17 2022</strong> </p>
                        </div>
                        <div class="container-2xl md:flex flex-1 justify-center">
                            <button class="bg-teal-700 font-sans text-xs text-white w-20 rounded-md my-2 p-1 font-medium"> Get Job </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-2xl mx-5 mt-6 md:flex flex-1 pb-2">
                <div class="container-2xl">
                    <p class="font-sans text-xs font-light text-white">Posted <strong class="font-sans text-xs font-bold text-white"> 9 mins ago</strong> </p>
                    <p class="text-orange-500 text-md font-sans font-bold"> Photo editing</p>
                </div>
                <div class="container-2xl md:flex flex-1 justify-end">
                    <div class="container-2xl">
                        <div class="container-2xl md:flex flex-1 justify-center">
                            <p class="font-sans text-xs text-white">Send before <strong class="font-sans text-xs font-bold text-white"> Aug, 17 2022</strong> </p>
                        </div>
                        <div class="container-2xl md:flex flex-1 justify-center">
                            <button class="bg-teal-700 font-sans text-xs text-white w-20 rounded-md my-2 p-1 font-medium"> Get Job </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

@endsection