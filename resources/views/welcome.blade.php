<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel eCommerce</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="{{ asset('js/app.js') }}" defer></script>

    @livewireStyles

    <style>
        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }

        .slide:hover>.slide-img {
            --tw-scale-x: 1.05;
            --tw-scale-y: 1.05;
            transform: var(--tw-transform);
        }

        .slide:hover .quick-view {
            right: 0;
            opacity: 100;
        }

        /* Rectangle Out */
        .hvr-rectangle-out {
            display: inline-block;
            vertical-align: middle;
            transform: perspective(1px) translateZ(0);
            box-shadow: 0 0 1px rgba(0, 0, 0, 0);
            position: relative;
            background: #e1e1e1;
            transition-property: color;
            transition-duration: 0.3s;
        }

        .hvr-rectangle-out:before {
            content: "";
            position: absolute;
            z-index: -1;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: #7c7c7c;
            transform: scale(0);
            transition-property: transform;
            transition-duration: 0.5s;
            transition-timing-function: ease-out;
            opacity: 0.2;
        }

        .hvr-rectangle-out:hover,
        .hvr-rectangle-out:focus,
        .hvr-rectangle-out:active {
            color: white;
        }

        .hvr-rectangle-out:hover:before,
        .hvr-rectangle-out:focus:before,
        .hvr-rectangle-out:active:before {
            transform: scale(1);
        }

        /* Shutter In Horizontal */
        .hvr-shutter-in-horizontal {
            display: inline-block;
            vertical-align: middle;
            transform: perspective(1px) translateZ(0);
            box-shadow: 0 0 1px rgba(0, 0, 0, 0);
            position: relative;
            background: #2098D1;
            transition-property: color;
            transition-duration: 0.3s;
        }

        .hvr-shutter-in-horizontal:before {
            content: "";
            position: absolute;
            z-index: -1;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: #e1e1e1;
            transform: scaleX(1);
            transform-origin: 50%;
            transition-property: transform;
            transition-duration: 0.6s;
            transition-timing-function: ease-out;
            opacity: 0.2;
        }

        .hvr-shutter-in-horizontal:hover,
        .hvr-shutter-in-horizontal:focus,
        .hvr-shutter-in-horizontal:active {
            color: white;
        }

        .hvr-shutter-in-horizontal:hover:before,
        .hvr-shutter-in-horizontal:focus:before,
        .hvr-shutter-in-horizontal:active:before {
            transform: scaleX(0);
        }

    </style>
</head>

