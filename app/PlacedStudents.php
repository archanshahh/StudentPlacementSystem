<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlacedStudents extends Model
{
    //
    protected $table='placed_students';
    protected $primaryKey='id';
    public $timestamps =false;
    protected $fillable =['id', 'date','student_id','job_id','company_id'];
}
