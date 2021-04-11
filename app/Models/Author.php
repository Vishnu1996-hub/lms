<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = ['name','email','bio'];

    public $timestamps = true;

    public function books(){
        return $this->hasMany(Book::class)->orderBy('avg_rating','desc');
    }

    public function badge(){
        return $this->hasMany(Badge::class);
    }
}
