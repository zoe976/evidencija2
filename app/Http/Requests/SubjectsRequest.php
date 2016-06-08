<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SubjectsRequest extends Request
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
            
            'name' => 'required',
            'tuzilac' => 'required',
            'tuzeni' => 'required',
            'broj_predmeta' => 'required',
            'sudija' => 'required',
            'sudnica' => 'required'
        ];
    }
}
