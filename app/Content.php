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

class Content extends Model
{
    //
    use RestTrait;

    protected $fillable = ['type','description','title','image','email'];

    protected $dates = ['created_at','updated_at'];

    public function  __construct(array $attributes = [])
    {
        $this->files = ['image'];
        parent::__construct($attributes);
    }

    public function getLabel()
    {
        return $this->title ;
    }

    public function getImageAttribute($val)
    {
        if($val==null){
            $val='default/img/logo_03.png';
        }
        return env('APP_URL').$val;
    }
}