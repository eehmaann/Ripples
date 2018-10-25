<?php

use Illuminate\Database\Seeder;

use App\Locator;
class LocatorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $locators = [
        	['Energy','', 'Base'],
	        ['Pathogen','', 'Base'],
	        ['Misalignment','', 'Base',],
	        ['Circuits and Systems', '', 'Base'],
	        ['Toxins', '', 'Base'],
	        ['Lifestyle & Nutrition', '', 'Base'],
	        
	        ['Post-Traumatic','', 'Energy'],
        	['Allergy/Intolerance','', 'Energy'],
	        ['Emotional','', 'Energy'],
	        ['Mental','', 'Energy',],
	        ['Offensive', '', 'Energy'],
	        
	        ['Heavy Metals','', 'Toxins'],
        	['Excesses', '','Toxins'],
        	['EM Spectrum', '', 'Toxins'],
        	['Chemicals', '', 'Toxins'],
        	['Prions', '', 'Toxins'],
        	['Microbial', '', 'Toxins'],
        	['Dental', '', 'Toxins'],   	
        	['Medical','','Chemicals'],
        	['Environmental','', 'Chemicals'],
        	['Food Additives','','Chemicals'], 
        	
        	['Malnutrition','','Lifestyle & Nutrition'],
        	['Foods, Herbs & Nutrients','', 'Lifestyle & Nutrition'],
        	['Outside Needs','', 'Lifestyle & Nutrition'],
        	['Physical Needs','', 'Outside Needs'],
        	['Exercise','','Physical Needs'],
        	['Muscle Training','','Exercise'],
        	['Mental & Emotional Fitness','','Outside Needs'],
        	
        	['Organs','','Circuits and Systems'],
        	['Glands','','Circuits and Systems'],
        	['Chakras','','Circuits and Systems'],
           	['Systems','','Circuits and Systems'],
            ['Accupuncture System','','Circuits and Systems'],
            ['Circulatory System','','Systems'],
			['Digestive System','','Systems'],                   	     	
			['Endocrine System','','Systems'],
			['Immune System','','Systems'],
			['Lymphatic System','','Systems'],
			['Nervous System','','Systems'],
			['Reproductive System','','Systems'],
			['Respiratory System','','Systems'],
			['Muscular System','','Systems'],
			['Skeleton System','','Systems'],
			['Urinary System','','Systems'],
			['Integumentary System','','Systems'],
			['Abdominal Vessels','','Circulatory System'],
			['Head and Necks Vessels','','Circulatory System'],
			['Lower Limb Vessels','','Circulatory System'],
			['Thoracic Circulation','','Circulatory System'],
			['Upper Limb Vessels','','Circulatory System'],
			['Heart','','Circulatory System'],
			['Face and Neck Vessels','','Head and Neck Vessels'],
			['Skull Interior Vessels','','Head and Neck Vessels'],
			['Heart Circulation','','Thoracic Circulation'],
			['Central Nervous System','','Nervous System'],
			['Peripheral Nervous System','','Nervous System'],
			['Autonomic Nervous System','','Peripheral Nervous System'],
			['Brain','','Central Nervous System'],
			['Cerebrum','','Brain'],
			['Brain Stem','','Brain'],
			['Male','','Reproductive System'],
			['Female','','Reproductive System'],
			['Penis','','Male'],
			['Abdominal Muscles','','Muscular System'],
			['Neck Muscles','','Muscular System'],
			['Head Muscles','','Muscular System'],
			['Thoracic Muscles','','Muscular System'],
			['Back Muscles','','Muscular System'],
			['Upper Limb Muscles','','Muscular System'],
			['Lower Limb Muscles','','Muscular System'],
			['Connective Tissue','','Skeleton System'],
			['Skin','','Integumentary System'],
			['Morning sickness','','Disconnections'],
			['The Twelve Standard Meridians','','Accupuncture System'],
			['The Eight Extraordinary Meridians','','Accupuncture System'],
			['Connective Tissue','','Misalignment'],
			
			['Glands','','Misalignment'],
			['Organs','','Misalignment'],
			['Systems','','Misalignment'],
			['Skeleton','','Misalignment'],
			['Axial Skeleton','', 'Skeleton'],
			['Appendicular Skeleton','', 'Skeleton'],
			['Skull','','Axial Skeleton'],
			['Teeth','','Axial Skeleton'],
			['Thoracic Cage','','Axial Skeleton'],
			['Vertebral Column','','Axial Skeleton'],
			['Cranial Bones','','Skull'],
			['Facial Bones','','Skull'],
			['Middle Ear Bones','','Skull'],
			['Facial Bones','','Cranial Bones'],
			['Middle Ear Bones','','Cranial Bones'],
			['True Ribs','','Thoracic Cages'],
			['False Ribs','','Thoracic Cages'],
			['Cervical Vertebrae','','Vertebral Column'],
			['Thoracic Vertebrae','','Vertebral Column'],
			['Lumbar Vertebrae','','Vertebral Column'],
			['Sacrum and Coccyx','','Vertebral Column'],
			['Upper Limbs','','Appendicular Skeleton'],
			['Lower Limbs','','Appendicular Skeleton'],
			['Wrist Bones', '','Upper Limb'],
			['Hand Bones','', 'Upper Limb'],
			['Pelvis','','Lower Limb'],
			['Leg','', 'Lower Limb'],
			['Foot','', 'Lower Limb'],
			['Disks','','Connective Tissue'],
			['Thoracic disks upper','','Disks'],
			['Thoracic disks lower','','Disks'],
			['Lumbar disks','','Disks'],
			['Cervical disks','','Disks'],

	    ];
         $count = count($locators);
	    foreach ($locators as $key => $locatorData) {
	        
	        $locator = new Locator();
	        $locator->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
	        $locator->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
	        $locator->name = $locatorData[0];
	        $locator->picture= $locatorData[1];
	        $locator->category_type= $locatorData[2];
	        $locator->save();
	        $count--;
    } //
  }
}
