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

class PrixOffres extends Model
{
    //
    use RestTrait;

    protected $fillable = ['valeur','entreprises_id','offres_id'];

    protected $dates = ['created_at','updated_at'];


    public function getLabel()
    {
        return $this->valeur ;
    }

    public function offres(){
        return $this->hasMany(Offres::class);
    }

    public function entreprises(){
        return $this->belongsTo(Entreprises::class);
    }

    public function souhaits(){
        return $this->hasMany(Souhaits::class);
    }
}