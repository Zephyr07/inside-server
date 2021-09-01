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

class Entity extends Model
{
    //
    use RestTrait;

    protected $fillable = ['name','address'];

    protected $dates = ['created_at','updated_at'];


    public function getLabel()
    {
        return $this->name ;
    }


    public function  managements(){
        return $this->hasMany(Management::class);
    }

    public function  newsletters(){
        return $this->hasMany(Newsletter::class);
    }

    public function  partners(){
        return $this->hasMany(Partner::class);
    }

}