<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentInJob extends Model
{
    use HasFactory;

    protected $fillable = [ 'ojt_id','student_id','introduction','grace', 'sin', 'god', 'jesus', 'faith', 'appeal' ];

    // ///////// BELONGS TO
    public function student()
    { return $this->belongsTo(Student::class); }

    public function ojt()
    { return $this->belongsTo(Ojt::class); }

}
