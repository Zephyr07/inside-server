<?php

namespace App\Api\V1\Requests;

use App\Helpers\RuleHelper;
use Dingo\Api\Http\FormRequest;
use Illuminate\Validation\Rule;

class EmployeeRequest extends FormRequest
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
            'first_name'=>'required|max:255',
            'last_name'=>'max:255',
            'title'=>'required|max:255',
            'location'=>'max:255',
            'phone'=>'required|integer',
            'email'=>'required|email|max:255',
            'ip_phone'=>'integer',
            'image'=>'image',
            'direction_id'=>'required|integer|exists:directions,id',
            'user_id'=>'required|integer|exists:users,id',
            'sup_id'=>'integer|exists:employees,id',
        ];
        return RuleHelper::get_rules($this->method(),$rules);
    }
}
