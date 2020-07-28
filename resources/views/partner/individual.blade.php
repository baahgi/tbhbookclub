@extends('layouts.app')
@section('title', 'Partnership')

@push('custom-css')
    <style>

    </style>
@endpush

@section('content')
    <div class="container mx-auto mt-8">
        <div class="flex flex-wrap justify-center">
            <div class="w-full max-w-2xl">
                <div class="flex flex-col break-words bg-white shadow-md">

                    @include('layouts.components.form.header', ['title'=> 'Individual Partnership' ])


                    <form id="registation-form" class="w-full p-6" method="POST" action="{{ route('partner.individual.store') }}">
                        @csrf

                        @include('layouts.components.form.input', [
                            'title' => 'Full Name',
                            'name'=> 'name',
                            'requiredLabel' =>true,
                        ])
                        @include('layouts.components.form.input', [
                            'title' => 'E-Mail Address',
                            'name'=> 'email',
                            'type'=>'email',
                            'requiredLabel' =>true,
                        ])

                        @include('layouts.components.form.input', [
                            'title' => 'Phone Number',
                            'name'=> 'phone',
                            'requiredLabel' =>true,
                        ])


                            @php

                            $months = [
                                1 => 'January',
                                2 => 'February',
                                3 => 'March',
                                4 => 'April',
                                5 => 'May',
                                6 => 'June',
                                7 => 'July',
                                8 => 'August',
                                9 => 'September',
                                10 => 'October',
                                11 => 'November',
                                12 => 'December'
                            ];
                            $days=[];
                            for ($i=1; $i <= 31 ; $i++) {
                                $days[$i] = $i;
                            }

                            $years=[];
                            for ($i=Carbon\Carbon::now()->year; $i >= 1935; $i--) {
                                $years[$i]=$i;
                            }
                            @endphp

                        <label class="block mt-6 -mb-2 text-sm font-bold text-gray-800">
                            {{ __('Date of Birth') }}:
                        </label>
                        <div class="grid grid-cols-4 gap-2">
                            <div class="col-span-2">
                                @include('layouts.components.form.select', [
                                    'title' => 'Month',
                                    'name' => 'dobMonth',
                                    'items'=> $months,
                                ])
                            </div>

                            @include('layouts.components.form.select', [
                                'title' => 'Day',
                                'name' => 'dobDay',
                                'items'=> $days,
                            ])
                            @include('layouts.components.form.select', [
                                'title' => 'Year',
                                'name' => 'dobYear',
                                'items'=> $years,
                            ])
                        </div>

                        <div class="md:flex md:space-x-3">
                            <div class="flex-1">
                            @include('layouts.components.form.input', [
                                'title' => 'Nationality',
                                'name'=> 'nationality',
                                'requiredLabel' =>true,
                            ])
                            </div>
                            <div class="flex-1">
                            @include('layouts.components.form.input', [
                                'title' => 'Country of Residence',
                                'name'=> 'countryOfResidence',
                                'requiredLabel' =>true,
                            ])
                            </div>
                        </div>

                        @include('layouts.components.form.input', [
                            'title' => 'Residential Address',
                            'name'=> 'residentialAddress',
                            'requiredLabel' =>true,
                        ])

                        @include('layouts.components.form.input', [
                            'title' => 'Occupation',
                            'name'=> 'occupation',
                            'requiredLabel' =>true,
                        ])


                        @include('layouts.components.form.input', [
                            'title' => 'Job Title',
                            'name'=> 'jobTitle',
                            'requiredLabel' =>true,
                        ])
                        @include('layouts.components.form.input', [
                            'title' => 'Nature of Business / Role',
                            'name'=> 'natureOfBusiness',
                            'requiredLabel' =>true,
                        ])
                        @include('layouts.components.form.input', [
                            'title' => 'Business Address / Location',
                            'name'=> 'businessAddress',
                            'requiredLabel' =>true,
                        ])




                        @include('layouts.components.form.textarea', [
                            'title' => 'How often do you wish to contribute to this course and in what way?',
                            'name'=> 'howOftenYouWishToContribute',
                            'requiredLabel' =>true,
                        ])







                        <div class="flex flex-wrap justify-end mt-6">
                            <button type="submit" class="px-6 btn-teal">
                                {{ __('Submit') }}
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    @endsection

    @push('custom-script')


    {{-- <script src="{{ asset('js/jqvalidation.js') }}"></script> --}}

        <script>
        //  $(function(){

        //    //the Entire frontend validation of the form
        //    $('#registation-form').validate({
        //       rules: {
        //         name: 'required',
        //         email: {
        //             required: true,
        //             email: true
        //         },
        //         phone: {
        //             required: true,
        //             number:true
        //         },
        //         dobDay: {
        //             required:true,
        //             digits: true,
        //             range: [1, 31]
        //         },
        //         dobYear: {
        //             required:true,
        //             digits:true,
        //             minlength:4,
        //             maxlength:4,

        //         },
        //         occupation: {
        //             required: true,
        //         },
        //         howOftenYouWishToContribute: {
        //             required: true,
        //         },
        //         natureOfBusiness: {
        //             required: true,
        //         }

        //       }
        //    });


        //  });



        </script>

    @endpush
