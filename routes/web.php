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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/emotion', 'EmotionController@index');
Route::get('/navigation',  'LocatorsController@index');

Route::get('diagnosis/ahe/{id}/create', 'DiagnosesController@createAHE');
Route::get('diagnosis/allergy/{id}/create', 'DiagnosesController@createAllergy');
Route::get('diagnosis/anchor/{id}/create', 'DiagnosesController@createAnchor');
Route::get('diagnosis/broadcast/{id}/create', 'DiagnosesController@createBroadcast');
Route::get('diagnosis/circuits/{id}/create', 'DiagnosesController@createCircuits');
Route::get('diagnosis/cording/{id}/create', 'DiagnosesController@createCording');
Route::get('diagnosis/curse/{id}/create', 'DiagnosesController@createCurse');
Route::get('diagnosis/drugs/{id}/create', 'DiagnosesController@createDrugs');
Route::get('diagnosis/emotionalresonance/{id}/create', 'DiagnosesController@createEmotionalResonance');
Route::get('diagnosis/entities/{id}/create', 'DiagnosesController@createEntities');
Route::get('diagnosis/excess/{id}/create', 'DiagnosesController@createExcess');
Route::get('diagnosis/heartwall/{id}/create', 'DiagnosesController@createHeartWall');
Route::get('diagnosis/hypnotic/{id}/create', 'DiagnosesController@createHypnotic');
Route::get('diagnosis/intolerance/{id}/create', 'DiagnosesController@createIntolerance');
Route::get('diagnosis/inflammation/{id}/create', 'DiagnosesController@createInflammation');
Route::get('diagnosis/image/{id}/create', 'DiagnosesController@createImage');
Route::get('diagnosis/malnutrition/{id}/create', 'DiagnosesController@createMalnutrition');
Route::get('diagnosis/memoryfield/{id}/create', 'DiagnosesController@createMemoryField');
Route::get('diagnosis/miasm/{id}/create', 'DiagnosesController@createMiasm');
Route::get('diagnosis/nowill/{id}/create', 'DiagnosesController@createNoWill');
Route::get('diagnosis/psychictrauma/{id}/create', 'DiagnosesController@createPsychicTrauma');
Route::get('diagnosis/pathogen/{id}/create', 'DiagnosesController@createPathogen');
Route::get('diagnosis/saboteur/{id}/create', 'DiagnosesController@createSaboteur');
Route::get('diagnosis/T3/{id}/create', 'DiagnosesController@createT3');
Route::get('diagnosis/toxicity/{id}/create', 'DiagnosesController@createToxicity');
Route::get('diagnosis/trappedemotion/{id}/create', 'DiagnosesController@createTrappedEmotion');
Route::get('diagnosis/trauma/{id}/create', 'DiagnosesController@createTrauma');
Route::get('diagnosis/willtodie/{id}/create', 'DiagnosesController@createWillToDie'); 

Route::post('/problemsb', 'ProblemsController@storebasic');


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