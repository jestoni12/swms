<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Fertilizer;
use App\Garbage;
use App\EmployeesLog;
use App\Employee;
use Response;
use DB;
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

        $results = Fertilizer::join('users','fertilizers.user_id','=','users.id')
                            ->orderBy('fertilizers.created_at','desc');
        $sum = $results->sum('amount_fertilizers');

        if(Input::get('fer_user')){
            $results->where(DB::raw("CONCAT(users.firstname,' ',users.middlename,' ', users.lastname)"),'like', '%'.Input::get('fer_user').'%');
        }
        if(Input::get('datefrom')){
            $results->where(DB::raw('DATE(fertilizers.created_at)'),'>=', date('Y-m-d', strtotime(Input::get('datefrom'))));
        }
        if(Input::get('dateto')){
            $results->where(DB::raw('DATE(fertilizers.created_at)'),'<=', date('Y-m-d', strtotime(Input::get('dateto'))));
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

        $results = Garbage::join('users','garbages.user_id','=','users.id')
                            ->select('garbages.*')
                            ->orderBy('garbages.created_at','desc');

        $sum = $results->sum('amount_in_kilo');
        
        if(Input::get('gar_user')){
            $results->where(DB::raw("CONCAT(users.firstname,' ',users.middlename,' ',users.lastname)"),'like','%'.Input::get('gar_user').'%');
        }
        if(Input::get('type')){
            $results->where('garbages.type', Input::get('type'));
        }
        if(Input::get('datefrom')){
            $results->where(DB::raw('DATE(garbages.created_at)'),'>=',date('Y-m-d', strtotime(Input::get('datefrom'))));
        }
        if(Input::get('dateto')){
            $results->where(DB::raw('DATE(garbages.created_at)'),'<=',date('Y-m-d', strtotime(Input::get('dateto'))));
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
            $results->where(DB::raw("CONCAT(users.firstname,' ',users.middlename,' ', users.lastname)"),'like', '%'.Input::get('fer_user').'%');
        }
        if(Input::get('datefrom')){
            $results->where(DB::raw('DATE(fertilizers.created_at)'),'>=', date('Y-m-d', strtotime(Input::get('datefrom'))));
        }
        if(Input::get('dateto')){
            $results->where(DB::raw('DATE(fertilizers.created_at)'),'<=', date('Y-m-d', strtotime(Input::get('dateto'))));
        }

        $fer_user = Input::get('fer_user');
        $datefrom = Input::get('datefrom');
        $dateto = Input::get('dateto');

        $result = $results->paginate(15);

        return view('record.fertilizer.index',compact('result','fer_user','datefrom','dateto'));
    }

    public function garbage_search() {
        $results = Garbage::join('users','garbages.user_id','=','users.id')
                            ->select('garbages.*')
                            ->orderBy('garbages.created_at','desc');

        if(Input::get('gar_user')){
            $results->where(DB::raw("CONCAT(users.firstname,' ',users.middlename,' ', users.lastname)"),'like', '%'.Input::get('gar_user').'%');
        }
        if(Input::get('type')){
            $results->where('garbages.type', Input::get('type'));
        }
        if(Input::get('datefrom')){
            $results->where(DB::raw('DATE(garbages.created_at)'),'>=', date('Y-m-d', strtotime(Input::get('datefrom'))));
        }
        if(Input::get('dateto')){
            $results->where(DB::raw('DATE(garbages.created_at)'),'<=', date('Y-m-d', strtotime(Input::get('dateto'))));
        }

        $garbage = $results->paginate(15);

        $gar_user = Input::get('gar_user');
        $type = Input::get('type');
        $datefrom = Input::get('datefrom');
        $dateto = Input::get('dateto');

        return view('record.garbage.index',compact('garbage','gar_user','type','datefrom','dateto'));
    }
}
