<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeesLog extends Model
{
    public function getemployee(){
    	return $this->belongsTo(Employee::class,'employee_id');
    }
}
