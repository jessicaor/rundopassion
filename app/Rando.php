<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rando extends Model
{
    
     protected $fillable = [
        'title', 'date','heure','distance','description'
        ];

       /* public function inscrits(){
                return $this->hasMany(Inscrit::class);
            }*/
        

}
