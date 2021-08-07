<?php

namespace App\Api\V1\Requests;

use App\Abonnements;
use App\Category;
use App\Entreprises;
use App\Helpers\RuleHelper;
use Dingo\Api\Http\FormRequest;
use GuzzleHttp\Client;
use Illuminate\Validation\Rule;

class NoteEntreprisesRequest extends FormRequest
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
            'entreprises_id'=>'required|integer|exists:entreprises,id',
            'notes_id'=>'required|integer|exists:notes,id',
        ];
        return RuleHelper::get_rules($this->method(),$rules);
    }
}
