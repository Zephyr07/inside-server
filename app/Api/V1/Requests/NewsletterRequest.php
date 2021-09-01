<?php

namespace App\Api\V1\Requests;

use App\Helpers\RuleHelper;
use Dingo\Api\Http\FormRequest;
use Illuminate\Validation\Rule;

class NewsletterRequest extends FormRequest
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
            'title'=>'required|max:255',
            'description'=>'max:255',
            'type'=>'required|max:255',
            'date'=>'date',
            'location'=>'max:255',
            'image'=>'image',
            'file'=>'max:255',
            'management_id'=>'required|integer|exists:managements,id',
            'entity_id'=>'required|integer|exists:entities,id',
            'group_id'=>'integer|exists:groups,id',
        ];
        return RuleHelper::get_rules($this->method(),$rules);
    }
}
