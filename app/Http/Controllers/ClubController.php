<?php

namespace App\Http\Controllers;

use App\Club;
use Illuminate\Http\Request;
use App\Http\Requests\TbhBookClub\ClubRequest;

class ClubController extends Controller
{
    public function showSchoolForm()
    {
        return view('clubs.school');
    }

    public function showCommunityForm()
    {
        return view('clubs.community');
    }

    public function store(ClubRequest $request)
    {
        Club::create([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'country' => $request->country,
        'address' => $request->address,
        'contact_person' => $request->contactPerson,
        'time_for_meetings' => $request->timeForMeetings,
        'special_request' => $request->specialRequest,
        'type' => $request->type,
        ]);

        try{
            //send message
        }catch(\Exception $e){
            session()->flash('danger', 'sorry, something went wrong. Please try again later');
            return back();
        }

        return redirect()->route('pages.clubs')
            ->with('success', 'Your request has been successfully saved. We will contact you soon');
    }
}
