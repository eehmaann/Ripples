<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/  

//Client pages
Route::get('/guests', ['as'=>'welcome.guests', 'uses' =>'LocatorsController@guest']);
Route::get('/about', function () {return view('clients.about');}); 
Route::get('/testimonials', function () {return view('clients.testimonials');}); 
Route::get('/services', function () {return view('clients.services');});
Route::get('/contact', ['as'=> 'contact.create', 'uses' => 'ContactController@create']);
Route::post('/contactstore', ['as'=> 'contact.store', 'uses' =>'ContactController@store']);

Route::get('/report/{id}', 'AppointmentController@showAppointment')->middleware('auth');
Route::get('/firstreport', ['as'=>'clientreport.show', 'uses' =>'AppointmentController@showLastAppointment'])->middleware('auth');

//Appointment Views. 
Route::get('dropdown/Goals/{id}', 'UserController@getGoals');
Route::get('textbox/Goals/{id}', 'GoalController@getRelatedGoals');
Route::get('listappointment/Goals/{id}', 'GoalController@getSavedAppointments');
Route::get('listpublishedappointment/Goals/{id}', 'GoalController@getPublishedAppointments');
Route::get('listpublishedgoals/Goals/{id}', 'UserController@getPublishedGoals');
Route::get('listuserappointments', 'UserController@getPublishedAppointments');
Route::get('lastpublishedappointment/Goals/{id}', 'GoalController@lastPublishedAppointments');
Route::get('lastpublishedappointment/User/{id}', 'UserController@lastPublishedAppointment');


Route::get('/', ['as'=>'welcome.guests', 'uses' =>'LocatorsController@guest']);

//Navigation pages. 
Route::get('/sessionstart', ['as'=> 'session.create', 'uses' => 'SessionController@create'])->middleware('auth');
Route::get('/homesession', ['as'=> 'practitioner.home', 'uses' => 'AppointmentController@appointmentStart'])->middleware('auth');
Route::get('/navigation/{appointment}', ['as'=>'navigation.show', 'uses' => 'LocatorsController@index'])->middleware('auth');

// Diagnosis pages
Route::get('diagnosis/activity/{id}/create/{appointment}', 'DiagnosesController@createActivity')->middleware('auth');
Route::get('diagnosis/ahe/{id}/create/{appointment}', 'DiagnosesController@createAHE')->middleware('auth');;
Route::get('diagnosis/allergy/{id}/create/{appointment}', 'DiagnosesController@createAllergy')->middleware('auth');
Route::get('diagnosis/anchor/{id}/create/{appointment}', 'DiagnosesController@createAnchor')->middleware('auth');
Route::get('diagnosis/broadcast/{id}/create/{appointment}', 'DiagnosesController@createBroadcast')->middleware('auth');
Route::get('diagnosis/body/{id}/create/{appointment}', 'DiagnosesController@createDisconnectionBodies')->middleware('auth');
Route::get('diagnosis/circuits/{id}/create/{appointment}', 'DiagnosesController@createCircuits')->middleware('auth');
Route::get('diagnosis/color/{id}/create/{appointment}', 'DiagnosesController@createColor')->middleware('auth');
Route::get('diagnosis/cording/{id}/create/{appointment}', 
    ['as' => 'cording.create', 'uses' => 'DiagnosesController@createCording'])->middleware('auth');

Route::get('diagnosis/curse/{id}/create/{appointment}', 'DiagnosesController@createCurse')->middleware('auth');
Route::get('diagnosis/dehydration/{id}/create/{appointment}', 'DiagnosesController@createDehydration')->middleware('auth');
Route::get('diagnosis/drugs/{id}/create/{appointment}', 'DiagnosesController@createDrugs')->middleware('auth');
Route::get('diagnosis/emotionalresonance/7/create/{appointment}', 
    ['as' => 'emotionalResonance.create', 'uses' => 'DiagnosesController@createEmotionalResonance'])->middleware('auth');
