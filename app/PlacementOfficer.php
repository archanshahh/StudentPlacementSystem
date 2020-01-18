<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlacementOfficer extends Model
{
    protected $table = 'placement_officers';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['name', 'mobile', 'specialization'];
}
