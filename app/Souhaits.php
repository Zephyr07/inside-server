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

class Souhaits extends Model
{
    //
    use RestTrait;

    protected $fillable = ['quantite','clients_id','prix_id'];

    protected $dates = ['created_at','updated_at'];


    public function getLabel()
    {
        return $this->quantite ;
    }

    public function clients(){
        return $this->hasMany(Clients::class);
    }

    public function Prix(){
        return $this->hasMany(Prix::class);
    }

}