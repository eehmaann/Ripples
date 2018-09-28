<?php

use Illuminate\Database\Seeder;

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
        	['Energy','', 'base'],
	        ['Pathogen','', 'base'],
	        ['Misalignment','', 'base',],
	        ['Circuits and Systems', '', 'base'],
	        ['Toxins', '', 'base'],
	        ['Lifestyle and Nutrition', '', 'base'],
	        
	        ['Post-Traumatic','', 'energy'],
        	['Allergy/Intolerance','', 'energy'],
	        ['Emotional','', 'energy'],
	        ['Mental','', 'energy',],
	        ['Offensive', '', 'energy'],
	        ['Post-Traumatic','', 'energy'],
	        
	        ['Heavy Metals','', 'toxins'],
        	['Excesses', '','toxins'],
        	['EM Spectrum', '' 'toxins'],
        	['Chemicals', '', 'toxins'],
        	['Prions', '' 'toxins'],
        	['Microbial', '', 'toxins'],
        	['Dental', '' 'toxins'],   	
        	['Medical','','chemicals'],
        	['Environmental','', 'chemicals'],
        	['Food Additives','','chemicals'], 
        	
        	['Malnutrition','','lifestyle and nutrition'],
        	['Foods, Herbs & Nutrients','', 'lifestyle and nutrition'],
        	['Outside Needs','', 'lifestyle and nutrition'],
        	['Physical Needs','', 'outside needs'],
        	['Exercise','','physical needs'],
        	['Martial Arts','','exercise'],
        	['Movement Therapy','','exercise'],
        	['Sports','','exercise'],
        	['Aerobics','','exercise'],
        	['Muscle Training','','exercise'],
        	['Mental & Emotional Fitness','','outside needs'],
        	
        	['Organs','','circuits and systems'],
        	['Glands','','circuits and systems'],
        	['Chakras','','circuits and systems'],
           	['Systems','','circuits and systems'],
           	['Disconnections','','circuits and systems'],
            ['Accupuncture System','','circuits and systems'],
            ['Circulatory System','','systems'],
			['Digestive System','','systems'],                   	     	
			['Endocrine System','','systems'],
			['Immune System','','systems'],
			['Lymphatic System','','systems'],
			['Nervous System','','systems'],
			['Reproductive System','','systems'],
			['Respiratory System','','systems'],
			['Muscular System','','systems'],
			['Skeleton System','','systems'],
			['Urinary System','','systems'],
			['Integumentary System','','systems'],
			['Abdominal Vessels','','circulatory system'],
			['Head and Necks Vessels','','circulatory system'],
			['Lower Limb Vessels','','circulatory system'],
			['Thoracic Circulation','','circulatory system'],
			['Upper Limb Vessels','','circulatory system'],
			['Heart','','circulatory system'],
			['Face and Neck Vessels','','head and neck vessels'],
			['Skull Interior Vessels','','head and neck vessels'],
			['Heart Circulation','','thoracic circulation'],
			['Cental Nervous System','','nervous system'],
			['Peripheral Nervous System','','nervous system'],
			['Autonomic Nervous System','','peripheral nervous system'],
			['Brain','','central nervous system'],
			['Cerebrum','','brain'],
			['Brain Stem','','brain'],
			['Male','','reproductive system'],
			['Female','','reproductive system'],
			['Penis','','male'],
			['Abdominal Muscles','','muscular system'],
			['Neck Muscles','','muscular system'],
			['Head Muscles','','muscular system'],
			['Thoracic Muscles','','muscular system'],
			['Back Muscles','','muscular system'],
			['Upper Limb Muscles','','muscular system'],
			['Lower Limb Muscles','','muscular system'],
			['Connective Tissue','','skeleton system'],
			['Skin','','integumentary system'],
			['Spirit out of ']
			['Morning sickness','','disconnections'],
			['The Twelve Standard Meridians','','accupuncture system'],
			['The Eight Extraordinary Meridians','','accupuncture system'],
			['Connective Tissue','','misalignment'],
			
			['Glands','','misalignment'],
			['Organs','','misalignment'],
			['Systems','','misalignment'],
			['Skeleton','','misalignment'],
			['Axial Skeleton','', 'skeleton'],
			['Appendicular Skeleton','', 'skeleton'],
			['Skull','','axial skeleton'],
			['Teeth','','axial skeleton'],
			['Thoracic Cage','','axial skeleton'],
			['Vertebral Column','','axial skeleton'],
			['Cranial Bones','','skull'],
			['Facial Bones','','skull'],
			['Middle Ear Bones','','skull'],
			['Facial Bones','','cranial bones'],
			['Middle Ear Bones','','cranial bones'],
			['True Ribs','','thoracic cages'],
			['False Ribs','','thoracic cages'],
			['Cervical Vertebrae','','vertebral column'],
			['Thoracic Vertebrae','','vertebral column'],
			['Lumbar Vertebrae','','vertebral column'],
			['Sacrum and Coccyx','','vertebral column'],
			['Upper Limb','','appendicular skeleton'],
			['Lower Limb','','appendicular skeleton'],
			['Wrist Bones', '','upper limb'],
			['Hand Bones','', 'upper limb'],
			['Pelvis','','lower limb'],
			['Leg','', 'lower limb'],
			['Foot','', ' lower limb'],
			['Disks','','connective tissue'],
			['Thoracic disks upper','','disks'],
			['Thoracic disks lower','','disks'],
			['Lumbar disks','','disks'],
			['Cervical disks','','disks'],

	    ];
         $count = count($locators);
	    foreach ($locators as $key => $locatorData) {
	        $locator = new Locator();

	        $locator->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
	        $locator->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
	        $locator->name = $locatorData[0];
	        $locator->locator_id = $locatorData[1];
	        $locator->picture= $locatorData[2];
	        $locator->category_type= $locatorData[3];

	        $locator->save();
	        $count--;
    }
}

