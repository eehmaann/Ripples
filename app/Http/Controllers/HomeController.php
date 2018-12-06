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
            $published=$request->user()->lastPublished();
            if(empty($published)){
                return route('/contact');
            }
            else{
                 return view('home');
            }
        }
       
    }
}
