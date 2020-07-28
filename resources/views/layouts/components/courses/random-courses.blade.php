<div class="mt-8">
    <h3 class="text-teal-600">Some Courses</h3>
    <div class="grid grid-cols-2 gap-2 md:grid-cols-3 lg:grid-cols-4">
        @foreach ($courses->take(8) as $course)
        <div class="my-4 overflow-hidden bg-white rounded-lg shadow-lg">
            <div class="relative pb-2/3">
                <img
                class="absolute object-cover w-full h-full rounded-t"
                src="images/secure_login.png"
                alt="img">
            </div>

            <div class="p-2 pb-4 rounded-b bg-gray-2">
                <div class="text-xs font-semibold tracking-wide text-gray-800 uppercase">
                    Duration: {{ $course->duration }}hrs
                </div>
                <div class="text-sm font-bold truncate">
                    {{ $course->title }}
                </div>
                <div class="mt-1 font-medium text-brown-3">
                    GHS {{ $course->price }}
                </div>
                <div class="flex mt-4 font-medium">
                    <svg class="w-5 h-5" v-for="i in 5" :key="i" :class="i <= 4 ? 'text-brown-3' : 'text-brown-1'"  viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                </div>
                <span class="flex justify-end mt-4">
                    <button class="text-xs btn-teal lg:text-sm">
                        <a href="{{ route('courses.show', $course) }}">Take course</a>
                    </button>
                </span>
            </div>
        </div>
        @endforeach
    </div>
</div>
