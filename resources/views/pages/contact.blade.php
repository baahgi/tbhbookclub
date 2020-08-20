@extends('layouts.app')
@section('title', 'Contact')

@section('content')

<div class="p-6 mt-8 rounded-lg shadow-lg bg-gray-1">
    <h2 class="">Contact Us</h2> <hr class="border-brown-1">
    <p class="mt-4 leading-relaxed text-gray-800">
      We would love to hear from you
    </p>
</div>

<div class="max-w-2xl p-6 mx-auto mt-4 bg-white rounded-lg shadow-lg">
    <h4 class="">Contact Us</h4> <hr class="border-brown-1">
    <div class="mt-1 leading-relaxed text-gray-800">
        <form id="registation-form" class="w-full p-6" method="POST" action="{{ route('register') }}">
            @csrf

                    @include('layouts.components.form.input', [
                        'title' => 'Name',
                        'name'=> 'name',
                        'options' => [ 'autofocus'],
                        'autocomplete',
                        'requiredLabel' =>true,
                    ])

                    @include('layouts.components.form.input', [
                        'title' => 'E-Mail Address',
                        'name'=> 'email',
                        'type' => 'email',
                        'requiredLabel' =>true,
                    ])

                    @include('layouts.components.form.input', [
                        'title' => 'Subject',
                        'name'=> 'subject',
                        'requiredLabel' =>true,
                    ])

                    @include('layouts.components.form.textarea', [
                        'title' => 'Message',
                        'name'=> 'message',
                        'requiredLabel' =>true,
                    ])

                    <div class="flex flex-wrap justify-end mt-6">
                        <button type="submit" class="px-6 btn-teal">
                            {{ __('Send') }}
                        </button>
                    </div>
        </form>
    </div>
</div>


@endsection
