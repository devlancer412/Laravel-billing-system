<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $fillable = ['name', 'status', 'parent_id'];

    public function parent() {
    	return $this->hasOne(Category::class, 'id', 'parent_id');
    }

    public function items() {
    	return $this->hasMany(Item::class);
    }
}
