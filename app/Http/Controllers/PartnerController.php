<?php

namespace App\Http\Controllers;

use App\FirmPartner;
use App\Http\Requests\TbhBookClub\FirmPartnerRequest;
use App\Partner;
use Carbon\Carbon;
use App\Http\Requests\TbhBookClub\IndividualPartnerRequest;
use App\IndividualPartner;
use Illuminate\Support\Facades\DB;

class PartnerController extends Controller
{
    public function showIndividualPartnerForm()
    {
        return view('partner.individual');
    }

    public function storeIndividualPartner(IndividualPartnerRequest $req)
    {

        $dob = Carbon::createMidnightDate($req->dobYear, $req->dobMonth, $req->dobDay);

        IndividualPartner::create([
            'name' => $req->name,
            'email' => $req->email,
            'phone' => $req->phone,
            'date_of_birth' => $dob,
            'nationality' => $req->nationality,
            'country_of_residence' => $req->countryOfResidence,
            'residential_address' => $req->residentialAddress,
            'occupation' => $req->occupation,
            'job_title' => $req->jobTitle,
            'nature_of_business' => $req->natureOfBusiness,
            'business_address' => $req->businessAddress,
            'how_often_you_wish_to_contribute' => $req->howOftenYouWishToContribute
        ]);
            return redirect()->route('register.success');

    }

    public function showFirmPartnerForm()
    {
        return view('partner.firm');
    }

    public function storeFirmPartner(FirmPartnerRequest $req)
    {
        FirmPartner::create([
            'name' => $req->name,
            'email' => $req->email,
            'phone' => $req->phone,
            'years_of_operation' => $req->yearsOfOperation,
            'nature_of_business' => $req->natureOfBusiness,
            'business_address' => $req->businessAddress,
            'contact_person' => $req->contactPerson,
            'how_often_you_wish_to_contribute' => $req->howOftenYouWishToContribute,
        ]);

        return redirect()->route('register.success');
    }
}
