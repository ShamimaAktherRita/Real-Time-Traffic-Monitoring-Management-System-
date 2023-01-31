<?php

namespace App\Http\Controllers;

use App\Models\RulesBreak;
use Illuminate\Http\Request;

class RulesBreakController extends Controller
{
    //add
    public function add()
    {
        return view('admin.rules_break.add');
    }
    //create
    public function create(Request $request)
    {
        RulesBreak::rulesBreakCreate($request);
        return redirect('/rulesBreak-add')->with('success','Rules Break Create Successfully');
    }

    //manage
    public function manage()
    {
       $rulesBreaks = RulesBreak::orderBy('id', 'desc')->get();
       return view('admin.rules_break.manage',['rulesBreaks' => $rulesBreaks]);
    }
    //edit
    public function edit($id)
    {
        $rulesBreak = RulesBreak::find($id);
        return view('admin.rules_break.edit',['rulesBreak' => $rulesBreak]);
    }
    //update
    public function update(Request $request, $id)
    {
        RulesBreak::rulesBreakUpdate($request, $id);
       return redirect('/rulesBreak-manage')->with('success','Rules Break Updated Successfully');

    }

    //delete
    public function delete($id)
    {
       $rulesBreak = RulesBreak::find($id);
       $rulesBreak->delete();
       return redirect('/rulesBreak-manage')->with('delete','Rules Break Delete Successfully');


    }
}
