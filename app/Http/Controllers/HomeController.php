<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Location;
use App\Models\RulesBreak;
use App\Models\TrafficSign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $locations = Location::all();
        return view('website.home.index',[
            'locations' => $locations
        ]);
    }

    public function trafficSign(){
        $categories = Category::all();
        return view('website.traffic_sign.index', ['categories' => $categories]);
    }

    //categoryDetail
    public function categoryDetail($id)
    {
        $category = Category::find($id);
       $trafficSigns = TrafficSign::where('category_id', $id)->get();
       return view('website.category_details.index',[
        'category' => $category,
        'trafficSigns' => $trafficSigns,
       ]);
    }

    //signDetail
    public function signDetail($id)
    {
       $trafficSign = TrafficSign::find($id);
       return view('website.traffic_sign.signDetail',['trafficSign' => $trafficSign]);
    }

    //rulesBreak
    public function rulesBreak()
    {
       $allRulesBreak =  RulesBreak::all();
       return view('website.rulesBreak.index',['allRulesBreak' => $allRulesBreak]);
    }

    //viewDirection
    public function viewDirection(Request $request)
    {
       $location =  Location::find($request->location_id);
        return view('website.gmap-direction.index',[
            'location' => $location
        ]);
    }

    //about us
    public function about()
    {
        return view('website.about_us.index');
    }

    //faq
    public function faq()
    {
        return view('website.faq.index');
    }

    //contact
    public function contact()
    {
        return view('website.contact-us.index');
    }

    public function fare()
    {

        return view('website.fare-details.index');
    }
    public function road()
    {
        $posts = DB::select("select * from posts");
        return view('website.road-details.index',[
            'posts' => $posts
        ]);
    }
}
