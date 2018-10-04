<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Definer;
use DB;

class DefinersController extends Controller
{
    public function index(){
        return Definer::all();
    }
}
