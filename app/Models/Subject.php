<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $fillable = [

        'S_id', 'S_name'

    ];

    public function teachers(){
        return $this->belongsToMany(Teacher::class,TeacherSubject::class);
    }

}