<body>
    {{-- mobile menu --}}

    {{-- header --}}
    <header>
        <div class="border bg-gray-50 border-hotlineBorder">
            <div class="container flex justify-between py-1 mx-auto">
                {{-- hotline --}}
                <div class="flex text-[13px] items-center ">
                    <svg class="w-4 h-4 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    <a href="#" class="pl-1 text-secondary hover:text-red-500">Hotline: (+123) 456 789</a>
                </div>

                {{-- login/register --}}
                <div class="flex gap-4 text-[13px] text-secondary">
                    <a href="#" class="hover:text-red-500">Login</a>
                    <a href="#" class="pl-4 border-l hover:text-red-500">Register</a>
                    <div class="relative" x-data="{ isOpen: false }" x-data="{ isOpen: false }"
                        @mouseenter="isOpen = true" @mouseleave="isOpen = false">
                        <a href="#" @click="isOpen = ! isOpen"
                            class="relative flex items-center gap-1 pl-4 border-l hover:text-red-500">
                            <span class="fi fi-gb"></span>
                            <span>English</span>
                            <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </a>
                        <div class="absolute z-20 border -left-2" x-cloak x-show="isOpen"
                            x-transition.scale.origin.bottom>
                            <div class="flex flex-col w-32 gap-4 px-3 py-4 bg-white shadow-lg">
                                <div class="flex gap-3">
                                    <span class="fi fi-hu"></span>
                                    <a href="#" class="hover:text-red-500">Hungary</a>
                                </div>
                                <div class="flex gap-3">
                                    <span class="fi fi-de"></span>
                                    <a href="#" class="hover:text-red-500">Germany</a>
                                </div>
                                <div class="flex gap-3">
                                    <span class="fi fi-fr"></span>
                                    <a href="#" class="hover:text-red-500">France</a>
                                </div>
                                <div class="flex gap-3">
                                    <span class="fi fi-it"></span>
                                    <a href="#" class="hover:text-red-500">Italy</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="relative" x-data="{ isOpen: false }" @mouseenter="isOpen = true"
                        @mouseleave="isOpen = false">
                        <a href="#" @click="isOpen = ! isOpen"
                            class="flex items-center gap-1 pl-4 border-l hover:text-red-500">
                            <span>Dollar (USD)</span>
                            <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </a>
                        <div class="absolute z-20 border -left-2" x-cloak x-show="isOpen"
                            x-transition.scale.origin.bottom>
                            <div class="flex flex-col w-32 gap-4 px-3 py-4 bg-white shadow-lg">
                                <div class="flex gap-3">
                                    <a href="#" class="hover:text-red-500">Pound (GBP)</a>
                                </div>
                                <div class="flex gap-3">
                                    <a href="#" class="hover:text-red-500">Euro (EUR)</a>
                                </div>
                                <div class="flex gap-3">
                                    <a href="#" class="hover:text-red-500">Dollar (USD)</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- mid-section --}}
        <div class="border-b">
            <div class="container flex items-center h-24 mx-auto">
                <div class="w-45.5 surf-side-logo">
                    <a href="/">
                        <img src="{{ asset('images/logo-top-1.png') }}" alt="Logo" class="">
                    </a>
                </div>
                <div class="flex items-center justify-between flex-1 search-and-cart">
                    <div class="flex pl-24">
                        <div class="relative flex flex-1">
                            <input type="search" name="search" placeholder="Search here..."
                                class="pl-4 pr-45.5 py-2 text-[13px] focus:outline-none ring-red-500 ring-2 w-128">
                            <div class="absolute top-0 right-0 flex items-center h-full" x-data="{ isOpen: false }">

                                <a @click="isOpen = ! isOpen" href="#"
                                    class="relative flex items-center h-full gap-4 px-3 text-xs text-gray-400 bg-gray-100">
                                    <div>All Category</div>
                                    <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </a>
                                <div class="relative">
                                    <div class="absolute right-0 z-20 h-full -bottom-[19px]">
                                        <ul class="flex flex-col text-[13px] w-60 border bg-neutral-600" x-cloak
                                            x-show="isOpen" x-transition.scale.origin.bottom
                                            @click.away="isOpen = false" @keydown.escape.window="isOpen = false">
                                            <li class="px-2 py-1 font-semibold bg-neutral-100">All Category</li>
                                            <ul class="flex flex-col text-[13px] px-4 py-1 bg-white text-neutral-500">
                                                <li><a href="#" class="hover:text-red-500">-Electronics</a></li>
                                                <ul
                                                    class="flex flex-col text-[13px] px-4 py-1 bg-white text-neutral-500 gap-1.5">
                                                    <li><a href="#" class="hover:text-red-500">Batteries & Chargens</a>
                                                    </li>
                                                    <li><a href="#" class="hover:text-red-500">Headphone & Headsets</a>
                                                    </li>
                                                    <li><a href="#" class="hover:text-red-500">Mp3 Player &
                                                            Acessories</a></li>
                                                </ul>
                                                <li><a href="#" class="hover:text-red-500">-Smartphone & Table</a></li>
                                                <ul class="flex flex-col text-[13px] px-4 py-1 bg-white text-neutral-500
                                                    gap-1.5">
                                                    <li><a href="#" class="hover:text-red-500">Batteries & Chargens</a>
                                                    </li>
                                                    <li><a href="#" class="hover:text-red-500">Mp3 Player &
                                                            Headphones</a></li>
                                                    <li><a href="#" class="hover:text-red-500">MTable & Accessories</a>
                                                    </li>
                                                </ul>
                                            </ul>
                                            <ul class="flex flex-col text-[13px] px-4 py-1 bg-white text-neutral-500">
                                                <li><a href="#" class="hover:text-red-500">-Electronics</a></li>
                                                <ul
                                                    class="flex flex-col text-[13px] px-4 py-1 bg-white text-neutral-500 gap-1.5">
                                                    <li><a href="#" class="hover:text-red-500">Batteries & Chargens</a>
                                                    </li>
                                                    <li><a href="#" class="hover:text-red-500">Headphone & Headsets</a>
                                                    </li>
                                                    <li><a href="#" class="hover:text-red-500">Mp3 Player &
                                                            Acessories</a></li>
                                                </ul>
                                                <li><a href="#" class="hover:text-red-500">-Smartphone & Table</a></li>
                                                <ul class="flex flex-col text-[13px] px-4 py-1 bg-white text-neutral-500
                                                    gap-1.5">
                                                    <li><a href="#" class="hover:text-red-500">Batteries & Chargens</a>
                                                    </li>
                                                    <li><a href="#" class="hover:text-red-500">Mp3 Player &
                                                            Headphones</a></li>
                                                    <li><a href="#" class="hover:text-red-500">MTable & Accessories</a>
                                                    </li>
                                                </ul>
                                            </ul>
                                        </ul>

                                    </div>
                                </div>
                                <div class="flex items-center h-full px-5 text-white bg-red-500 ">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4"
                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="flex items-center justify-center flex-1 gap-12">
                        <a href="#">
                            <div class="flex items-center wishlist">
                                <div class="flex h-full text-gray-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="flex flex-col pl-2">
                                    <span class="text-xs text-center text-white bg-gray-400 item">0 item</span>
                                    <span class="text-xs uppercase">Wishlist</span>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="flex items-center cart">
                                <div class="flex h-full text-gray-400">
                                    <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </div>
                                <div class="flex flex-col pl-2">
                                    <div class="px-2 text-xs text-center text-white bg-red-500 items">4 items</div>
                                    <span class="text-xs uppercase">Cart</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
        {{-- hot deals --}}
        <div class="container pt-5 pb-3 mx-auto">
            <ul class="flex items-center justify-around flex-1 text-xs font-semibold">
                <li class="relative flex uppercase">
                    <a href="#" class="hover:text-red-500">Weekly featured</a>
                    <div class="absolute -right-10 -top-2 ">
                        <div class="relative hot px-2 text-white bg-orange-400 text-[8px]">
                            <div class="">Hot</div>
                            <div class="absolute -bottom-1.5 right-arrow"></div>
                        </div>
                    </div>
                </li>
                <li class="relative flex uppercase">
                    <a href="#" class="hover:text-red-500">Hot sale items</a>
                    <div class="absolute -right-10 -top-2 ">
                        <div class="relative hot px-2 text-white bg-orange-400 text-[8px]">
                            <div class="">Hot</div>
                            <div class="absolute -bottom-1.5 right-arrow"></div>
                        </div>
                    </div>
                </li>
                <li class="relative flex uppercase">
                    <a href="#" class="hover:text-red-500">Top new items</a>
                    <div class="absolute -right-10 -top-2 ">
                        <div class="relative hot px-2 text-white bg-orange-400 text-[8px]">
                            <div class="">Hot</div>
                            <div class="absolute -bottom-1.5 right-arrow"></div>
                        </div>
                    </div>
                </li>
                <li class="relative flex uppercase">
                    <a href="#" class="hover:text-red-500">Top selling</a>
                    <div class="absolute -right-10 -top-2 ">
                        <div class="relative hot px-2 text-white bg-orange-400 text-[8px]">
                            <div class="">Hot</div>
                            <div class="absolute -bottom-1.5 right-arrow"></div>
                        </div>
                    </div>
                </li>
                <li class="relative flex uppercase">
                    <a href="#" class="z-10 hover:text-red-500">Top rated items</a>
                    <div class="absolute -right-10 -top-2 ">
                        <div class="relative hot px-2 text-white bg-orange-400 text-[8px]">
                            <div class="">Hot</div>
                            <div class="absolute -bottom-1.5 right-arrow"></div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        {{-- navigation --}}
        <nav class="h-10 bg-neutral-700">
            <div class="container h-full mx-auto">
                <div class="flex items-center justify-start h-full mx-auto text-[13px] font-semibold tracking-wider
                    text-center text-white uppercase">
                    <a href="#" class="flex items-center flex-none h-full px-4 bg-red-500">
                        <svg class="w-6 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                    </a>
                    <a href="#" class="flex items-center h-full px-6 border-r hover:bg-neutral-600 border-neutral-600">
                        About Us
                    </a>
                    <a href="#" class="flex items-center h-full px-6 border-r hover:bg-neutral-600 border-neutral-600">
                        Shop
                    </a>
                    <a href="#" class="flex items-center h-full px-6 border-r hover:bg-neutral-600 border-neutral-600">
                        Cart
                    </a>
                    <a href="#" class="flex items-center h-full px-6 border-r hover:bg-neutral-600 border-neutral-600">
                        Checkout
                    </a>
                    <a href="#" class="flex items-center h-full px-6 border-r hover:bg-neutral-600 border-neutral-600">
                        Contact Us
                    </a>

                </div>
            </div>
        </nav>

    </header>

    {{-- Carousel --}}
    <div class="container py-2 mx-auto">
        <div id="carouselExampleCaptions" class="relative carousel slide" data-bs-ride="carousel">
            <div class="absolute bottom-0 left-0 right-0 flex justify-center p-0 mb-4 carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="relative w-full overflow-hidden carousel-inner">
                <div class="relative float-left w-full carousel-item active">
                    <img src="images/main-slider-1-1.jpg" class="block w-full" alt="..." />
                    <div class="absolute hidden text-left text-gray-600 carousel-caption md:block top-36 left-120">
                        <div class="flex items-center animate__animated animate__bounceInRight">
                            <h5 class="text-4xl uppercase ">Kid smart</h5><span
                                class="pl-2 text-5xl font-bold text-gray-800 uppercase">Watches</span>
                        </div>
                        <p class="pt-1 animate__animated animate__bounceInLeft">Campra todos tus productos Smart por
                            internet.</p>
                        <div class="flex items-baseline pt-1 animate__animated animate__bounceInLeft">
                            <span class="text-gray-400 ">Only price: </span><span
                                class="pl-1 text-2xl font-bold text-red-500">$59.99</span>
                        </div>
                        <button
                            class="px-5 py-2 mt-4 text-sm text-white bg-red-500 animate__animated animate__headShake">Shop
                            Now</button>
                    </div>
                </div>
                <div class="relative float-left w-full carousel-item">
                    <img src="images/main-slider-1-2.jpg" class="block w-full" alt="..." />
                    <div class="absolute hidden text-left text-gray-600 carousel-caption md:block top-24 left-20">
                        <div class="animate__animated animate__bounceInRight">
                            <div class="text-4xl font-bold text-red-500 uppercase">Extra</div>
                            <span class="text-4xl font-bold text-red-500 uppercase">25% off</span>
                            <span>On online payments</span>
                        </div>
                        <div class="animate__animated animate__fadeIn animate__slow  animate__delay font-extralight px-5 py-1 my-4 bg-neutral-800
                            text-neutral-100 w-max tracking-wider">
                            Use
                            Code:
                            #FA6868</div>
                        <div class="uppercase text-neutral-700 text-3xl font-bold">Get free</div>
                        <div class="uppercase text-xl">Transparent bra straps</div>

                    </div>
                </div>
                <div class="relative float-left w-full carousel-item">
                    <img src="images/main-slider-1-3.jpg" class="block w-full" alt="..." />
                    <div class="absolute hidden text-left text-gray-600 top-24 carousel-caption md:block left-24">
                        <div class="flex items-center animate__animated animate__bounceInRight">
                            <h5 class="text-4xl uppercase">Great range of </h5><span
                                class="pl-2 text-4xl font-bold text-gray-800 uppercase">exclusive</span>
                        </div>
                        <span class="text-4xl font-bold text-gray-800 uppercase">furniture packages</span>
                        <p class="pt-1 animate__animated animate__fadeInLeft">Exclusive Furniture Packages to Suit every
                            need.</p>
                        <div class="flex items-baseline pt-1">
                            <span class="text-gray-400">Starting at: </span><span
                                class="pl-1 text-2xl font-bold text-red-500 animate__animated animate__bounce">$225.00</span>
                        </div>
                        <button class="px-5 py-2 mt-4 text-sm text-white bg-red-500">Shop Now</button>
                    </div>
                </div>
            </div>
            <button
                class="absolute top-0 bottom-0 left-0 flex items-center justify-center p-0 text-center border-0 carousel-control-prev hover:outline-none hover:no-underline focus:outline-none focus:no-underline"
                type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="inline-block bg-no-repeat carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button
                class="absolute top-0 bottom-0 right-0 flex items-center justify-center p-0 text-center border-0 carousel-control-next hover:outline-none hover:no-underline focus:outline-none focus:no-underline"
                type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="inline-block bg-no-repeat carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    {{-- Banner --}}

    <div class="flex container mx-auto justify-between">
        <div style="background-image: url('images/home-1-banner-1.jpg')" class="w-[580px] h-[190px] hvr-rectangle-out">
        </div>
        <div style="background-image: url('images/home-1-banner-2.jpg')" class="w-[580px] h-[190px] hvr-rectangle-out">
        </div>
    </div>

    {{-- On Sale --}}

    <div class="container mx-auto pt-8">
        <h3 class="uppercase bg-red-500 text-white px-5 py-2 text-sm font-semibold">On sale</h3>

        {{-- Clock --}}
        <div class="flex">

            <div class="clock flex border w-max py-2 px-4 bg-neutral-50 items-center gap-3">
                <svg class="w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <div class="days font-semibold text-xl">00 <span class="text-sm font-normal text-gray-600">Days</span>
                </div>
                <div class="semicolon">:</div>
                <div class="hours font-semibold text-xl">00 <span class="text-sm font-normal text-gray-600">Hrs</span>
                </div>
                <div class="semicolon">:</div>
                <div class="mins font-semibold text-xl">00 <span class="text-sm font-normal text-gray-600">Mins</span>
                </div>
                <div class="semicolon">:</div>
                <div class="secs font-semibold text-xl">00 <span class="text-sm font-normal text-gray-600">Mins</span>
                </div>
            </div>
            <div class="flex-1 border-r"></div>
        </div>

        {{-- Sale items --}}
        <div class="border border-t-0">
            <!-- Slider main container -->
            <div class="swiper mySwiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide ">
                        <div class="slide flex items-end relative py-6 flex-col border border-transparent hover:border
                            hover:border-red-500 px-2 transition-all duration-1000 ease-in-out overflow-hidden">
                            <img src="images/products/tools_equipment_7.jpg" alt=""
                                class="slide-img transition-all duration-500 ease-in-out transform z-10">
                            <div class="relative flex pb-8">
                                <button class="quick-view absolute w-max bg-black text-white text-xs px-2 py-1 z-20 transition-all
                                    duration-500 ease-in-out transform -right-20 opacity-0 hover:bg-red-500">
                                    Quick View</button>
                            </div>
                            <a href="#" class="text-[13px] text-left z-20 hover:text-red-500">Radiant-360 R6
                                Wireless
                                Omnidirectional Speaker
                                [White]</a>
                            <div class="price text-sm font-semibold pt-2 text-left">$250.00</div>
                            <div class="sale absolute top-6 left-6 uppercase">
                                <div class="relative sale px-2 text-white bg-red-500 text-[10px] z-20">
                                    <div class="">Sale</div>
                                    <div class="absolute -bottom-1.5 left-1 right-arrow-sale"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="slide flex items-end relative py-6 flex-col border border-transparent hover:border
                            hover:border-red-500 px-2 transition-all duration-1000 ease-in-out overflow-hidden">
                            <img src="images/products/digital_18.jpg" alt=""
                                class="slide-img transition-all duration-500 ease-in-out transform z-10">
                            <div class="relative flex pb-8">
                                <button class="quick-view absolute w-max bg-black text-white text-xs px-2 py-1 z-20 transition-all
                                    duration-500 ease-in-out transform -right-20 opacity-0 hover:bg-red-500">
                                    Quick View</button>
                            </div>
                            <a href="#" class="text-[13px] text-left z-20 hover:text-red-500">Radiant-360 R6
                                Wireless
                                Omnidirectional Speaker
                                [White]</a>
                            <div class="price text-sm font-semibold pt-2 text-left">$250.00</div>
                            <div class="sale absolute top-6 left-6 uppercase">
                                <div class="relative sale px-2 text-white bg-red-500 text-[10px] z-20">
                                    <div class="">Sale</div>
                                    <div class="absolute -bottom-1.5 left-1 right-arrow-sale"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="slide flex items-end relative py-6 flex-col border border-transparent hover:border
                            hover:border-red-500 px-2 transition-all duration-1000 ease-in-out overflow-hidden">
                            <img src="images/products/fashion_08.jpg" alt=""
                                class="slide-img transition-all duration-500 ease-in-out transform z-10">
                            <div class="relative flex pb-8">
                                <button class="quick-view absolute w-max bg-black text-white text-xs px-2 py-1 z-20 transition-all
                                    duration-500 ease-in-out transform -right-20 opacity-0 hover:bg-red-500">
                                    Quick View</button>
                            </div>
                            <a href="#" class="text-[13px] text-left z-20 hover:text-red-500">Radiant-360 R6
                                Wireless
                                Omnidirectional Speaker
                                [White]</a>
                            <div class="price text-sm font-semibold pt-2 text-left">$250.00</div>
                            <div class="sale absolute top-6 left-6 uppercase">
                                <div class="relative sale px-2 text-white bg-red-500 text-[10px] z-20">
                                    <div class="">Sale</div>
                                    <div class="absolute -bottom-1.5 left-1 right-arrow-sale"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="slide flex items-end relative py-6 flex-col border border-transparent hover:border
                            hover:border-red-500 px-2 transition-all duration-1000 ease-in-out overflow-hidden">
                            <img src="images/products/digital_17.jpg" alt=""
                                class="slide-img transition-all duration-500 ease-in-out transform z-10">
                            <div class="relative flex pb-8">
                                <button class="quick-view absolute w-max bg-black text-white text-xs px-2 py-1 z-20 transition-all
                                    duration-500 ease-in-out transform -right-20 opacity-0 hover:bg-red-500">
                                    Quick View</button>
                            </div>
                            <a href="#" class="text-[13px] text-left z-20 hover:text-red-500">Radiant-360 R6
                                Wireless
                                Omnidirectional Speaker
                                [White]</a>
                            <div class="price text-sm font-semibold pt-2 text-left">$250.00</div>
                            <div class="sale absolute top-6 left-6 uppercase">
                                <div class="relative sale px-2 text-white bg-red-500 text-[10px] z-20">
                                    <div class="">Sale</div>
                                    <div class="absolute -bottom-1.5 left-1 right-arrow-sale"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="slide flex items-end relative py-6 flex-col border border-transparent hover:border
                            hover:border-red-500 px-2 transition-all duration-1000 ease-in-out overflow-hidden">
                            <img src="images/products/tools_equipment_3.jpg" alt=""
                                class="slide-img transition-all duration-500 ease-in-out transform z-10">
                            <div class="relative flex pb-8">
                                <button class="quick-view absolute w-max bg-black text-white text-xs px-2 py-1 z-20 transition-all
                                    duration-500 ease-in-out transform -right-20 opacity-0 hover:bg-red-500">
                                    Quick View</button>
                            </div>
                            <a href="#" class="text-[13px] text-left z-20 hover:text-red-500">Radiant-360 R6
                                Wireless
                                Omnidirectional Speaker
                                [White]</a>
                            <div class="price text-sm font-semibold pt-2 text-left">$250.00</div>
                            <div class="sale absolute top-6 left-6 uppercase">
                                <div class="relative sale px-2 text-white bg-red-500 text-[10px] z-20">
                                    <div class="">Sale</div>
                                    <div class="absolute -bottom-1.5 left-1 right-arrow-sale"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- If we need pagination -->
                {{-- <div class="swiper-pagination"></div> --}}

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <!-- If we need scrollbar -->
                {{-- <div class="swiper-scrollbar"></div> --}}
            </div>
        </div>


    </div>

    {{-- Latest products --}}
    <div class="container mx-auto pt-8">
        <h3 class="uppercase bg-red-500 text-white px-5 py-2 text-sm font-semibold">Latest products</h3>
        <div style="background-image: url('images/digital-electronic-banner.jpg')"
            class="w-[1170px] h-[240px] hvr-shutter-in-horizontal">
        </div>

        {{-- Latest products carousel --}}

        <div class="pt-2">
            <div class="border">
                <!-- Slider main container -->
                <div class="swiper mySwiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide ">
                            <div class="slide flex items-end relative py-6 flex-col border border-transparent hover:border
                                hover:border-red-500 px-2 transition-all duration-1000 ease-in-out overflow-hidden">
                                <img src="images/products/tools_equipment_7.jpg" alt=""
                                    class="slide-img transition-all duration-500 ease-in-out transform z-10">
                                <div class="relative flex pb-8">
                                    <button class="quick-view absolute w-max bg-black text-white text-xs px-2 py-1 z-20 transition-all
                                        duration-500 ease-in-out transform -right-20 opacity-0 hover:bg-red-500">
                                        Quick View</button>
                                </div>
                                <a href="#" class="text-[13px] text-left z-20 hover:text-red-500">Radiant-360 R6
                                    Wireless
                                    Omnidirectional Speaker
                                    [White]</a>
                                <div class="price text-sm font-semibold pt-2 text-left">$250.00</div>
                                <div class="sale absolute top-6 left-6 uppercase">
                                    <div class="relative sale px-2 text-white bg-red-500 text-[10px] z-20">
                                        <div class="">Sale</div>
                                        <div class="absolute -bottom-1.5 left-1 right-arrow-sale"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide ">
                            <div class="slide flex items-end relative py-6 flex-col border border-transparent hover:border
                                hover:border-red-500 px-2 transition-all duration-1000 ease-in-out overflow-hidden">
                                <img src="images/products/digital_18.jpg" alt=""
                                    class="slide-img transition-all duration-500 ease-in-out transform z-10">
                                <div class="relative flex pb-8">
                                    <button class="quick-view absolute w-max bg-black text-white text-xs px-2 py-1 z-20 transition-all
                                        duration-500 ease-in-out transform -right-20 opacity-0 hover:bg-red-500">
                                        Quick View</button>
                                </div>
                                <a href="#" class="text-[13px] text-left z-20 hover:text-red-500">Radiant-360 R6
                                    Wireless
                                    Omnidirectional Speaker
                                    [White]</a>
                                <div class="price text-sm font-semibold pt-2 text-left">$250.00</div>
                                <div class="sale absolute top-6 left-6 uppercase">
                                    <div class="relative sale px-2 text-white bg-red-500 text-[10px] z-20">
                                        <div class="">Sale</div>
                                        <div class="absolute -bottom-1.5 left-1 right-arrow-sale"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide ">
                            <div class="slide flex items-end relative py-6 flex-col border border-transparent hover:border
                                hover:border-red-500 px-2 transition-all duration-1000 ease-in-out overflow-hidden">
                                <img src="images/products/fashion_08.jpg" alt=""
                                    class="slide-img transition-all duration-500 ease-in-out transform z-10">
                                <div class="relative flex pb-8">
                                    <button class="quick-view absolute w-max bg-black text-white text-xs px-2 py-1 z-20 transition-all
                                        duration-500 ease-in-out transform -right-20 opacity-0 hover:bg-red-500">
                                        Quick View</button>
                                </div>
                                <a href="#" class="text-[13px] text-left z-20 hover:text-red-500">Radiant-360 R6
                                    Wireless
                                    Omnidirectional Speaker
                                    [White]</a>
                                <div class="price text-sm font-semibold pt-2 text-left">$250.00</div>
                                <div class="sale absolute top-6 left-6 uppercase">
                                    <div class="relative sale px-2 text-white bg-red-500 text-[10px] z-20">
                                        <div class="">Sale</div>
                                        <div class="absolute -bottom-1.5 left-1 right-arrow-sale"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide ">
                            <div class="slide flex items-end relative py-6 flex-col border border-transparent hover:border
                                hover:border-red-500 px-2 transition-all duration-1000 ease-in-out overflow-hidden">
                                <img src="images/products/digital_17.jpg" alt=""
                                    class="slide-img transition-all duration-500 ease-in-out transform z-10">
                                <div class="relative flex pb-8">
                                    <button class="quick-view absolute w-max bg-black text-white text-xs px-2 py-1 z-20 transition-all
                                        duration-500 ease-in-out transform -right-20 opacity-0 hover:bg-red-500">
                                        Quick View</button>
                                </div>
                                <a href="#" class="text-[13px] text-left z-20 hover:text-red-500">Radiant-360 R6
                                    Wireless
                                    Omnidirectional Speaker
                                    [White]</a>
                                <div class="price text-sm font-semibold pt-2 text-left">$250.00</div>
                                <div class="sale absolute top-6 left-6 uppercase">
                                    <div class="relative sale px-2 text-white bg-red-500 text-[10px] z-20">
                                        <div class="">Sale</div>
                                        <div class="absolute -bottom-1.5 left-1 right-arrow-sale"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide ">
                            <div class="slide flex items-end relative py-6 flex-col border border-transparent hover:border
                                hover:border-red-500 px-2 transition-all duration-1000 ease-in-out overflow-hidden">
                                <img src="images/products/tools_equipment_3.jpg" alt=""
                                    class="slide-img transition-all duration-500 ease-in-out transform z-10">
                                <div class="relative flex pb-8">
                                    <button class="quick-view absolute w-max bg-black text-white text-xs px-2 py-1 z-20 transition-all
                                        duration-500 ease-in-out transform -right-20 opacity-0 hover:bg-red-500">
                                        Quick View</button>
                                </div>
                                <a href="#" class="text-[13px] text-left z-20 hover:text-red-500">Radiant-360 R6
                                    Wireless
                                    Omnidirectional Speaker
                                    [White]</a>
                                <div class="price text-sm font-semibold pt-2 text-left">$250.00</div>
                                <div class="sale absolute top-6 left-6 uppercase">
                                    <div class="relative sale px-2 text-white bg-red-500 text-[10px] z-20">
                                        <div class="">Sale</div>
                                        <div class="absolute -bottom-1.5 left-1 right-arrow-sale"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- If we need pagination -->
                    {{-- <div class="swiper-pagination"></div> --}}
                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    <!-- If we need scrollbar -->
                    {{-- <div class="swiper-scrollbar"></div> --}}
                </div>
            </div>
        </div>

    </div>

    {{-- Product categories --}}
    <div class="container mx-auto pt-8">
        <h3 class="uppercase bg-red-500 text-white px-5 py-2 text-sm font-semibold">Product categories</h3>
        <div style="background-image: url('images/fashion-accesories-banner.jpg')"
            class="w-[1170px] h-[240px] hvr-shutter-in-horizontal">
        </div>

        {{-- Products categories carousel --}}

        <div class="pt-2">
            <div class="border">
                <!-- Slider main container -->
                <div class="swiper mySwiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide ">
                            <div class="slide flex items-end relative py-6 flex-col border border-transparent hover:border
                                hover:border-red-500 px-2 transition-all duration-1000 ease-in-out overflow-hidden">
                                <img src="images/products/tools_equipment_7.jpg" alt=""
                                    class="slide-img transition-all duration-500 ease-in-out transform z-10">
                                <div class="relative flex pb-8">
                                    <button class="quick-view absolute w-max bg-black text-white text-xs px-2 py-1 z-20 transition-all
                                        duration-500 ease-in-out transform -right-20 opacity-0 hover:bg-red-500">
                                        Quick View</button>
                                </div>
                                <a href="#" class="text-[13px] text-left z-20 hover:text-red-500">Radiant-360 R6
                                    Wireless
                                    Omnidirectional Speaker
                                    [White]</a>
                                <div class="price text-sm font-semibold pt-2 text-left">$250.00</div>
                                <div class="sale absolute top-6 left-6 uppercase">
                                    <div class="relative sale px-2 text-white bg-red-500 text-[10px] z-20">
                                        <div class="">Sale</div>
                                        <div class="absolute -bottom-1.5 left-1 right-arrow-sale"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide ">
                            <div class="slide flex items-end relative py-6 flex-col border border-transparent hover:border
                                hover:border-red-500 px-2 transition-all duration-1000 ease-in-out overflow-hidden">
                                <img src="images/products/digital_18.jpg" alt=""
                                    class="slide-img transition-all duration-500 ease-in-out transform z-10">
                                <div class="relative flex pb-8">
                                    <button class="quick-view absolute w-max bg-black text-white text-xs px-2 py-1 z-20 transition-all
                                        duration-500 ease-in-out transform -right-20 opacity-0 hover:bg-red-500">
                                        Quick View</button>
                                </div>
                                <a href="#" class="text-[13px] text-left z-20 hover:text-red-500">Radiant-360 R6
                                    Wireless
                                    Omnidirectional Speaker
                                    [White]</a>
                                <div class="price text-sm font-semibold pt-2 text-left">$250.00</div>
                                <div class="sale absolute top-6 left-6 uppercase">
                                    <div class="relative sale px-2 text-white bg-red-500 text-[10px] z-20">
                                        <div class="">Sale</div>
                                        <div class="absolute -bottom-1.5 left-1 right-arrow-sale"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide ">
                            <div class="slide flex items-end relative py-6 flex-col border border-transparent hover:border
                                hover:border-red-500 px-2 transition-all duration-1000 ease-in-out overflow-hidden">
                                <img src="images/products/fashion_08.jpg" alt=""
                                    class="slide-img transition-all duration-500 ease-in-out transform z-10">
                                <div class="relative flex pb-8">
                                    <button class="quick-view absolute w-max bg-black text-white text-xs px-2 py-1 z-20 transition-all
                                        duration-500 ease-in-out transform -right-20 opacity-0 hover:bg-red-500">
                                        Quick View</button>
                                </div>
                                <a href="#" class="text-[13px] text-left z-20 hover:text-red-500">Radiant-360 R6
                                    Wireless
                                    Omnidirectional Speaker
                                    [White]</a>
                                <div class="price text-sm font-semibold pt-2 text-left">$250.00</div>
                                <div class="sale absolute top-6 left-6 uppercase">
                                    <div class="relative sale px-2 text-white bg-red-500 text-[10px] z-20">
                                        <div class="">Sale</div>
                                        <div class="absolute -bottom-1.5 left-1 right-arrow-sale"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide ">
                            <div class="slide flex items-end relative py-6 flex-col border border-transparent hover:border
                                hover:border-red-500 px-2 transition-all duration-1000 ease-in-out overflow-hidden">
                                <img src="images/products/digital_17.jpg" alt=""
                                    class="slide-img transition-all duration-500 ease-in-out transform z-10">
                                <div class="relative flex pb-8">
                                    <button class="quick-view absolute w-max bg-black text-white text-xs px-2 py-1 z-20 transition-all
                                        duration-500 ease-in-out transform -right-20 opacity-0 hover:bg-red-500">
                                        Quick View</button>
                                </div>
                                <a href="#" class="text-[13px] text-left z-20 hover:text-red-500">Radiant-360 R6
                                    Wireless
                                    Omnidirectional Speaker
                                    [White]</a>
                                <div class="price text-sm font-semibold pt-2 text-left">$250.00</div>
                                <div class="sale absolute top-6 left-6 uppercase">
                                    <div class="relative sale px-2 text-white bg-red-500 text-[10px] z-20">
                                        <div class="">Sale</div>
                                        <div class="absolute -bottom-1.5 left-1 right-arrow-sale"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide ">
                            <div class="slide flex items-end relative py-6 flex-col border border-transparent hover:border
                                hover:border-red-500 px-2 transition-all duration-1000 ease-in-out overflow-hidden">
                                <img src="images/products/tools_equipment_3.jpg" alt=""
                                    class="slide-img transition-all duration-500 ease-in-out transform z-10">
                                <div class="relative flex pb-8">
                                    <button class="quick-view absolute w-max bg-black text-white text-xs px-2 py-1 z-20 transition-all
                                        duration-500 ease-in-out transform -right-20 opacity-0 hover:bg-red-500">
                                        Quick View</button>
                                </div>
                                <a href="#" class="text-[13px] text-left z-20 hover:text-red-500">Radiant-360 R6
                                    Wireless
                                    Omnidirectional Speaker
                                    [White]</a>
                                <div class="price text-sm font-semibold pt-2 text-left">$250.00</div>
                                <div class="sale absolute top-6 left-6 uppercase">
                                    <div class="relative sale px-2 text-white bg-red-500 text-[10px] z-20">
                                        <div class="">Sale</div>
                                        <div class="absolute -bottom-1.5 left-1 right-arrow-sale"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- If we need pagination -->
                    {{-- <div class="swiper-pagination"></div> --}}
                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    <!-- If we need scrollbar -->
                    {{-- <div class="swiper-scrollbar"></div> --}}
                </div>
            </div>
        </div>
    </div>


    {{-- Red line --}}
    <div class="h-32 bg-red-500">
        <div class="container flex mx-auto items-center justify-around h-full text-white">
            <div class="flex items-center gap-4">
                <svg class="h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0" />
                </svg>
                <div class="flex flex-col">
                    <h4 class="uppercase text-sm font-bold">Free shipping</h4>
                    <p class="text-sm font-extralight">Free On Oder Over $99</p>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <svg class="h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                </svg>
                <div class="flex flex-col">
                    <h4 class="uppercase text-sm font-bold">Guarantee</h4>
                    <p class="text-sm font-extralight">30 Days Money Back</p>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <svg class="h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                </svg>
                <div class="flex flex-col">
                    <h4 class="uppercase text-sm font-bold">Safe payment</h4>
                    <p class="text-sm font-extralight">Safe your online payment
                    </p>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <svg class="h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
                <div class="flex flex-col">
                    <h4 class="uppercase text-sm font-bold">Online support</h4>
                    <p class="text-sm font-extralight">We Have Support 24/7
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- Contact details --}}

    <div class="flex flex-row container mx-auto pt-8 gap-20">
        <div class="basis-1/3">
            <h4 class="uppercase text-sm font-bold pb-4">Contact details</h4>
            <div class="flex flex-col gap-5 text-[13px] content-start text-neutral-600">
                <div class="flex content-start">
                    <div class="w-10">
                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <p class="leading-loose">45 Grand Central Terminal New York,NY 1017 United State USA</p>
                </div>
                <div class="flex">
                    <div class="w-10">
                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                    </div>
                    <p>(+123) 456 789 - (+123) 666 888</p>
                </div>
                <div class="flex">
                    <div class="w-10">
                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <a href="mailto:Contact@yourcompany.com">Contact@yourcompany.com</a>
                </div>
            </div>
        </div>
        <div class="basis-1/3">
            <h4 class="uppercase text-sm font-bold pb-4">Hot line</h4>
            <p class="text-[13px] text-neutral-600">Call Us toll Free</p>
            <span class="text-xl font-bold text-red-500">(+123) 456 789 - (+123) 666 888</span>

            <h4 class="uppercase text-sm font-bold pb-4 pt-8">Sign up for newsletter</h4>
            <div class="flex items-center h-10">
                <input type="email" name="email" placeholder="Enter your email address"
                    class="pl-4 py-2 text-[13px] focus:outline-none ring-neutral-200 ring-1 flex-1 w-48">
                <div class="flex items-center h-full px-5 text-white bg-red-500 border text-sm font-semibold">
                    Subscribe
                </div>
            </div>
        </div>
        <div class="basis-1/3">
            <div class="flex flex-row">
                <div class="basis-1/2">
                    <h4 class="uppercase text-sm font-bold pb-4">My account</h4>
                    <ul class="flex flex-col gap-3 text-[13px] text-neutral-600">
                        <li>My Account</li>
                        <li>Brands</li>
                        <li>Gift Certificates</li>
                        <li>Affiliates</li>
                        <li>Wish list</li>
                    </ul>
                </div>
                <div class="basis-1/2">
                    <h4 class="uppercase text-sm font-bold pb-4">Information</h4>
                    <ul class="flex flex-col gap-3 text-[13px] text-neutral-600">
                        <li>Contact Us</li>
                        <li>Returns</li>
                        <li>Site Map</li>
                        <li>Specials</li>
                        <li>Order History</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <div class="flex flex-row container mx-auto pt-12 gap-20">
        <div class="basis-1/3">
            <h4 class="uppercase text-sm font-bold pb-4">We using safe payments:</h4>
            <img src="images/payment.png" style="max-width: 260px;">
        </div>
        <div class="basis-1/3">
            <h4 class="uppercase text-sm font-bold pb-4">Social network</h4>
            <div class="flex flex-row items-center gap-3">
                <div class="flex">
                    <a href="#" class="w-10 h-10 rounded-full bg-neutral-200 flex items-center justify-center text-neutral-500
                        hover:bg-red-500 hover:text-white transition ease-in-out duration-300">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                        </svg>
                    </a>
                </div>
                <div class="flex">
                    <a href="#" class="w-10 h-10 rounded-full bg-neutral-200 flex items-center justify-center text-neutral-500
                        hover:bg-red-500 hover:text-white transition ease-in-out duration-300">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.162-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.401.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.354-.629-2.758-1.379l-.749 2.848c-.269 1.045-1.004 2.352-1.498 3.146 1.123.345 2.306.535 3.55.535 6.607 0 11.985-5.365 11.985-11.987C23.97 5.39 18.592.026 11.985.026L12.017 0z" />
                        </svg>

                    </a>
                </div>
                <div class="flex">
                    <a href="#" class="w-10 h-10 rounded-full bg-neutral-200 flex items-center justify-center text-neutral-500
                        hover:bg-red-500 hover:text-white transition ease-in-out duration-300">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                        </svg>
                    </a>
                </div>
                <div class="flex">
                    <a href="#" class="w-10 h-10 rounded-full bg-neutral-200 flex items-center justify-center text-neutral-500
                        hover:bg-red-500 hover:text-white transition ease-in-out duration-300">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                        </svg>
                    </a>
                </div>
                <div class="flex">
                    <a href="#" class="w-10 h-10 rounded-full bg-neutral-200 flex items-center justify-center text-neutral-500
                        hover:bg-red-500 hover:text-white transition ease-in-out duration-300">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M23.9765 6.4168c-.105 2.338-1.739 5.5429-4.894 9.6088-3.2679 4.247-6.0258 6.3699-8.2898 6.3699-1.409 0-2.578-1.294-3.553-3.881l-1.9179-7.1138c-.719-2.584-1.488-3.878-2.312-3.878-.179 0-.806.378-1.8809 1.132l-1.129-1.457a315.06 315.06 0 003.501-3.1279c1.579-1.368 2.765-2.085 3.5539-2.159 1.867-.18 3.016 1.1 3.447 3.838.465 2.953.789 4.789.971 5.5069.5389 2.45 1.1309 3.674 1.7759 3.674.502 0 1.256-.796 2.265-2.385 1.004-1.589 1.54-2.797 1.612-3.628.144-1.371-.395-2.061-1.614-2.061-.574 0-1.167.121-1.777.391 1.186-3.8679 3.434-5.7568 6.7619-5.6368 2.4729.06 3.6279 1.664 3.4929 4.7969z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="basis-1/3">
            <h4 class="uppercase text-sm font-bold pb-4">Download App</h4>
            <div class="flex items-center gap-5">
                <a href="#"><img src="images/brands/apple-store.png" alt="apple store" width="128" height="36"></a>
                <a href="#"><img src="images/brands/google-play-store.png" alt="google play store" width="128"
                        height="36"></a>
            </div>
        </div>
    </div>

    <div class="w-full py-8">
        <div class="border-t"></div>
    </div>

    <div class="container mx-auto">
        <h4 class="uppercase text-sm font-bold pb-4">Quick links</h4>
    </div>

    <div class="w-full bg-neutral-800 text-[13px]">
        <div class="container flex text-neutral-400 mx-auto py-3 items-center justify-between">
            <div class="">Copyright © 2020 Surfside Media. All rights reserved</div>
            <div class="">
                <ul class="flex gap-5">
                    <li><a href="#" class="hover:text-red-500 border-r border-neutral-600 pr-5">About Us</a></li>
                    <li><a href="#" class="hover:text-red-500 border-r border-neutral-600 pr-5">Privacy Policy</a></li>
                    <li><a href="#" class="hover:text-red-500 border-r border-neutral-600 pr-5">Terms & Conditions</a>
                    </li>
                    <li><a href="#" class="hover:text-red-500">Return Policy</a></li>

                </ul>
            </div>
        </div>
    </div>


    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <script>
        window.onload = function () {
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 5,
                // spaceBetween: 30,
                slidesPerGroup: 1,
                loop: true,
                // autoplay: true,
                loopFillGroupWithBlank: true,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });
        };

    </script>
</body>

</html>
