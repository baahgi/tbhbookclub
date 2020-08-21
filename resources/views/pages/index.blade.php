@extends('layouts.app')
@section('title', 'Home')

@section('content')
      <!--Sliding images-->
      <div class="-mx-2">
        <div class="text-center">
            <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="w-full carousel-item active">
                        <img src="images/banners/img_10.jpg" class="block w-full" alt="Image">
                        <div class="carousel-caption bg-gray-1">
                            <h2 class="text-sm md:text-base lg:text-lg text-brown-3">We are raising the next generation of change makers</h2>
                            <a href="{{ route('member.register') }}" role="button" class="mt-2 text-sm font-medium btn-teal ">Join Us</a>
                        </div>
                    </div>
                    <div class="w-full carousel-item">
                        <img src="{{ asset('images/banners/img_13.jpg') }}" class="block w-full" alt="Image">
                    </div>
                    <div class="w-full carousel-item">
                        <img src="{{ asset('images/banners/img_14.jpg') }}" class="block w-full" alt="Image">
                    </div>
                    <div class="w-full carousel-item">
                        <img src="{{ asset('images/banners/img_15.jpg') }}" class="block w-full" alt="Image">
                    </div>
                    <div class="w-full carousel-item">
                        <img src="{{ asset('images/banners/img_21.jpg') }}" class="block w-full" alt="Image">
                    </div>
                </div>

                <a href="#carouselExampleIndicators" class="carousel-control-prev" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a href="#carouselExampleIndicators" class="carousel-control-next" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div> <!--End of carousel-->

    <div class="flex flex-col justify-center mt-8">
        <div class="p-2 mt-1 rounded shadow-lg bg-gray-1 lg:mt-4">
            <h3 class="text-center">You are Welcome</h3>
            <p class="px-6 my-4 leading-relaxed tracking-wide text-gray-800">
                We believe no matter how many times our leaders fail us, the change Africa desires is still with the
                people. We are on a mission to raise a generation of visionary leaders, problem solvers, and better role models for Africa,
                by renewing our mindset and developing potentials and skills through selective reading, knowledge sharing,
                and intentional mentoring of the youth. At TBH Book Club, we read books, get trained in personal growth,
                and are mentored by experts. Welcome to our world, we are glad to have you here, join and
                support us.
            </p>
        </div>

        @include('layouts.components.programs.list')

        <div class="mt-8 lg:space-x-4 lg:flex">
            <div class="flex justify-center">
                <img src="{{ asset('images/banners/img_07.jpeg') }}" class="" width="580" height="700" alt="Advertisement">
            </div>
            <div class="mt-1 md:mt-4 lg:mt-0">
                <img class="" src="{{ asset('images/banners/img_21.jpg') }}" alt="">
                <p class="text-xs leading-tight text-gray-1 md:text-sm">
                    <span class="font-bold text-white">Message:</span>  Join our monthly book reading and discussion.
                    Guess the Book we are Reading? <span class="font-bold text-white">#UntilEveryoneReads #JoinUs</span>
                </p>
            </div>
        </div>

      @include('layouts.components.courses.new-courses')


        <div class="mt-8 md:mx-1 md:flex md:space-x-4">
            <div class="">
                <img src="images/banners/img_19.jpg" alt="Advertisement">
            </div>
            <div class="px-4 py-2 mt-1 rounded shadow-lg bg-gray-1 md:rounded-none md:mt-0">
                <p class="mt-4 leading-relaxed text-gray-800 lg:text-xl lg:py-6">
                    Unleash your potentials, acquire and develop skills, gain knowledge,
                    and renew your mind for your personal growth, life, and career.
                    Register for our personal growth development courses.
                </p>
                <div class="flex justify-center ">
                    <a href="{{ route('pages.tbhacademy') }}" role="button" class="btn-brown lg:px-6">
                        Register
                    </a>
                </div>
            </div>
        </div>

        <div class="mt-8"> <!--big banner-->
            <img class="w-full" src="{{ asset('images/banners/img_18.jpg') }}" alt="">
        </div>

        <div class="mt-8 lg:flex lg:space-x-4 lg:mx-1">
            <div class="lg:flex-1">
                <img class="" src="{{ asset('images/banners/img_17.jpg') }}" alt="">
            </div>
            <div class="flex flex-col px-4 py-2 mt-2 space-y-2 bg-white lg:rounded-full lg:justify-center lg:space-y-6 lg:mt-0">
                <p class="text-2xl font-medium text-center text-gray-600">
                    Support our Course for a Better Africa
                </p>
                <div class="flex justify-center mt-1">
                    <a href="{{ route('pages.partner') }}" role="button"
                    class="px-6 py-1 mt-2 btn-brown">
                        Partner with Us
                </a>
                </div>
            </div>
        </div>

        <div class="mt-10">
            <img class="w-full" src="{{ asset('images/banners/img_20.jpg') }}" alt="big-image">
        </div>


    </div>

@endsection
