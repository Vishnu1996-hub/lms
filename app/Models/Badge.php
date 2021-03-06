<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Badge extends Model
{
    use HasFactory;

    protected $fillable = ['label','desc','author_id'];

    public $timestamps = true;

    public function authors(){
        return $this->belongsTo(Author::class);
    }
}
