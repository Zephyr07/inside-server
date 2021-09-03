<?php

namespace App\Api\V1\Requests;

use App\Helpers\RuleHelper;
use Dingo\Api\Http\FormRequest;
use Illuminate\Validation\Rule;

class NewsletterGroupRequest extends FormRequest
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
            'newsletter_id'=>'required|integer|exists:newsletters,id',
            'group_id'=>'required|integer|exists:groups,id'
        ];
        return RuleHelper::get_rules($this->method(),$rules);
    }
}
