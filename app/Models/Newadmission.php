<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newadmission extends Model
{
    use HasFactory;
    protected $fillable=[
        'Name',
        'NIC',
        'Address',
        'Phone_Number',
        'DOB',
        'Gender',
        'Email_Id',
        'Password',

    ];
}
