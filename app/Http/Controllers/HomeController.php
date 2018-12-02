<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        if($request->user->role==' practitioner'){
            return route('/sessionstart');
        }

        else{
            $published=$reuest->user->lastPublished();
            if(empty($published)){
                return route('/contact');
            }
            else{
                 return view('home');
            }
        }
       
    }
}
