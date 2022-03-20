<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    public function centers()
    {
        return $this->hasMany(Centre::class,'categorie_id');
    }
}
