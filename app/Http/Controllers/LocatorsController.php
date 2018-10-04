<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Locator;
use DB;

class LocatorsController extends Controller
{
       public function index(){
        return Locator::all();
    }
}
