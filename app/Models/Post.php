<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    public function scopeActive(Builder $builder) {
        $builder->where('id','>',8);
    }

    public function scopeName(Builder $builder) {
        $builder->where('title','=','Moen-Batz');
    }
}
