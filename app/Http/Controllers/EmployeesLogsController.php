<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\EmployeesLog;
use Auth;
class EmployeesLogsController extends Controller
{
	public function __construct(){
		$this->msgs = [];
		$this->log_status = ['login1','login2','login3','login4','login5','logout1','logout2','logout3','logout4','logout5'];
	}

    public function display_view(){
    	if(Auth::check()){
    		return view('home');
    	}
    	else{
    		return view('welcome');
    	}
    }
    public function managelogs(Request $request){ 
    	$id = $request->input('id');
    	$check = Employee::find($id);
    	$log = [];
    	if($check){
    		$log = EmployeesLog::where('employee_id',$id)->orderBy('log_date','desc')->first();
	    	if($log){
	    		if(strtotime($log->log_date) == strtotime(date('Y-m-d'))){
	    			$arraylog = $log->toArray();
	    			$x = 0;
	    			foreach ($arraylog as $key => $value) {
	    				if(in_array($key, $this->log_status)){
	    					if(is_null($value) || $value == "0000-00-00 00:00:00"){
	    						$x++;
			    				$log[$key] = date('Y-m-d H:i:s');
			    				$log->update();
			    				if($log){
			    					$this->msg('ok',$key);
			    				}
			    				else{
			    					$this->msg('error',$key);
			    				}
			    				break;
			    			}
	    				}
	    			}
	    			if($x == 0){
	    				$this->msg('error','timeout');
	    			}
	    		}
	    		else{

	    			$start = date_create($log->log_date);
	    			$now = date_create(date('Y-m-d'));
	    			$diff = date_diff($start,$now);
	    			$d  = $diff->format("%a");
	    			if($d > 1){
	    				$this->insert_absent($d,$log->log_date,$id);
	    			}

	    			$log = $this->store_data($id);
	    			if($log){
	    				$this->msg('ok','login1');
	    			}
	    			else{
	    				$this->msg('error','login1');
	    			}
	    		}
	    	}
	    	else{
	    		$log = $this->store_data($id);
	    		if($log){
	    			$this->msg('ok','login1');
	    		}
	    		else{
	    			$this->msg('error','login1');
	    		}
	    	}

	    	/*** To Display Logs***/
	    	$getlast7days = EmployeesLog::where('employee_id',$id)->orderBy('log_date','desc')->limit(7)->get();
    	}
    	else{
    		$this->msg('error','check');
    		$getlast7days = [];
    	}
    	$thismsg = $this->msgs;
    	return view('welcome_include',compact('thismsg','getlast7days','log'));
    }
    private function insert_absent($day,$ref_date,$ref_id){
    	for ($i=1; $i < $day; $i++) { 
    		$new_date = date('Y-m-d',strtotime('+'.$i.' Day',strtotime($ref_date)));
    		$this->store_data($ref_id,'absent',$new_date);
    	}
    }

    private function msg($status,$from){
    	$this->msgs = ['status' => $status, 'from' => $from];
    }
    private function store_data($ref, $from = 'login', $date = null){
    	$data = New EmployeesLog;
		$data->employee_id = $ref;
		$data->log_date = ($date == null) ? date('Y-m-d') : $date;
		$data->login1 = ($from == "absent") ? null : date('Y-m-d H:i:s');
		$data->save();
		return ($data) ? $data : false;
    }
}
