<?php

use Illuminate\Database\Seeder;
use App\Hormone;

class HormonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	$hormones=[
    	   
           ['Adiponectin', 1, 1],
           ['Adrenaline (epinephrine)', 1, 1],
            ['Adrenocorticotropic hormone (ACTH)', 1,1],
            ['Amylin', 1, 1],
            ['Androgens (e.g., testosterone)', 1, 1],
            ['Angiotensinogen', 1, 1],
            ['Atrial-natriuretic petide (ANP)', 2, 1],
            ['Betatrophin', 2, 1],
            ['Calciferol (vitamin D3)', 2, 1],
            ['Calcitriol', 2, 1],
            ['Cholecystokinin (CCK)', 2, 1],
            ['Corticotropin-releasing hormone (CRH)', 1, 2],
            ['Dopamine', 1, 2],
            ['Erythropoietin (EPO)', 1, 2],

            ['Estrogens (e.g., estradiol)', 1, 2],
            ['FGF-23 (phosphatonin', 1, 2],
            ['Fibroblast Growth Factor 19 (FGF19)', 2, 2],
            ['Follicle-stimulating hormone (FSH)', 2, 2],
            ['Gastrin', 2 ,2],
            ['Ghrelin', 2, 2],
            ['Glucagon', 2, 2],
            ['Glucocorticoids (e.g., cortisol)', 2, 2],
            ['Gonadotropin-releasing hormone (GnRH)', 1, 3],
            ['Growth hormone (GH)', 1, 3],
            ['Growth hormone-releasing hormone (GHRH)', 1, 3],
            ['Hepcidin', 1, 3],
            ['Human chorionic gonadotropin (HCG)', 1, 3],
            ['Incretins', 1, 3],

            ['Insulin', 2, 3],
            ['Insulin-like growth factor-1 (IGF-1)',2, 3],
            ['Irisin', 2, 3],
            ['Leptin', 2, 3],
            ['Leteinizing hormone (LH)', 2, 3],
            ['Melatonin', 2, 3],
            ['Mineralocorticoids (e.g., aldosterone)', 1, 4],
            ['Neuropeptide', 1, 4],
            ['Noradrenaline (norepinephrine)', 1, 4],
            ['Osteocalcin', 1, 4],
            ['Oxytocin', 1, 4],
            ['Parathyroid Hormone', 1, 4],
            ['Progesterone', 2, 4],
            ['Prolactin (PRL)', 2, 4],
            ['PYY3-36', 2,4],
            ['Retinol Binding Protein 4', 2, 4],
            ['Secretin', 2, 4],
            ['Serotonin', 2, 4],
            ['Somatostatin', 1,5],
            ['Thrombopoietin', 1, 5],
            ['Thyroid-stimulating hormone (TSH)', 1, 5],
            ['Thyrotropin-releasing hormone', 2,5],
            ['Thyroxine (T4)', 2, 5],
            ['Vasopressin', 2, 5],
            
            
    	];

        $count = count($hormones);

	    foreach ($hormones as $key => $hormoneData) {
	        $hormone = new hormone();

	        $hormone->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
	        $hormone->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
	        $hormone->name = $hormoneData[0];
	        $hormone->col_num = $hormoneData[1];
	        $hormone->row_num = $hormoneData[2];
	        $hormone->frequency = 0;

	        $hormone->save();
	        $count--;
        }
    }
}
