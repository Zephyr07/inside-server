<?php

namespace App\Api\V1\Requests;

use App\Abonnements;
use App\Clients;
use App\Helpers\RuleHelper;
use Dingo\Api\Http\FormRequest;
use GuzzleHttp\Client;
use Illuminate\Validation\Rule;

class ClientsRequest extends FormRequest
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
            'telephone'=>'required|numeric',
            'genre'=>'required|max:10',
            'image'=>'required|image',
            'user_id'=>'required|integer|exists:users,id',
            'villes_id'=>'required|integer|exists:villes,id',
            'statut'=>Rule::in(Clients::$Status),
        ];
        return RuleHelper::get_rules($this->method(),$rules);
    }
}
