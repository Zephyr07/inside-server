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

class Direction extends Model
{
    //
    use RestTrait;

    protected $fillable = ['name','acronym', 'entity_id'];

    protected $dates = ['created_at','updated_at'];


    public function getLabel()
    {
        return $this->name ;
    }

    public function  employees(){
        return $this->hasMany(Employee::class);
    }

    public function  newsletters(){
        return $this->hasMany(Newsletter::class);
    }

    public function  entity(){
        return $this->belongsTo(Entity::class);
    }

}