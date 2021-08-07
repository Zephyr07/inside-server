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

class Promotions extends Model
{
    //
    use RestTrait;

    protected $fillable = ['date_debut','date_fin','priorite','offres_id','statut'];

    protected $dates = ['created_at','updated_at'];

    public static $Status= ['active','disable'];

    public function getLabel()
    {
        return $this->priorite ;
    }

    public function offres(){
        return $this->belongsTo(Offres::class);
    }

}