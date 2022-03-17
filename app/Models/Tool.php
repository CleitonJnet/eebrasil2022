<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    use HasFactory;

    protected $fillable = ['name','description','knowhow','category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function sections()
    {
        return $this->hasMany(Section::class);
    }

    public function training()
    {
        return $this->hasMany(Training::class);
    }

    public function unities()
    {
        return $this->hasMany(Unity::class);
    }

    public function scheduleDefault()
    {
        return $this->hasMany(ScheduleDefault::class);
    }

}
