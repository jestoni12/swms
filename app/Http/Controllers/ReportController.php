<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Fertilizer;
use App\Garbage;
use App\EmployeesLog;
use App\Employee;
use Response;
use Illuminate\Support\Facades\Input;
class ReportController extends Controller
{
    public function fertilizer_report(){
        if(!auth()->user()->hasPermission('view_fertilizer_report')){
            abort(403);
        }

    	$results = Fertilizer::orderBy('created_at','desc');
        if(Input::get('datefrom')){
            $results->where('created_at','>=', Input::get('datefrom'));
        }
        if(Input::get('dateto')){
            $results->where('created_at','<=', Input::get('dateto'));
        }
        $results = $results->get();
        // $pdf = PDF::setPaper('letter');
        // $pdf->loadView('reports.fertilizer_report',compact('results'));
        // return $pdf->stream();

        $pdf = PDF::loadView('reports.fertilizer_report',compact('results'), [], [
            'format' => 'letter'
        ]);
        return $pdf->stream('fertilzer.pdf');
    }

    public function garbage_report(){
    	$results = Garbage::orderBy('created_at','desc');
        if(Input::get('datefrom')){
            $results->where('created_at','>=', Input::get('datefrom'));
        }
        if(Input::get('dateto')){
            $results->where('created_at','<=', Input::get('dateto'));
        }
        $results = $results->get();
        // $pdf = PDF::setPaper('letter');
        // $pdf->loadView('reports.garbage_report',compact('results'));
        // return $pdf->stream();

        $pdf = PDF::loadView('reports.garbage_report',compact('results'), [], [
            'format' => 'letter'
        ]);
        return $pdf->stream('garbage.pdf');
    }
    public function employee_dtr(){
        $emps = Employee::orderBy('id','asc')->get();
        $count = count($emps);
        $results = EmployeesLog::join('employees','employees_logs.employee_id','=','employees.id')
                        ->orderBy('log_date','desc');
        if(Input::get('datefrom')){
            $results->where('employees_logs.created_at','>=', Input::get('datefrom'));
        }
        if(Input::get('dateto')){
            $results->where('employees_logs.created_at','<=', Input::get('dateto'));
        }
        $results = $results->get();
        // $pdf = PDF::setPaper('letter');
        // $pdf->loadView('reports.employee_dtr_report',compact('results','emps','count'));
        // return $pdf->stream();

        $pdf = PDF::loadView('reports.employee_dtr_report',compact('results','emps','count'), [], [
            'format' => 'letter'
        ]);
        return $pdf->stream('emp_dtr.pdf');
    }
}
