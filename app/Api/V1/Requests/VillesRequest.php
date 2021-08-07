<?php

namespace App\Api\V1\Requests;

use App\Category;
use App\Helpers\RuleHelper;
use App\SousCategories;
use App\TypeEntreprises;
use App\Villes;
use Dingo\Api\Http\FormRequest;
use Illuminate\Validation\Rule;

class VillesRequest extends FormRequest
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
            'statut'=>Rule::in(Villes::$Status),
        ];
        return RuleHelper::get_rules($this->method(),$rules);
    }
}
