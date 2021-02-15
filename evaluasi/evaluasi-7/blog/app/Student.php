<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // public $timestmaps = false
    // protected $table = 'students';
    public $timestamps = false;
    protected $fillable = ['name','class','phone'];

}
