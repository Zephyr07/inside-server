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

class Member extends Model
{
    //
    use RestTrait;

    protected $fillable = ['profile','employee_id', 'group_id'];

    protected $dates = ['created_at','updated_at'];


    public function getLabel()
    {
        return $this->profile ;
    }

    public function  employees(){
        return $this->hasMany(Employee::class);
    }

    public function  groups(){
        return $this->hasMany(Group::class);
    }

}