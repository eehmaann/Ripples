<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisconnectionController extends Controller
{
    //
   public function updateDisconnection(REquest $request, $disconnection, $appointment){
        $this->validate($request, [
            'updateconnection'=> 'required|numeric',
        ]);
         $disconnection = Disconnection::find($disconnection);
         $disconnection->current_connection=$request->input('updateconnection');
         $disconnection->save();
        return \Redirect::route('problems.show', $appointment);
    }
}
