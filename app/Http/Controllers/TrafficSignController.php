<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\TrafficSign;
use Illuminate\Http\Request;

use function PHPUnit\Framework\fileExists;

class TrafficSignController extends Controller
{
    //add
    public function add()
    {
        $categories = Category::all();
        return view('admin.traffic_sign.add', ['categories' => $categories]);
    }

    //create
    public function create(Request $request)
    {
        TrafficSign::addNewTrafficSign($request);
        return redirect('/traffic_sign-add')->with('success','Traffic Sign Added Successfully');
    }

    //manage
    public function manage()
    {
        $trafficSigns = TrafficSign::orderBy('id', 'desc')->get();
        return view('admin.traffic_sign.manage', ['trafficSigns' => $trafficSigns]);
    }

    //edit
    public function edit($id)
    {
        $categories = Category::orderBy('id', 'desc')->get();
        $trafficSign = TrafficSign::find($id);
        return view('admin.traffic_sign.edit', [
            'trafficSign' => $trafficSign,
            'categories' => $categories
        ]);
    }

    //update
    public function update(Request $request, $id)
    {
        TrafficSign::trafficSignUpdate($request, $id);
        return redirect('/traffic_sign-manage')->with('success','Traffic Sign Updated Successfully');
    }

    //delete
    public function delete($id)
    {
        TrafficSign::trafficSignDelete($id);
        return redirect('/traffic_sign-manage')->with('delete','Traffic Sign Deleted Successfully');


    }
}
