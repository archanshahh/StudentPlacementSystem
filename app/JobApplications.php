<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class JobApplications extends Model
{
    protected $table='job_applications';
    protected $primaryKey='id';
    public $timestamps =false;
    protected $fillable =['id', 'student_id','job_id','company_id','application_date','resume'];
}
