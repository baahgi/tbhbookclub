@extends('layouts.app')
@section('title', 'clubs')

@section('content')

<div class="p-6 mt-8 rounded-lg shadow-lg bg-gray-1">
    <h2 class="">Clubs</h2> <hr class="border-brown-1">
    <p class="mt-4 leading-relaxed text-gray-800">
        It is the goal of TBH Book Club to have personal growth and mentoring clubs in every school and
        community in Africa, renewing minds, raising leaders and problem solvers, developing potentials,
        and making impact through reading and mentoring. We have some schools and communities on board and
        we are always looking forward to expanding in order to reach more people.
        If you want TBH Book Club to be in your school or community, apply using the links below.
    </p>
    <div class="flex justify-center my-6 space-x-2">
        <a class="btn-red" href="{{ route('club.school.create') }}">Apply as School</a>
        <a class="btn-teal" href="{{ route('club.community.create') }}">Apply as Community</a>
    </div>
</div>

<div class="mt-10">
    <img class="w-full rounded" src="{{ asset('images/banners/img_16.jpg') }}" alt="image">
</div>
<div class="mt-8 mb-4">
    <h4 class="mb-2 text-white">Participating Schools and Communities</h4>
    <div class="grid grid-cols-2 gap-2 lg:grid-cols-2">
        <img class="w-full" src="{{ asset('images/banners/img_08.jpeg') }}" alt="image">
        <img class="w-full" src="{{ asset('images/banners/img_11.jpeg') }}" alt="image">
        <img class="w-full" src="{{ asset('images/banners/img_12.jpeg') }}" alt="image">
        <img class="w-full" src="{{ asset('images/banners/img_04.jpeg') }}" alt="image">
    </div>
</div>

@endsection
