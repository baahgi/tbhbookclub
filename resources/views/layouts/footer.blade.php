<footer class="mx-2 my-8"> <hr class="border-gray-2">

    @include('layouts.components.programs.list')

    <div class="grid grid-cols-1 gap-4 mx-1 mt-8 sm:grid-cols-2 lg:grid-cols-4 md:grid-cols-3">
        <a href="{{ route('volunteer.register') }}" role="button" class="inline-block tracking-wide text-center shadow-md btn-teal">
            Volunteer as a Mentor
        </a>
        <a href="{{ route('register') }}" role="button" class="inline-block tracking-wide text-center shadow-md btn-teal">
            Sign up for a Course
        </a>
        <a href="{{ route('pages.partner') }}" role="button" class="inline-block tracking-wide text-center shadow-md btn-teal">
            Partner with Us
        </a>
        <a href="#" role="button" class="inline-block tracking-wide text-center shadow-md btn-teal">
            Host an Online Course
        </a>
        <a href="{{ route('member.register') }}" role="button" class="inline-block tracking-wide text-center shadow-md btn-teal">
            Join the Book Club
        </a>
    </div>

    <div class="mt-40 text-gray-1">
        <h6 class="text-lg tracking-widest text-center text-white underline"><span class="p-1 rounded-sm shadow">Partners</span></h6>
        <div class="flex flex-col items-center justify-center mt-4 space-y-8 lg:space-x-8 lg:space-y-0 lg:flex-row">
            <span class="flex space-x-8">
                <img src="{{ asset('images/partners/bookhaven.jpg') }}" class="w-24 h-24 rounded-lg lg:w-32 lg:h-32" alt="partners">
                <img src="{{ asset('images/partners/firefox.jpg') }}" class="w-24 h-24 rounded-lg lg:w-32 lg:h-32" alt="partners">
            </span>
            <span class="flex space-x-8">
                <img src="{{ asset('images/partners/nancynyarko.jpg') }}" class="w-24 h-24 rounded-lg lg:w-32 lg:h-32" alt="partners">
                <img src="{{ asset('images/partners/agyapaboabeng.jpg') }}" class="w-24 h-24 rounded-lg lg:w-32 lg:h-32" alt="partners">
            </span>
            <span class="flex space-x-8">
                <img src="{{ asset('images/partners/tbhbookclub.jpg') }}" class="w-24 h-24 rounded-lg lg:w-32 lg:h-32" alt="partners">
                <img src="{{ asset('images/partners/idealhub.jpg') }}" class="w-24 h-24 rounded-lg lg:w-40 lg:h-32" alt="partners">
            </span>
        </div>
    </div>
    <div class="mt-10 text-gray-1">
        <h6 class="tracking-widest text-center text-white underline"><span class="p-1 rounded-sm shadow">Social Links</span></h6>
        <div class="flex items-center justify-center mt-4 space-x-4 md:space-x-8">
            <a href="https://www.facebook.com/TBHclubgh/">  {{-- facebook logo --}}
                <svg class="w-10 h-10 text-blue-600 fill-current " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                    <path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/>
                </svg>
            </a>

            <a href="https://www.instagram.com/tbh_clubgh/">  {{-- instagram logo --}}
                <svg class="w-10 h-10 text-red-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/>
                </svg>
            </a>
            <a href="https://www.twitter.com/TBHClubgh/">  {{-- twitter logo --}}
                <svg class="w-10 h-10 text-blue-400 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/>
                </svg>
            </a>
        </div>
    </div>
    <div class="mt-10 text-gray-1">
        <h6 class="tracking-widest text-center text-white underline"><span class="p-1 rounded-sm shadow">Contact Us</span></h6>
        <div class="flex flex-col items-center justify-center mt-2 space-y-8">
            <span class="flex space-x-4">
                <svg class="w-6 h-6 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                  </svg>
                  <span class="">
                      tbhclubgh@gmail.com
                  </span>
            </span>
            <div class="-ml-8">
                <span class="flex space-x-4">
                    <svg class="w-6 h-6 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                      </svg>
                      <span class="">
                        <p>+233206444562</p>
                        <p>+233503186763</p>
                        <p>+233263924240</p>
                    </span>
                </span>
            </div>

        </div>
    </div>
    <div class="flex justify-between my-2 mt-8 sm:justify-around text-gray-1">
        <p>&copy;TBHCLUB 2020</p>
        <p>By: Directyl</p>

    </div>
</footer>
