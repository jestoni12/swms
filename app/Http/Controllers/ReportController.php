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

    public function fertilizer_search() {
        $results = Fertilizer::join('users','fertilizers.user_id','=','users.id')
                            ->select('fertilizers.*')
                            ->orderBy('fertilizers.created_at','desc');

        if(Input::get('fer_user')){
            $results->where('users.name','like', '%'.Input::get('fer_user').'%');
        }
        if(Input::get('fer_datefrom')){
            $results->where('fertilizers.created_at','>=', date('Y-m-d', strtotime(Input::get('fer_datefrom'))));
        }
        if(Input::get('fer_dateto')){
            $results->where('fertilizers.created_at','<=', date('Y-m-d', strtotime(Input::get('fer_dateto'))));
        }

        $result = $results->paginate(15);

        return view('record.fertilizer.index',compact('result'));
    }

    public function garbage_search() {
        $results = Garbage::join('users','garbages.user_id','=','users.id')
                            ->select('garbages.*')
                            ->orderBy('garbages.created_at','desc');

        if(Input::get('gar_user')){
            $results->where('users.name','like', '%'.Input::get('gar_user').'%');
        }
        if(Input::get('type')){
            $results->where('garbages.type', Input::get('type'));
        }
        if(Input::get('gar_datefrom')){
            $results->where('garbages.created_at','>=', date('Y-m-d', strtotime(Input::get('gar_datefrom'))));
        }
        if(Input::get('gar_dateto')){
            $results->where('garbages.created_at','<=', date('Y-m-d', strtotime(Input::get('gar_dateto'))));
        }

        $garbage = $results->paginate(15);

        return view('record.garbage.index',compact('garbage'));
    }
}
