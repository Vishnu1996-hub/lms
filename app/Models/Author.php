<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = ['name','email','bio','badge_id'];

    public $timestamps = true;

    public function books(){
        return $this->hasMany(Book::class);
    }

    public function badge(){
        return $this->belongsTo(Badge::class);
    }
}
