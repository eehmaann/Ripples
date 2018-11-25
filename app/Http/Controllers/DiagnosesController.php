<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Locator;
use App\Diagnosis;
use App\Emotion;
use App\Cure;
use App\Drug;
use App\Food;
use App\Herb;
use App\Vitamin;
use App\Appointment;
use App\Problem;
use App\Definer;
use DB;

class DiagnosesController extends Controller
{
    //

    /**
     * Collection of forms for creating diagnosis.
     *
     * @return \Illuminate\Http\Response
     */
      public function createActivity($id, $appointment_id){
        $appointment=Appointment::find($appointment_id);
        $diagnosis= Diagnosis::find($id);
        return view('diagnosis.activities')
        ->with(['diagnosis'=>$diagnosis,
                    'appointment'=>$appointment]);}

    public function createAHE($id, $appointment_id){
        $diagnosis= Diagnosis::find($id);
        $appointment=Appointment::find($appointment_id);
        return view('diagnosis.ahe')
    		->with(['diagnosis'=>$diagnosis,
                    'appointment'=>$appointment]);}

    public function createAnchor($id, $appointment_id){
        $diagnosis= Diagnosis::find($id);
        $appointment=Appointment::find($appointment_id);
        return view('diagnosis.anchor')
            ->with(['diagnosis'=>$diagnosis,
                    'appointment'=>$appointment]);}

    public function createAllergy($id, $appointment_id){
        $diagnosis= Diagnosis::find($id);
        $appointment=Appointment::find($appointment_id);
        $emotions=Emotion::all();
        return View('diagnosis.allergy')
    		->with(['diagnosis'=>$diagnosis,
                    'appointment'=>$appointment,
                    'emotions'=>$emotions]);}

    public function createBroadcast($id, $appointment_id){
        $diagnosis= Diagnosis::find($id);
        $appointment=Appointment::find($appointment_id);
        return View('diagnosis.broadcast')
            ->with(['diagnosis'=>$diagnosis,
                    'appointment'=>$appointment]);}

    public function createCircuits($id, $appointment_id){
        $diagnosis= Diagnosis::find($id);
        $appointment=Appointment::find($appointment_id);
        $emotions = Emotion::where('row_name', $diagnosis->trapped_emotions)->get();
        return View('diagnosis.circuits')
            ->with(['diagnosis'=>$diagnosis,
                    'appointment'=>$appointment,
                    'emotions'=>$emotions]);}


       public function createCording($id, $appointment_id){
        $diagnosis= Diagnosis::find($id);
        $appointment=Appointment::find($appointment_id);
        return View('diagnosis.cording')
           ->with(['diagnosis'=>$diagnosis,
                    'appointment'=>$appointment]);}


        public function createCurse($id, $appointment_id){
        $diagnosis= Diagnosis::find($id);
        $diagnoses=Diagnosis::all();
        $locators=Locator::all();
        $appointment=Appointment::find($appointment_id);
        return view('diagnosis.curse')
            ->with(['diagnosis'=>$diagnosis,
                    'appointment'=>$appointment,
                    'diagnoses'=>$diagnoses,
                    'locators'=>$locators]);}


    public function createDrugs($id, $appointment_id){
        $diagnosis= Diagnosis::find($id);
        $appointment=Appointment::find($appointment_id);
        $drugs=Drug::all();
        return view('diagnosis.drugs')
            ->with(['diagnosis'=>$diagnosis,
                    'appointment'=>$appointment,
                    'drugs'=>$drugs]);}

    public function createEmotionalResonance($appointment_id){
        $diagnosis= Diagnosis::find(7);
        $appointment=Appointment::find($appointment_id);
        $emotions=Emotion::all();
        return view('diagnosis.emotionalresonance')
            ->with(['diagnosis'=>$diagnosis,
                    'emotions'=>$emotions,
                    'appointment'=>$appointment]);}

    public function createEntities($id, $appointment_id){
        $diagnosis= Diagnosis::find($id);
        $appointment=Appointment::find($appointment_id);
        return view('diagnosis.entities')
            ->with(['diagnosis'=>$diagnosis,
                    'appointment'=>$appointment]);}


     public function createExcess($id, $appointment_id){
        $diagnosis= Diagnosis::find($id);
        $appointment=Appointment::find($appointment_id);
        return view('diagnosis.excess')
            ->with(['diagnosis'=>$diagnosis,
                    'appointment'=>$appointment]);}


    public function createHeartWall($appointment_id){
        $diagnosis= Diagnosis::find(6);
        $appointment=Appointment::find($appointment_id);
        return view('diagnosis.heartwall')
            ->with(['diagnosis'=>$diagnosis,
                    'appointment'=>$appointment]);}

    public function createHypnotic($id, $appointment_id){
        $diagnosis= Diagnosis::find($id);
        $appointment=Appointment::find($appointment_id);
        return view('diagnosis.hypnotic')
            ->with(['diagnosis'=>$diagnosis,
                    'appointment'=>$appointment]);}

    public function createInflammation($id, $appointment_id){
        $diagnosis= Diagnosis::find($id);
        $appointment=Appointment::find($appointment_id);
        return view('diagnosis.inflammation')
            ->with(['diagnosis'=>$diagnosis,
                    'appointment'=>$appointment]);}

