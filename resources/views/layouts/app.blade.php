<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ setting('site.title') }} - @yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="icon" href="../img/favicon.ico"/>
    <meta name="description" content="{{ setting('site.desc') }}">
    <meta name="keywords" content="{{ setting('site.keywords') }}">
    <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

   <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-213555544-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-213555544-1');
</script>
    <style>
        .nav-active {
            border-bottom: 2px solid rgb(217, 119, 6);
            outline: none;
            color: rgb(217, 119, 6);
        }
        .nav-active-m {
            border-bottom: 2px solid rgb(217, 119, 6);
            outline: none;
            color: rgb(217, 119, 6);
        }
    </style>
</head>

<body class="antialiased">

    <div class="h-full w-full">
        <nav role="navigation" class="bg-white shadow xl:block hidden">
            <div class="mx-auto container px-6 py-2 xl:py-0">
                <div class="flex items-center justify-between">
                    <div class="inset-y-0 left-0 flex items-center xl:hidden">
                        <div class="inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:text-gray-100 focus:outline-none transition duration-150 ease-in-out">
                            <div class="visible xl:hidden">
                                <ul class="p-2 border-r bg-white absolute rounded left-0 right-0 shadow mt-8 md:mt-8 hidden">
                                    <li class="flex xl:hidden cursor-pointer text-gray-600  leading-3 tracking-normal mt-2 py-2 hover:text-yellow-700 focus:text-yellow-700 focus:outline-none">
                                        <div class="flex items-center">

                                            <span class="ml-2 font-bold">Accueil</span>
                                        </div>
                                    </li>
                                    <li class="flex xl:hidden flex-col cursor-pointer text-gray-600  leading-3 tracking-normal py-2 hover:text-yellow-700 focus:text-yellow-700 focus:outline-none flex justify-center" onclick="dropdownHandler(this)">
                                        <div class="flex items-center">

                                            <span class="ml-2 font-bold">Produits</span>
                                        </div>
                                    </li>
                                    <li class="flex xl:hidden cursor-pointer text-gray-600  leading-3 tracking-normal py-2 hover:text-yellow-700 flex items-center focus:text-yellow-700 focus:outline-none">

                                        <span class="ml-2 font-bold">A propos</span>
                                    </li>
                                    <li class="border-b border-gray-300 flex xl:hidden cursor-pointer text-gray-600  leading-3 tracking-normal pt-2 pb-4 hover:text-yellow-700 flex items-center focus:text-yellow-700 focus:outline-none">

                                        <span class="ml-2 font-bold">Contact</span>
                                    </li>

                                </ul>
                                <svg onclick="MenuHandler(this,true)" aria-haspopup="true" aria-label="Main Menu" xmlns="http://www.w3.org/2000/svg" class="show-m-menu icon icon-tabler icon-tabler-menu" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z"></path>
                                    <line x1="4" y1="8" x2="20" y2="8"></line>
                                    <line x1="4" y1="16" x2="20" y2="16"></line>
                                </svg>
                            </div>
                            <div class="hidden close-m-menu text-gray-700" onclick="MenuHandler(this,false)">
                                <svg aria-label="Close" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" />
                                    <line x1="18" y1="6" x2="6" y2="18" />
                                    <line x1="6" y1="6" x2="18" y2="18" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('index') }}" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-700 rounded-md flex w-full sm:w-auto items-center sm:items-stretch justify-end sm:justify-start">
                        <div  class="flex items-center">
                            <img src="/img/logo.png" alt="Bulldozen" class="h-14">
                        </div>
                    </a>
                    <div class="flex">
                        <div class="hidden xl:flex md:mr-6 xl:mr-16">
                            <a href="{{ route('index') }}" class="@if(Request::is('/')) nav-active @endif focus:text-yellow-700 border-b-2 border-transparent focus:border-yellow-700 flex px-5 items-center py-6  leading-5 text-gray-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none transition duration-150 ease-in-out">
                                Accueil
                            </a>
                            <a href="{{ route('products') }}" class="@if(Request::is('produit/*', 'produits')) nav-active @endif focus:text-yellow-700 border-b-2 border-transparent focus:border-yellow-700 flex px-5 items-center py-6  leading-5 text-gray-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none transition duration-150 ease-in-out">

                                Produits
                            </a>
                            <a href="{{ route('apropos') }}" class="@if(Request::is('apropos')) nav-active @endif focus:text-yellow-700 border-b-2 border-transparent focus:border-yellow-700 flex px-5 items-center py-6  leading-5 text-gray-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none transition duration-150 ease-in-out">

                                A propos
                            </a>
                            <a href="{{ route('contact') }}" class="@if(Request::is('contact')) nav-active @endif focus:text-yellow-700 border-b-2 border-transparent focus:border-yellow-700 flex px-5 items-center py-6  leading-5 text-gray-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none transition duration-150 ease-in-out">

                                Contact
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </nav>
        <nav>
            <div class="py-4 px-6 w-full flex xl:hidden justify-between items-center bg-white fixed top-0 z-40">
                <div aria-label="logo" role="img" tabindex="0" class="focus:outline-none">
                    <img src="/img/logo.png" alt="Bulldozen" class="h-14">
                </div>
                <div class="flex items-center">

                    <button id="menu" aria-label="open menu" class="focus:outline-none focus:ring-2 focus:ring-gray-600 rounded-md text-gray-800" onclick="sidebarHandler(true)">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <line x1="4" y1="6" x2="20" y2="6" />
                            <line x1="4" y1="12" x2="20" y2="12" />
                            <line x1="4" y1="18" x2="20" y2="18" />
                        </svg>
                    </button>
                </div>
            </div>
            <!--Mobile responsive sidebar-->
            <div class="fixed w-full h-full transform -translate-x-full z-40 xl:hidden" id="mobile-nav">
                <div class="bg-gray-800 opacity-50 w-full h-full" onclick="sidebarHandler(false)"></div>
                <div class="w-64 z-40 fixed overflow-y-auto top-0 bg-white shadow h-full flex-col justify-between xl:hidden pb-4 transition duration-150 ease-in-out">
                    <div class="px-6 h-full">
                        <div class="flex flex-col justify-between h-full w-full">
                            <div>
                                <div class="mt-6 flex w-full items-center justify-between">
                                    <div class="flex items-center justify-between w-full">
                                        <div class="flex items-center">
                                            <img src="/img/logo.png" alt="Bulldozen" class="h-14">
                                        </div>
                                        <button id="cross" aria-label="close menu" class="focus:outline-none focus:ring-2 rounded-md text-gray-800" onclick="sidebarHandler(false)">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z"></path>
                                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                                <line x1="6" y1="6" x2="18" y2="18"></line>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <ul class="f-m-m">
                                    <li>
                                        <a class="cursor-pointer" href="{{ route('index') }}">
                                            <div class="text-gray-800 pt-10">
                                                <div class="flex items-center">

                                                    <p tabindex="0" class="@if(Request::is('/')) nav-active-m @endif focus:outline-none text-gray-800 focus:text-yellow-600  xl:text-base text-base ml-3">Accueil</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="cursor-pointer" href="{{ route('products') }}">
                                            <div class="text-gray-800 pt-8">
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center">

                                                        <p tabindex="0" class="@if(Request::is('produits')) nav-active-m @endif focus:outline-none focus:text-yellow-600 text-gray-800 xl:text-base md:text-2xl text-base ml-3">Produits</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="cursor-pointer" href="{{ route('apropos') }}">
                                            <div class="text-gray-800 pt-8">
                                                <div class="flex items-center">

                                                    <p tabindex="0" class="@if(Request::is('apropos')) nav-active-m @endif focus:outline-none focus:text-yellow-600 text-gray-800 xl:text-base md:text-2xl text-base ml-3">A propos</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="text-gray-800 pt-8 cursor-pointer">
                                        <a class="cursor-pointer" href="{{ route('contact') }}">

                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center">

                                                <p tabindex="0" class="@if(Request::is('contact')) nav-active-m @endif focus:outline-none focus:text-yellow-600 text-gray-800 xl:text-base md:text-2xl text-base ml-3">Contact</p>
                                            </div>
                                        </div>
                                    </a>

                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </nav>



        <!-- Code block ends -->
    </div>


    @yield('content')

    <section class="w-full bg-white">
        <div class="px-8 py-12 mx-auto max-w-7xl">
            <div class="grid grid-cols-2 gap-10 mb-3 md:grid-cols-3 lg:grid-cols-12 lg:gap-20">
                <div class="col-span-3">
                    <a href="#" ><img src="../img/logo.png" alt="Bulldozen" class="h-8"></a>
                    <p class="my-4 text-xs leading-normal text-gray-500">
                        BULLDOZEN répond à toutes vos demandes pour toutes les composantes de vos machines ; moteur, transmission, hydraulique, chaines et trains de roulement, pièces d’usure, mais également tout équipement d’exploitation de mines et/ou de carrières.
                    </p>
                </div>
                <nav class="col-span-1 md:col-span-1 lg:col-span-2">
                    <p class="mb-3 text-xs font-semibold tracking-wider text-gray-400 uppercase">Menu</p>
                    <a href="{{ route('index') }}" class="flex mb-3 text-sm font-medium text-gray-500 transition hover:text-gray-700 md:mb-2 hover:text-primary">Accueil</a>
                    <a href="{{ route('products') }}" class="flex mb-3 text-sm font-medium text-gray-500 transition hover:text-gray-700 md:mb-2 hover:text-primary">Produits</a>
                    <a href="{{ route('contact') }}" class="flex mb-3 text-sm font-medium text-gray-500 transition hover:text-gray-700 md:mb-2 hover:text-primary">Contact</a>

                </nav>
                <nav class="col-span-1 md:col-span-1 lg:col-span-2">
                    <p class="mb-3 text-xs font-semibold tracking-wider text-gray-400 uppercase">Suivez-nous</p>
                    <a href="https://www.facebook.com/EURL.BULLDOZEN" class="flex mb-3 text-sm font-medium text-gray-500 transition hover:text-gray-700 md:mb-2 hover:text-primary" target="_blank">Facebook</a>
                </nav>

                <div class="col-span-3">
                    <p class="mb-3 text-xs font-semibold tracking-wider text-gray-400 uppercase">Retrouvez nous sur Maps</p>
                   <a href="https://www.google.com/maps/place/EURL+BULLDOZEN/@36.6873011,3.366766,17z/data=!3m1!4b1!4m5!3m4!1s0x128e5d41916d55bd:0x3aa73e8897a0bd12!8m2!3d36.6873011!4d3.3689547?hl=fr" target="_blank">
                    <img src="/img/map.png" alt="BullDozen">
                </a>
                </div>
            </div>
            <div class="flex flex-col items-start justify-between pt-10 mt-10 border-t border-gray-100 md:flex-row md:items-center">
                <p class="mb-6 text-sm text-left text-gray-600 md:mb-0">© Copyright 2021 Bulldozen. Tous droit reservé. Designed by <a href="https://blackburn-co.com/" target="_blank">BLACKBURN</a></p>

            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <script
    src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js"
    defer
  ></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    @yield('scripts')
    <script>
