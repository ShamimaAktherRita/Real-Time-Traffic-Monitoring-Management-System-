<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\RulesBreak;
use App\Models\TrafficCase;
use Illuminate\Http\Request;
use Session;

class CaseController extends Controller
{
    //add
    public function add()
    {
        $rules = RulesBreak::all();
        return view('trafficDashboard.case.add',['rules' => $rules]);
    }

    //create
    public function create(Request $request)
    {
        TrafficCase::addNewCase($request);
        return redirect('/traffic/case/add')->with('success','Case added successfully');
    }

    //manage
    public function manage()
    {
       $trafficCases =  TrafficCase::where('traffic_id', Session::get('traffic_id'))->get();
       return view('trafficDashboard.case.manage',['trafficCases' => $trafficCases]);
    }

    //delete
    public function delete($id)
    {
       $trafficCase = TrafficCase::find($id);
       $trafficCase->delete();
       return redirect('/traffic/case/manage')->with('delete','Case deleted successfully');

    }
}
