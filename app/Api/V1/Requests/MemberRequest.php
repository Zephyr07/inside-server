<?php

namespace App\Api\V1\Requests;

use App\Helpers\RuleHelper;
use App\Member;
use Dingo\Api\Http\FormRequest;
use Illuminate\Validation\Rule;

class MemberRequest extends FormRequest
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
            'profile'=>Rule::in(Member::$Profile),
            'group_id'=>'required|integer|exists:groups,id',
            'employee_id'=>'required|integer|exists:employees,id'
        ];
        return RuleHelper::get_rules($this->method(),$rules);
    }
}
