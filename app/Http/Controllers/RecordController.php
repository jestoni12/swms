<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\UserLog;
use PDF;
use Auth;
use App\Fertilizer;
use App\Garbage;
class RecordController extends Controller
{
	public function __construct(){
        $this->page_num = 15;
    }

    public function record(){
    	return view('record.index');
    }

    public function printlogs(){
        $data = ['test' => 'ok'];
        $pdf = PDF::setPaper('letter');
        $pdf->loadView('record.userlog.show_logs',compact('data'));
        return $pdf->stream();
    }

    public function show_logs(){
        return view('record.userlog.mylogs');
    }

    /* Fertilizer*/

    public function fertilizer(){
        $result = Fertilizer::latest()->with('users')->orderBy('id','desc')->paginate($this->page_num);
        return view('record.fertilizer.index',compact('result'));
    }

    public function create_fertilizer(){
        $id = Auth::user()->id;
        return view('record.fertilizer.new');
    }

    public function store_fertilizer(Request $request) {
        $this->validate($request, [
            'amount_fertilizers' => 'required'
        ]);

        if( $request->user()->fertilizers()->create($request->all()) ) {
            flash('Fertilizer has been added');
        }
        else{
             flash()->error('Unable to create fertilizer.');
        }
        return redirect()->route('create_fertilizer');
    }

    public function edit_fertilizer($id) {
        $fertilizer = Fertilizer::find($id);
        return view('record.fertilizer.edit',compact('fertilizer','id'));
    }

    public function action_edit_fertilizer(Request $request, $id){
        if($request->input("edit_fertilizer")){
            $this->validate($request, [
            'amount_fertilizers' => 'required'
        ]);
        $fertilizer = Fertilizer::find($id);

        // Update fertilizer
        $fertilizer->fill($request->only('amount_fertilizers'));
        $check = $fertilizer->getDirty();
        if(count($check) > 0){
            $fertilizer->save();
            flash()->success('Fertilizer has been updated.');
        }
        else{
            flash()->info('Nothing update.');
        }

        return redirect()->route('fertilizer');
        }
    }

    public function delete_fertilizer($id){
        if( Fertilizer::findOrFail($id)->delete() ) {
            flash()->success('Fertilizer has been deleted');
        } else {
            flash()->success('Fertilizer not deleted');
        }

        return redirect()->back();
    }

    /* Garbage*/
    public function garbage(){
        $garbage = Garbage::latest()->with('users')->orderBy('id','desc')->paginate($this->page_num);
        return view('record.garbage.index',compact('garbage'));
    }

    public function create_garbage(){
        $id = Auth::user()->id;
        return view('record.garbage.new');
    }

    public function store_garbage(Request $request){
        $this->validate($request, [
            'type' => 'required|min:5',
            'amount_in_kilo' => 'required'
        ]);

        if( $request->user()->garbages()->create($request->all()) ) {
            flash('Garbage has been added');
        }
        else{
             flash()->error('Unable to create garbage.');
        }
        return redirect()->route('create_garbage');
    }

    public function edit_garbage($id) {
        $garbage = Garbage::find($id);
        return view('record.garbage.edit',compact('garbage','id'));
    }

     public function action_edit_garbage(Request $request, $id){
        if($request->input("edit_garbage")){
            $this->validate($request, [
                'type' => 'required|min:5',
                'amount_in_kilo' => 'required'
            ]);

        $garbage = Garbage::find($id);

        // // Update garbage
        $garbage->fill($request->except('edit_garbage'));
        $check = $garbage->getDirty();
        if(count($check) > 0){
            $garbage->save();
            flash()->success('Garbage has been updated.');
        }
        else{
            flash()->info('Nothing update.');
        }

        return redirect()->route('garbage');
        }
    }

    public function delete_garbage($id){
        if( Garbage::findOrFail($id)->delete() ) {
            flash()->success('Garbage has been deleted');
        } else {
            flash()->success('Garbage not deleted');
        }

        return redirect()->back();
    }
}
