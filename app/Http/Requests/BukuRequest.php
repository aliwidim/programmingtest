<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class BukuRequest extends Request
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
            'title'=>'required',
			'author'=>'required',
			'date_published'=>'date',
			'number_of_pages'=>'numeric',
			'type_of_book'=>'in:Novel,Documentation,Other',
        ];
    }
}
