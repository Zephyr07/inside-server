<?php

namespace App;

use App\Traits\RestTrait;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    //
    use RestTrait;

    protected $fillable = ['name','code','description'];

    protected $dates = ['created_at','updated_at'];

    public function getLabel()
    {
        return $this->name ;
    }
}