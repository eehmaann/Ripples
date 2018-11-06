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
Route::get('dropdown/Goals/{id}', 'UserController@getGoals');
Route::get('textbox/Goals/{id}', 'GoalController@getRelatedGoals');
Route::get('/', function () {
    return view('welcome');
});
Route::get('/emotion', 'EmotionController@index');

Route::get('/sessionstart', 'SessionController@create');


Route::get('/navigation/{appointment}', ['as'=>'navigation.show', 'uses' => 'LocatorsController@index']);

Route::get('diagnosis/ahe/{id}/create/{appointment}', 'DiagnosesController@createAHE');
Route::get('diagnosis/allergy/{id}/create/{appointment}', 'DiagnosesController@createAllergy');
Route::get('diagnosis/anchor/{id}/create/{appointment}', 'DiagnosesController@createAnchor');
Route::get('diagnosis/broadcast/{id}/create/{appointment}', 'DiagnosesController@createBroadcast');
Route::get('diagnosis/circuits/{id}/create/{appointment}', 'DiagnosesController@createCircuits');
Route::get('diagnosis/cording/{id}/create/{appointment}', 'DiagnosesController@createCording');
Route::get('diagnosis/curse/{id}/create{appointment}', 'DiagnosesController@createCurse');
Route::get('diagnosis/drugs/{id}/create{appointment}', 'DiagnosesController@createDrugs');
Route::get('diagnosis/emotionalresonance/{id}/create/{appointment}', 'DiagnosesController@createEmotionalResonance');
Route::get('diagnosis/entities/{id}/create/{appointment}', 'DiagnosesController@createEntities');
Route::get('diagnosis/excess/{id}/create/{appointment}', 'DiagnosesController@createExcess');
Route::get('diagnosis/heartwall/{id}/create/{appointment}', 'DiagnosesController@createHeartWall');
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
Route::get('diagnosis/trappedemotion/{id}/create/{appointment}', 
    ['as' => 'trappedemotion.create', 'uses' => 'DiagnosesController@createTrappedEmotion']);
Route::get('diagnosis/trauma/{id}/create/{appointment}', 'DiagnosesController@createTrauma');
Route::get('diagnosis/willtodie/{id}/create/{appointment}', 'DiagnosesController@createWillToDie'); 

Route::post('/problemsb/{appointment}', 'ProblemsController@storebasic');
Route::post('/problemsh/{appointment}', 'ProblemsController@storeHeartwall');
Route::post('/problemsc/{appointment_id}', 'ProblemsController@storeCord');
Route::post('/problemstrapped/{appointment}', 'ProblemsController@storeTrapped');
Route::post('/problemsemotion/{appointment}', 'ProblemsController@storeEmotions');
Route::post('/problemssolution/{appointment}', 'ProblemsController@storeSolution');
Route::post('/problemspastlife/{appointment}', 'ProblemsController@storePastLife');
Route::get('/problems/show/{appointment}', ['as' =>'problems.show', 'uses' => 'ProblemsController@showProblems']);
Route::get('/problems/{id}/clear/{appointment}',  'ProblemsController@updateClear');

Route::post('/appointment/storeall', 'AppointmentController@storeUserGoalAppointment');
Route::post('/appointment/storegoalsession', 'AppointmentController@storeGoalAppointment');
Route::post('/appointment/storesession', 'AppointmentController@storeAppointment');

Route::get('heartwall/autocomplete', 'HeartwallController@autocomplete');


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
