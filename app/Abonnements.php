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

class Abonnements extends Model
{
    //
    use RestTrait;

    protected $fillable = ['type_abonnements_id','utilisateurs_id','paiements_id','statut'];

    protected $dates = ['created_at','updated_at'];

    public static $Status= ['active','disable'];

    public function getLabel()
    {
        return $this->utilisateur_id ;
    }


    public function utilisateurs(){
        return $this->belongsTo(User::class);
    }

    public function type_abonnements(){
        return $this->belongsTo(TypeAbonnements::class);
    }

    public function paiements(){
        return $this->hasMany(Paiements::class);
    }
}