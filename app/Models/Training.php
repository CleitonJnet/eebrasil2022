<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;

    protected $fillable = ['church_id','tool_id','user_id','date','comment','type','url'];

    public function church()
    {
        return $this->belongsTo(Church::class);
    }

    public function tool()
    {
        return $this->belongsTo(Tool::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function ojts()
    {
        return $this->hasMany(Ojt::class);
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

}
