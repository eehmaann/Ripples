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
Route::get('/testimonials', function () {return view('clients.testimonials');});
Route::get('/services', function () {return view('clients.services');});
Route::get('/contact', ['as'=> 'contact.create', 'uses' => 'ContactController@create']);
Route::post('/contactstore', ['as'=> 'contact.store', 'uses' =>'ContactController@store']);
Route::get('/report/{id}', 'AppointmentController@showAppointment');
Route::get('/firstreport', 'Appointment@showLastAppointment');

//App Views
Route::get('dropdown/Goals/{id}', 'UserController@getGoals');
Route::get('textbox/Goals/{id}', 'GoalController@getRelatedGoals');
Route::get('listappointment/Goals/{id}', 'AppointmentController@getSavedAppointments');
Route::get('listpublishedappointment/Goals/{id}', 'AppointmentController@getPublishedAppointments');

Route::get('/', function () {
    return view('welcome');
});

//Navigation pages
Route::get('/sessionstart', ['as'=> 'session.create', 'uses' => 'SessionController@create']);
Route::get('/navigation/{appointment}', ['as'=>'navigation.show', 'uses' => 'LocatorsController@index']);

// Diagnosis pages
Route::get('diagnosis/activity/{id}/create/{appointment}', 'DiagnosesController@createActivity');
Route::get('diagnosis/ahe/{id}/create/{appointment}', 'DiagnosesController@createAHE');
Route::get('diagnosis/allergy/{id}/create/{appointment}', 'DiagnosesController@createAllergy');
Route::get('diagnosis/anchor/{id}/create/{appointment}', 'DiagnosesController@createAnchor');
Route::get('diagnosis/broadcast/{id}/create/{appointment}', 'DiagnosesController@createBroadcast');
Route::get('diagnosis/circuits/{id}/create/{appointment}', 'DiagnosesController@createCircuits');
Route::get('diagnosis/cording/{id}/create/{appointment}', 'DiagnosesController@createCording');
Route::get('diagnosis/curse/{id}/create/{appointment}', 'DiagnosesController@createCurse');
Route::get('diagnosis/drugs/{id}/create/{appointment}', 'DiagnosesController@createDrugs');
Route::get('diagnosis/emotionalresonance/7/create/{appointment}', 
    ['as' => 'emotionalResonance.create', 'uses' => 'DiagnosesController@createEmotionalResonance']);
Route::get('diagnosis/entities/{id}/create/{appointment}', 'DiagnosesController@createEntities');
Route::get('diagnosis/excess/{id}/create/{appointment}', 'DiagnosesController@createExcess');
Route::get('diagnosis/heartwall/6/create/{appointment}', 'DiagnosesController@createHeartWall');
Route::get('diagnosis/hypnotic/{id}/create/{appointment}', 'DiagnosesController@createHypnotic');
Route::get('diagnosis/intolerance/{id}/create/{appointment}', 'DiagnosesController@createIntolerance');
Route::get('diagnosis/inflammation/{id}/create/{appointment}', 'DiagnosesController@createInflammation');
Route::get('diagnosis/image/{id}/create/{appointment}', 'DiagnosesController@createImage');
Route::get('diagnosis/malnutrition/{id}/create/{appointment}', 'DiagnosesController@createMalnutrition');
Route::get('diagnosis/memoryfield/{id}/create/{appointment}', 'DiagnosesController@createMemoryField');
Route::get('diagnosis/miasm/{id}/create/{appointment}', 'DiagnosesController@createMiasm');
Route::get('diagnosis/nowill/{id}/create/{appointment}', 'DiagnosesController@createNoWill');
Route::get('diagnosis/psychictrauma/{id}/create/{appointment}', 'DiagnosesController@createPsychicTrauma');
Route::get('diagnosis/pathogen/{id}/create/{appointment}', 'DiagnosesController@createPathogen');
Route::get('diagnosis/saboteur/{id}/create/{appointment}', 'DiagnosesController@createSaboteur');
Route::get('diagnosis/sleep/{id}/create/{appointment}', 'DiagnosesController@createSaboteur');
Route::get('diagnosis/T3/{id}/create/{appointment}', 'DiagnosesController@createT3');
Route::get('diagnosis/toxicity/{id}/create/{appointment}', 'DiagnosesController@createToxicity');
Route::get('diagnosis/trappedemotion/5/create/{appointment}', 
    ['as' => 'trappedemotion.create', 'uses' => 'DiagnosesController@createTrappedEmotion']);
Route::get('diagnosis/trauma/{id}/create/{appointment}', 'DiagnosesController@createTrauma');
Route::get('diagnosis/willtodie/{id}/create/{appointment}', 'DiagnosesController@createWillToDie'); 

//Problem storage
Route::post('/problemsb/{appointment}', 'ProblemsController@storeBasic');
Route::post('/problemsbclear/{appointment}', 'ProblemsController@storeBasicClear');
Route::post('/problemsh/{appointment}', 'ProblemsController@storeHeartwall');
Route::post('/problemsc/{appointment}', 'ProblemsController@storeCord');
Route::post('/problemstrapped/{appointment}', 'ProblemsController@storeTrapped');
Route::post('/problemsemotionalres/{appointment}', 'ProblemsController@storeEmotionalResonance');
Route::post('/problemsemotion/{appointment}', 'ProblemsController@storeEmotions');
Route::post('/problemspastlife/{appointment}', 'ProblemsController@storePastLife');
Route::post('/problemspastlifecauses/{appointment}', 'ProblemsController@storePastLifeCauses');
Route::post('/problemssolution/{appointment}', 'ProblemsController@storeSolution');
Route::post('/problemsjs/{appointment}', 'ProblemsController@storeJustSolution');
Route::put('/heartwallUpdate/{heartwall}/update/{appointment}', 'HeartwallController@updateHeartwall');


Route::get('/problems/show/{appointment}', ['as' =>'problems.show', 'uses' => 'ProblemsController@showProblems']);
Route::get('/problems/{id}/clear/{appointment}',  'ProblemsController@updateClear');


//Updates


Route::post('/appointment/storeall', 'AppointmentController@storeUserGoalAppointment');
Route::post('/appointment/storegoalsession', 'AppointmentController@storeGoalAppointment');
Route::post('/appointment/storesession', 'AppointmentController@storeAppointment');
Route::put('/appointment/{id}/update', 'AppointmentController@publishAppointment');





//Autocompletes
Route::get('/searchajax',array('as'=>'searchajax','uses'=>'HeartwallController@autoComplete'));
Route::get('/searchsubstance',array('as'=>'searchsubstance','uses'=>'IntoleranceController@substanceAutoComplete'));
Route::get('/searchsymptom',array('as'=>'searchsymptom','uses'=>'IntoleranceController@symptomAutoComplete'));


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
