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

class Notes extends Model
{
    //
    use RestTrait;

    protected $fillable = ['commentaire','valeur','statut'];

    protected $dates = ['created_at','updated_at'];

    public static $Status= ['active','disable'];

    public function getLabel()
    {
        return $this->commentaire ;
    }

    public function note_entreprises(){
        return $this->hasMany(NoteEntreprises::class);
    }

    public function note_offres(){
        return $this->hasMany(NoteOffres::class);
    }

}