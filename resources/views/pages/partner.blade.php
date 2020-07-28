@extends('layouts.app')
@section('title', 'Partner')

@section('content')
<div class="p-6 mt-8 border rounded-lg shadow-lg bg-gray-1 border-brown-2">
    <h2 class="">Partner with Us</h2> <hr class="border-brown-1">
    <p class="mt-4 leading-relaxed text-gray-800">
        The vision is big and we can’t achieve it alone. Partner with to help raise effective leaders, change makers, and problem solvers for Africa. Partner as an
        Individual or a Firm.

    </p>
    <div class="flex justify-center mt-6 space-x-2">
        <a class="hover:bg-red-700 btn-red" href="{{ route('partner.individual.create') }}">Partner as individual</a>
        <a class="hover:bg-teal-700 btn-teal" href="{{ route('partner.firm.create') }}">Partner as firm</a>
    </div>
</div>


@endsection
