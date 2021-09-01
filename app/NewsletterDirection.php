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

class NewsletterDirection extends Model
{
    //
    use RestTrait;

    protected $fillable = ['newsletter_id','direction_id'];

    protected $dates = ['created_at','updated_at'];


    public function getLabel()
    {
        return $this->direction_id ;
    }

    public function  direction(){
        return $this->belongsTo(Direction::class);
    }

    public function  newsletter(){
        return $this->belongsTo(Newsletter::class);
    }
}