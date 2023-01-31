<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrafficCase extends Model
{
    use HasFactory;

    public static function addNewCase($request)
    {
        $trafficCase = new TrafficCase();
        $trafficCase->name = $request->name;
        $trafficCase->date_of_birth = $request->date_of_birth;
        $trafficCase->nid = $request->nid;
        $trafficCase->vehicle_type = $request->vehicle_type;
        $trafficCase->vehicle_number = $request->vehicle_number;
        $trafficCase->offense = $request->offense;
        $trafficCase->punishment = $request->punishment;
        $trafficCase->date = $request->date;
        $trafficCase->traffic_id = $request->traffic_id;
        $trafficCase->save();

    }
}
