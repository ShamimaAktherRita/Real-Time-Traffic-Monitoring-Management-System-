<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class DirectionController extends Controller
{
    //add
    public function add()
    {
        return view('admin.map-direction.add');
    }

    //create
    public function create(Request $request)
    {
        Location::createLocation($request);
        return redirect('/map-direction-add')->with('success', 'Location Created Successfully');
    }

    //manage
    public function manage()
    {
       $directions =  Location::orderBy('id', 'desc')->get();
       return view('admin.map-direction.manage',['directions' => $directions]);
    }
    
    //edit
    public function edit($id)
    {
        $direction = Location::find($id);
        return view('admin.map-direction.edit',['direction' => $direction]);
    }
    //update
    public function update(Request $request, $id)
    {
        Location::updateLocation($request, $id);
        return redirect('/map-direction-manage')->with('success', 'Location updated successfully');
    }

    //delete
    public function delete($id)
    {
        $location = Location::find($id);
        $location->delete();
        return redirect('/map-direction-manage')->with('delete', 'Location deleted successfully');


    }
    
}
