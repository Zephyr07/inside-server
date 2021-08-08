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

class Localisations extends Model
{
    //
    use RestTrait;

    protected $fillable = ['quartier','information_supplementaire','longitude','latitude','villes_id','entreprises_id'];

    protected $dates = ['created_at','updated_at'];

    public function getLabel()
    {
        return $this->quartier ;
    }

    public function  villes(){
        return $this->belongsTo(Villes::class);
    }

    public function  entreprises(){
        return $this->hasMany(Entreprises::class);
    }
}