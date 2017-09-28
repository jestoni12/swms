<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Truck;
use App\Authorizable;
class TruckController extends Controller
{
    use Authorizable;
    
    public function __construct(){
        $this->page_num = 15;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Truck::latest()->paginate($this->page_num);
        return view('truck.index', compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('truck.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:1',
            'description' => 'required|min:5',
            'plate_number' => 'required|min:3|unique:trucks'
        ]);

        if ( $truck = Truck::create($request->all()) ) {

            flash('Truck has been added');
        }
        else{
             flash()->error('Unable to create truck.');
        }

        return redirect()->route('trucks.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $truck = Truck::find($id);

        return view('truck.edit', compact('truck'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|min:1',
            'description' => 'required|min:5',
            'plate_number' => 'required|min:3|unique:trucks'
        ]);

        // Get the truck
        $truck = Truck::findOrFail($id);

        // Update truck
        $truck->fill($request->all());
        $truck->save();

        flash()->success('Truck has been updated.');

        return redirect()->route('trucks.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if( Truck::findOrFail($id)->delete() ) {
            flash()->success('Truck has been deleted');
        } else {
            flash()->success('Truck not deleted');
        }

        return redirect()->back();
    }
}
