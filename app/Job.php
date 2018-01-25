<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $guarded = ['id'];
    
   	public function users(){
        return $this->belongsTo(User::class,'user_id');
    }
}
