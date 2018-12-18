<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Redirect;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->user()->role=='practitioner'){
            return \Redirect::route('session.create');
        }

        else{
            $published=$request->user()->publishedAppointments()->latest()->first();
            if(empty($published)){
                //If there isn't already an appointment send user to contact practitioner
                return route('contact.create');
            }
            else{
                // If there is at least one published appointment, client will be sent to the latest one
                 return \Redirect::route('clientreport.show');
            }
        }
       
    }
}
