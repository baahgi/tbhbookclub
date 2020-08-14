@extends('layouts.app')

@section('content')
    <div class="mt-8">

        <div class="p-6 rounded bg-gray-1">
            <h3 class="mt-2 leading-6">
                {{ $course->title }}
            </h3>
            <p class="mt-2 text-gray-700">{{ $course->tutor->firstname }} {{ $course->tutor->lastname }}</p>
        </div>

        <div class="mt-8 lg:justify-between lg:flex">
            <div class="flex items-center justify-center ">
                <video
                    id="my-player"
                    controls
                    preload="auto"
                    width="896"
                    autoplay
                    class="max-w-sm sm:max-w-2xl md:max-w-4xl lg:max-w-5xl video-js"
                    data-setup="{}"
                    >
                    @if ($intro_video)
                        <source src="{{ asset($intro_video->url) }}" type="video/mp4">
                    @endif
                </video>
            </div>
            <div class="justify-end hidden ml-4 lg:flex ">
                <div class="">
                    <p class="ml-10 text-gray-2">{{ $videos->count() + 1 }} Lessons</p>
                    <div class="overflow-y-auto h-128">
                        <div class="flex flex-col items-center justify-center py-2 space-y-2 ">
                            {{-- This is only for the intro video --}}
                            @if ($intro_video)
                            <div class="flex w-full p-1 space-x-3 rounded bg-gray-1">
                                <div class="">
                                    <a href="">
                                        <svg class="w-6 h-6 text-gray-900" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"/>
                                        </svg>
                                    </a>

                                    {{-- it is hidden --}}
                                    {{-- <svg class="hidden w-6 h-6 text-gray-900" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zM7 8a1 1 0 012 0v4a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v4a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                    </svg> --}}
                                </div>
                                <div class="flex-1 overflow-hidden">
                                    <p class="font-semibold text-brown-2">
                                        <a href=""
                                            class="text-xs break-words">{{ $intro_video->title }}
                                        </a>
                                    </p>
                                </div>
                                <div class="flex items-start justify-end space-x-4 select-none">
                                    <span class="px-1 text-xs border rounded-md border-brown-2 text-brown-2">intro</span>
                                </div>
                            </div>
                            @endif

                            @foreach($videos as $video)
                            <div class="flex w-full p-1 space-x-3 rounded bg-gray-1">
                              <div class="">   {{-- showing the icon --}}
                                    @if (subscribedTo($course) )
                                        <a href="{{ route('courses.episode', ['course'=>$course,'video'=>$video]) }}">
                                            <svg class="w-6 h-6 text-gray-900" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"/>
                                            </svg>
                                        </a>
                                    @else
                                        <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"/>
                                        </svg>
                                    @endif

                                    {{-- <svg class="hidden w-6 h-6 text-gray-900" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zM7 8a1 1 0 012 0v4a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v4a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                    </svg> --}}
                                </div>
                                <div class="flex-1 overflow-hidden">
                                    <p class="font-semibold text-brown-2">
                                        @if (subscribedTo($course) )
                                        <a href="{{ route('courses.episode', ['course'=>$course,'video'=>$video]) }}"
                                            class="text-xs break-words">
                                            {{ $video->title }}
                                        </a>
                                        @else
                                        <span class="text-xs break-words"> {{ $video->title }} </span>
                                        @endif
                                    </p>
                                </div>
                                <div class="flex items-start justify-end space-x-4 select-none">
                                    <span class="px-1 text-xs border rounded-md border-brown-2 text-brown-2">{{ $video->episode }}</span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div x-data="{tab: 'tab1'}" class="mt-8">
            <div class="flex overflow-x-auto ">
                <button
                    class="px-4 py-1 rounded-t-lg focus:outline-none text-gray-1 hover:bg-gray-1 hover:text-gray-900 lg:hidden"
                    @click="tab = 'tab1'"
                    :class="{'border-b-2': tab === 'tab1'}"
                >
                    Lesson
                </button>
                <button
                    class="px-4 py-1 rounded-t-lg bg-whit text-gray-1 focus:outline-none hover:bg-gray-1 hover:text-gray-900"
                    @click="tab = 'tab2'"
                    :class="{'border-b-2': tab === 'tab2'}"
                >
                    About
                </button>
                <button
                    class="px-4 py-1 rounded-t-lg bg-whit text-gray-1 focus:outline-none hover:bg-gray-1 hover:text-gray-900"
                    @click="tab = 'tab3'"
                    :class="{'border-b-2': tab === 'tab3'}"
                >
                Reviews
                </button>
                <button
                    class="px-4 py-1 rounded-t-lg bg-whit text-gray-1 focus:outline-none hover:bg-gray-1 hover:text-gray-900"
                    @click="tab = 'tab4'"
                    :class="{'border-b-2': tab === 'tab4'}"
                >
                    Discussions
                </button>
                <button
                    class="px-4 py-1 whitespace-no-wrap rounded-t-lg bg-whit text-gray-1 focus:outline-none hover:bg-gray-1 hover:text-gray-900"
                    @click="tab = 'tab5'"
                    :class="{'border-b-2': tab === 'tab5'}"
                >
                    Projects &amp; Resources
                </button>
            </div>
            <div class="p-2">

                <div x-show="tab === 'tab1'">
                    <div class="lg:hidden">
                        <div class="">
                            <p class="mt-4 text-gray-2">{{ $videos->count() + 1 }} Lessons</p>
                            <div class="flex flex-col items-center justify-center mt-4 space-y-2">
                                @if ($intro_video)
                                <div class="flex w-full p-1 space-x-3 rounded bg-gray-1">
                                    <div class="">
                                        <a href="">
                                            <svg class="w-6 h-6 text-gray-900" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"/>
                                            </svg>
                                        </a>


                                        {{-- <svg class="hidden w-6 h-6 text-gray-900" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zM7 8a1 1 0 012 0v4a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v4a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                        </svg> --}}
                                    </div>
                                    <div class="flex-1 overflow-hidden">
                                        <p class="font-semibold text-brown-2">
                                            <a href=""
                                                class="text-xs">{{ $intro_video->title }}
                                            </a>
                                        </p>
                                    </div>
                                    <div class="flex items-start justify-end space-x-4 select-none">
                                        <span class="px-1 text-xs border rounded-md border-brown-2 text-brown-2">{{ 'intro' }}</span>
                                    </div>
                                </div> {{-- End of intro video --}}
                                @endif
                                @foreach($videos as $video)
                                <div class="flex w-full p-1 space-x-3 rounded bg-gray-1">
                                    <div class="">
                                        @if (subscribedTo($course))
                                        <a href="{{ route('courses.episode', ['course'=>$course,'video'=>$video]) }}">
                                            <svg class="w-6 h-6 text-gray-900" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"/>
                                            </svg>
                                        </a>
                                        @else
                                        <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"/>
                                        </svg>
                                        @endif

                                        {{-- <svg class="hidden w-6 h-6 text-gray-900" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zM7 8a1 1 0 012 0v4a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v4a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                        </svg> --}}
                                    </div>
                                    <div class="flex-1 overflow-hidden">
                                        <p class="font-semibold text-brown-2">
                                            @if (subscribedTo($course))
                                            <a href="{{ route('courses.episode', ['course'=>$course,'video'=>$video]) }}"
                                                class="text-xs">{{ $video->title }}
                                            </a>
                                            @else
                                            <span class="text-xs break-words"> {{ $video->title }} </span>
                                            @endif
                                        </p>
                                    </div>
                                    <div class="flex items-start justify-end space-x-4 select-none">
                                        <span class="px-1 text-xs border rounded-md border-brown-2 text-brown-2">{{ $video->episode }}</span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div x-show="tab === 'tab2'">
                    <div class="mt-8 md:space-x-3 md:flex">
                        <div class="p-6 bg-white lg:w-2/5">
                            <div class="flex items-center justify-center bg-gray-2">
                                <img class="object-cover w-24 h-24 rounded-full" src="{{ asset('images/secure_login.png') }}" alt="Advertisement">
                            </div>
                            <div class="mt-2">
                                <h6>{{ $course->tutor->firstname }} {{ $course->tutor->lastname }}</h6>
                                <p class="mt-2 text-sm text-gray-700">
                                   Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint, laborum exercitationem. Blanditiis beatae nulla numquam explicabo nostrum, magni reprehenderit. Rem obcaecati perferendis illo maiores blanditiis, beatae molestias suscipit ipsa neque!
                                </p>
                            </div>
                        </div>
                        <div class="p-6 mt-6 text-center bg-white rounded md:mt-0 lg:w-3/5">
                            <h5 class="font-medium capitalize">{{ $course->title }}</h5>
                            <div class="mt-4 text-sm text-left text-gray-700">
                                {{ $course->description }}
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="tab === 'tab3'"></div>
                <div x-show="tab === 'tab4'"></div>
                <div x-show="tab === 'tab5'"></div>
            </div>
        </div>







        <div class="flex items-center justify-center">
            <div class="w-full p-2 mt-6 rounded bg-gray-1 md:max-w-3xl">
                <h4>Subscription</h4>
                <p class="mt-4">
                    You have not subscribed to this course.
                    @guest
                        <a href='#' class="px-2 py-1 text-white whitespace-no-wrap bg-teal-600 rounded hover:bg-teal-500">Sign Up</a>
                    @endguest
                </p>
            </div>
        </div>



    </div>
@endsection


@push('custom-script')
    <script>
        videojs('my-player');
    </script>
@endpush
