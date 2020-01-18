<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $table='students';
    protected $primaryKey='id';
    public $timestamps =false;
    protected $fillable =['name','email','password','course','expected_graduation','mobile','institution','gpa','gender'];
}