Route::get('diagnosis/entities/{id}/create/{appointment}', 'DiagnosesController@createEntities')->middleware('auth');
Route::get('diagnosis/excess/{id}/create/{appointment}', 'DiagnosesController@createExcess')->middleware('auth');
Route::get('diagnosis/food/{id}/create/{appointment}', 'DiagnosesController@createFood')->middleware('auth');
Route::get('diagnosis/heartwall/6/create/{appointment}', 'DiagnosesController@createHeartWall')->middleware('auth');
Route::get('diagnosis/heavymetal/{id}/create/{appointment}', 'DiagnosesController@createHeavyMetal')->middleware('auth');
Route::get('diagnosis/herb/{id}/create/{appointment}', 'DiagnosesController@createHerb')->middleware('auth');
Route::get('diagnosis/hypnotic/{id}/create/{appointment}', 'DiagnosesController@createHypnotic')->middleware('auth');
Route::get('diagnosis/idea/{id}/create/{appointment}', 'DiagnosesController@createIdea')->middleware('auth');
Route::get('diagnosis/intolerance/{id}/create/{appointment}', 'DiagnosesController@createIntolerance')->middleware('auth');
Route::get('diagnosis/inflammation/{id}/create/{appointment}', 'DiagnosesController@createInflammation')->middleware('auth');
Route::get('diagnosis/images/{id}/create/{appointment}', 'DiagnosesController@createImage')->middleware('auth');
Route::get('diagnosis/malnutrition/{id}/create/{appointment}', 'DiagnosesController@createMalnutrition')->middleware('auth');
Route::get('diagnosis/memoryfield/{id}/create/{appointment}', 'DiagnosesController@createMemoryField')->middleware('auth');
Route::get('diagnosis/miasm/{id}/create/{appointment}', 'DiagnosesController@createMiasm')->middleware('auth');
Route::get('diagnosis/nowill/{id}/create/{appointment}', 'DiagnosesController@createNoWill')->middleware('auth');
Route::get('diagnosis/psychictrauma/{id}/create/{appointment}', 'DiagnosesController@createPsychicTrauma')->middleware('auth');
Route::get('diagnosis/pathogen/{id}/create/{appointment}', 'DiagnosesController@createPathogen')->middleware('auth');
Route::get('diagnosis/saboteur/{id}/create/{appointment}', 'DiagnosesController@createSaboteur')->middleware('auth');
Route::get('diagnosis/sickness/{id}/create/{appointment}', 'DiagnosesController@createDisconnectionSickness')->middleware('auth');
Route::get('diagnosis/sleep/{id}/create/{appointment}', 'DiagnosesController@createSleep')->middleware('auth');
Route::get('diagnosis/spiritbody/{id}/create/{appointment}', 'DiagnosesController@createDisconnectionSpiritBody')->middleware('auth');
Route::get('diagnosis/spirit/{id}/create/{appointment}', 'DiagnosesController@createDisconnectionSpirits')->middleware('auth');
Route::get('diagnosis/spiritmal/{id}/create/{appointment}', 'DiagnosesController@createSpiritMal')->middleware('auth');
Route::get('diagnosis/spiritout/{id}/create/{appointment}', 'DiagnosesController@createDisconnectionOutOfBody')->middleware('auth');


Route::get('diagnosis/T3/{id}/create/{appointment}', 'DiagnosesController@createT3')->middleware('auth');
Route::get('diagnosis/toxicity/{id}/create/{appointment}', 'DiagnosesController@createToxicity')->middleware('auth');
Route::get('diagnosis/trappedemotion/5/create/{appointment}', 
    ['as' => 'trappedemotion.create', 'uses' => 'DiagnosesController@createTrappedEmotion'])->middleware('auth');
Route::get('diagnosis/trauma/{id}/create/{appointment}', 'DiagnosesController@createTrauma')->middleware('auth');
Route::get('diagnosis/vitamin/{id}/create/{appointment}', 'DiagnosesController@createVitamin')->middleware('auth');
Route::get('diagnosis/willtodie/{id}/create/{appointment}', 'DiagnosesController@createWillToDie')->middleware('auth'); 

//Problem storage
Route::post('/problemsallergy/{appointment}', 'ProblemsController@storeAllergy')->middleware('auth');
Route::post('/problemsallergyclear/{appointment}', 'ProblemsController@storeAllergyClear')->middleware('auth');
Route::post('/problemsb/{appointment}', 'ProblemsController@storeBasic')->middleware('auth');
Route::post('/problemsbclear/{appointment}', 'ProblemsController@storeBasicClear')->middleware('auth');
Route::post('/problemsh/{appointment}', 'ProblemsController@storeHeartwall')->middleware('auth');
Route::post('/problemsc/{appointment}', 'ProblemsController@storeCord')->middleware('auth');
Route::post('/problemstrapped/{appointment}', 'ProblemsController@storeTrapped')->middleware('auth');
Route::post('/problemsemotionalres/{appointment}', 'ProblemsController@storeEmotionalResonance')->middleware('auth');
Route::post('/problemsemotion/{appointment}', 'ProblemsController@storeEmotions')->middleware('auth');
Route::post('/problemspastlife/{appointment}', 'ProblemsController@storePastLife')->middleware('auth');
Route::post('/problemspastlifecauses/{appointment}', 'ProblemsController@storePastLifeCauses')->middleware('auth');
Route::post('/problemssolution/{appointment}', 'ProblemsController@storeSolution')->middleware('auth');
Route::post('/problemsjs/{appointment}', 'ProblemsController@storeJustSolution')->middleware('auth');
Route::post('/problemsclearcolor/{appointment}', 'ProblemsController@storeColorClear')->middleware('auth');
Route::post('/problemscolor/{appointment}', 'ProblemsController@storeColor')->middleware('auth');

