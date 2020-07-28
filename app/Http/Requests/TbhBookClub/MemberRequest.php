<?php

namespace App\Http\Requests\TbhBookClub;

use Illuminate\Foundation\Http\FormRequest;

class MemberRequest extends FormRequest
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
            'lastname'=> ['required', 'string', 'max:255'],
            'email' => ['required','string', 'email', 'max:255'],
            'phone' => ['required','numeric'],
            'nationality' => ['required', 'string', 'max:255'],
            'occupation' => ['required'],

            'dobMonth' => ['required'],
            'dobDay' => ['numeric', 'between:1,31'],
            'dobYear' => ['numeric'],
            'countryOfResidence' => ['required', 'string', 'max:255'],
            'residentialAddress' => ['required', 'max:255'],

            //this fields are optional because it depends on the user
            //though it is validated as required in the frontend when the user select it
            'nameOfBusiness' => ['required_if:occupation,employee', 'nullable', 'string', 'max:255'],
            'jobTitle' => ['required_if:occupation,employee','nullable', 'string', 'max:255'],
            'natureOfBusiness' => ['required_if:occupation,employee','nullable', 'max:255'],
            'businessAddress' => ['required_if:occupation,employee', 'nullable', 'string', 'max:255'],

            'nameOfSchool' => ['required_if:occupation,student', 'nullable', 'string', 'max:255'],
            'levelOfEducation' => ['required_if:occupation,student', 'nullable', 'string', 'max:255'],
            'courseOfStudy' => ['required_if:occupation,student', 'nullable', 'string', 'max:255'],
            'locationOfSchool' => ['required_if:occupation,student', 'nullable', 'string', 'max:255'],

            'otherOccupation' => ['required_if:occupation,others', 'nullable', 'string', 'max:255'],

            'howOftenYouRead' => ['required', 'string', 'max:255'],
            'booksOftenRead' => ['required', 'string', 'max:255'],
            'otherBooksRead' => ['required_if:booksOftenRead,others'],
            'futureAspiration' => ['required', 'max:255'],
            'personalMissionStatement' => ['required'],
        ];
    }
}
