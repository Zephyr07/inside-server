<?php

namespace App\Api\V1\Requests;

use App\Helpers\RuleHelper;
use Dingo\Api\Http\FormRequest;
use Illuminate\Validation\Rule;

class PartnerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(){
        return true;
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(){
        $rules = [
            'name'=>'required|max:255',
            'address'=>'max:255',
            'phone'=>'required|integer',
            'manager'=>'max:255',
            'entity_id'=>'required|integer|exists:entities,id'
        ];
        return RuleHelper::get_rules($this->method(),$rules);
    }
}
