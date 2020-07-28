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

                    @include('layouts.components.form.header', ['title'=> 'Register As Member' ])


                    <form id="registation-form" class="w-full p-6" method="POST" action="{{ route('member.register') }}">
                        @csrf

                        <div class="flex flex-wrap">
                            <label  class="block mb-2 text-sm text-gray-700">
                                {{ __('Join us and let’s read and grow together. Complete the form to apply for membership') }}
                            </label>
                        </div>


                        <div class="grid-cols-2 gap-3 sm:grid">
                            @include('layouts.components.form.input', [
                                'title' => 'First Name',
                                'name'=> 'firstname',
                                'requiredLabel' =>true,
                            ])

                            @include('layouts.components.form.input', [
                                'title' => 'Last Name',
                                'name'=> 'lastname',
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

                        </div>


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


                        <div class="mt-6 mb-10">
                            <label for="occupation" class="custom-form-label">
                                {{ __('Occupation') }}: *
                            </label>
                            <div class="mb-3">
                                <div class="md:flex">
                                    @include('layouts.components.form.radio', [
                                        'title' => 'Employee',
                                        'name'=> 'occupation',
                                        'id' => 'occEmp',
                                        'value' => 'employee',
                                    ])
                                    @include('layouts.components.form.radio', [
                                        'title' => 'Student',
                                        'name'=> 'occupation',
                                        'id' => 'occStu',
                                        'value' => 'student'
                                    ])
                                    @include('layouts.components.form.radio', [
                                        'title' => 'Others',
                                        'name'=> 'occupation',
                                        'id' => 'occOth',
                                        'value' => 'others'
                                    ])
                                </div>



                                @error('occupation')
                                    <p class="mt-4 text-xs italic text-red-500">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <!-- Employee section-->
                            <div id="employeeSection">
                                @include('layouts.components.form.input', [
                                    'title' => 'Name of Business',
                                    'name'=> 'nameOfBusiness',
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

                            </div>


                            <!-- Syudent section-->
                            <div id="studentSection">
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
                                @include('layouts.components.form.input', [
                                    'title' => 'Location of School',
                                    'name'=> 'locationOfSchool',
                                    'requiredLabel' =>true,
                                ])
                            </div>

                            <!--other section-->
                            <div id="otherSection">
                                @include('layouts.components.form.input', [
                                    'title' => 'please Specify',
                                    'name'=> 'otherOccupation',
                                    'requiredLabel' =>true,
                                ])
                            </div>
                        </div> {{-- end of the occupation div --}}






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
                            ])
                        </div>

                            @include('layouts.components.form.textarea', [
                                'title' => 'Future Aspiration',
                                'name'=> 'futureAspiration',
                                'requiredLabel' =>true,
                            ])

                            @include('layouts.components.form.textarea', [
                                'title' => 'Personal Mission Statement',
                                'name'=> 'personalMissionStatement',
                                'requiredLabel' =>true,
                                ])

                            @include('layouts.components.form.textarea', [
                                'title' => 'Why do you want to Join the Book Club',
                                'name'=> 'whyYouWantToJoin',
                                'requiredLabel' =>true,
                            ])



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
           $('#employeeSection').hide();
           $('#studentSection').hide();
           $('#otherSection').hide();


           $('#occEmp').click(function(){
                $('#employeeSection').show();
                $('#studentSection').hide();
                $('#otherSection').hide();
           })

           $('#occStu').click(function(){
                $('#employeeSection').hide();
                $('#studentSection').show();
                $('#otherSection').hide();
           })

           $('#occOth').click(function(){
                $('#employeeSection').hide();
                $('#studentSection').hide();
                $('#otherSection').show();
           })

           //showing the input form for others
           // when books often read is 'others'
           $('#otherBooks').hide();

           $('#booksOftenRead').click(function(){
               if($(this).val() === 'others'){
                    $('#otherBooks').show();
               }else{
                $('#otherBooks').hide();
               }
           })
  /*
           //the Entire frontend validation of the form
           $('#registation-form').validate({
              rules: {
                firstname: 'required',
                lastname: 'required',
                email: {
                    required: true,
                    email: true
                },
                phone: {
                    required: true,
                    number:true
                },
                dobDay: {
                    required:true,
                    digits: true,
                    range: [1, 31]
                },
                dobYear: {
                    required:true,
                    digits:true,
                    minlength:4,
                    maxlength:4,

                },
                occupation: {
                    required: true,
                },
                howOftenYouRead: {
                    required: true,
                },
                booksYouOftenRead: {
                    required: true,
                }
              }
           });
*/
         });



        </script>

    @endpush
