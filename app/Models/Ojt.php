<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ojt extends Model
{
    use HasFactory;

    protected $fillable = ['training_id'];

    public function training()
    {
        return $this->belongsTo(Training::class);
    }

    public function approaches()
    {
        return $this->hasMany(Approach::class);
    }

}
