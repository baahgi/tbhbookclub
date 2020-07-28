@extends('layouts.app')
@section('title', 'Projects')

@section('content')
<div class="p-6 mt-8 rounded-lg shadow-lg bg-gray-1">
    <h2 class="">Reading and Mentoring Centre</h2> <hr class="border-brown-1">
    <p class="mt-4 leading-relaxed text-gray-800">
        In our quest to raise problem solvers and effective leaders for Africa through selective
        reading and mentoring, we want to bring knowledge sharing and mentoring closer to the youth,
        hence we are building Reading & Mentoring Centres in every district in Ghana. And to contribute
        to the vision of making Ghana the cleanest city in Africa, we are using plastic waste for our buildings.
    </p>
</div>

<div class="mt-8 mb-4">
    <h4 class="mb-2 text-white">Some of our Reading Sessions</h4>
    <div class="grid grid-cols-2 gap-2 lg:grid-cols-3">
        <img class="w-full" src="images/best_selling_books.jpg" alt="big-image">
        <img class="w-full" src="images/best_selling_books.jpg" alt="big-image">
    </div>
</div>
@endsection
