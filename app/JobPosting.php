<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobPosting extends Model
{
    protected $table = 'job_postings';
    protected $primaryKey = 'id';
    public $timestamps = false;
//    protected $guarded = [];
    protected $fillable = ['title', 'description', 'start_date', 'application_deadline', 'company_id', 'recruiter_name'];

    public function company()
    {
//        return $this->belongsTo(Company::class, 'company_id');
        return $this->belongsTo('App\Company');
    }
}
