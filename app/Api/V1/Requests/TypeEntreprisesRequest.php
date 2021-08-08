<?php

namespace App\Api\V1\Requests;

use App\Category;
use App\Helpers\RuleHelper;
use App\SousCategories;
use App\TypeEntreprises;
use Dingo\Api\Http\FormRequest;
use Illuminate\Validation\Rule;

class TypeEntreprisesRequest extends FormRequest
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
            'image'=>'image|max:255',
            'description'=>'max:255',
            'statut'=>Rule::in(TypeEntreprises::$Status),
        ];
        return RuleHelper::get_rules($this->method(),$rules);
    }
}
