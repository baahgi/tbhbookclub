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

                    @include('layouts.components.form.header', ['title'=> 'School club Registration' ])


                    <form id="registation-form" class="w-full p-6" method="POST" action="{{ route('club.store') }}">
                        @csrf

                        <input type="hidden" name="type" value="school">

                        @include('layouts.components.form.input', [
                            'title' => 'Name of School',
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

                        @include('layouts.components.form.input', [
                            'title' => 'Country',
                            'name'=> 'country',
                            'requiredLabel' =>true,
                        ])



                        @include('layouts.components.form.input', [
                            'title' => 'Location and Address',
                            'name'=> 'address',
                        ])

                        @include('layouts.components.form.input', [
                            'title' => 'Name of Contact Person',
                            'name'=> 'contactPerson',
                            'requiredLabel' =>true,
                        ])

                        @include('layouts.components.form.input', [
                            'title' => 'Available Days and Time for Club Meeting',
                            'name'=> 'timeForMeetings',
                        ])


                        @include('layouts.components.form.textarea', [
                            'title' => 'Special Request / Additional Information',
                            'name'=> 'specialRequest',
                        ])


                        <div class="flex flex-wrap justify-end mt-6">
                            <button type="submit" class="px-6 btn-teal">
                                {{ __('Apply') }}
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
        //         country: {
        //             required: true,
        //         },
        //         contactPerson: {
        //             required: true,
        //         },
        //         timeForMeetings: {
        //             required: true,
        //         }

        //       }
        //    });


        //  });



        </script>

    @endpush
