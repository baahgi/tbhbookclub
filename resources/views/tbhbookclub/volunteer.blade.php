@extends('layouts.app')

@push('custom-css')
    <style>

    </style>
@endpush

@section('content')
    <div class="container mx-auto mt-8">
        <div class="flex flex-wrap justify-center">
            <div class="w-full max-w-2xl">
                <div class="flex flex-col break-words bg-white shadow-md">

                    @include('layouts.components.form.header', ['title'=> 'Register As Volunteer' ])

                    <form id="registation-form" class="w-full p-6" method="POST" action="{{ route('volunteer.register.store') }}">
                        @csrf

                        <div class="flex flex-wrap">
                            <label  class="block font-bold text-gray-700 underline">
                                {{ __('Details for Volunteer') }}
                            </label>
                        </div>
                        <div class="flex flex-wrap mt-3">
                            <label  class="block mb-2 text-sm italic text-gray-600">
                                {{ __('You can volunteer with us as mentor to help students read and grow and also help the club with administrative duties. Complete the form to apply') }}
                            </label>
                        </div>

                        <div class="gap-3 md:grid md:grid-cols-2">
                            @include('layouts.components.form.input', [
                            'title' => 'First Name',
                            'name'=> 'firstname',
                            'options' => [ 'autofocus'],
                            'autocomplete',
                            'requiredLabel' =>true,
                            ])

                            <div class="mt-6 md:mt-0">
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




                        <div class="gap-3 md:grid md:grid-cols-2">
                            @include('layouts.components.form.input', [
                                'title' => 'Phone Number',
                                'name'=> 'phone',
                                'requiredLabel' =>true,
                            ])

                            <div class="mt-6 md:mt-0">
                                @include('layouts.components.form.input', [
                                    'title' => 'Other Phone Number',
                                    'name'=> 'otherPhone',
                                ])
                            </div>
                        </div>

                        @php
                            $maritalStatus = [
                                'single' => 'single',
                                'married' => 'married',
                                'divorce' => 'divorce',
                                'seperated' => 'seperated',
                            ];
                        @endphp

                        @include('layouts.components.form.select', [
                            'title' => 'Marital Status',
                            'name' => 'maritalStatus',
                            'items'=> $maritalStatus,
                        ])

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





                        <div class="flex flex-wrap mt-16">
                            <label  class="block font-bold text-gray-800 underline">
                                {{ __('Educational Background') }}:
                            </label>
                        </div>

                        @include('layouts.components.form.input', [
                            'title' => 'Name of School',
                            'name'=> 'nameOfSchool',
                            'requiredLabel' =>true,
                        ])
                        @include('layouts.components.form.input', [
                            'title' => 'Level of Education (SHS/Diploma/HND/Undergraduate)',
                            'name'=> 'levelOfEducation',
                            'requiredLabel' =>true,
                        ])
                        @include('layouts.components.form.input', [
                            'title' => 'Course of study',
                            'name'=> 'courseOfStudy',
                            'requiredLabel' =>true,
                        ])





                        <div class="flex flex-wrap mt-16">
                            <label  class="block font-bold text-gray-800 underline">
                                {{ __('Employment History (if Applicable)') }}
                            </label>
                        </div>

                        @include('layouts.components.form.input', [
                            'title' => 'Name of Business',
                            'name'=> 'nameOfBusiness',
                        ])
                        @include('layouts.components.form.input', [
                            'title' => 'Job Title',
                            'name'=> 'jobTitle',
                        ])
                        @include('layouts.components.form.input', [
                            'title' => 'Nature of Business / Role',
                            'name'=> 'natureOfBusiness',
                        ])
                        @include('layouts.components.form.input', [
                            'title' => 'Business Address / Location',
                            'name'=> 'businessAddress',
                        ])

                        <div class="mt-16"></div>

                            @php

                            $readingTimes = [
                                'once a month' => 'once a month',
                                'when I have time' => 'when I have time',
                                'regularly or very often' => 'regularly or very often',
                                'not at all' => 'not at all',
                            ];
                            $booksOftenRead = [
                            'self help' => 'self help',
                            'fiction'=>'fiction',
                            'non-fiction' => 'non-fiction',
                            'poetry' => 'poetry', 'others' => 'others',
                            ];

                            @endphp

                        @include('layouts.components.form.select', [
                        'title' => 'How often do you read',
                        'name'=> 'howOftenYouRead',
                        'items' => $readingTimes
                        ])
                        @include('layouts.components.form.select', [
                        'title' => 'Books you often read',
                        'name'=> 'booksOftenRead',
                        'items' => $booksOftenRead
                        ])

                        <div id="otherBooks" class="">
                        @include('layouts.components.form.input', [
                        'title' => 'Others (Specify)',
                        'name'=> 'otherBooksRead',
                        'requiredLabel' =>true,
                        ])
                        </div>




                        @include('layouts.components.form.input', [
                        'title' => 'How willing are you to paticipate',
                        'name'=> 'willingnessToParticipate',
                        ])
                        @include('layouts.components.form.input', [
                        'title' => 'When are you available',
                        'name'=> 'yourAvailability',
                        ])

                        <div class="flex flex-wrap mt-6 -mb-5">
                            <label  class="block mb-2 text-sm italic text-gray-700">
                                {{ __('
                                    Tell us about your skills and interests. Have you worked on any project especially educational,
                                    voluntary etc., published documents, articles, reports or have a personal idea that impact the world?
                                    List and discuss what motivates you and what’s your personal statement?
                                    Are you a member of any professional association or group? If yes name them
                                ') }}
                            </label>
                        </div>
                        @include('layouts.components.form.textarea', [
                        'title' => 'Skills and Interest',
                        'name'=> 'skillsAndInterest',
                        ])



                        <div class="flex flex-wrap mt-16">
                            <label  class="block font-bold text-gray-800 underline">
                                {{ __('References') }}
                            </label>
                        </div>

                        <div class="flex flex-wrap mb-1">
                            <label  class="block mt-2 text-sm italic font-semibold text-gray-600">
                                {{ __('Reference 1') }}
                            </label>
                        </div>

                        @include('layouts.components.form.input', [
                            'title' => 'Name',
                            'name'=> 'ref_name1',
                            'requiredLabel' =>true,
                            ])


                        <div class="md:grid-cols-2 md:gap-2 md:grid">
                            @include('layouts.components.form.input', [
                                'title' => 'Occupation',
                                'name'=> 'ref_occupation1',
                                'requiredLabel' =>true,
                                ])
                            @include('layouts.components.form.input', [
                                'title' => 'Place of Work',
                                'name'=> 'ref_placeOfWork1',
                                'requiredLabel' =>true,
                                ])
                            @include('layouts.components.form.input', [
                                'title' => 'Email',
                                'name'=> 'ref_email1',
                                'requiredLabel' =>true,
                                ])

                            @include('layouts.components.form.input', [
                                'title' => 'Phone',
                                'name'=> 'ref_phone1',
                                'requiredLabel' =>true,
                                ])
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
     $(function(){

        $('#otherBooks').hide();

        $('#booksOftenRead').click(function(){
            if($(this).val() === 'others'){
                $('#otherBooks').show();
            }else{
            $('#otherBooks').hide();
            }
        })
/*
       $('#registation-form').validate({
          rules: {
            firstname: 'required',
            lastname: 'required',
            email: {
                required: true,
                email: true
            },
           nationality: 'required',
           maritalStatus: 'required',
           phone: {
               required:true,
               digits:true
           },
           otherPhone: {
               digits:true
           },
           countryOfResidence: 'required',
           residentialAddress: 'required',
           nameOfSchool: 'required',
           levelOfEducation: 'required',
           courseOfStudy: 'required',
           howOftenYouRead: 'required',
           booksOftenRead: 'required',
           willingnessToParticipate: 'required',
           skillsAndInterest: 'required',


          }
       }); */

     });



    </script>

@endpush