function dropdownHandler(element) {
    let single = element.getElementsByTagName("ul")[0];
    single.classList.toggle("hidden");
}
function MenuHandler(el, val) {
    let MainList = el.parentElement.parentElement.getElementsByTagName("ul")[0];
    let closeIcon = el.parentElement.parentElement.getElementsByClassName("close-m-menu")[0];
    let showIcon = el.parentElement.parentElement.getElementsByClassName("show-m-menu")[0];
    if (val) {
        MainList.classList.remove("hidden");
        el.classList.add("hidden");
        closeIcon.classList.remove("hidden");
    } else {
        showIcon.classList.remove("hidden");
        MainList.classList.add("hidden");
        el.classList.add("hidden");
    }
}
// ------------------------------------------------------
let sideBar = document.getElementById("mobile-nav");
let menu = document.getElementById("menu");
let cross = document.getElementById("cross");
const sidebarHandler = (check) => {
    if (check) {
        sideBar.style.transform = "translateX(0px)";
        menu.classList.add("hidden");
        cross.classList.remove("hidden");
    } else {
        sideBar.style.transform = "translateX(-100%)";
        menu.classList.remove("hidden");
        cross.classList.add("hidden");
    }
};
let list = document.getElementById("list");
let chevrondown = document.getElementById("chevrondown");
let chevronup = document.getElementById("chevronup");
const listHandler = (check) => {
    if (check) {
        list.classList.remove("hidden");
        chevrondown.classList.remove("hidden");
        chevronup.classList.add("hidden");
    } else {
        list.classList.add("hidden");
        chevrondown.classList.add("hidden");
        chevronup.classList.remove("hidden");
    }
};
    </script>
</body>

</html>
