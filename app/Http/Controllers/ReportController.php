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
    public function index(){
        return redirect()->route('home');
    }

    public function fertilizer_print(){
        if(!auth()->user()->hasPermission('view_fertilizer_report')){
            abort(403);
        }

        $results = Fertilizer::orderBy('created_at','desc');
        $sum = $results->sum('amount_fertilizers');
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

        $pdf = PDF::loadView('reports.fertilizer_report',compact('results','sum'), [], [
            'format' => 'letter'
        ]);
        return $pdf->stream('fertilzer.pdf');
    }

    public function garbage_print(){
        if(!auth()->user()->hasPermission('view_garbage_report')){
                abort(403);
            }

            $results = Garbage::orderBy('created_at','desc');

            $sum = $results->sum('amount_in_kilo');
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

            $pdf = PDF::loadView('reports.garbage_report',compact('results','sum'), [], [
                'format' => 'letter'
            ]);
            return $pdf->stream('garbage.pdf');
    }
}
