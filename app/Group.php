<?php
/**
 * Created by PhpStorm.
 * User: Edward NANDA
 * Date: 30/08/2021
 * Time: 16:44
 */

namespace App;

use App\Traits\RestTrait;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
//
    use RestTrait;

    protected $fillable = ['name','description'];

    protected $dates = ['created_at','updated_at'];


    public function getLabel()
    {
        return $this->name ;
    }


    public function  members(){
        return $this->hasMany(Member::class);
    }

    public function  newsletters(){
        return $this->hasMany(Newsletter::class);
    }
}