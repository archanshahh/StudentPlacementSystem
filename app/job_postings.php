<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class job_postings extends Model
{
    //
    protected $table = 'job_postings';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['id','title', 'description','start_date','application_deadline','company_id','recruiter_name'];
}
