<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fertilizer extends Model
{
   	protected $fillable = ['user_id','name', 'remarks','generated_kilo'];
   	
   	public function users(){
        return $this->belongsTo(User::class,'user_id');
    }
}
