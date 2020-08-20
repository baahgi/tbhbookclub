@extends('layouts.app')
@section('title', 'Academy')

@section('content')
<div class="p-6 mt-8 rounded-lg shadow-lg bg-gray-1">
    <h2 class="">TBH Academy</h2> <hr class="border-brown-1">
    <p class="mt-4 leading-relaxed text-gray-800">
        We offer courses designed to train the youth in their personal growth development, help
        them discover their potentials, learn new and develop latent skills, renew their minds through
        relevant reading and mentoring, and prepare them for the future and career. The program is targeted
        at people between the ages of 12 to 45 years, with much focus on Junior and Senior High School graduates
        awaiting their results into tertiary education.
    </p>
    <p class="mt-2 leading-relaxed text-gray-800">
        The training program teaches personal growth and human capacity development subjects that are not actively
        taught in school, this is to supplement the education curriculum we have in Ghana and prepare the youth for
        life. We have mentors who closely guide participants in their growth journey.
    </p>
    <p class="mt-2 leading-relaxed text-gray-800">
       Subjects the training covers include;
    </p>
</div>

@include('layouts.components.courses.new-courses')

<div class="leading-relaxed lg:flex lg:space-x-3">
    <div class="p-6 mt-8 rounded-lg shadow bg-gray-1">
        <h4 class="">Programs</h4> <hr class="border-brown-1">

        <p class="mt-4 text-gray-800">
            Each subject has a well-developed curriculum and structure that covers all areas of the subject.
            It is our hope that after the student has been extensively taken through these courses and closely
            mentored, in addition the normal education/school curriculum, the youth with be prepared for life.
        </p>
    </div>

    <div class="p-6 mt-8 rounded-lg shadow bg-gray-1">
        <h4 class="">Why This Programme</h4> <hr class="border-brown-1">
        <p class="mt-4 text-gray-800">
            There is the need to prepare, educate, and groom the youth with skills and
            knowledge relevant for life and career aside the academic qualifications, hence a practical
            training and learning program on personal growth and human capacity development is the best
            solution to prepare the youth for the future. You will need a soft skill and knowledge that
            years of schooling will not provide and that is the gap we want to fill.

        </p>
        <p class="mt-4 text-gray-800">
            We run both online and onsite training. <a class="font-medium text-teal-600 underline" href="">Click here</a> to download registration forms for
            onsite training or <a class="text-teal-600" href="{{ route('register') }}">sign up</a> here for the online training.
            Completed forms should be sent to <span class="text-teal-600">tbhclubgh@gmail.com</span> or
            call <span class="text-teal-600">0503186763</span>
        </p>
    </div>
</div>

<div class="p-6 my-8 leading-relaxed rounded-lg shadow bg-gray-1">
    <h4 class="">Host a Course</h4> <hr class="border-brown-1">
    <p class="mt-2 text-gray-800">
        Share your skills and expertise with the world. <a class="text-teal-600" href="">Click here</a> to start
    </p>

</div>

@include('layouts.components.courses.random-courses')

@endsection
