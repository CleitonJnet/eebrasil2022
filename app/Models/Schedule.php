<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = ['training_id','unity_id','tool_id','date','start','end'];

    public function unity()
    {
        return $this->belongsTo(Unity::class);
    }

    public function tool()
    {
        return $this->belongsTo(Tool::class);
    }

    public function training()
    {
        return $this->belongsTo(Training::class);
    }

}
