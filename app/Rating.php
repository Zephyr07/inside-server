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

class Rating extends Model
{
    //
    use RestTrait;

    protected $fillable = ['content','image', 'post_id','employee_id'];

    protected $dates = ['created_at','updated_at'];

    public function  employee(){
        return $this->belongsTo(Employee::class);
    }

    public function  posts(){
        return $this->belongsTo(Post::class);
    }

}