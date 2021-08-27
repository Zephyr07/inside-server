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

class Clients extends Model
{
    //
    use RestTrait;

    protected $fillable = ['nom','telephone','image','genre','user_id','statut'];

    protected $dates = ['created_at','updated_at'];

    public static $Status= ['active','disable'];

    public function  __construct(array $attributes = [])
    {
        $this->files = ['image'];
        parent::__construct($attributes);
    }

    public function getLabel()
    {
        return $this->nom ;
    }

    public function getImageAttribute($val)
    {
        if($val==null){
            $val='default/img/category_logo.jpg';
        }
        return env('APP_URL').$val;
    }

    public function  utilisateurs(){
        return $this->belongsTo(User::class);
    }

    public function  souhaits(){
        return $this->hasMany(Souhaits::class);
    }

    public function  abonnements(){
        return $this->hasMany(Abonnements::class);
    }
}