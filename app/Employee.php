<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $guarded = ['id'];

    public function jobs(){
    	return $this->belongsTo(Job::class,'job_id');
    }
}