Route::post('/problemsclearcurse/{appointment}', 'ProblemsController@storeCurseClear')->middleware('auth');
Route::post('/problemscurse/{appointment}', 'ProblemsController@storeCurseCord')->middleware('auth');
Route::post('/problemsintolerance/{appointment}', 'ProblemsController@storeIntolerance')->middleware('auth');
Route::post('/problemsintoleranceclear/{appointment}', 'ProblemsController@storeIntoleranceClear')->middleware('auth');
Route::post('/problemssabotuer/{appointment}', 'ProblemsController@storeSabotuerCord')->middleware('auth');
Route::post('/problemssabotuerclear/{appointment}', 'ProblemsController@storeSabotuerClear')->middleware('auth');

Route::post('/problemsdisconnection/{appointment}', 'ProblemsController@storeDisconnection')->middleware('auth');
Route::post('/problemsspirit/{appointment}', 'ProblemsController@storeSpirittoSpirit')->middleware('auth');
Route::post('/heartwallUpdate/{heartwall}/update/{appointment}', 'HeartwallController@updateHeartwall')->middleware('auth');
Route::post('/heartwallClear/{heartwall}/update/{appointment}', 'HeartwallController@clearHeartwall')->middleware('auth');

Route::post('/disconnectionUpdate/{disconnection}/update/{appointment}', ['as' => 'updateDisconnection', 'uses' => 'DisconnectionController@updateDisconnection'])->middleware('auth');
Route::post('/disconnectionClear/{heartwall}/update/{appointment}', ['as' =>'repairDisconnection','uses' => 
    'DisconnectionController@clearDisconnection'])->middleware('auth');


Route::get('/problems/show/{appointment}', ['as' =>'problems.show', 'uses' 
    => 'ProblemsController@showProblems'])->middleware('auth');
Route::get('/problems/{id}/clear/{appointment}',  'ProblemsController@updateClear')->middleware('auth');

Route::delete('/problem/{id}/delete/{appointment}', ['as' => 'problem.delete', 'uses' 
    =>'ProblemsController@destroyProblem'])->middleware('auth');
Route::delete('/problem/{id}/delete/{appointment}', ['as' => 'problem.delete', 'uses' 
    =>'ProblemsController@destroyProblem'])->middleware('auth');


//Updates


Route::post('/appointment/storeall', 'AppointmentController@storeUserGoalAppointment')->middleware('auth');
Route::post('/appointment/storegoalsession', 'AppointmentController@storeGoalAppointment')->middleware('auth');
Route::post('/appointment/storesession', 'AppointmentController@storeAppointment')->middleware('auth');
Route::post('/appointment/{id}/publish', ['as' =>'appointment.publish', 'uses' 
    =>'AppointmentController@publishAppointment'])->middleware('auth');
Route::delete('/appointment/{id}/delete', ['as' => 'appointment.delete', 'uses' 
    =>'AppointmentController@destroyAppointment'])->middleware('auth');
//Autocompletes
Route::get('/searchheartwall',array('as'=>'searchheartwall','uses'=>'HeartwallController@autoComplete'));
Route::get('/searchsubstance',array('as'=>'searchsubstance','uses'=>'IntoleranceController@substanceAutoComplete'));
Route::get('/searchsymptom',array('as'=>'searchsymptom','uses'=>'IntoleranceController@symptomAutoComplete'));
Route::get('/searchsaboteur',array('as'=>'searchsaboteur','uses'=>'SaboteurController@autoComplete'));
Route::get('/searchcurse',array('as'=>'searchcurse','uses'=>'CurseController@autoComplete'));


Route::get('/debug', function () {

    $debug = [
        'Environment' => App::environment(),
        'Database defaultStringLength' => Illuminate\Database\Schema\Builder::$defaultStringLength,
    ];

    /*
    The following commented out line will print your MySQL credentials.
    Uncomment this line only if you're facing difficulties connecting to the
    database and you need to confirm your credentials. When you're done
    debugging, comment it back out so you don't accidentally leave it
    running on your production server, making your credentials public.
    */
    #$debug['MySQL connection config'] = config('database.connections.mysql');

    try {
        $databases = DB::select('SHOW DATABASES;');
        $debug['Database connection test'] = 'PASSED';
        $debug['Databases'] = array_column($databases, 'Database');
    } catch (Exception $e) {
        $debug['Database connection test'] = 'FAILED: '.$e->getMessage();
    }

    dump($debug);
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
