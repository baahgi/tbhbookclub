<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',  'PagesController@index')->name('pages.index');
Route::get('about', 'PagesController@About')->name('pages.about');
Route::get('contact', 'PagesController@ContactUs')->name('pages.contact');
Route::get('projects', 'PagesController@Projects')->name('pages.projects');
Route::get('teams', 'PagesController@Team')->name('pages.team');
Route::get('events-and-gallery', 'PagesController@EventsAndGallary')->name('pages.events.gallary');
Route::get('careers', 'PagesController@Careers')->name('pages.careers');
Route::get('clubs', 'PagesController@Clubs')->name('pages.clubs');
Route::get('tbhacademy', 'PagesController@TBHAcademy')->name('pages.tbhacademy');
Route::get('partner-with-us', 'PagesController@PartnerWithUs')->name('pages.partner');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//user and volunteer registration
Route::get('member-register', 'MemberVolunteerController@showMemberForm')->name('member.register');
Route::post('member-register', 'MemberVolunteerController@storeMember')->name('member.register.store');
Route::get('vulunteer-register', 'MemberVolunteerController@showVolunteerForm')->name('volunteer.register');
Route::post('vulunteer-register', 'MemberVolunteerController@storeVolunteer')->name('volunteer.register.store');
Route::get('member-registration-successful', 'MemberVolunteerController@successMessage')->name('register.success');

//partnership registration
Route::get('partner-as-individual', 'PartnerController@showIndividualPartnerForm')->name('partner.individual.create');
Route::post('partner-as-individual', 'PartnerController@storeIndividualPartner')->name('partner.individual.store');
Route::get('partner-as-firm', 'PartnerController@showFirmPartnerForm')->name('partner.firm.create');
Route::post('partner-as-firm', 'PartnerController@storeFirmPartner')->name('partner.firm.store');

//clubs registration
Route::get('school-club', 'ClubController@showSchoolForm')->name('club.school.create');
Route::get('community-club', 'ClubController@showCommunityForm')->name('club.community.create');
Route::post('club-registration', 'ClubController@store')->name('club.store');


//programs
Route::get('/programs', 'ProgramController@index')->name('programs.index');
Route::get('/programs/{program:slug}', 'ProgramController@show')->name('programs.show');

//Courses
Route::get('/courses', 'ProgramController@index')->name('courses.index');
Route::get('/courses/{course}', 'CourseController@show')->name('courses.show');
Route::get('course/{course}/episode/{video}', 'CourseController@playEpisode')
        ->name('courses.episode');

//user subscribed courses
Route::get('mycourses', 'User\CourseController@index')->name('user.course.index');
