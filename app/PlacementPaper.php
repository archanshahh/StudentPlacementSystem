<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlacementPaper extends Model
{
    //
    protected $table = 'placement_papers';
    protected $primaryKey = 'Id';
    public $timestamps = false;
    protected $fillable = ['Category', 'Year', 'file_name'];
}
