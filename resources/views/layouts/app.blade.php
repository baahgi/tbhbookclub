<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TheBookClub') }} {{ ' | ' }}@yield('title')</title>
    {{-- <link href="https://vjs.zencdn.net/7.8.3/video-js.css" rel="stylesheet" /> --}}


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('custom-css')
</head>
<body class="h-screen antialiased text-gray-900 font-tahoma bg-brown-1">
    <div id="app">
        <div>
            <nav
                class="w-full py-2 bg-white"
                x-data="{ searchInputOpen: false, humburgerOpen: false, lgSearchInputOpen: false, authUserOpen: false, lgJoinUsOpen: false, joinUsOpen: false }"
            >
                <div class="flex items-center justify-between px-2 lg:px-4 lg:justify-start">
                    <div>
                        <a href="{{ route('pages.index') }}">
                            <img class="w-12 h-12 lg:h-16 lg:w-16" src="{{ asset('images/site-logo.jpg') }}" alt="site logo">
                        </a>
                    </div>

                    <div class="flex items-center space-x-5 lg:hidden justify-evenly">
                        <button @click="searchInputOpen = !searchInputOpen" type="menu" class="focus:outline-none">
                            <svg class="w-6 h-6 text-brown-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </button>
                        @guest
                            <ul class="">
                                <li><a href="{{ route('login') }}" class="px-2 py-1 font-medium text-gray-100 rounded bg-brown-1">Sign In</a></li>
                            </ul>
                            <button @click="humburgerOpen = !humburgerOpen" type="menu" class="focus:outline-none">
                                <svg class="w-6 h-6 text-brown-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"/>
                                </svg>
                            </button>
                        @endguest

                        @auth
                        <div class="cursor-pointer text-brown-1">
                            <span @click="humburgerOpen = !humburgerOpen">
                                <svg class="w-6 h-6 mr-2 select-none" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"/>
                                </svg>
                            </span>

                        </div>
                        @endauth

                    </div>

                    <div class="hidden mx-5 lg:block lg:ml-20 lg:flex-1"> {{-- large screens --}}
                        <ul class="grid grid-cols-5 gap-2 text-brown-1">
                            <li class="flex items-center list-none">
                                <svg class="w-4 h-4 mb-px text-brown-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                                </svg>
                                <a href="{{ route('pages.index') }}" class="px-1 text-sm tracking-wide whitespace-no-wrap {{ Request::is('/') ? 'active' : '' }}">HOME</a>
                            </li>
                            <li>
                                <a href="{{ route('pages.about') }}" class="px-1 text-sm tracking-wide whitespace-no-wrap {{ Request::is('about') ? 'active' : '' }}">ABOUT US</a>
                            </li>
                            <li>
                                <a href="{{ route('pages.contact') }}" class="px-1 text-sm tracking-wide whitespace-no-wrap {{ Request::is('contact') ? 'active' : '' }}">CONTACT US</a>
                            </li>
                            <li>
                                <a href="{{ route('pages.projects') }}" class="px-1 text-sm tracking-wide whitespace-no-wrap {{ Request::is('projects') ? 'active' : '' }}">PROJECTS</a>
                            </li>
                            <li>
                                <a href="{{ route('pages.team') }}" class="px-1 text-sm tracking-wide whitespace-no-wrap {{ Request::is('teams') ? 'active' : '' }}">OUR TEAM</a>
                            </li>
                            <li>
                                <a href="{{ route('pages.events.gallary') }}" class="px-1 text-sm tracking-wide whitespace-no-wrap {{ Request::is('events-and-gallery') ? 'active' : '' }}">EVENTS & GALLERY</a>
                            </li>
                            <li>
                                <a href="{{ route('pages.careers') }}" class="px-1 text-sm tracking-wide whitespace-no-wrap {{ Request::is('careers') ? 'active' : '' }}">CAREERS</a>
                            </li>
                            <li>
                                <a href="{{ route('pages.clubs') }}" class="px-1 text-sm tracking-wide whitespace-no-wrap {{ Request::is('clubs') ? 'active' : '' }}">CLUBS</a>
                            </li>
                            <li>
                                <a href="{{ route('pages.tbhacademy') }}" class="px-1 text-sm tracking-wide whitespace-no-wrap {{ Request::is('tbhacademy') ? 'active' : '' }}">TBH ACADEMY</a>
                            </li>
                            <li>
                                <a href="{{ route('pages.partner') }}" class="px-1 text-sm tracking-wide whitespace-no-wrap {{ Request::is('partner-with-us') ? 'active' : '' }}">PARTNER WITH US</a>
                            </li>
                        </ul>
                    </div>
                   <div class="self-end hidden mx-2 mr-4 lg:block"> <!--Search for large screen-->
                        <button @click="lgSearchInputOpen = !lgSearchInputOpen" type="menu" class="p-1 border rounded bg-brown-1 focus:outline-none">
                            <svg class="w-4 h-4 text-gray-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </button>
                   </div>

                    <div class="flex hidden lg:block">
                        @guest
                        <div class="flex items-center justify-between">
                            <span><a href="{{ route('login') }}" class="px-2 py-px font-medium text-white whitespace-no-wrap rounded bg-brown-1 hover:bg-gray-2 hover:text-gray-900">
                                Sign In</a>
                            </span>
                            <span @click="lgJoinUsOpen = !lgJoinUsOpen" class="flex ml-4 text-lg font-bold whitespace-no-wrap cursor-pointer text-brown-1">
                                Join Us
                                <svg class="self-center w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                </svg>
                            </span>
                        </div>
                        <template x-if="lgJoinUsOpen">
                            <div class="relative">
                                <div class="absolute z-10 p-2 bg-white border rounded">
                                    <p><a href="{{ route('member.register') }}" class="hover:text-brown-1 ">Become a Member</a></p>
                                    <p class="mt-4 whitespace-no-wrap">
                                        <a href="{{ route('volunteer.register') }}" class="hover:text-brown-1">Volunteer as a Mentor</a>
                                    </p>
                                </div>
                            </div>
                        </template>
                        <div class="mt-1">
                            <a href="{{ route('register') }}" class="px-1 text-sm font-medium border-t border-b border-dashed rounded border-brown-2 hover:bg-brown-2 hover:bg-gray-2">Sign Up to take a course</a>
                        </div>
                        @endguest
                        @auth
                            <div class="items-end content-end w-48">
                                <span @click="authUserOpen = !authUserOpen" class="flex self-end w-full ml-8 whitespace-no-wrap cursor-pointer text-brown-1">
                                  <span class="tracking-wider select-none">Hello  {{ Auth::user()->firstname }}</span>
                                    <svg class="self-center w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                    </svg>
                                </span>
                                <template x-if="authUserOpen">
                                    <div class="relative">
                                        <div class="absolute right-0 z-10 w-full pt-2 bg-white border rounded mr-">
                                            <p><a href="{{ route('member.register') }}" class="whitespace-no-wrap hover:text-brown-1"></a></p>
                                            <p class="mt-3">
                                                <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();"
                                                class="block pl-2 whitespace-no-wrap hover:bg-gray-1"> {{ __('Logout') }}
                                                </a>
                                            </p>
                                                <form  id="logout-form" action="{{ route('logout') }}" method="post" class="hidden">
                                                    @csrf
                                                </form>
                                        </div>
                                    </div>
                                </template>
                            </div>
                        @endauth

                    </div>
                </div>

                <template x-if="searchInputOpen">
                    <div  class="relative pt-4 lg:hidden"> {{-- small screen searchbar --}}
                        <div class="absolute z-10 w-full bg-white shadow-lg">
                            <form action="">
                                <input
                                class="w-full px-4 py-1 placeholder-gray-700 border rounded-sm focus:outline-none focus:bg-white"
                                type="search" name="" id=""
                                placeholder="search..."
                                autofocus>
                            </form>
                            <p class="px-4 py-2">
                                show your result here using ajax
                            </p>
                        </div>
                    </div>
                </template>
                <template x-if="humburgerOpen">
                    <div class="relative pt-4 tracking-wider lg:hidden">
                        <div class="absolute z-20 w-full overflow-visible bg-white border-t shadow-lg">
                            <p class="px-4 py-2 font-medium text-gray-700 ">
                                menu
                            </p>
                            <ul class="flex flex-col px-4 py-2 space-y-5 ">
                                @guest
                                    <li class="px-1">
                                        <a href="{{ route('register') }}" class="block px-2 rounded-sm focus:bg-gray-2">
                                            Sign Up to take a course
                                        </a>
                                    </li>
                                    <li @click="joinUsOpen=!joinUsOpen" class="flex px-1 px-2 rounded-sm cursor-pointer focus:bg-gray-2">
                                        Join Us
                                        <svg class="self-center w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                        </svg>
                                    </li>
                                    <template x-if="joinUsOpen">
                                        <div class="relative">
                                            <div class="ml-5 -mt-3">
                                                <p><a href="{{ route('member.register') }}" class="block hover:text-brown-1">Become a Member</a></p>
                                                <p class="mt-2 whitespace-no-wrap">
                                                    <a href="{{ route('volunteer.register') }}" class="block hover:text-brown-1">Volunteer as a Mentor</a>
                                                </p>
                                            </div>
                                        </div>
                                    </template>
                                @endguest

                                @auth
                                    <li class="px-1">
                                        <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"
                                        class="block px-2 rounded-sm focus:bg-gray-2">  {{ __('Logout') }}
                                        </a>
                                            <form  id="logout-form" action="{{ route('logout') }}" method="post" class="hidden">
                                                @csrf
                                            </form>
                                    </li>
                                @endauth
                            </ul>
                        </div>
                    </div>
                </template>

                <template x-if="lgSearchInputOpen">
                    <div class="relative hidden pt-4 mx-16 lg:block"> <!--Large screen search-->
                        <div class="absolute z-10 w-full bg-white shadow-lg">
                            <form action="">
                                <input
                                class="w-full px-4 py-1 placeholder-gray-700 border rounded-sm focus:outline-none focus:bg-white"
                                type="search" name="" id=""
                                placeholder="search..."
                                autofocus>
                            </form>
                            <p class="px-4 py-2">
                                show your result here using ajax
                            </p>
                        </div>
                    </div>
                </template>
            </nav>

            <!--The menu on mobile screen which is below the navbar-->
            <div class="p-2 overflow-hidden bg-gray-1 lg:hidden">
                <ul class="flex items-center space-x-4 overflow-scroll text-xs text-brown-2 md:space-x-6">
                    <li><a href="{{ route('pages.index') }}" class="p-1 tracking-wide whitespace-no-wrap {{ Request::is('/') ? 'active' : '' }}">HOME</a></li>
                    <li><a href="{{ route('pages.about') }}" class="p-1 tracking-wide whitespace-no-wrap {{ Request::is('about') ? 'active' : '' }}">ABOUT US</a></li>
                    <li><a href="{{ route('pages.contact') }}" class="p-1 tracking-wide whitespace-no-wrap {{ Request::is('contact') ? 'active' : '' }}">CONTACT US</a></li>
                    <li><a href="{{ route('pages.projects') }}" class="p-1 tracking-wide whitespace-no-wrap {{ Request::is('projects') ? 'active' : '' }}">PROJECTS</a></li>
                    <li><a href="{{ route('pages.team') }}" class="p-1 tracking-wide whitespace-no-wrap {{ Request::is('teams') ? 'active' : '' }}">OUR TEAMS</a></li>
                    <li><a href="{{ route('pages.events.gallary') }}" class="p-1 tracking-wide whitespace-no-wrap {{ Request::is('events-and-gallery') ? 'active' : '' }}">EVENTS & GALLERY</a></li>
                    <li><a href="{{ route('pages.careers') }}" class="p-1 tracking-wide whitespace-no-wrap {{ Request::is('careers') ? 'active' : '' }}">CAREERS</a></li>
                    <li><a href="{{ route('pages.clubs') }}" class="p-1 tracking-wide whitespace-no-wrap {{ Request::is('clubs') ? 'active' : '' }}">CLUBS</a></li>
                    <li><a href="{{ route('pages.tbhacademy') }}" class="p-1 tracking-wide whitespace-no-wrap {{ Request::is('tbhacademy') ? 'active' : '' }}">TBH ACADEMY</a></li>
                    <li><a href="{{ route('pages.partner') }}" class="p-1 tracking-wide whitespace-no-wrap {{ Request::is('partner-with-us') ? 'active' : '' }}">PARTNER WITH US</a></li>
                </ul>
            </div>
        </div> <!--End of navigation bar-->

        <main class="px-2 py-px mx-auto">
            @include('layouts.flash-messages')

            @yield('content')
        </main>
    </div>


    @include('layouts.footer')

    <script src="{{ asset('js/app.js') }}"></script>
    @stack('custom-script')
</body>
</html>
