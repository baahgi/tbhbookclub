<?php

namespace App\Http\Requests\TbhBookClub;

use Illuminate\Foundation\Http\FormRequest;

class IndividualPartnerRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required','string', 'email', 'max:255'],
            'phone' => ['required','numeric'],
            'dobMonth' => ['required'],
            'dobDay' => ['numeric', 'between:1,31'],
            'dobYear' => ['numeric'],
            'nationality' => ['required', 'string', 'max:255'],
            'countryOfResidence' => ['required', 'string', 'max:255'],
            'residentialAddress' => ['required', 'string', 'max:255'],
            'occupation' => ['required'],
            'jobTitle' => ['required', 'string', 'max:255'],
            'natureOfBusiness' => ['required'],
            'businessAddress' => ['required', 'string', 'max:255'],
            'howOftenYouWishToContribute' => ['required'],
        ];
    }
}
