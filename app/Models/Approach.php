<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Approach extends Model
{
    use HasFactory;

    protected $fillable = ['ojt_id','name'];

    public function ojs()
    {
        return $this->belongsTo(Ojt::class);
    }

}