    public function createIntolerance($id, $appointment_id){
        $diagnosis= Diagnosis::find($id);
        $appointment=Appointment::find($appointment_id);
        return View('diagnosis.intolerance')
    		->with(['diagnosis'=>$diagnosis,
                    'appointment'=>$appointment]);}

    public function createImage($id, $appointment_id){
        $diagnosis= Diagnosis::find($id);
        $appointment=Appointment::find($appointment_id);
        return View('diagnosis.images')
            ->with(['diagnosis'=>$diagnosis,
                    'appointment'=>$appointment]);}

    public function createMalnutrition($id, $appointment_id){
         $diagnosis= Diagnosis::find($id);
         $appointment=Appointment::find($appointment_id);
         $foods=Food::all();
         $herb=Herb::all();
         $vitamins=Vitamins::all();
        return View('diagnosis.malnutrition')
            ->with(['diagnosis'=>$diagnosis,
                    'appointment'=>$appointment,
                    'foods'=>$foods,
                    'herbs'=>$herb,
                    'vitamins'=>$vitamins]);}

    public function createMemoryField($id, $appointment_id){
        $diagnosis= Diagnosis::find($id);
        $appointment=Appointment::find($appointment_id);
        return View('diagnosis.memoryfield')
           ->with(['diagnosis'=>$diagnosis,
                    'appointment'=>$appointment]);}

    public function createMiasm($id, $appointment_id){
        $diagnosis= Diagnosis::find($id);
        $appointment=Appointment::find($appointment_id);
        return View('diagnosis.miasm')
           ->with(['diagnosis'=>$diagnosis,
                    'appointment'=>$appointment]);}

    public function createNoWill($id, $appointment_id){
        $diagnosis= Diagnosis::find($id);
        $appointment=Appointment::find($appointment_id);
        return view('diagnosis.nowill')
           ->with(['diagnosis'=>$diagnosis,
                    'appointment'=>$appointment]);}

    public function createPathogen($id, $appointment_id){
        $appointment=Appointment::find($appointment_id);
        $diagnosis= Diagnosis::find($id);
        return view('diagnosis.pathogen')
        ->with(['diagnosis'=>$diagnosis,
                    'appointment'=>$appointment]);}

    public function createPsychicTrauma($id, $appointment_id){
        $diagnosis= Diagnosis::find($id);
        $appointment=Appointment::find($appointment_id);
        $emotions=Emotion::all();
        return view('diagnosis.psychictrauma')
            ->with(['diagnosis'=>$diagnosis,
                    'appointment'=>$appointment,
                    'emotions'=>$emotions]);}


    public function createSaboteur($id, $appointment_id){
        $diagnosis= Diagnosis::find($id);
        $diagnoses=Diagnosis::all();
        $locators=Locator::all();
        $appointment=Appointment::find($appointment_id);
        return view('diagnosis.saboteur')
            ->with(['diagnosis'=>$diagnosis,
                    'appointment'=>$appointment,
                    'diagnoses'=>$diagnoses,
                    'locators'=>$locators]);}

    public function createT3($id, $appointment_id){
        $diagnosis= Diagnosis::find($id);
        $appointment=Appointment::find($appointment_id);
        return view('diagnosis.T3')
           ->with(['diagnosis'=>$diagnosis,
                    'appointment'=>$appointment]);}

    public function createToxicity($id, $appointment_id){
        $diagnosis= Diagnosis::find($id);
        $appointment=Appointment::find($appointment_id);
        return view('diagnosis.toxicity')
           ->with(['diagnosis'=>$diagnosis,
                    'appointment'=>$appointment]);}

    public function createTrappedEmotion($appointment_id){
        $diagnosis= Diagnosis::find(5);
        $appointment=Appointment::find($appointment_id);
        $heartwalls_count=Problem::whereHas('appointments', function($subquery) use($appointment_id){
                $subquery->where('appointment_id', '=', $appointment_id);
            })
          ->where('describable_type', 'App\Heartwall')
          ->where ('cleared', false)
          ->count();
        $heartwall=Problem::whereHas('appointments', function($subquery) use($appointment_id){
                $subquery->where('appointment_id', '=', $appointment_id);
            })
          ->where('describable_type', 'App\Heartwall')
          ->where ('cleared', false)
          ->latest()->first();
        $emotions=Emotion::all();
        return view('diagnosis.trappedemotion')
            ->with(['diagnosis'=>$diagnosis,
                    'appointment'=>$appointment,
                    'emotions'=>$emotions,
                    'heartwalls_count'=>$heartwalls_count,
                    'heartwall'=>$heartwall]);}

    public function createTrauma($id, $appointment_id){
        $diagnosis= Diagnosis::find($id);
        $appointment=Appointment::find($appointment_id);
        return view('diagnosis.trauma')
           ->with(['diagnosis'=>$diagnosis,
                    'appointment'=>$appointment]);}


    public function createWillToDie($id, $appointment_id){
        $diagnosis= Diagnosis::find($id);
        $appointment=Appointment::find($appointment_id);
        return view('diagnosis.willtodie')
            ->with(['diagnosis'=>$diagnosis,
                    'appointment'=>$appointment]);}

}
