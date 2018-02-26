<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Authorizable;
use App\Employee;
use App\Job;
use PDF;
class EmployeeController extends Controller
{
    public function __construct(){
        $this->page_num = 15;
    }

    public function index(){
    	$emps = Employee::latest()->orderBy('id','desc')->paginate($this->page_num);
    	return view('employee.index',compact('emps'));
    }

   public function create_employee(){
   		$jobs = Job::all();
    	return view('employee.create',compact('jobs'));
    }

    public function store_employee(Request $request){
    	$this->validate($request, [
            'firstname' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'job_id' => 'required',
            'status' => 'required'
        ]);

    	if( Employee::create($request->except('save_employee')) ) {
            flash('Employee has been added.');
        }
        else{
             flash()->error('Unable to create employee.');
        }

        return redirect()->route('employees');
    }

    public function edit_employee($id){
    	$emps = Employee::find($id);
    	$jobs = Job::all();
        return view('employee.edit',compact('emps','id','jobs'));
    }

    public function action_edit_employee(Request $request,$id){
    	if($request->input("edit_employee")){
            $this->validate($request, [
	            'firstname' => 'required',
	            'middlename' => 'required',
	            'lastname' => 'required',
	            'job_id' => 'required',
	            'status' => 'required'
	        ]);
        $emps = Employee::find($id);

        // Update job
        $emps->fill($request->except('edit_employee'));
        $check = $emps->getDirty();
        if(count($check) > 0){
            $emps->save();
            flash()->success('Employee has been updated.');
        }
        else{
            flash()->info('Nothing update.');
        }

        return redirect()->route('employees');
        }
    }

    public function delete_employee($id){
        if( Employee::findOrFail($id)->delete() ) {
            flash()->success('Employee has been deleted');
        } else {
            flash()->success('Employee not deleted');
        }

        return redirect()->back();
    }

    public function print_barcode($id){
        $results = Employee::find($id);
        // $pdf = PDF::setPaper('letter');
        // $pdf->loadView('employee.print_barcode',compact('results'));
        // return $pdf->stream();

        $pdf = PDF::loadView('employee.print_barcode',compact('results'), [], [
            'format' => 'letter'
        ]);
        return $pdf->stream('emp_barcode.pdf');
    }
}
