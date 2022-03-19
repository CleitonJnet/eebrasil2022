<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScheduleDefault extends Model
{
    use HasFactory;

    protected $fillable = ['tool_id','unity_id','date','start','end'];

    // ///////// BELONGS TO
    public function unity()
    { return $this->belongsTo(Unity::class); }

    public function tool()
    { return $this->belongsTo(Tool::class); }

}
