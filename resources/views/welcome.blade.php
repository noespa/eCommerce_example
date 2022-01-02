<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel eCommerce</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="{{ asset('js/app.js') }}" defer></script>

    @livewireStyles
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


    @livewireScripts
</body>

</html>
