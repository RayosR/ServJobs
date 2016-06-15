<?php

namespace ServJobs\Http\Requests;

use ServJobs\Http\Requests\Request;

class ProfissionalsRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
           'nome' => 'required|max:100',
		   'descricao' => 'required|max:255',
           'valor'=> 'required|numeric'
        ];
    }
}
