<div class="px-1 mt-8 font-semibold">
    <h6 class="text-white">Programs</h6>
    <div class="flex flex-wrap mt-2 space-x-2 italic">
        <span class="px-1 py-1 mt-1 text-sm capitalize border rounded-lg shadow border-gray-2 text-gray-1 hover:text-teal-100">
            <a href="{{ route('programs.index') }}">All</a>
        </span>
        @foreach ($programs as $program)
            <span class="px-1 py-1 mt-2 text-xs capitalize border rounded-lg shadow border-gray-2 text-gray-1 hover:text-teal-100">
                <a href="{{ route('programs.show', $program) }}">{{ $program->title }}</a>
            </span>
        @endforeach

    </div>
</div>
