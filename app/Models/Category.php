<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categorie';
    protected $guarded = ['id'];
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
