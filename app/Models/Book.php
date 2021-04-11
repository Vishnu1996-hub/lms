<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['name','price','isbn','avg_rating','publish_date','author_id'];

    public $timestamps = true;

    public function author(){
        return $this->belongsTo(Author::class);
    }
}
