<?php
/**
 * Created by PhpStorm.
 * User: Edward NANDA
 * Date: 30/08/2021
 * Time: 16:41
 */

namespace App;


use App\Traits\RestTrait;
use Illuminate\Database\Eloquent\Model;
class Partner extends Model
{
//
    use RestTrait;

    protected $fillable = ['name','address', 'manager', 'phone', 'status', 'entity_id'];

    protected $dates = ['created_at','updated_at'];


    public function getLabel()
    {
        return $this->name ;
    }


    public function  entity(){
        return $this->belongsTo(Entity::class);
    }
}