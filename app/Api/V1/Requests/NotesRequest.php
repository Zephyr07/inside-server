<?php

namespace App\Api\V1\Requests;

use App\Abonnements;
use App\Category;
use App\Entreprises;
use App\Helpers\RuleHelper;
use Dingo\Api\Http\FormRequest;
use GuzzleHttp\Client;
use Illuminate\Validation\Rule;

class NotesRequest extends FormRequest
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
            'commentaire'=>'required|max:255',
            'valeur'=>'required|integer|max:255',
            'user_id'=>'required|integer|exists:users,id',
            'statut'=>Rule::in(Notes::$Status),
        ];
        return RuleHelper::get_rules($this->method(),$rules);
    }
}
