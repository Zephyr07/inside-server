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

class Categories extends Model
{
    //
    use RestTrait;

    protected $fillable = ['nom','image','description','statut'];

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

    public function  sous_catgories(){
        return $this->hasMany(SousCategories::class);
    }

}