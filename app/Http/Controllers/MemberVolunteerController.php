<?php

namespace App\Http\Controllers;

use App\Http\Requests\TbhBookClub\MemberRequest;
use App\Http\Requests\TbhBookClub\VolunteerRequest;
use App\Member;
use App\Volunteer;
use Carbon\Carbon;

/* For TBHBOOKCLUB members and volunteers(mentors) */

class MemberVolunteerController extends Controller
{
    public function showMemberForm()
    {
        return view('tbhbookclub.member');
    }
    public function storeMember(MemberRequest $req)
    {
        $dob = Carbon::createMidnightDate($req->dobYear, $req->dobMonth, $req->dobDay);
        try{
            $member = Member::create([
                'firstname' => $req->firstname,
                'lastname' => $req->lastname,
                'email' => $req->email,
                'phone' => $req->phone,
                'nationality' => $req->nationality,
                'date_of_birth' => $dob,
                'country_of_residence' => $req->countryOfResidence,
                'residential_address' => $req->residentialAddress,
                'occupation' => $req->occupation,
                'name_of_business' => $req->nameOfBusiness,
                'job_title' => $req->jobTitle,
                'nature_of_business' => $req->natureOfBusiness,
                'business_address' => $req->businessAddress,
                'name_of_school' => $req->nameOfSchool,
                'level_of_education' => $req->levelOfEducation,
                'course_of_study' => $req->courseOfStudy,
                'location_of_school' => $req->locationOfSchool,
                'other_occupation' => $req->otherOccupation,
                'how_often_you_read' => $req->howOftenYouRead,
                'books_often_read' => $req->booksOftenRead,
                'other_books_read' => $req->otherBooksRead,
                'future_aspiration' => $req->futureAspiration,
                'personal_mission_statement' => $req->personalMissionStatement,
                'why_you_want_to_join' => $req->whyYouWantToJoin,
            ]);

            if($member){
                //send email to tbh
                //send email to the member

                return redirect()->route('register.success');
            }

        }catch(\Exception $e){
            logger()->error($e->getMessage());

            session()->flash('danger', 'Sorry, something went wrong. Please try again later.');
            return back();
        }
    }

    public function showVolunteerForm()
    {
        return view('tbhbookclub.volunteer');
    }

    public function storeVolunteer(VolunteerRequest $req)
    {
        try{
            $volunteer = Volunteer::create([
                'firstname' => $req->firstname,
                'lastname' => $req->lastname,
                'email' => $req->email,
                'phone' => $req->phone,
                'other_phone' => $req->otherPhone,
                'marital_status' => $req->maritalStatus,
                'nationality' => $req->nationality,
                'country_of_residence' => $req->countryOfResidence,
                'residential_address' => $req->residentialAddress,
                'occupation' => $req->occupation,

                'name_of_school' => $req->nameOfSchool,
                'level_of_education' => $req->levelOfEducation,
                'course_of_study' => $req->courseOfStudy,

                'name_of_business' => $req->nameOfBusiness,
                'job_title' => $req->jobTitle,
                'nature_of_business' => $req->natureOfBusiness,
                'business_address' => $req->businessAddress,

                'how_often_you_read' => $req->howOftenYouRead,
                'books_often_read' => $req->booksOftenRead,
                'other_books_read' => $req->otherBooksRead,
                'willingness_to_participate' => $req->willingnessToParticipate,
                'your_availability' => $req->yourAvailability,
                'skills_and_interest' => $req->skillsAndInterest,
            ]);

            if($volunteer){

                $volunteer->references()->create([
                    'name' => $req->ref_name1,
                    'occupation' => $req->ref_occupation1,
                    'place_of_work' => $req->ref_placeOfWork1,
                    'email' => $req->ref_email1,
                    'phone' => $req->ref_phone1,
                ]);

                //send email to tbh
                //send email to volunteer

            }

            return redirect()->route('register.success');

        }catch(\Exception $e){
            logger()->error($e->getMessage());

            session()->flash('danger', 'Sorry, something went wrong. Please try again later.');
            return back();
        }


    }
    public function successMessage()
    {
        return view('tbhbookclub.successmessage');
    }
}
