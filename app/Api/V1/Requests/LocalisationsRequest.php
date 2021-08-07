<?php

namespace App\Api\V1\Requests;

use App\Abonnements;
use App\Category;
use App\Entreprises;
use App\Helpers\RuleHelper;
use Dingo\Api\Http\FormRequest;
use GuzzleHttp\Client;
use Illuminate\Validation\Rule;

class LocalisationsRequest extends FormRequest
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
            'quartier'=>'required|max:255',
            'information_supplementaire'=>'required|max:255',
            'longitude'=>'numeric|max:255',
            'latitude'=>'numeric|max:255',
            'villes_id'=>'required|integer|exists:villes,id',
            'type_entreprises_id'=>'required|integer|exists:type_entreprises,id'
        ];
        return RuleHelper::get_rules($this->method(),$rules);
    }
}
