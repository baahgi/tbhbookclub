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

                    @include('layouts.components.form.header', ['title'=> 'Firm Partnership' ])


                    <form id="registation-form" class="w-full p-6" method="POST" action="{{ route('partner.firm.store') }}">
                        @csrf

                        @include('layouts.components.form.input', [
                            'title' => 'Name of Firm',
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
                            'title' => 'Years of Operation',
                            'name'=> 'yearsOfOperation',
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


                        @include('layouts.components.form.input', [
                            'title' => 'Name of Contact Person',
                            'name'=> 'contactPerson',
                            'requiredLabel' =>true,
                        ])


                        @include('layouts.components.form.textarea', [
                            'title' => 'How often do you wish to contribute to this course and in what way?',
                            'name'=> 'howOftenYouWishToContribute',
                            'requiredLabel' =>true,
                        ])



                        <div class="flex flex-wrap justify-end mt-6">
                            <button type="submit" class="px-6 btn-teal">
                                {{ __('Register') }}
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
        //         nameOfFirm: 'required',
        //         email: {
        //             required: true,
        //             email: true
        //         },
        //         phone: {
        //             required: true,
        //             number:true
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
