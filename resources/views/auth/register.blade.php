@extends('layouts.app')
@section('title', 'Register')
@push('custom-css')
    <style>

    </style>
@endpush

@section('content')
    <div class="container mx-auto my-8">
        <div class="flex flex-wrap justify-center">
            <div class="w-full max-w-2xl">
                <div class="flex flex-col break-words bg-white shadow-md">

                    @include('layouts.components.form.header', ['title'=> 'Register to take our courses' ])


                    <form id="registation-form" class="w-full p-6" method="POST" action="{{ route('register') }}">
                        @csrf

                            <div class="gap-3 -mt-6 sm:grid-cols-2 sm:grid">

                                @include('layouts.components.form.input', [
                                    'title' => 'First Name',
                                    'name'=> 'firstname',
                                    'options' => [ 'autofocus'],
                                    'autocomplete',
                                    'requiredLabel' =>true,
                                ])

                                <div class="mt-6 sm:mt-0">
                                    @include('layouts.components.form.input', [
                                        'title' => 'Last Name',
                                        'name'=> 'lastname',
                                        'requiredLabel' =>true,
                                    ])
                                </div>
                            </div>


                            @include('layouts.components.form.input', [
                                'title' => 'E-Mail Address',
                                'name'=> 'email',
                                'type' => 'email',
                                'requiredLabel' =>true,
                            ])

                            @include('layouts.components.form.input', [
                                'title' => 'Phone Number',
                                'name'=> 'phone',
                            ])

                            @include('layouts.components.form.input', [
                                'title' => 'Nationality',
                                'name'=> 'nationality',
                                'requiredLabel' =>true,
                            ])

                            @include('layouts.components.form.input', [
                                'title' => 'Password',
                                'name'=> 'password',
                                'type'=>'password',
                                'requiredLabel' =>true,
                            ])


                            <div class="flex flex-wrap mt-6">
                                <label for="password-confirm" class="custom-form-label">
                                    {{ __('Confirm Password') }}:
                                </label>

                                <input id="password-confirm" type="password" class="custom-form-input"
                                name="password_confirmation" >
                            </div>

                            <div class="flex flex-wrap justify-end mt-6">
                                <button type="submit" class="px-6 btn-teal">
                                    {{ __('Register') }}
                                </button>
                            </div>

                        </form>

                        <p class="w-full p-8 text-sm text-center bg-gray-2">
                            {{ __('Already have an account?') }}
                            <a class="ml-2 text-teal-600 no-underline hover:text-teal-700" href="{{ route('login') }}">
                                {{ __('Login') }}
                            </a>
                        </p>


                </div>
            </div>
        </div>
    </div>

    @endsection

    @push('custom-script')


    {{-- <script src="{{ asset('js/jqvalidation.js') }}"></script> --}}

        <script>
       /*  $(function(){

           $('#registation-form').validate({
              rules: {
                firstname: 'required',
                lastname: 'required',
                email: {
                    required: true,
                    email: true
                },
               nationality: 'required',
               phone: {
                   digits:true
               }




              }
           });

         });

*/

        </script>

    @endpush
