@extends('layouts.app')
@section('title', 'About')

@section('content')

<div class="p-6 mt-8 rounded-lg shadow-lg bg-gray-1">
    <h2 class="">About Us</h2> <hr class="border-brown-1">
    <p class="mt-4 leading-relaxed text-gray-800">
        TBH Book Club is a personal growth development and mentoring club aimed at using reading relevant books and close
        mentoring to raise a generation of Africans who will think different, lead right and effectively,
        focus on intentionally developing their potentials and skills to solve problems and bring change to their communities.
    </p>
    <p class="mt-2 leading-relaxed text-gray-800">
        We believe our mindset influences our actions and if we renew the mindset of the youth with the right information or
        knowledge, we can raise the people Africa needs to solve our problems. Hence, we provide a support system for the youth to
        work on their personal growth and development and renew their mindset through intentional reading and mentoring.
    </p>
    <p class="mt-2 leading-relaxed text-gray-800">
        TBH Academy courses are designed to teach personal growth and human capacity development courses that are not actively taught
        in schools. This is to supplement the Ghanaian education curriculum and prepare the youth for life.
    </p>
</div>

<div class="mt-10">
    <img class="w-full rounded" src="{{ asset('images/banners/img_16.jpg') }}" alt="image">
</div>

<div class="lg:flex lg:space-x-3">
    <div class="p-6 mt-8 rounded-lg shadow bg-gray-1">
        <h4 class="">Vision</h4> <hr class="border-brown-1">

        <p class="mt-4 leading-relaxed text-gray-800">
            To raise a generation of visionary Africans who will think different, lead right and effectively,
            focus on intentionally developing their potentials and skills to solve problems and bring change
            to their communities and the world.
        </p>
    </div>

    <div class="p-6 mt-8 rounded-lg shadow bg-gray-1">
        <h4 class="">Mission</h4> <hr class="border-brown-1">
        <p class="mt-4 leading-relaxed text-gray-800">
            To renew the mind and shape the thinking of the African youth through selective reading, continuous
            learning, close mentoring, and developing potentials and skills.
        </p>
    </div>
</div>

<div class="p-6 my-8 rounded-lg shadow bg-gray-1">
    <h4 class="">What We Do</h4> <hr class="border-brown-1">
    <div class="mt-4 leading-relaxed">
        <ol class="flex flex-col px-4 space-y-2 text-gray-800 list-decimal">
            <li class="leading-snug">
                We start reading clubs in schools and communities and guide members in reading books on selected subjects
                while closely mentoring them. <a href="{{ route('club.school.create') }}" class="font-medium text-teal-600 hover:text-teal-500">Click here</a> to start a club in your school.
            </li>
            <li class="leading-snug">
                Students are guided to write reviews on books read, articles on lessons learned, and share their thoughts on
                the subject learned and its relevance to nation building and character development.
            </li>
            <li class="leading-snug">
                We identify areas of strength and skills of students and pair them with mentors who will help shape and develop
                that potential. <a href="{{ route('volunteer.register') }}" class="font-medium text-teal-600 hover:text-teal-500">Click here</a> to volunteer as a mentor
            </li>
            <li class="leading-snug">
                We organize seminars and symposia where distinguished resource persons and students talk on selected topics relevant to students’ growth.
            </li>
            <li class="leading-snug">
                We organize personal growth development training for the youth to prepare them for life and career. <a href="{{ route('register') }}" class="font-medium text-teal-600 hover:text-teal-500">Click here</a> to sign up for our courses
            </li>
            <li class="leading-snug">
                We read a book every month, discuss, share reviews, excerpts, and lessons from the book. <a href="{{ route('member.register') }}" class="font-medium text-teal-600 hover:text-teal-500">Click here</a> to join our book club.
            </li>
        </ol>
            <p class="mt-1 font-medium">Through our 5 main processes:</p>
            <ul class="px-4 ml-4 list-disc">
                <li>Reading</li>
                <li>Writing</li>
                <li>Discussing</li>
                <li>Speaking</li>
                <li>Training and</li>
                <li>Mentoring, we are able to shape the mindset of the youth and impact their lives</li>
            </ul>
    </div>

</div>
<div class="p-6 my-8 rounded-lg shadow bg-gray-1">
    <h4 class="">Reading Focus</h4> <hr class="border-brown-1">
    <ul class="px-4 mt-4 leading-relaxed text-gray-800 list-disc">
        <li>Vision and Purpose</li>
        <li>Leadership</li>
        <li>Personal Growth Development</li>
        <li>Skill development</li>
        <li>Business and Entrepreneurship</li>
        <li>Personal Finance</li>
        <li>Creativity and Innovation</li>
        <li>Relationship</li>
    </ul>

</div>

@endsection
