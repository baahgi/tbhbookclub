@extends('layouts.app')
@section('title', 'Events & Gallery')

@section('content')
<div class="p-6 mt-8 rounded-lg shadow-lg bg-gray-1">
    <h2 class="">Events</h2> <hr class="border-brown-1">
    <p class="mt-4 leading-relaxed text-gray-800">
        We organize often organize events
    </p>
</div>

<div class="mt-8 mb-4">
    <h4 class="mb-2 text-white">Some Events</h4>
    <div class="grid grid-cols-2 gap-2 lg:grid-cols-3">
        <img class="w-full" src="images/banners/img_01.jpeg" alt="big-image">
        <img class="w-full" src="images/banners/img_07.jpeg" alt="big-image">
        <img class="w-full" src="images/banners/img_03.jpeg" alt="big-image">
        <img class="w-full" src="images/banners/img_05.jpeg" alt="big-image">
        <img class="w-full" src="images/banners/img_06.jpeg" alt="big-image">
        <img class="w-full" src="images/banners/img_02.jpeg" alt="big-image">
    </div>
</div>
@endsection
