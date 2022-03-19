<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ojt extends Model
{
    use HasFactory;

    protected $fillable = [ 'training_id','mentor_id','host','date','time','email', 'phone', 'street', 'number', 'complement', 'neighborhood', 'city', 'state', 'zipcode', ];

    // ///////// BELONGS TO
    public function training()
    { return $this->belongsTo(Training::class); }

    // ///////// HAS MANY
    public function approaches()
    { return $this->hasMany(Approach::class); }

    public function studentInJob()
    { return $this->hasMany(StudentInJob::class); }


}
