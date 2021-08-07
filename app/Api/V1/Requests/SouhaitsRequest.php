<?php

namespace App\Api\V1\Requests;

use App\Helpers\RuleHelper;
use Dingo\Api\Http\FormRequest;

class SouhaitsRequest extends FormRequest
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
            'quantite'=>'numeric|required|max:255',
            'clients_id'=>'required|integer|exists:clients,id',
            'prix_id'=>'required|integer|exists:prix,id'
        ];
        return RuleHelper::get_rules($this->method(),$rules);
    }
}
