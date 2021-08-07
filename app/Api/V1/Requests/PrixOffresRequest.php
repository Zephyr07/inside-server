<?php

namespace App\Api\V1\Requests;

use App\Abonnements;
use App\Category;
use App\Entreprises;
use App\Helpers\RuleHelper;
use App\Offres;
use App\Paiements;
use Dingo\Api\Http\FormRequest;
use GuzzleHttp\Client;
use Illuminate\Validation\Rule;

class PrixRequest extends FormRequest
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
            'valeur'=>'numeric|required|max:255',
            'offres_id'=>'required|integer|exists:offres,id',
            'entreprises_id'=>'required|integer|exists:entreprises,id'
        ];
        return RuleHelper::get_rules($this->method(),$rules);
    }
}
