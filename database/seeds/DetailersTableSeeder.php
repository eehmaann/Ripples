<?php

use Illuminate\Database\Seeder;
use App\Detailer;
use App\Diagnosis;

class DetailersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$detailers=[
    		['Homeopathy', 'Adjunctive Therapy'],
    		['Nature Therapy', 'Adjunctive Therapy'],
    		['Light Therapy', 'Adjunctive Therapy'],
    		['Zero Point Energy Devices', 'Adjunctive Therapy'],
    		['Laser Therapy', 'Adjunctive Therapy'],
    		['Color Therapy', 'Adjunctive Therapy'],
    		['Aromatherapy', 'Adjunctive Therapy'],
    		['Bach Flower Remedies', 'Adjunctive Therapy'],
    		['Essential Oils', 'Adjunctive Therapy'],
    		['Flower Remedies', 'Adjunctive Therapy'],
    		['Rife Therapy', 'Adjunctive Therapy'],
    		['Micro-Current Therapy', 'Adjunctive Therapy'],
    		
    		['Thought Field Therapy',  'Energy Techniques'],
    		['Psych-K', 'Energy Techniques'],
    		['Neuro-Linguistic Programming', 'Energy Techniques'],
    		['Jin Shin Jyutsu', 'Energy Techniques'],
    		['Barbara Brennan Healing', 'Energy Techniques'],
    		['Bioenergetics', 'Energy Techniques'],
    		['BodyTalk', 'Energy Techniques'],
    		['Emotional Freedom Technique', 'Energy Techniques'],
    		
    		['Zero Point Energy', 'Energy Work'],
    		['Therapeutic Touch', 'Energy Work'],
    		['Rife Therapy', 'Energy Work'],
    		['Reiki', 'Energy Work'],
    		['Pranic Healing', 'Energy Work'],
    		['Nature Therapy', 'Energy Work'],
    		['Acupressure', 'Energy Work'],
    		['Acupuncture', 'Energy Work'],
    		['Biofeedback', 'Energy Work'],
    		['Color Therapy', 'Energy Work'],
    		['Crystal/Gem Therapy', 'Energy Work'],
    		['Light Therapy', 'Energy Work'],
    		['Micro-Current Therapy', 'Energy Work'],

    		['The Trager Approach', 'Body Work'],
    		['Therapeutic Touch', 'Body Work'],
    		['Touch for Health', 'Body Work'],
    		['Trigger Point/ Myoptherapy', 'Body Work'],
    		['Tui Na', 'Body Work'],
    		['Rolfing', 'Body Work'],
    		['Shiatsu', 'Body Work'],
    		['Structural Integration Therapy', 'Body Work'],
    		['Swedish Massage', 'Body Work'],
    		['Thai Massage', 'Body Work'],
    		['Applied Kinesiology', 'Body Work'],
    		['Ayurvedic Massage', 'Body Work'],
    		['Barbara Brennan Healing', 'Body Work'],
    		['Cranio-Sacral Therapy', 'Body Work'],
    		['Deep Tissue Massage', 'Body Work'],
    		['Healing Touch', 'Body Work'],
    		['Manual Lymphatic Drainage', 'Body Work'],
    		['Myofascial Release', 'Body Work'],
    		['Neuromuscular Therapy', 'Body Work'],
    		['Ortho-Bionomy', 'Body Work'],
    		['Reflexology', 'Body Work'],

    		['Tae Kwan Do', 'Martial Arts'],
    		['T\'ai Chi', 'Martial Arts'],
    		['Qi Gong', 'Martial Arts'],
    		['Akido', 'Martial Arts'],
    		['Chi Kung', 'Martial Arts'],
    		['Karate', 'Martial Arts'],

    		['Dance Therapy', 'Movement Therapy'],
    		['Movement Therapy', 'Movement Therapy'],
    		['Yoga Therapy', 'Movement Therapy'],

    		['Rugby', 'Sports'],
    		['Football', 'Sports'],
    		['Basketball', 'Sports'],
    		['Golf', 'Sports'],
    		['Baseball', 'Sports'],
    		['Soccer', 'Sports'],
    		['Cricket', 'Sports'],
    		['Field Hockey', 'Sports'],
    		['Tennis', 'Sports'],
    		['Volleyball', 'Sports'],
    		['Ping-Ping', 'Sports'],

    		['P90x Workout', 'Muscle Training'],
    		['Insanity Workout', 'Muscle Training'],
    		['German Volume Training', 'Muscle Training'],
    		['Isometric', 'Muscle Training'],
    		['Bodybuilding', 'Muscle Training'],
    		['Powerlifting', 'Muscle Training'],
    		['Circuit Training', 'Muscle Training'],

    		['Walking', 'Aerobics'],
    		['Running/ jogging', 'Aerobics'],
    		['Sport Aerobics', 'Aerobics'],
    		['Dance Aerobics', 'Aerobics'],
    		['Low-Impact Aerobics', 'Aerobics'],
    		['Water Aerobics', 'Aerobics'],
    		['Step Aerobics', 'Aerobics'],

    		['Fasting', 'Spiritual Nutrition'],
    		['Meditation', 'Spiritual Nutrition'],
    		['Scripture Reading', 'Spiritual Nutrition'],
    		['Prayer', 'Spiritual Nutrition'],
    		['Church Attendance', 'Spiritual Nutrition'],
    		['Acts of Selfless Service', 'Spiritual Nutrition'],
    		['Pastoral Counseling', 'Spiritual Nutrition'],

    		['Water Therapy', 'Mental Rejuvenation'],
    		['Music Therapy', 'Mental Rejuvenation'],
    		['Visualization', 'Mental Rejuvenation'],
    		['Art Therapy', 'Mental Rejuvenation'],
    		['Dream Therapy', 'Mental Rejuvenation'],
    		['Meditation', 'Mental Rejuvenation'],

    		['Visualization', 'Mental Fitness Therapies'],
    		['Sound/ Music Therapy', 'Mental Fitness Therapies'],
    		['Meditation', 'Mental Fitness Therapies'],
    		['Hypnotherapy', 'Mental Fitness Therapies'],
    		['Art Therapy', 'Mental Fitness Therapies'],
    		['Brain Gym', 'Mental Fitness Therapies'],
    		['EMDR (Eye movement desensitization and reprocessing)', 'Mental Fitness Therapies'],
    		['Guided Imagery', 'Mental Fitness Therapies'],

    		['Rebirthing', 'Mental Repatterning'],
    		['Biofeedback', 'Mental Repatterning'],
    		['Guided Imagery', 'Mental Repatterning'],
    		['Neuro-Linguistic Programming', 'Mental Repatterning'],

    		['Therapeutic Laughter', 'Stress Management'],
    		['Rebirthing', 'Stress Management'],
    		['Toning', 'Stress Management'],
    		['Psychotherapy', 'Stress Management'],
    		['Breath Work', 'Stress Management'],
    		['stress Counseling', 'Stress Management'],

    	];
    	$count = count($detailers);
	    foreach ($detailers as $key => $detailerData) {
            $diagnosis_id = Diagnosis::where('name', '=', $detailerData[1])->pluck('id')->first(); 
	    	$detailer = new Detailer();

	        $detailer->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
	        $detailer->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
	        $detailer->name = $detailerData[0];
            $detailer->diagnosis_id=$diagnosis_id;  

	        $detailer->save();
	        $count--;
    	}
        //
    }
}

