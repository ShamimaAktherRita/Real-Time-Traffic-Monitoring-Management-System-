<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
class TrafficDashboardController extends Controller
{
    //login
    public function login()
    {
        return view('trafficDashboard.auth.login');
    }

    //register
    public function register()
    {
        return view('trafficDashboard.auth.register');
    }

    //create
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required | unique:users,email',
            'password' => 'required',
        ]);

        $traffic = new User();
        $traffic->name = $request->name;
        $traffic->email = $request->email;
        $traffic->password = bcrypt($request->password);
        $traffic->role = $request->role;

        $traffic->save();

        return redirect('/traffic/login');
    }

    //traffic login
    public function trafficLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $traffic =  User::where('email', $request->email)->first();
        if ($traffic) {
            if (password_verify($request->password, $traffic->password)) {
                Session::put('traffic_name', $traffic->name);
                Session::put('traffic_id', $traffic->id);
                return redirect('/traffic/dashboard');
            } else {
                return redirect('traffic/login')->with('error', 'password is wrong');
            }
        } else {
            return redirect('traffic/login')->with('error', 'Email address is wrong');
        }
    }

    //logout
    public function logout()
    {
        Session::forget('traffic_id');
        Session::forget('traffic_name');
        return redirect('/traffic/login');
    }

    //traffic dashboard
    public function dashboard()
    {
        return view('trafficDashboard.home.dashboard');
    }

}
