<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    public static function createLocation($request)
    {
        $location = new Location();

        $location->starting_location = $request->starting_location;
        $location->destination_location = $request->destination_location;
        $location->short_path_destination_link = $request->short_path_destination_link;
        $location->long_path_destination_link = $request->long_path_destination_link;
        $location->short_path_time = $request->short_path_time;
        $location->long_path_time = $request->long_path_time;
        $location->short_path_parking_link = $request->short_path_parking_link;
        $location->long_path_parking_link = $request->long_path_parking_link;
        $location->short_path_distance = $request->short_path_distance;
        $location->long_path_distance = $request->long_path_distance;

        $location->save();
    }

    public static function updateLocation($request, $id)
    {
       $location =  Location::find($id);

        $location->starting_location = $request->starting_location;
        $location->destination_location = $request->destination_location;
        $location->short_path_destination_link = $request->short_path_destination_link;
        $location->long_path_destination_link = $request->long_path_destination_link;
        $location->short_path_time = $request->short_path_time;
        $location->long_path_time = $request->long_path_time;
        $location->short_path_parking_link = $request->short_path_parking_link;
        $location->long_path_parking_link = $request->long_path_parking_link;
        $location->short_path_distance = $request->short_path_distance;
        $location->long_path_distance = $request->long_path_distance;

        $location->save();
    }
}
