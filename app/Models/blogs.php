<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blogs extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        "description",
        "is_featured",
        "tags",
        "authorId"
    ];

    public function author(){
        return $this->belongsTo(Author::class,"authorId");
    }
}
