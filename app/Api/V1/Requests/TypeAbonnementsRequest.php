<?php

namespace App\Api\V1\Requests;

use App\Abonnements;
use App\Category;
use App\Helpers\RuleHelper;
use Dingo\Api\Http\FormRequest;
use Illuminate\Validation\Rule;

class TypeAbonnementsRequest extends FormRequest
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
            'nom'=>'required|max:255',
            'duree'=>'integer|required|max:255',
            'prix'=>'required|integer',
            'statut'=>Rule::in(TypeAbonnements::$Status),
        ];
        return RuleHelper::get_rules($this->method(),$rules);
    }
}
