<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointment;
use App\Disconnection;



class DisconnectionController extends Controller
{
    //
    //This will update a problem that has the type discconection to bring the number closer to 0 or 100 depending
   public function updateDisconnection(REquest $request, $disconnection, $appointment){
        $this->validate($request, [
            'updateconnection'=> 'required|numeric',
        ]);
         $disconnection = Disconnection::find($disconnection);
         $disconnection->current_connection=$request->input('updateconnection');
         $disconnection->save();
         $problem=$disconnection->problem()->latest()->first();
         $clearer=Appointment::find($appointment)->lastProblem();
         $clearer->notes=$clearer->notes.' '.$problem->description.' '.$disconnection->current_cunnection.
        ' '.$disconnection->units;
        $clearer->save();


        return \Redirect::route('problems.show', $appointment);
    }

    // This is to make the disconnection as clear
    public function clearDisconnection($disconnection, $appointment){
         $disconnection = Disconnection::find($disconnection);
         if($disconnection->units="%"){
             $disconnection->current_connection=100;
         }
         else{
            $disconnection->current_connection=0;
         }
         $disconnection->save();
        $problem=$disconnection->problem()->latest()->first();
        $problem->cleared=true;
        $problem->save();
        $clearer=Appointment::find($appointment)->lastProblem();
        $clearer->notes=$clearer->notes.' '.$problem->description.' has been connected';
        $clearer->save();

        return \Redirect::route('problems.show', $appointment);

    }
}
