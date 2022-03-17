<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unity extends Model
{
    use HasFactory;

    protected $fillable = ['tool_id','order','duration','name','description','knowhow','devotional'];

    public function tool()
    {
        return $this->belongsTo(Tool::class);
    }
    public function scheduleDefault()
    {
        return $this->belongsTo(ScheduleDefault::class);
    }
    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }
}
