<?php

namespace App\Api\V1\Requests;

use App\Abonnements;
use App\Category;
use App\Helpers\RuleHelper;
use Dingo\Api\Http\FormRequest;
use Illuminate\Validation\Rule;

class AbonnementsRequest extends FormRequest
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
            'type_abonnements_id'=>'required|integer|exists:type_abonnements,id',
            'user_id'=>'required|integer|exists:users,id',
            'paiements_id'=>'required|integer|exists:paiements,id',
            'statut'=>Rule::in(Abonnements::$Status),
        ];
        return RuleHelper::get_rules($this->method(),$rules);
    }
}
