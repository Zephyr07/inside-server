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

class Employee extends Model
{
    //
    use RestTrait;

    protected $fillable = ['first_name','last_name','title','birthday','location','ip_phone','phone','image','email','user_id','sup_id','direction_id'];

    protected $dates = ['created_at','updated_at'];

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
            $val='default/img/inside.jpg';
        }
        return env('APP_URL').$val;
    }

    public function  user(){
        return $this->belongsTo(User::class);
    }

    public function  collaboraters(){
        return $this->hasMany(Employee::class);
    }

    public function  direction(){
        return $this->hasOne(Direction::class);
    }
}