@extends('layouts.app')

@section('content')
    <div class="mt-8">

        <div class="flex items-center justify-center mt-8">
            <video controls  preload="auto" class="sm:max-w-2xl md:max-w-4xl lg:max-w-5xl">
                <source src="{{ asset($course->videos->first()->value('url')) }}" type="video/mp4">
            </video>
        </div>

        <div class="flex flex-col items-center justify-center mx-2 mt-6 space-y-2">
            @if ($intro_video)
            <div class="flex w-full p-2 space-x-3 rounded bg-gray-1 md:max-w-3xl">
                <div class="">
                    @if($playing_video->id != $intro_video->id )
                    <a href="{{ route('courses.episode', ['course'=>$course,'video'=>$intro_video]) }}">
                        <svg class="w-6 h-6 text-gray-900" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                    @else
                    <svg class="w-6 h-6 text-gray-900" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zM7 8a1 1 0 012 0v4a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v4a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"/>
                    </svg>
                    @endif
                </div>
                <div class="flex-1 overflow-hidden">
                    <div class="flex items-center space-x-5">
                        <p class="font-semibold text-brown-2">
                            <a href="{{ route('courses.episode', ['course'=>$course,'video'=>$intro_video]) }}"
                                class="truncate">{{ $intro_video->title }}
                            </a>
                        </p>
                    </div>
                    <div class="flex items-center justify-end space-x-4 select-none">
                        <p class="text-brown-1 sm:block">
                            @if($playing_video->id == $intro_video->id )
                            <span class="text-sm text-teal-600">playing...</span>
                            @endif
                        </p>
                        <span class="px-1 text-xs border rounded-full text-brown-2 border-brown-2">{{ 'intro' }}</span>
                    </div>
                </div>
            </div>
            @endif

            @foreach($videos as $video)
                <div class="flex w-full p-2 space-x-3 rounded bg-gray-1 md:max-w-3xl">
                    <div class="">
                        @if($playing_video->id != $video->id )
                        <a href="{{ route('courses.episode', ['course'=>$course,'video'=>$video]) }}">
                            <svg class="w-6 h-6 text-gray-900" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"/>
                            </svg>
                        </a>
                        @else
                        <svg class="w-6 h-6 text-gray-900" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zM7 8a1 1 0 012 0v4a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v4a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"/>
                        </svg>
                        @endif
                    </div>
                    <div class="flex-1 overflow-hidden">
                        <div class="flex items-center space-x-5">
                            <p class="font-semibold text-brown-2">
                                <a href="{{ route('courses.episode', ['course'=>$course,'video'=>$video]) }}"
                                    class="truncate">{{ $video->title }}
                                </a>
                            </p>
                        </div>
                        <div class="flex items-center justify-end space-x-4 select-none">
                            <p class="text-brown-1 sm:block">
                                @if($playing_video->id == $video->id )
                                <span class="text-sm text-teal-600">playing...</span>
                                @endif
                            </p>
                            <span class="px-1 text-xs border rounded-full text-brown-2 border-brown-2">{{ $video->episode }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div x-data="{tab: 'tab2'}" class="mt-8">
            <div class="flex overflow-x-auto ">
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


    </div>
@endsection
