<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name','description','knowhow'];

    // ///////// HAS MANY
    public function tools()
    { return $this->hasMany(Tool::class); }
}
