<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $fillable = [
		'title', 'description', 'photo',
	];

    public function items(){
    	return $this->hasMany(Item::class);
    }

}
