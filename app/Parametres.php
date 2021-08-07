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

class Parametres extends Model
{
    //
    use RestTrait;

    protected $fillable = ['langue','notification','utilisateurs_id'];

    protected $dates = ['created_at','updated_at'];


    public function getLabel()
    {
        return $this->langue ;
    }


    public function utilisateurs(){
        return $this->belongsTo(User::class);
    }
}