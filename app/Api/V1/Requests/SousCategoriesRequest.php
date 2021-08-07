<?php

namespace App\Api\V1\Requests;

use App\Category;
use App\Helpers\RuleHelper;
use App\SousCategories;
use Dingo\Api\Http\FormRequest;
use Illuminate\Validation\Rule;

class SousCategoriesRequest extends FormRequest
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
            'description'=>'max:255',
            'categories_id'=>'required|integer|exists:categories,id',
            'statut'=>Rule::in(SousCategories::$Status),
        ];
        return RuleHelper::get_rules($this->method(),$rules);
    }
}
