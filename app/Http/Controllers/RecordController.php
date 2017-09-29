<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\UserLog;
use PDF;
class RecordController extends Controller
{
	public function __construct(){
        $this->page_num = 15;
    }

    public function user_index(){
    	$result = User::orderBy('firstname','asc')
    			->with(['userlogs' => function($q){
    				$q->orderBy('created_at','desc');
    			}])
    			->paginate($this->page_num);
    	return view('record.userlog.index',compact('result'));
    }

    public function mylogs(){
    	return view('record.userlog.mylogs');
    }

    public function printlogs(){
    	return view('record.userlog.printlogs');
    }

    public function show_logs(){
    	return view('record.userlog.show_logs');
    }
}
