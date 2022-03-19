<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Church extends Model
{
    use HasFactory;

    protected $fillable = [ 'name', 'pastor', 'email', 'phone', 'street', 'number', 'complement', 'neighborhood', 'city', 'state', 'zipcode', 'contact', 'contact_phone', 'contact_email', 'comment' ];

    // ///////// HAS MANY
    public function training()
    { return $this->hasMany(Training::class); }

    public function users()
    { return $this->hasMany(User::class); }

    // ///////// BELONGS TO
    public function fieldworkers()
    { return $this->belongsToMany(User::class,'church_user'); }
}
