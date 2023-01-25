<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    public function subjects(){
        return $this->belongsToMany(Subject::class,TeacherSubject::class);
    }

    public function teachers(){
        return $this->hasOne(Teacher::class);
    }

}
