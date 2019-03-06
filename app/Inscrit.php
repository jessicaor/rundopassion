<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscrit extends Model
{
    protected $fillable = [
        'name', 'firstname','age','phone'
        ];

               /* public function randos(){
                return $this->hasMany(Rando::class);
            }*/
}
