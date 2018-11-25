<?php

use Illuminate\Database\Seeder;
use App\Cure;
use App\Diagnosis;

class CureDiagnosisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $diagnoses=[
        	'Parasites'=>['VRM1', 'VRM2', 'VRM3', 'VRM4', 'Activated Sodium Chlorite'],
			'Fungal'=>['Activated Sodium Chlorite', 'Neem Leaf capsule','Coconut Oil',
    	 		'Tai-Ra-Chi & T4 from Systemic Labs'],           
			'Bacterial'=>['Wild Oregano Oil or Leaf','Olive Leaf Extract','Colloidal Silver',
				'Activated Sodium Chlorite'],               
			'Viral'=>['Wild Oregano Oil or Leaf','Olive Leaf Extract','Colloidal Silver',
				'Activated Sodium Chlorite'],
			'Mold'=>['Activated Sodium Chlorite', 'Neem Leaf capsule','Coconut Oil'],
            'Parasites toxicity'=>['VRM1', 'VRM2', 'VRM3', 'VRM4', 'Activated Sodium Chlorite'],
            'Fungal toxicity'=>['Activated Sodium Chlorite', 'Neem Leaf capsule','Coconut Oil',
                'Tai-Ra-Chi & T4 from Systemic Labs'],           
            'Bacterial toxicity'=>['Wild Oregano Oil or Leaf','Olive Leaf Extract','Colloidal Silver',
                'Activated Sodium Chlorite'],               
            'Mold toxicity'=>['Activated Sodium Chlorite', 'Neem Leaf capsule','Coconut Oil']

        ];
        foreach ($diagnoses as $name => $cures){
        	$diagnosis=Diagnosis::where('name', 'like', $name)->first();
        	foreach ($cures as $cureName) {
        		$cure =Cure::where('name', 'like', $cureName)->first();
        		$diagnosis->cures()->save($cure);
        	}
        }
    }
}