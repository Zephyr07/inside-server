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

class NoteOffres extends Model
{
    //
    use RestTrait;

    protected $fillable = ['notes_id','offres_id'];

    protected $dates = ['created_at','updated_at'];


    public function notes(){
        return $this->belongsTo(Notes::class);
    }

    public function offres(){
        return $this->hasOne(Offres::class);
    }

}