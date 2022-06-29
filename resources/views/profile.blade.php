@extends('layouts.master')
@section('title','Profile Page | Creative Pub')
@section('content')

<div class=" container-2xl flex items-center bg-zinc-600 mx-auto">
    <div class=" flex items-center">
        <img class="h-64 w-screen object-cover" src="https://cdn.discordapp.com/attachments/711190437922209833/946664774991753256/unknown.png" alt="">
    </div>
</div>

<div class=" grid grid-cols-6 container-2xl md:flex pl-20 items-start bg-zinc-800 mx-auto pt-5">
    <div class="absolute top-72 float-left col-span-3 w-64 container bg-white opacity-90 rounded-lg shadow-lg p-4">
        <div class="container md:flex flex-1 justify-center pt-3 items-center">
            <img class="rounded-full object-cover w-14 h-14" src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="">
        </div>
        <div class="container md:flex flex-1 gap-2 pt-3 justify-center">
            <div>
                <p class="text-center text-sm font-sans font-bold">200</p>
                <p class="text-center text-sm font-sans font-extralight">content</p>
            </div>
            <div>
                <p class="text-center text-sm font-sans font-bold">123</p>
                <p class="text-center text-sm font-sans font-extralight">followers</p>
            </div>
            <div>
                <p class="text-center text-sm font-sans font-bold">1</p>
                <p class="text-center text-sm font-sans font-extralight">following</p>
            </div>
        </div>
        <div class="container py-3">
            <p class="text-center text-2xl font-sans font-bold">TONO SUCIPTO</p>
            <p class="text-center font-sans text-sm font-light">Digital Artist, Yogyakarta</p>
            <p class="text-center font-sans font-normal text-xs">Ambitious Digital Artist Seeking for Opportunity</p>
        </div>
        <div class="container md:flex flex-1 gap-2 py-2 mb-5 justify-center">
            <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M24.6812 8.1665H9.34782C8.29365 8.1665 7.44074 9.104 7.44074 10.2498L7.43115 22.7498C7.43115 23.8957 8.29365 24.8332 9.34782 24.8332H24.6812C25.7353 24.8332 26.5978 23.8957 26.5978 22.7498V10.2498C26.5978 9.104 25.7353 8.1665 24.6812 8.1665ZM24.6812 22.7498H9.34782V12.3332L17.0145 17.5415L24.6812 12.3332V22.7498ZM17.0145 15.4582L9.34782 10.2498H24.6812L17.0145 15.4582Z" fill="#FF8A00"/>
                <path opacity="0.1" fill-rule="evenodd" clip-rule="evenodd" d="M0.514648 16C0.514648 7.16344 7.67809 0 16.5146 0C25.3512 0 32.5147 7.16344 32.5147 16C32.5147 24.8366 25.3512 32 16.5146 32C7.67809 32 0.514648 24.8366 0.514648 16Z" fill="#0B0D17" fill-opacity="0.7"/>
            </svg>
            <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.1" fill-rule="evenodd" clip-rule="evenodd" d="M0.514648 16C0.514648 7.16344 7.67809 0 16.5146 0C25.3512 0 32.5146 7.16344 32.5146 16C32.5146 24.8366 25.3512 32 16.5146 32C7.67809 32 0.514648 24.8366 0.514648 16Z" fill="#0B0D17" fill-opacity="0.7"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.5156 7.4668C14.198 7.4668 13.9072 7.47693 12.997 7.51835C12.0885 7.55995 11.4684 7.70378 10.9258 7.9148C10.3646 8.13276 9.88849 8.42432 9.41417 8.89881C8.9395 9.37313 8.64794 9.84922 8.42927 10.4103C8.21771 10.9531 8.07371 11.5733 8.03282 12.4814C7.99211 13.3917 7.98145 13.6827 7.98145 16.0002C7.98145 18.3178 7.99176 18.6077 8.033 19.5179C8.07478 20.4264 8.2186 21.0465 8.42945 21.5891C8.64759 22.1503 8.93914 22.6264 9.41364 23.1007C9.88778 23.5754 10.3639 23.8677 10.9248 24.0856C11.4677 24.2967 12.088 24.4405 12.9963 24.4821C13.9065 24.5235 14.1972 24.5336 16.5145 24.5336C18.8322 24.5336 19.1222 24.5235 20.0324 24.4821C20.9409 24.4405 21.5617 24.2967 22.1046 24.0856C22.6657 23.8677 23.1411 23.5754 23.6152 23.1007C24.0899 22.6264 24.3814 22.1503 24.6001 21.5893C24.8099 21.0465 24.9539 20.4262 24.9966 19.5181C25.0374 18.6079 25.0481 18.3178 25.0481 16.0002C25.0481 13.6827 25.0374 13.3918 24.9966 12.4816C24.9539 11.5732 24.8099 10.9531 24.6001 10.4105C24.3814 9.84922 24.0899 9.37313 23.6152 8.89881C23.1405 8.42414 22.6659 8.13258 22.1041 7.9148C21.5601 7.70378 20.9396 7.55995 20.0312 7.51835C19.1209 7.47693 18.8312 7.4668 16.5129 7.4668H16.5156ZM15.75 9.00457C15.9772 9.00421 16.2307 9.00457 16.5155 9.00457C18.794 9.00457 19.064 9.01274 19.9638 9.05363C20.7958 9.09168 21.2473 9.2307 21.5481 9.3475C21.9464 9.50217 22.2303 9.68706 22.5288 9.98573C22.8274 10.2844 23.0123 10.5688 23.1673 10.9671C23.2841 11.2675 23.4233 11.7191 23.4612 12.5511C23.5021 13.4507 23.511 13.7209 23.511 15.9982C23.511 18.2756 23.5021 18.5458 23.4612 19.4454C23.4232 20.2774 23.2841 20.729 23.1673 21.0294C23.0127 21.4276 22.8274 21.7112 22.5288 22.0097C22.2301 22.3084 21.9465 22.4932 21.5481 22.6479C21.2477 22.7652 20.7958 22.9039 19.9638 22.942C19.0642 22.9828 18.794 22.9917 16.5155 22.9917C14.2369 22.9917 13.9669 22.9828 13.0673 22.942C12.2353 22.9036 11.7838 22.7645 11.4828 22.6477C11.0846 22.4931 10.8001 22.3082 10.5014 22.0095C10.2028 21.7108 10.0179 21.4271 9.86285 21.0287C9.74605 20.7282 9.60685 20.2767 9.56898 19.4447C9.52809 18.5451 9.51991 18.2749 9.51991 15.9961C9.51991 13.7173 9.52809 13.4485 9.56898 12.549C9.60703 11.717 9.74605 11.2654 9.86285 10.9646C10.0175 10.5664 10.2028 10.2819 10.5014 9.98324C10.8001 9.68457 11.0846 9.49968 11.4828 9.34466C11.7836 9.22732 12.2353 9.08866 13.0673 9.05043C13.8545 9.01488 14.1596 9.00421 15.75 9.00243V9.00457ZM21.0706 10.4215C20.5053 10.4215 20.0466 10.8796 20.0466 11.4451C20.0466 12.0105 20.5053 12.4691 21.0706 12.4691C21.636 12.4691 22.0946 12.0105 22.0946 11.4451C22.0946 10.8798 21.636 10.4215 21.0706 10.4215ZM16.5156 11.6179C14.0955 11.6179 12.1333 13.5801 12.1333 16.0002C12.1333 18.4203 14.0955 20.3816 16.5156 20.3816C18.9357 20.3816 20.8972 18.4203 20.8972 16.0002C20.8972 13.5801 18.9357 11.6179 16.5156 11.6179ZM16.5156 13.1557C18.0864 13.1557 19.36 14.4292 19.36 16.0002C19.36 17.5711 18.0864 18.8447 16.5156 18.8447C14.9445 18.8447 13.6711 17.5711 13.6711 16.0002C13.6711 14.4292 14.9445 13.1557 16.5156 13.1557Z" fill="#FF8A00"/>
            </svg>
            <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.1" fill-rule="evenodd" clip-rule="evenodd" d="M0.514648 16C0.514648 7.16344 7.67809 0 16.5146 0C25.3512 0 32.5146 7.16344 32.5146 16C32.5146 24.8366 25.3512 32 16.5146 32C7.67809 32 0.514648 24.8366 0.514648 16Z" fill="#0B0D17" fill-opacity="0.7"/>
                <path d="M12.0606 9.8818C12.0371 8.8136 11.2732 8 10.0328 8C8.79239 8 7.98145 8.8136 7.98145 9.8818C7.98145 10.9279 8.76842 11.7649 9.98573 11.7649H10.0089C11.2732 11.7649 12.0606 10.9279 12.0606 9.8818Z" fill="#FF8A00"/>
                <path d="M11.8218 13.252H8.19586V24.1464H11.8218V13.252Z" fill="#FF8A00"/>
                <path d="M20.7235 12.9961C23.1096 12.9961 24.8984 14.5535 24.8984 17.8998L24.8982 24.1464H21.2724V18.3178C21.2724 16.8538 20.7477 15.8548 19.4351 15.8548C18.4334 15.8548 17.8367 16.5283 17.5746 17.1788C17.4788 17.4119 17.4552 17.7367 17.4552 18.0623V24.1467H13.8289C13.8289 24.1467 13.8766 14.2745 13.8289 13.2522H17.4552V14.7953C17.9365 14.0535 18.7984 12.9961 20.7235 12.9961Z" fill="#FF8A00"/>
            </svg>
        </div>
        <div class="border-2 border-r-transparent border-l-transparent border-b-black border-t-black md:flex flex-1 justify-center py-5">
            <button class=" bg-register_orange hover:bg-orange-500 text-white rounded-md p-2 w-64 font-sans">Follow</button>
        </div>
        <div class="border-2 border-r-transparent border-l-transparent border-b-black py-3">
            <p class="text-sm font-sans font-semibold">Quotes</p>
            <p class="text-xs font-sans font-light">Be Better for the Future</p>
        </div>
        <div class="border-2 border-r-transparent border-l-transparent border-b-black py-3">
            <p class="text-sm font-sans font-semibold">Tools Used</p>
            <div class="container mt-2 md:flex">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                    <path d="M2 12.1333C2 8.58633 2 6.81283 2.69029 5.45806C3.29749 4.26637 4.26637 3.29749 5.45806 2.69029C6.81283 2 8.58633 2 12.1333 2H19.8667C23.4137 2 25.1872 2 26.5419 2.69029C27.7336 3.29749 28.7025 4.26637 29.3097 5.45806C30 6.81283 30 8.58633 30 12.1333V19.8667C30 23.4137 30 25.1872 29.3097 26.5419C28.7025 27.7336 27.7336 28.7025 26.5419 29.3097C25.1872 30 23.4137 30 19.8667 30H12.1333C8.58633 30 6.81283 30 5.45806 29.3097C4.26637 28.7025 3.29749 27.7336 2.69029 26.5419C2 25.1872 2 23.4137 2 19.8667V12.1333Z" fill="#00005B" />
                    <path d="M8 21.7957V9.20796C8 9.12233 8.0351 9.0734 8.11701 9.0734C9.32624 9.0734 10.5349 9 11.7445 9C13.7071 9 15.8323 9.68403 16.5772 11.7769C16.7527 12.2907 16.8463 12.8167 16.8463 13.3672C16.8463 14.4192 16.6123 15.2877 16.1442 15.9728C14.8368 17.8864 12.5706 17.8567 10.5392 17.8567V21.7834C10.5551 21.8997 10.4579 21.9547 10.3637 21.9547H8.14042C8.04681 21.9547 8 21.9058 8 21.7957ZM10.5509 11.4344V15.5446C11.3564 15.6048 12.1992 15.6113 12.9731 15.3489C13.8275 15.0977 14.2954 14.3439 14.2954 13.4406C14.3192 12.6709 13.9077 11.9323 13.2072 11.6546C12.4426 11.3305 11.3763 11.3111 10.5509 11.4344Z" fill="#9999FF" />
                    <path d="M18.4325 12.2119H20.4861C20.5993 12.213 20.701 12.2947 20.7309 12.4089C20.8814 12.7582 20.9 13.1795 20.9005 13.5566C21.2527 13.1279 21.6773 12.7708 22.1533 12.5029C22.6638 12.201 23.2425 12.0479 23.8289 12.0598C23.9263 12.0452 24.0124 12.1353 23.9985 12.237V14.6201C23.9985 14.7122 23.9355 14.758 23.8101 14.758C22.9409 14.6953 21.5877 14.91 20.9561 15.6246V21.821C20.9561 21.9392 20.9059 21.9983 20.8054 21.9983H18.6021C18.4939 22.0145 18.3984 21.9127 18.4137 21.8013V15.0731C18.4137 14.1716 18.4324 13.2429 18.3007 12.3498C18.2804 12.2676 18.3556 12.1912 18.4325 12.2119Z" fill="#9999FF" />
                </svg>

                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                    <path d="M2 12.1333C2 8.58633 2 6.81283 2.69029 5.45806C3.29749 4.26637 4.26637 3.29749 5.45806 2.69029C6.81283 2 8.58633 2 12.1333 2H19.8667C23.4137 2 25.1872 2 26.5419 2.69029C27.7336 3.29749 28.7025 4.26637 29.3097 5.45806C30 6.81283 30 8.58633 30 12.1333V19.8667C30 23.4137 30 25.1872 29.3097 26.5419C28.7025 27.7336 27.7336 28.7025 26.5419 29.3097C25.1872 30 23.4137 30 19.8667 30H12.1333C8.58633 30 6.81283 30 5.45806 29.3097C4.26637 28.7025 3.29749 27.7336 2.69029 26.5419C2 25.1872 2 23.4137 2 19.8667V12.1333Z" fill="#00005B" />
                    <path d="M12.9607 19.8809H8.52632L7.62409 22.7658C7.59904 22.873 7.5007 22.9489 7.39372 22.9437H5.14772C5.01964 22.9437 4.97485 22.8712 5.01335 22.7263L8.85264 11.3448C8.89107 11.2263 8.92948 11.0913 8.96786 10.9397C9.01808 10.6761 9.04379 10.4082 9.04465 10.1395C9.03365 10.0601 9.10315 9.99004 9.17902 10.0012H12.2312C12.3207 10.0012 12.3719 10.0341 12.3848 10.1L16.7425 22.7461C16.7809 22.8779 16.7425 22.9438 16.6273 22.9437H14.1317C14.0442 22.9537 13.9606 22.8934 13.9398 22.8054L12.9607 19.8809ZM9.21739 17.3912H12.2505C11.7521 15.6823 11.1898 13.9958 10.734 12.2735C10.2422 13.9987 9.70562 15.7169 9.21739 17.3912Z" fill="#9999FF" />
                    <path d="M25.9019 13.0852V20.6088C25.9019 21.125 25.898 21.6458 25.9499 22.1599C25.9691 22.351 25.985 22.4655 25.9979 22.597C26.0105 22.7026 25.9659 22.7551 25.8636 22.7551H23.8095C23.7127 22.7656 23.6179 22.7087 23.5791 22.6168C23.5293 22.4347 23.4856 22.2413 23.4831 22.0513C22.75 22.7247 21.7813 22.992 20.8148 22.9997C18.7227 23.0256 17.5428 21.2673 17.5898 19.1861V13.105C17.5772 13.0142 17.6552 12.9339 17.7434 12.9469H20.0247C20.1128 12.934 20.1908 13.0143 20.1783 13.105V18.87C20.1783 19.9232 20.6936 20.6088 21.7555 20.6088C22.3139 20.6159 22.8683 20.3864 23.3181 20.0555V13.0852C23.3181 12.9932 23.3757 12.9469 23.4909 12.9469H25.7676C25.8446 12.9357 25.9128 13.0059 25.9019 13.0852Z" fill="#9999FF" />
                </svg>
            </div>
        </div>
    </div>
    <div class="pl-80">
        <ul class="hidden md:flex flex-1 justify-start items-start gap-7 text-gray-50 text-base mr-5 font-sans border-2 border-b-line_cream border-t-transparent border-r-transparent border-l-transparent pb-2">
            <button class=" hover:bg-register_orange bg-transparent text-white rounded-md p-2 font-sans">Gallery</button>
            <button class=" hover:bg-register_orange bg-transparent text-white rounded-md p-2 font-sans">Favorites</button>
            <button class=" hover:bg-register_orange bg-transparent text-white rounded-md p-2 font-sans">Collection</button>
        </ul>
        @for ($p = 0; $p <= 3; $p++) 
        <div class="container-2xl md:flex flex-1 gap-3 py-5 pr-5 justify-center">
            @for ($i = 0; $i <= 3; $i++) 
            <div>
                <div>
                    <div class="container bg-zinc-700 rounded-lg shadow-lg p-4">
                        <div class="container md:flex items-center">
                            <img class="rounded-full float-left w-12 h-12" src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="">
                            <div class="px-3.5 w-8/12">
                                <p class="font-semibold font-sans text-white">Fajar</p>
                                <p class="font-thin font-sans text-register_orange">Images</p>
                            </div>
                            <div class="container-2xd md:flex flex-1 justify-end items-center" data-dropdown-toggle="dropdownContent">
                                <div  id="dropdownContent" class="z-10 hidden bg-content_box divide-y divide-gray-100 rounded shadow w-auto dark:bg-gray-700">
                                    <ul class="py-1 text-sm text-white dark:text-gray-200" aria-labelledby="dropdownContent">
                                    <li>
                                        <a href="/edit_gallery" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-content_box">Edit</a>
                                    </li>
                                    <li>
                                        <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-content_box" data-modal-toggle="deleteModal">Delete</a>
                                    </li>
                                    </ul>
                                </div>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.7325 1.25C11.8648 1.25 11.9937 1.292 12.1007 1.36995C12.2076 1.4479 12.287 1.55778 12.3275 1.68375L13.015 3.82C13.3038 3.96125 13.58 4.12 13.8438 4.29875L16.0388 3.82625C16.1682 3.79862 16.303 3.81278 16.4239 3.86669C16.5447 3.92061 16.6454 4.01149 16.7113 4.12625L18.4438 7.125C18.5099 7.2397 18.5379 7.37244 18.5238 7.50409C18.5096 7.63574 18.454 7.75949 18.365 7.8575L16.8588 9.52C16.8807 9.83879 16.8807 10.1587 16.8588 10.4775L18.365 12.1425C18.454 12.2405 18.5096 12.3643 18.5238 12.4959C18.5379 12.6276 18.5099 12.7603 18.4438 12.875L16.7113 15.875C16.6452 15.9895 16.5445 16.0802 16.4236 16.1338C16.3028 16.1875 16.168 16.2015 16.0388 16.1737L13.8438 15.7013C13.5813 15.8787 13.3038 16.0388 13.0163 16.18L12.3275 18.3162C12.287 18.4422 12.2076 18.5521 12.1007 18.63C11.9937 18.708 11.8648 18.75 11.7325 18.75H8.26751C8.13519 18.75 8.00628 18.708 7.89936 18.63C7.79243 18.5521 7.713 18.4422 7.67251 18.3162L6.98626 16.1812C6.69829 16.0404 6.42052 15.8796 6.15501 15.7L3.96126 16.1737C3.83184 16.2014 3.697 16.1872 3.57614 16.1333C3.45528 16.0794 3.35466 15.9885 3.28876 15.8738L1.55626 12.875C1.49011 12.7603 1.46208 12.6276 1.47624 12.4959C1.49039 12.3643 1.54599 12.2405 1.63501 12.1425L3.14126 10.4775C3.11944 10.1595 3.11944 9.84046 3.14126 9.5225L1.63501 7.8575C1.54599 7.75949 1.49039 7.63574 1.47624 7.50409C1.46208 7.37244 1.49011 7.2397 1.55626 7.125L3.28876 4.125C3.35484 4.01047 3.45554 3.91984 3.57639 3.86616C3.69723 3.81248 3.83198 3.79851 3.96126 3.82625L6.15501 4.3C6.42001 4.12125 6.69751 3.96 6.98626 3.81875L7.67376 1.68375C7.71412 1.55818 7.79317 1.4486 7.8996 1.37069C8.00602 1.29278 8.13437 1.25053 8.26626 1.25H11.7313H11.7325ZM11.275 2.5H8.72501L8.01501 4.70875L7.53626 4.9425C7.30091 5.05767 7.07371 5.18881 6.85626 5.335L6.41376 5.635L4.14376 5.145L2.86876 7.355L4.42501 9.0775L4.38751 9.6075C4.36955 9.86886 4.36955 10.1311 4.38751 10.3925L4.42501 10.9225L2.86626 12.645L4.14251 14.855L6.41251 14.3663L6.85501 14.665C7.07246 14.8112 7.29966 14.9423 7.53501 15.0575L8.01376 15.2913L8.72501 17.5H11.2775L11.99 15.29L12.4675 15.0575C12.7026 14.9426 12.9294 14.8114 13.1463 14.665L13.5875 14.3663L15.8588 14.855L17.1338 12.645L15.5763 10.9225L15.6138 10.3925C15.6318 10.1307 15.6318 9.86802 15.6138 9.60625L15.5763 9.07625L17.135 7.355L15.8588 5.145L13.5875 5.6325L13.1463 5.335C12.9294 5.18852 12.7026 5.05736 12.4675 4.9425L11.99 4.71L11.2763 2.5H11.275ZM10 6.25C10.9946 6.25 11.9484 6.64509 12.6517 7.34835C13.3549 8.05161 13.75 9.00544 13.75 10C13.75 10.9946 13.3549 11.9484 12.6517 12.6517C11.9484 13.3549 10.9946 13.75 10 13.75C9.00545 13.75 8.05162 13.3549 7.34836 12.6517C6.6451 11.9484 6.25001 10.9946 6.25001 10C6.25001 9.00544 6.6451 8.05161 7.34836 7.34835C8.05162 6.64509 9.00545 6.25 10 6.25ZM10 7.5C9.33697 7.5 8.70109 7.76339 8.23225 8.23223C7.76341 8.70107 7.50001 9.33696 7.50001 10C7.50001 10.663 7.76341 11.2989 8.23225 11.7678C8.70109 12.2366 9.33697 12.5 10 12.5C10.6631 12.5 11.2989 12.2366 11.7678 11.7678C12.2366 11.2989 12.5 10.663 12.5 10C12.5 9.33696 12.2366 8.70107 11.7678 8.23223C11.2989 7.76339 10.6631 7.5 10 7.5Z" fill="#FFF3CD"/>
                                </svg>
                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.6665 3.75L4.99984 7.08333L8.33317 3.75" stroke="#FFF3CD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                
                            </div>
                            
                        </div>

                        <div class="container relative overflow-hidden py-2">
                            <img src="https://img.freepik.com/free-photo/mand-holding-cup_1258-340.jpg?size=626&ext=jpg&ga=GA1.2.1546389280.1639353600" alt="" class="object-cover w-full h-full rounded-md" />
                            <div class="absolute py-2.5 bottom-2 inset-x-0 opacity-80 bg-black text-white text-xs text-center leading-4 rounded-b-md font-sans font-medium">Abstract Mode</div>
                        </div>
                        <div class="container md:flex justify-end items-center">
                            <img class="w-5" src="https://cdn.discordapp.com/attachments/752542767128772668/947775687748616202/unknown.png" alt="">
                            <p class="px-2 text-amber-100">202</p>
                            <img class="w-5" src="https://cdn.discordapp.com/attachments/752542767128772668/947777319311904768/unknown.png" alt="">
                            <p class="px-2 text-amber-100">61.5 K</p>
                        </div>
                    </div>
                </div>
            </div>
            @endfor
        </div>
        @endfor
    </div>
