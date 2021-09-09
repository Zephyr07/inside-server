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

class Post extends Model
{
    //
    use RestTrait;

    protected $fillable = ['content','image', 'post_id','employee_id'];

    protected $dates = ['created_at','updated_at'];

    public function  __construct(array $attributes = [])
    {
        $this->files = ['image'];
        parent::__construct($attributes);
    }

    public function getImageAttribute($val)
    {
        if($val==null){
            //$val='default/img/inside.jpg';
            return $val ;
        } else {
            return env('APP_URL').$val;
        }
    }

    public function getLabel()
    {
        return $this->content ;
    }

    public function  employee(){
        return $this->belongsTo(Employee::class);
    }

    public function  posts(){
        return $this->hasMany(Post::class);
    }

    public function  ratings(){
        return $this->hasMany(Rating::class);
    }

}