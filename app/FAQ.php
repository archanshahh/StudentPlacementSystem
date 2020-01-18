<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    protected $table = 'faq';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['question', 'answer'];
}