</div>

<div id="deleteModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full ">
            <div class="relative container md:flex justify-center flex-1 p-4 w-full max-w-2xl h-full md:h-auto ">
                <div class="container-2xl py-16 px-36 items-center bg-zinc-800 rounded-lg">
                    
                        <div class="container-2xl md:flex flex-1 justify-center py-3">
                        <svg width="60" height="81" viewBox="0 0 60 81" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M59.875 30.1247L55.7083 37.333L5.16667 8.16634L9.33333 0.958008L22 8.24967L27.6667 6.70801L45.7083 17.1247L47.25 22.833L59.875 30.1247ZM0 72.1663V22.1663H21.125L50 38.833V72.1663C50 74.3765 49.122 76.4961 47.5592 78.0589C45.9964 79.6217 43.8768 80.4997 41.6667 80.4997H8.33333C6.1232 80.4997 4.00358 79.6217 2.44078 78.0589C0.877973 76.4961 0 74.3765 0 72.1663ZM8.33333 72.1663H41.6667V43.833L18.5833 30.4997H8.33333V72.1663Z" fill="#FF8A00"/>
                        </svg>
                        </div>
                        
                        <p class="font-sans font-normal text-white text-lg text-center">
                            Are you sure want to delete <strong class="font-sans text-amber_font font-bold text-lg">Lorem Ipsum</strong>
                        </p>
                        
                        <div class="container-2xl md:flex flex-1 justify-center gap-8">
                            <button class="text-register_orange hover:bg-orange-700 w-28 bg-white rounded-md p-2 text-base font-sans mt-10" data-modal-toggle="deleteModal">Cancel</button>  
                            <button class="bg-register_orange hover:bg-orange-700 w-28 text-white rounded-md p-2 text-base font-sans mt-10" >Delete</button>  
                        </div>

                  
                </div>
                
            </div>
</div>
@endsection