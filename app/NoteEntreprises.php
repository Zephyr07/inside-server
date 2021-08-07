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

class NoteEntreprises extends Model
{
    //
    use RestTrait;

    protected $fillable = ['notes_id','entreprises_id'];

    protected $dates = ['created_at','updated_at'];


    public function notes(){
        return $this->belongsTo(Notes::class);
    }

    public function entreprises(){
        return $this->hasOne(Entreprises::class);
    }

}