<?php

namespace App;

use App\Traits\RestTrait;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    use RestTrait;

    public function __construct(array $attributes = [])
    {
        $this->foreign = ['permissions'];
        parent::__construct($attributes);
    }

    public function getLabel()
    {
        return $this->name;
    }

    protected $fillable = ['id', 'name', 'code', 'description', 'level'];


    protected $dates = ['created_at', 'updated_at'];

}