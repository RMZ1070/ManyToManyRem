<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    public function dessert() {
        return $this->belongsToMany('App\Dessert','dessert_ingredients', 'dessert_id','ingredient_id');
    }
}
