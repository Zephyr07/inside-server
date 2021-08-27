<?php

namespace App\Api\V1\Requests;

use App\Abonnements;
use App\Category;
use App\Entreprises;
use App\Helpers\RuleHelper;
use App\Offres;
use Dingo\Api\Http\FormRequest;
use GuzzleHttp\Client;
use Illuminate\Validation\Rule;

class OffresRequest extends FormRequest
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
            'type'=>'required|max:255',
            'description'=>'required|max:255',
            'image'=>'required|image',
            'categories_id'=>'required|integer|exists:categories,id',
            'offres_id'=>'required|integer|exists:offres,id',
            'statut'=>Rule::in(Offres::$Status),
        ];
        return RuleHelper::get_rules($this->method(),$rules);
    }
}
