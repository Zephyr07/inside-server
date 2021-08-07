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

class Entreprises extends Model
{
    //
    use RestTrait;

    protected $fillable = ['nom','logo','a_propos','telephone','type_entreprises_id','statut'];

    public static $Status= ['active','disable'];

    protected $dates = ['created_at','updated_at'];

    public function  __construct(array $attributes = [])
    {
        $this->files = ['logo'];
        parent::__construct($attributes);
    }

    public function getLabel()
    {
        return $this->nom ;
    }

    public function getLogoAttribute($val)
    {
        if($val==null){
            $val='default/img/category_logo.jpg';
        }
        return env('APP_URL').$val;
    }

    public function type_entreprises(){
        return $this->belongsTo(TypeEntreprises::class);
    }

    public function  localisation(){
        return $this->hasMany(Localisation::class);
    }

    public function  note(){
        return $this->hasMany(Note::class);
    }

    public function  prix(){
        return $this->hasMany(Prix::class);
    }


}