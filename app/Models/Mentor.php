<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    use HasFactory;

    protected $fillable = [ 'training_id', 'name','phone','email' ];

    // ///////// BELONGS TO
    public function training()
    { return $this->belongsTo(Training::class); }
}
