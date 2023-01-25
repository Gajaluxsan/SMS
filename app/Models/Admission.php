<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Admission extends Model
{
    use HasFactory;
    protected $table ="admissions";
    protected $fillable=[
        'Name',
        'NIC',
        'Address',
        'Phone_Number',
        'DOB',
        'Gender',
        'Email_Id',
        'Password',
        'Role'
    ];
}