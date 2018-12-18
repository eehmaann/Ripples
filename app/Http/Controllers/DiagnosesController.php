<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Locator;
use App\Diagnosis;
use App\Emotion;
use App\Color;
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

    // This creates the view page for each of the potential problems a person could have
    public function createActivity($id, $appointment_id){
        $appointment=Appointment::find($appointment_id);
        $diagnosis= Diagnosis::find($id);
        $problems=$appointment->openProblems()->get();
        $deletableProblem=$appointment->problems()->latest()->first();
        return view('diagnosis.activities')
        ->with(['diagnosis'=>$diagnosis,
                'problems'=>$problems,
                'appointment'=>$appointment,
                'deletableProblem'=>$deletableProblem]);}

    public function createAHE($id, $appointment_id){
        $diagnosis= Diagnosis::find($id);
        $appointment=Appointment::find($appointment_id);
        $problems=$appointment->openProblems()->get();
        $deletableProblem=$appointment->problems()->latest()->first();
        return view('diagnosis.ahe')
    		->with(['diagnosis'=>$diagnosis,
                    'problems'=>$problems,
                    'appointment'=>$appointment,
                    'deletableProblem'=>$deletableProblem]);}

    public function createAnchor($id, $appointment_id){
        $diagnosis= Diagnosis::find($id);
        $appointment=Appointment::find($appointment_id);
        $problems=$appointment->openProblems()->get();
        $deletableProblem=$appointment->problems()->latest()->first();
        return view('diagnosis.anchor')
            ->with(['diagnosis'=>$diagnosis,
                    'problems'=>$problems,
                    'appointment'=>$appointment,
                    'deletableProblem'=>$deletableProblem]);}

    public function createAllergy($id, $appointment_id){
        $diagnosis= Diagnosis::find($id);
        $appointment=Appointment::find($appointment_id);
        $problems=$appointment->openProblems()->get();
         $deletableProblem=$appointment->problems()->latest()->first();
        return View('diagnosis.allergy')
    		->with(['diagnosis'=>$diagnosis,
                    'problems'=>$problems,
                    'appointment'=>$appointment,
                    'deletableProblem'=>$deletableProblem]);} 

    public function createBroadcast($id, $appointment_id){
        $diagnosis= Diagnosis::find($id);
        $appointment=Appointment::find($appointment_id);
        $problems=$appointment->openProblems()->get();
        $deletableProblem=$appointment->problems()->latest()->first();
        return View('diagnosis.broadcast')
            ->with(['diagnosis'=>$diagnosis,
                    'problems'=>$problems,
                    'appointment'=>$appointment,
                    'deletableProblem'=>$deletableProblem]);}

     public function createColor($id, $appointment_id){
        $diagnosis= Diagnosis::find($id);
        $appointment=Appointment::find($appointment_id);
        $problems=$appointment->openProblems()->get();
        $choices=Color::rankedcolors()->get();
        $deletableProblem=$appointment->problems()->latest()->first();
        return View('diagnosis.color')
            ->with(['diagnosis'=>$diagnosis,
                    'appointment'=>$appointment,
                    'problems'=>$problems,
                    'choices'=>$choices,
                    'deletableProblem'=>$deletableProblem]);}

    public function createCircuits($id, $appointment_id){
        $diagnosis= Diagnosis::find($id);
        $appointment=Appointment::find($appointment_id);
        $problems=$appointment->openProblems()->get();
        $emotions = Emotion::where('row_name', $diagnosis->trapped_emotions)->get();
         $deletableProblem=$appointment->problems()->latest()->first();
        return View('diagnosis.circuits')
            ->with(['diagnosis'=>$diagnosis,
                    'appointment'=>$appointment,
                    'problems'=>$problems,
                    'emotions'=>$emotions,
                    'deletableProblem'=>$deletableProblem]);}


    public function createCording($id, $appointment_id){
        $diagnosis= Diagnosis::find($id);
        $appointment=Appointment::find($appointment_id);
        $problems=$appointment->openProblems()->get();
         $deletableProblem=$appointment->problems()->latest()->first();
        return View('diagnosis.cording')
           ->with(['diagnosis'=>$diagnosis,
                    'problems'=>$problems,
                    'appointment'=>$appointment,
                    'deletableProblem'=>$deletableProblem]);}

       public function createDehydration($id, $appointment_id){
        $diagnosis= Diagnosis::find($id);
        $appointment=Appointment::find($appointment_id);
        $problems=$appointment->openProblems()->get();
         $deletableProblem=$appointment->problems()->latest()->first();
        return View('diagnosis.dehydration')
           ->with(['diagnosis'=>$diagnosis,
                    'problems'=>$problems,
                    'appointment'=>$appointment,
                    'deletableProblem'=>$deletableProblem]);}

    public function createCurse($id, $appointment_id){
        $diagnosis= Diagnosis::find($id);
        $diagnoses=Diagnosis::all();
        $locators=Locator::all();
        $appointment=Appointment::find($appointment_id);
        $problems=$appointment->openProblems()->get();
         $deletableProblem=$appointment->problems()->latest()->first();
        return view('diagnosis.curse')
            ->with(['diagnosis'=>$diagnosis,
                    'appointment'=>$appointment,
                    'problems'=>$problems,
                    'diagnoses'=>$diagnoses,
                    'locators'=>$locators,
                    'deletableProblem'=>$deletableProblem]);}

    public function createDisconnectionBodies($id, $appointment_id){
        $diagnosis= Diagnosis::find($id);
        $diagnoses=Diagnosis::all();
        $locators=Locator::all();
        $appointment=Appointment::find($appointment_id);
        $problems=$appointment->openProblems()->get();
         $deletableProblem=$appointment->problems()->latest()->first();
        return view('diagnosis.bodybody')
            ->with(['diagnosis'=>$diagnosis, 
                    'appointment'=>$appointment,
                    'problems'=>$problems,
                    'diagnoses'=>$diagnoses,
                    'locators'=>$locators,
                    'deletableProblem'=>$deletableProblem]);}

    public function createDisconnectionSickness($id, $appointment_id){
        $diagnosis= Diagnosis::find($id);
        $appointment=Appointment::find($appointment_id);
        $problems=$appointment->openProblems()->get();
         $deletableProblem=$appointment->problems()->latest()->first();
        return view('diagnosis.morningSickness')
            ->with(['diagnosis'=>$diagnosis,
                    'problems'=>$problems, 
                    'appointment'=>$appointment,
                    'deletableProblem'=>$deletableProblem]);}

    public function createDisconnectionSpiritBody($id, $appointment_id){
        $diagnosis= Diagnosis::find($id);
        $diagnoses=Diagnosis::all();
        $locators=Locator::all();
        $appointment=Appointment::find($appointment_id);
        $problems=$appointment->openProblems()->get();
         $deletableProblem=$appointment->problems()->latest()->first();
        return view('diagnosis.spirittobody')
            ->with(['diagnosis'=>$diagnosis,
                    'appointment'=>$appointment,
                    'problems'=>$problems,
                    'diagnoses'=>$diagnoses,
                    'locators'=>$locators,
                    'deletableProblem'=>$deletableProblem]);}

     public function createDisconnectionOutOfBody($id, $appointment_id){
        $diagnosis= Diagnosis::find($id);
        $diagnoses=Diagnosis::all();
        $locators=Locator::all();
        $appointment=Appointment::find($appointment_id);
        $problems=$appointment->openProblems()->get();
         $deletableProblem=$appointment->problems()->latest()->first();
        return view('diagnosis.spiritout')
            ->with(['diagnosis'=>$diagnosis,
                    'problems'=>$problems,
                    'appointment'=>$appointment,
                    'deletableProblem'=>$deletableProblem]);}

    public function createDisconnectionSpirits($id, $appointment_id){
       $diagnosis= Diagnosis::find($id);
        $diagnoses=Diagnosis::all();
        $locators=Locator::all();
        $appointment=Appointment::find($appointment_id);
        $problems=$appointment->openProblems()->get();
         $deletableProblem=$appointment->problems()->latest()->first();
        return view('diagnosis.spirittospirit')
             ->with(['diagnosis'=>$diagnosis, 
                    'appointment'=>$appointment,
                    'problems'=>$problems,
                    'diagnoses'=>$diagnoses,
                    'locators'=>$locators,
                    'deletableProblem'=>$deletableProblem]);}


    public function createDrugs($id, $appointment_id){
        $diagnosis= Diagnosis::find($id);
        $appointment=Appointment::find($appointment_id);
        $drugs=Drug::all();
        $problems=$appointment->openProblems()->get();
         $deletableProblem=$appointment->problems()->latest()->first();
        return view('diagnosis.drugs')
            ->with(['diagnosis'=>$diagnosis,
                    'appointment'=>$appointment,
                    'problems'=>$problems,
                    'drugs'=>$drugs,
                    'deletableProblem'=>$deletableProblem]);}

    public function createEmotionalResonance($appointment_id){
        $diagnosis= Diagnosis::find(7);
        $appointment=Appointment::find($appointment_id);
        $emotions=Emotion::all();
        $problems=$appointment->openProblems()->get();
         $deletableProblem=$appointment->problems()->latest()->first();
        return view('diagnosis.emotionalresonance')
            ->with(['diagnosis'=>$diagnosis,
                    'emotions'=>$emotions,
                    'problems'=>$problems,
                    'appointment'=>$appointment,
                    'deletableProblem'=>$deletableProblem]);}

    public function createEntities($id, $appointment_id){
        $diagnosis= Diagnosis::find($id);
        $appointment=Appointment::find($appointment_id);
        $problems=$appointment->openProblems()->get();
         $deletableProblem=$appointment->problems()->latest()->first();
        return view('diagnosis.entities')
            ->with(['diagnosis'=>$diagnosis,
                    'problems'=>$problems,
                    'appointment'=>$appointment,
                    'deletableProblem'=>$deletableProblem]);}


    public function createExcess($id, $appointment_id){
        $diagnosis= Diagnosis::find($id);
        $appointment=Appointment::find($appointment_id);
        $problems=$appointment->openProblems()->get();
         $deletableProblem=$appointment->problems()->latest()->first();
        return view('diagnosis.excess')
            ->with(['diagnosis'=>$diagnosis,
                    'problems'=>$problems,
                    'appointment'=>$appointment,
                    'deletableProblem'=>$deletableProblem]);}

    public function createFood($id, $appointment_id){
         $diagnosis= Diagnosis::find($id);
         $appointment=Appointment::find($appointment_id);
         $foods=Food::all();
         $problems=$appointment->openProblems()->get();
          $deletableProblem=$appointment->problems()->latest()->first();
        return View('diagnosis.food')
            ->with(['diagnosis'=>$diagnosis,
                    'appointment'=>$appointment,
                    'problems'=>$problems,
                    'foods'=>$foods,
                    'deletableProblem'=>$deletableProblem]);}


    public function createHeartWall($appointment_id){
        $diagnosis= Diagnosis::find(6);
        $appointment=Appointment::find($appointment_id);
        $problems=$appointment->openProblems()->get();
         $deletableProblem=$appointment->problems()->latest()->first();
        return view('diagnosis.heartwall')
            ->with(['diagnosis'=>$diagnosis,
                    'problems'=>$problems,
                    'appointment'=>$appointment,
                    'deletableProblem'=>$deletableProblem]);}

     public function createHeavyMetal($id, $appointment_id){
        $appointment=Appointment::find($appointment_id);
        $diagnosis= Diagnosis::find($id);
        $problems=$appointment->openProblems()->get();
         $deletableProblem=$appointment->problems()->latest()->first();
        return view('diagnosis.heavymetal')
        ->with(['diagnosis'=>$diagnosis,
                'problems'=>$problems,
                'appointment'=>$appointment,
                'deletableProblem'=>$deletableProblem]);}

    public function createHerb($id, $appointment_id){
         $diagnosis= Diagnosis::find($id);
         $appointment=Appointment::find($appointment_id);
         $herb=Herb::all();
         $problems=$appointment->openProblems()->get();
          $deletableProblem=$appointment->problems()->latest()->first();
        return View('diagnosis.herb')
            ->with(['diagnosis'=>$diagnosis,
                    'appointment'=>$appointment,
                    'problems'=>$problems,
                    'herbs'=>$herb,
                    'deletableProblem'=>$deletableProblem]);}

    public function createHypnotic($id, $appointment_id){
        $diagnosis= Diagnosis::find($id);
        $appointment=Appointment::find($appointment_id);
        $problems=$appointment->openProblems()->get();
         $deletableProblem=$appointment->problems()->latest()->first();
        return view('diagnosis.hypnotic')
            ->with(['diagnosis'=>$diagnosis,
                    'problems'=>$problems,
                    'appointment'=>$appointment,
                    'deletableProblem'=>$deletableProblem]);}

    public function createIdea($id, $appointment_id){
        $diagnosis= Diagnosis::find($id);
        $appointment=Appointment::find($appointment_id);
        $emotions=Emotion::all();
        $problems=$appointment->openProblems()->get();
         $deletableProblem=$appointment->problems()->latest()->first();
        return View('diagnosis.idea')
            ->with(['diagnosis'=>$diagnosis,
                    'appointment'=>$appointment,
                    'problems'=>$problems,
                    'emotions'=>$emotions,
                    'deletableProblem'=>$deletableProblem]);}


    public function createInflammation($id, $appointment_id){
        $diagnosis= Diagnosis::find($id);
        $appointment=Appointment::find($appointment_id);
        $problems=$appointment->openProblems()->get();
         $deletableProblem=$appointment->problems()->latest()->first();
        return view('diagnosis.inflammation')
            ->with(['diagnosis'=>$diagnosis,
                    'problems'=>$problems,
                    'appointment'=>$appointment,
                    'deletableProblem'=>$deletableProblem]);}

    public function createIntolerance($id, $appointment_id){
        $diagnosis= Diagnosis::find($id);
        $appointment=Appointment::find($appointment_id);
        $problems=$appointment->openProblems()->get();
         $deletableProblem=$appointment->problems()->latest()->first();
        return View('diagnosis.intolerance')
    		->with(['diagnosis'=>$diagnosis,
                    'problems'=>$problems,
                    'appointment'=>$appointment,
                    'deletableProblem'=>$deletableProblem]);}

    public function createImage($id, $appointment_id){
        $diagnosis= Diagnosis::find($id);
        $appointment=Appointment::find($appointment_id);
        $emotions=Emotion::all();
        $problems=$appointment->openProblems()->get();
         $deletableProblem=$appointment->problems()->latest()->first();
        return View('diagnosis.images')
            ->with(['diagnosis'=>$diagnosis,
                    'appointment'=>$appointment,
                    'problems'=>$problems,
                    'emotions'=>$emotions,
                    'deletableProblem'=>$deletableProblem]);}

    public function createMalnutrition($id, $appointment_id){
         $diagnosis= Diagnosis::find($id);
         $appointment=Appointment::find($appointment_id);
         $foods=Food::all();
         $herb=Herb::all();
         $vitamins=Vitamin::all();
         $problems=$appointment->openProblems()->get();
          $deletableProblem=$appointment->problems()->latest()->first();
        return View('diagnosis.malnutrition')
            ->with(['diagnosis'=>$diagnosis,
                    'appointment'=>$appointment,
                    'problems'=>$problems,
                    'foods'=>$foods,
                    'herbs'=>$herb,
                    'vitamins'=>$vitamins,
                    'deletableProblem'=>$deletableProblem]);}

    public function createMemoryField($id, $appointment_id){
        $diagnosis= Diagnosis::find($id);
        $appointment=Appointment::find($appointment_id);
        $problems=$appointment->openProblems()->get();
         $deletableProblem=$appointment->problems()->latest()->first();
        return View('diagnosis.memoryfield')
           ->with(['diagnosis'=>$diagnosis,
                    'problems'=>$problems,
                    'appointment'=>$appointment,
                    'deletableProblem'=>$deletableProblem]);}

    public function createMiasm($id, $appointment_id){
        $diagnosis= Diagnosis::find($id);
        $appointment=Appointment::find($appointment_id);
        $problems=$appointment->openProblems()->get();
         $deletableProblem=$appointment->problems()->latest()->first();
        return View('diagnosis.miasm')
           ->with(['diagnosis'=>$diagnosis,
                    'problems'=>$problems,
                    'appointment'=>$appointment,
                    'deletableProblem'=>$deletableProblem]);}

    public function createNoWill($id, $appointment_id){
        $diagnosis= Diagnosis::find($id);
        $appointment=Appointment::find($appointment_id);
        $problems=$appointment->openProblems()->get();
         $deletableProblem=$appointment->problems()->latest()->first();
        return view('diagnosis.nowill')
               ->with(['diagnosis'=>$diagnosis,
                    'problems'=>$problems,
                    'appointment'=>$appointment,
                    'deletableProblem'=>$deletableProblem]);}

    public function createPathogen($id, $appointment_id){
        $appointment=Appointment::find($appointment_id);
        $diagnosis= Diagnosis::find($id);
        $problems=$appointment->openProblems()->get();
         $deletableProblem=$appointment->problems()->latest()->first();
        return view('diagnosis.pathogen')
                ->with(['diagnosis'=>$diagnosis,
                    'problems'=>$problems,
                    'appointment'=>$appointment,
                    'deletableProblem'=>$deletableProblem]);}

    public function createPsychicTrauma($id, $appointment_id){
        $diagnosis= Diagnosis::find($id);
        $appointment=Appointment::find($appointment_id);
        $emotions=Emotion::all();
        $problems=$appointment->openProblems()->get();
         $deletableProblem=$appointment->problems()->latest()->first();
        return view('diagnosis.psychictrauma')
            ->with(['diagnosis'=>$diagnosis,
                    'appointment'=>$appointment,
                    'problems'=>$problems,
                    'emotions'=>$emotions,
                    'deletableProblem'=>$deletableProblem]);}


    public function createSaboteur($id, $appointment_id){
        $diagnosis= Diagnosis::find($id);
        $diagnoses=Diagnosis::all();
        $locators=Locator::all();
        $appointment=Appointment::find($appointment_id);
        $problems=$appointment->openProblems()->get();
         $deletableProblem=$appointment->problems()->latest()->first();
        return view('diagnosis.saboteur')
            ->with(['diagnosis'=>$diagnosis,
                    'appointment'=>$appointment,
                    'problems'=>$problems,
                    'diagnoses'=>$diagnoses,
                    'locators'=>$locators,
                    'deletableProblem'=>$deletableProblem]);}

    public function createSleep($id, $appointment_id){
        $diagnosis= Diagnosis::find($id);
        $appointment=Appointment::find($appointment_id);
        $problems=$appointment->openProblems()->get();
         $deletableProblem=$appointment->problems()->latest()->first();
        return view('diagnosis.sleep')
            ->with(['diagnosis'=>$diagnosis,
                    'appointment'=>$appointment,
                    'problems'=>$problems,
                    'deletableProblem'=>$deletableProblem]);}

      public function createSpiritMal($id, $appointment_id){
        $appointment=Appointment::find($appointment_id);
        $diagnosis= Diagnosis::find(84);
        $problems=$appointment->openProblems()->get();
         $deletableProblem=$appointment->problems()->latest()->first();
        return view('diagnosis.spiritmal')
            ->with(['diagnosis'=>$diagnosis,
                    'appointment'=>$appointment,
                    'problems'=>$problems,
                    'deletableProblem'=>$deletableProblem]);}

    public function createT3($id, $appointment_id){
        $diagnosis= Diagnosis::find($id);
        $appointment=Appointment::find($appointment_id);
        $problems=$appointment->openProblems()->get();
         $deletableProblem=$appointment->problems()->latest()->first();
        return view('diagnosis.T3')
           ->with(['diagnosis'=>$diagnosis,
                    'appointment'=>$appointment,
                    'problems'=>$problems,
                    'deletableProblem'=>$deletableProblem]);}

    public function createToxicity($id, $appointment_id){
        $diagnosis= Diagnosis::find($id);
        $appointment=Appointment::find($appointment_id);
        $problems=$appointment->openProblems()->get();
         $deletableProblem=$appointment->problems()->latest()->first();
        return view('diagnosis.toxicity')
           ->with(['diagnosis'=>$diagnosis,
                    'appointment'=>$appointment,
                    'problems'=>$problems,
                    'deletableProblem'=>$deletableProblem]);}

    public function createTrappedEmotion($appointment_id){
        $diagnosis= Diagnosis::find(5);
        $appointment=Appointment::find($appointment_id);
        $problem = Problem::find($appointment_id);
        $heartwall=$appointment->heartwalls();
        $emotions=Emotion::all();
        $problems=$appointment->openProblems()->get();
        $lastproblem=$appointment->problems()->latest()->first();
        $deletableProblem=$appointment->problems()->latest()->first();
        return view('diagnosis.trappedemotion')
            ->with(['diagnosis'=>$diagnosis,
                    'appointment'=>$appointment,
                    'problems'=>$problems,
                    'emotions'=>$emotions,
                    'heartwall'=>$heartwall,
                    'lastproblem'=>$lastproblem,
                    'deletableProblem'=>$deletableProblem]);}

    public function createTrauma($id, $appointment_id){
        $diagnosis= Diagnosis::find($id);
        $appointment=Appointment::find($appointment_id);
        $problems=$appointment->openProblems()->get();
         $deletableProblem=$appointment->problems()->latest()->first();
        return view('diagnosis.trauma')
           ->with(['diagnosis'=>$diagnosis,
                    'problems'=>$problems,
                    'appointment'=>$appointment,
                    'deletableProblem'=>$deletableProblem]);}

    public function createVitamin($id, $appointment_id){
         $diagnosis= Diagnosis::find($id);
         $appointment=Appointment::find($appointment_id);
         $vitamins=Vitamin::all();
         $problems=$appointment->openProblems()->get();
          $deletableProblem=$appointment->problems()->latest()->first();
        return View('diagnosis.vitamin')
            ->with(['diagnosis'=>$diagnosis,
                    'appointment'=>$appointment,
                    'problems'=>$problems,
                    'vitamins'=>$vitamins,
                    'deletableProblem'=>$deletableProblem]);}

    public function createWillToDie($id, $appointment_id){
        $diagnosis= Diagnosis::find($id);
        $appointment=Appointment::find($appointment_id);
        $problems=$appointment->openProblems()->get();
         $deletableProblem=$appointment->problems()->latest()->first();
        return view('diagnosis.willtodie')
            ->with(['diagnosis'=>$diagnosis,
                    'appointment'=>$appointment,
                    'problems'=>$problems,
                    'deletableProblem'=>$deletableProblem]);}

}
