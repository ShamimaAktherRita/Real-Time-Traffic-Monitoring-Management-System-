<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RulesBreak extends Model
{
    use HasFactory;

    public static function rulesBreakCreate($request)
    {
        $rulesBreak = new RulesBreak();
        $rulesBreak->offense = $request->offense;
        $rulesBreak->punishment = $request->punishment;
        $rulesBreak->save();
    }

    public static function rulesBreakUpdate($request, $id)
    {
        $rulesBreak = RulesBreak::find($id);
        $rulesBreak->offense = $request->offense;
        $rulesBreak->punishment = $request->punishment;
        $rulesBreak->save();
    }
}
