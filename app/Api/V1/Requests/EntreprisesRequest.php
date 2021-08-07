<?php

namespace App\Api\V1\Requests;

use App\Abonnements;
use App\Category;
use App\Entreprises;
use App\Helpers\RuleHelper;
use Dingo\Api\Http\FormRequest;
use GuzzleHttp\Client;
use Illuminate\Validation\Rule;

class EntreprisesRequest extends FormRequest
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
            'a_propos'=>'required|max:255',
            'telephone'=>'required|numeric|max:255',
            'logo'=>'required|image',
            'type_entreprises_id'=>'required|integer|exists:type_entreprises,id',
            'statut'=>Rule::in(Entreprises::$Status),
        ];
        return RuleHelper::get_rules($this->method(),$rules);
    }
}
