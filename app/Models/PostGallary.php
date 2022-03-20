<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostGallary extends Model
{
    use HasFactory;

    protected $fillable = ['post_id','description','path'];

    // HAS MANY
    public function post()
    { return $this->belongsTo(Post::class); }

}
