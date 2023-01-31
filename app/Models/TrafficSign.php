<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPUnit\Framework\fileExists;

class TrafficSign extends Model
{
    use HasFactory;
    

    public static function getImage($request,$directory)
    {
        $img = $request->file('image');
        $img_extension =  $img->getClientOriginalExtension();
        $img_name = time().'.'.$img_extension;
        $img->move($directory, $img_name);
        
        return $directory.$img_name;
    }

    public static function addNewTrafficSign($request)
    {
        $trafficSign = new TrafficSign();
        $trafficSign->sign_title = $request->sign_title;
        $trafficSign->category_id = $request->category_id;
        $trafficSign->sign_no = $request->sign_no;
        $trafficSign->sign_description = $request->sign_description;
        $trafficSign->sign_application = $request->sign_application;
        $trafficSign->sign_location = $request->sign_location;
        $trafficSign->image = self::getImage($request,'upload/TrafficSign-image/');
        $trafficSign->save();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public static function trafficSignUpdate($request, $id)
    {
        $trafficSign = TrafficSign::find($id);
        if ($request->file('image')) {
            if(fileExists($trafficSign->image))
            {
                unlink($trafficSign->image);
            }
              $imgPath = self::getImage($request, 'upload/TrafficSign-image/');
        }
        else
        {
            $imgPath  = $trafficSign->image;
        }

        $trafficSign->sign_title = $request->sign_title;
        $trafficSign->category_id = $request->category_id;
        $trafficSign->sign_no = $request->sign_no;
        $trafficSign->sign_description = $request->sign_description;
        $trafficSign->sign_application = $request->sign_application;
        $trafficSign->sign_location = $request->sign_location;
        $trafficSign->image = $imgPath;
        $trafficSign->save();
    }

    public static function trafficSignDelete($id)
    {
        $trafficSign = TrafficSign::find($id);
        if(fileExists($trafficSign->image))
        {
            unlink($trafficSign->image);
        }
        $trafficSign->delete();
    }
}
