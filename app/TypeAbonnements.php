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

class TypeAbonnements extends Model
{
    //
    use RestTrait;

    protected $fillable = ['nom','duree','prix','statut'];

    protected $dates = ['created_at','updated_at'];

    public static $Status= ['active','disable'];

    public function getLabel()
    {
        return $this->nom ;
    }

    public function paiements(){
        return $this->hasMany(Abonnements::class);
    }
}