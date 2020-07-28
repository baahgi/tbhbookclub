<?php

namespace App\Http\Requests\TbhBookClub;

use Illuminate\Foundation\Http\FormRequest;

class VolunteerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'firstname' => ['required', 'string', 'max:255'],
            'lastname'  => ['required', 'string', 'max:255'],
            'email'     => ['required','string', 'email', 'max:255'],
            'phone'     => ['required','numeric'],
            'otherPhone' => ['sometimes', 'nullable', 'numeric'],
            'nationality'   => ['required', 'string', 'max:255'],
            'maritalStatus' => ['required', 'string'],
            'occupation' => ['required', 'string'],
            'countryOfResidence' => ['required', 'string', 'max:255'],
            'residentialAddress' => ['required', 'string', 'max:255'],
            'nameOfSchool'       => ['required', 'string', 'max:255'],
            'levelOfEducation'  => ['required', 'string', 'max:255'],
            'courseOfStudy'     => ['required', 'string', 'max:255'],

            'nameOfBusiness'    => ['sometimes', 'nullable', 'string', 'max:255'],
            'jobTitle'  => ['sometimes', 'nullable', 'string', 'max:255'],
            'natureOfBusiness'  => ['sometimes', 'nullable', 'string', 'max:255'],
            'businessAddress'   => ['sometimes', 'nullable', 'string', 'max:255'],

            'howOftenYouRead'   => ['required', 'string', 'max:255'],
            'booksOftenRead'    => ['required', 'string', 'max:255'],
            'otherBooksRead' => ['required_if:booksOftenRead,others'],
            'willingnessToParticipate' => ['required', 'string', 'max:255'],
            'yourAvailability'      => ['required','string','max:255'],
            'skillsAndInterest'     => ['required'],

            //references
            'ref_name1' => ['required', 'string', 'max:255'],
            'ref_occupation1' => ['required', 'string', 'max:255'],
            'ref_placeOfWork1' => ['required', 'string', 'max:255'],
            'ref_email1' => ['required', 'string', 'email', 'max:255'],
            'ref_phone1' => ['required', 'numeric'],
/*
            'name2' => ['required', 'string', 'max:255'],
            'occupation2' => ['required', 'string', 'max:255'],
            'placeOfWork2' => ['required', 'string', 'max:255'],
            'email2' => ['required', 'string', 'email', 'max:255'],
            'otherEmail2' => ['sometimes','nullable', 'string', 'email', 'max:255'],
            'phone2' => ['required', 'numeric', 'max:255'],
            'otherPhone2' => ['sometimes', 'nullable', 'numeric', 'max:255'],

            'name3' => ['required', 'string', 'max:255'],
            'occupation3' => ['required', 'string', 'max:255'],
            'placeOfWork3' => ['required', 'string', 'max:255'],
            'email3' => ['required', 'string', 'email', 'max:255'],
            'otherEmail3' => ['sometimes','nullable', 'string', 'email', 'max:255'],
            'phone3' => ['required', 'numeric', 'max:255'],
            'otherPhone3' => ['sometimes', 'nullable', 'numeric', 'max:255'] */
        ];
    }
}
