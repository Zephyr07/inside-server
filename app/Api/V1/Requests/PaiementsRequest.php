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

class PaiementsRequest extends FormRequest
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
            'montant'=>'numeric|required|max:255',
            'date'=>'date|required|max:255',
            'mode_paiement'=>'required|max:255',
            'code_transaction'=>'required|max:255',
            'statut'=>Rule::in(Paiements::$Status),
        ];
        return RuleHelper::get_rules($this->method(),$rules);
    }
}
