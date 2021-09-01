<?php

namespace App;

use App\Traits\RestTrait;
use Illuminate\Database\Eloquent\Model;

class Suggestion extends Model
{
    //
    use RestTrait;

    protected $fillable = ['title','status','description','employee_id'];

    protected $dates = ['created_at','updated_at'];

    public static $Status = ['new', 'pending', 'considered'];

    public function getLabel()
    {
        return $this->title ;
    }


    public function employee(){
        return $this->belongsTo(Employee::class);
    }
}
