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

class Newsletter extends Model
{
    //
    use RestTrait;

    protected $fillable = ['title','description','type','image','file','date', 'location'];

    protected $dates = ['created_at','updated_at'];

    public function  __construct(array $attributes = [])
    {
        $this->files = ['image'];
        parent::__construct($attributes);
    }

    public function getImageAttribute($val)
    {
        if($val==null){
            $val='default/img/inside.jpg';
        }
        return env('APP_URL').$val;
    }

    public function getLabel()
    {
        return $this->title ;
    }

    public function  entity(){
        return $this->belongsTo(Employee::class);
    }

    public function  direction(){
        return $this->belongsTo(Direction::class);
    }

    public function  group(){
        return $this->belongsTo(Group::class);
    }

}