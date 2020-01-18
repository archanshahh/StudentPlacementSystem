<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $table='contact_us_email';
    protected $primaryKey = null;
    public $incrementing = false;
    public $timestamps =false;

    protected $fillable =['email','name','message'];
}
