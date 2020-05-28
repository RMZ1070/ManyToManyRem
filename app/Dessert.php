<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dessert extends Model
{
    public function ingredient() {
        return $this->belongsToMany('App\Ingredient','dessert_ingredients', 'dessert_id','ingredient_id');
    }

}
