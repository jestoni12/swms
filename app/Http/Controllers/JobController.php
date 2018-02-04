<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Authorizable;
use App\Job;
use App\Employee;
class JobController extends Controller
{
	//use Authorizable;

	public function __construct(){
        $this->page_num = 15;
    }

    public function index(){
    	$jobs = Job::latest()->paginate($this->page_num);
    	return view('job.index',compact('jobs'));
    }

    public function create_job(){
    	return view('job.create');
    }

    public function store_job(Request $request){
    	$this->validate($request, [
            'description' => 'required|min:5',
            'status' => 'required'
        ]);

    	if( $request->user()->jobs()->create($request->except('save_job')) ) {
            flash('Job has been added.');
        }
        else{
             flash()->error('Unable to create job.');
        }

        return redirect()->route('jobs');
    }

    public function edit_job($id){
    	$jobs = Job::find($id);
        return view('job.edit',compact('jobs','id'));
    }

    public function action_edit_job(Request $request,$id){
    	if($request->input("edit_job")){
            $this->validate($request, [
            'description' => 'required|min:5',
            'status' => 'required'
        ]);
        $job = Job::find($id);
        $employee = Employee::where([
                                        ['job_id',$request->input('job_id')],
                                        ['status','active']
                                    ])->count();
        // Update job
        $job->fill($request->except('edit_job','job_id'));
        $check = $job->getDirty();

        if(count($check) > 0){
            if($request->input('status') == 'Active'){
                $job->save();
                flash()->success('Job has been updated.');
            }
            else{
                if($employee > 0){
                    flash()->error('Employee still holding that job.');
                }
                else{
                    $job->save();
                    flash()->success('Job has been updated.');
                }
            }
        }
        else{
            flash()->info('Nothing update.');
        }

        return redirect()->route('jobs');
        }
    }

    public function delete_job($id){
        $employee = Employee::where([
                                    ['job_id',$id],
                                    ['status','active']
                                ])->count();
        if($employee > 0){
            flash()->error('Employee still holding that job.');
        }
        else{
            if( Job::findOrFail($id)->delete() ) {
                flash()->success('Job has been deleted');
            } else {
                flash()->success('Job not deleted');
            }
        }

        return redirect()->back();
    }
}
