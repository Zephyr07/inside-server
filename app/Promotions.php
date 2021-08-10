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

    protected $fillable = ['titre','image','description','date_debut','date_fin','priorite','entreprises_id','statut'];

    protected $dates = ['created_at','updated_at'];

    public static $Status= ['active','disable'];

    public function getLabel()
    {
        return $this->priorite ;
    }

    public function  __construct(array $attributes = [])
    {
        $this->files = ['image'];
        parent::__construct($attributes);
    }

    public function getImageAttribute($val)
    {
        if($val==null){
            $val='default/img/category_logo.jpg';
        }
        return env('APP_URL').$val;
    }

    public function entreprises(){
        return $this->belongsTo(Entreprises::class);
    }

}