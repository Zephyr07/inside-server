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

class Newsletter extends Model
{
    //
    use RestTrait;

    protected $fillable = ['title','description','type','image','file','date', 'location'];

    protected $dates = ['created_at','updated_at'];

    public function  __construct(array $attributes = [])
    {
        $this->files = ['image','file'];
        parent::__construct($attributes);
    }

    public function getImageAttribute($val)
    {
        if($val==null){
            $val='default/img/inside.jpg';
        }
        return env('APP_URL').$val;
    }

    public function getFileAttribute($val)
    {
        if($val==null){
            $val='default/img/inside.jpg';
        }
        return env('APP_URL').$val;
    }

    public function getLabel()
    {
        return $this->title ;
    }

    public function  newsletter_entities(){
        return $this->hasMany(NewsletterEntity::class);
    }

    public function  newsletter_directions(){
        return $this->hasMany(NewsletterDirection::class);
    }

    public function  newsletter_groups(){
        return $this->hasMany(NewsletterGroup::class);
    }

}