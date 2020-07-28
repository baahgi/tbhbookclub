<?php

namespace App\Http\Requests\TbhBookClub;

use Illuminate\Foundation\Http\FormRequest;

class ClubRequest extends FormRequest
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
            'country' => ['bail', 'required', 'string', 'max:255'],
            'address' => ['nullable', 'string', 'max:255'],
            'contactPerson' => ['required', 'string', 'max:255'],
            'timeForMeetings' => ['required'],
            'specialRequest' => ['nullable', 'string'],
            'type' => ['required'],
        ];
    }
}
