@extends('layouts.app')

@section('content')


    <div class="container mx-auto my-8 ">
        <div class="flex flex-wrap justify-center">
            <div class="w-full max-w-md ">
                <div class="flex flex-col overflow-hidden break-words bg-white rounded-md shadow-md">

                    @include('layouts.components.form.header', ['title'=> 'Login' ])

                    <form id="registation-form" class="w-full p-6" method="POST" action="{{ route('login') }}">
                        @csrf

                            @include('layouts.components.form.input', [
                                'title' => 'E-Mail Address',
                                'name'=> 'email',
                                'type' => 'email',
                                'requiredLabel' =>true,
                                'autocomplete' => true,
                            ])
                            @include('layouts.components.form.input', [
                                'title' => 'Password',
                                'name'=> 'password',
                                'type'=>'password',
                                'requiredLabel' =>true,
                                'autocomplete' => true,
                            ])
                            <div class="flex flex-wrap justify-between mt-6">
                                <button type="submit" class="px-6 btn-teal">
                                    {{ __('Login') }}
                                </button>
                                @if (Route::has('password.request'))
                                    <a class="ml-auto text-sm text-blue-500 no-underline whitespace-no-wrap hover:text-blue-700" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </form>

                        <p class="w-full p-8 text-sm text-center bg-gray-2">
                            {{ __("Don't have an account?") }}
                            <a class="ml-2 text-teal-600 no-underline hover:text-teal-700" href="{{ route('register') }}">
                                {{ __('Register') }}
                            </a>
                        </p>
                </div>
            </div>
        </div>
    </div>
@endsection
