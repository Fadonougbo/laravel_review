<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable=['title','content'];


    public function scopeActive(Builder $builder) {
        $builder->where('id','>',8);
    }

    public function scopeName(Builder $builder) {
        $builder->where('title','=','Moen-Batz');
    }

    protected function title():Attribute {

        return Attribute::make(
            get:function(string $value,array $attributes) {
               
                return $value;
            },
            set:function(string $value,array $attributes) {
                dump($attributes);
                return $value.' KO';
            }
        );
    }
}
