<?php
/**
 * Created by PhpStorm.
 * User: Edward NANDA
 * Date: 06/08/2021
 * Time: 13:14
 */

namespace App;

use App\Traits\RestTrait;
use Illuminate\Database\Eloquent\Model;

class Paiements extends Model
{
    //
    use RestTrait;

    protected $fillable = ['montant','mode_paiement','code_transaction','statut'];

    protected $dates = ['created_at','updated_at'];

    public static $Status= ['accepted','declinde', 'pending'];

    public function getLabel()
    {
        return $this->montant ;
    }
}