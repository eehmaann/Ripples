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
use DB;

class DiagnosesController extends Controller
{
    //

    /**
     * Collection of forms for creating diagnosis.
     *
     * @return \Illuminate\Http\Response
     */
    public function createAHE($id){
        $diagnosis= Diagnosis::find($id);
        return view('diagnosis.ahe')
    		->with(['diagnosis'=>$diagnosis]);}

    public function createAnchor($id){
        $diagnosis= Diagnosis::find($id);
        return view('diagnosis.anchor')
            ->with(['diagnosis'=>$diagnosis]);}

    public function createAllergy($id){
        $diagnosis= Diagnosis::find($id);
        return View('diagnosis.allergy')
    		->with(['diagnosis'=>$diagnosis]);}

    public function createBroadcast($id){
        $diagnosis= Diagnosis::find($id);
        return View('diagnosis.braodcast')
            ->with(['diagnosis'=>$diagnosis]);}

    public function createCircuits($id){
        $diagnosis= Diagnosis::find($id);
        return View('diagnosis.circuits')
            ->with(['diagnosis'=>$diagnosis]);}

       public function createCording($id){
        $diagnosis= Diagnosis::find($id);
        return View('diagnosis.cording')
            ->with(['diagnosis'=>$diagnosis]);}

    public function createCurse($id){
        $diagnosis= Diagnosis::find($id);
        return view('diagnosis.curse')
            ->with(['diagnosis'=>$diagnosis]);}

    public function createDrugs($id){
        $diagnosis= Diagnosis::find($id);
        return view('diagnosis.drugs')
            ->with('drugs',Drug::all())
            ->with(['diagnosis'=>$diagnosis]);}

    public function createEmotionalResonance($id){
        $diagnosis= Diagnosis::find($id);
        return view('diagnosis.emotionalresonance')
            ->with('emotions',Emotion::all())
            ->with(['diagnosis'=>$diagnosis]);}

    public function createEntities($id){
        $diagnosis= Diagnosis::find($id);
        return view('diagnosis.entities')
            ->with(['diagnosis'=>$diagnosis]);}

     public function createExcess($id){
        $diagnosis= Diagnosis::find($id);
        return view('diagnosis.excess')
            ->with(['diagnosis'=>$diagnosis]);}

    public function createHeartWall($id){
        $diagnosis= Diagnosis::find($id);
        return view('diagnosis.heartwall')
            ->with(['diagnosis'=>$diagnosis]);}

    public function createHypnotic($id){
        $diagnosis= Diagnosis::find($id);
        return view('diagnosis.hypnotic')
            ->with(['diagnosis'=>$diagnosis]);}

    public function createInflammation($id){
        $diagnosis= Diagnosis::find($id);
        return view('diagnosis.inflammation')
            ->with(['diagnosis'=>$diagnosis]);}

    public function createIntolerance($id){
        $diagnosis= Diagnosis::find($id);
        return View('diagnosis.intolerance')
    		->with(['diagnosis'=>$diagnosis]);}

    public function createImage($id){
        $diagnosis= Diagnosis::find($id);
        return View('diagnosis.images')
            ->with(['diagnosis'=>$diagnosis]);}

    public function createMalnutrition($id){
         $diagnosis= Diagnosis::find($id);
        return View('diagnosis.malnutrition')
            ->with('foods',Food::all())
            ->with('herbs', Herb::all())
            ->with('vitamins', Vitamin::all())
            ->with(['diagnosis'=>$diagnosis]);}

    public function createMemoryField($id){
        $diagnosis= Diagnosis::find($id);
        return View('diagnosis.memoryfield')
            ->with(['diagnosis'=>$diagnosis]);}

    public function createMiasm($id){
        $diagnosis= Diagnosis::find($id);
        return View('diagnosis.miasm')
            ->with(['diagnosis'=>$diagnosis]);}

    public function createNoWill($id){
    $diagnosis= Diagnosis::find($id);
        return view('diagnosis.nowill')
            ->with(['diagnosis'=>$diagnosis]);}

    public function createPathogen($id){
        $diagnosis= Diagnosis::find($id);
        return view('diagnosis.pathogen')
        ->with(['diagnosis'=>$diagnosis])
        ->with('cures',Cure::all());
    }

    public function createPsychicTrauma($id){
    $diagnosis= Diagnosis::find($id);
        return view('diagnosis.psychictrauma')
            ->with('emotions', Emotion::all())
            ->with(['diagnosis'=>$diagnosis]);}

    public function createSaboteur($id){
    $diagnosis= Diagnosis::find($id);
        return view('diagnosis.saboteur')
            ->with(['diagnosis'=>$diagnosis]);}

    public function createT3($id){
    $diagnosis= Diagnosis::find($id);
        return view('diagnosis.T3')
            ->with(['diagnosis'=>$diagnosis]);}

    public function createToxicity($id){
    $diagnosis= Diagnosis::find($id);
        return view('diagnosis.toxicity')
            ->with(['diagnosis'=>$diagnosis]);}

    public function createTrappedEmotion($id){
    $diagnosis= Diagnosis::find($id);
        return view('diagnosis.trappedemotion')
            ->with('emotions',Emotion::all())
            ->with(['diagnosis'=>$diagnosis]);}

    public function createTrauma($id){
    $diagnosis= Diagnosis::find($id);
        return view('diagnosis.trauma')
            ->with(['diagnosis'=>$diagnosis]);}

    public function createWillToDie($id){
    $diagnosis= Diagnosis::find($id);
        return view('diagnosis.willtodie')
            ->with(['diagnosis'=>$diagnosis]);}

}
