<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['name', 'description', 'industry', 'email', 'mobile', 'website', 'location'];

    public function jobPostings()
    {
        return $this->hasMany('App\JobPosting');
    }
}
