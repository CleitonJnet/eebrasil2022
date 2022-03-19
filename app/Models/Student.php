<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [ 'training_id', 'user_id'];

    // ///////// BELONGS TO
    public function training()
    {return $this->belongsTo(Training::class); }

    public function user()
    { return $this->belongsTo(User::class); }

    // ///////// HAS MANY
    public function studentInJob()
    { return $this->hasMany(StudentInJob::class); }

}
