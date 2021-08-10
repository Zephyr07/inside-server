<?php

namespace App\Api\V1\Requests;

use App\Helpers\RuleHelper;
use App\Promotions;
use Dingo\Api\Http\FormRequest;
use Illuminate\Validation\Rule;

class PromotionsRequest extends FormRequest
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
            'titre'=>'required|max:255',
            'description'=>'required|max:500',
            'image'=>'image|required|max:500',
            'date_debut'=>'date|required|max:255',
            'date_fin'=>'date|required|max:255',
            'priorite'=>'numeric|required|max:255',
            'entreprises_id'=>'required|integer|exists:entreprises,id',
            'statut'=>Rule::in(Promotions::$Status),
        ];
        return RuleHelper::get_rules($this->method(),$rules);
    }
}
