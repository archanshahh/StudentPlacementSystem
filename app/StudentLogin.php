<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentLogin extends Model
{
    //
    protected $table='login';
    protected $primaryKey='id';
    public $timestamps =false;
    protected $fillable =['email','password','user_type'];
}
