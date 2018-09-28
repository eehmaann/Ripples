<?php

use Illuminate\Database\Seeder;
use App\Detailer;

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
    		['Homeopathy', 'adjunctive therapy'],
    		['Nature Therapy', 'adjunctive therapy'],
    		['Light Therapy', 'adjunctive therapy'],
    		['Zero Point Energy Devices', 'adjunctive therapy'],
    		['Laser Therapy', 'adjunctive therapy'],
    		['Color Therapy', 'adjunctive therapy'],
    		['Aromatherapy', 'adjunctive therapy'],
    		['Bach Flower Remedies', 'adjunctive therapy'],
    		['Essential Oils', 'adjunctive therapy'],
    		['Flower Remedies', 'adjunctive therapy'],
    		['Rife Therapy', 'adjunctive therapy'],
    		['Micro-Current Therapy', 'adjunctive therapy'],
    		
    		['Thought Field Therapy',  'energy techniques'],
    		['Psych-K', 'energy techniques'],
    		['Neuro-Linguistic Programming', 'energy techniques'],
    		['Jin Shin Jyutsu', 'energy techniques'],
    		['Barbara Brennan Healing', 'energy techniques'],
    		['Bioenergetics', 'energy techniques'],
    		['BodyTalk', 'energy techniques'],
    		['Emotional Freedom Technique', 'energy techniques'],
    		
    		['Zero Point Energy', 'energy work'],
    		['Therapeutic Touch', 'energy work'],
    		['Rife Therapy', 'energy work'],
    		['Reiki', 'energy work'],
    		['Pranic Healing', 'energy work'],
    		['Nature Therapy', 'energy work'],
    		['Acupressure', 'energy work'],
    		['Acupuncture', 'energy work'],
    		['Biofeedback', 'energy work'],
    		['Color Therapy', 'energy work'],
    		['Crystal/Gem Therapy', 'energy work'],
    		['Light Therapy', 'energy work'],
    		['Micro-Current Therapy', 'energy work'],

    		['The Trager Approach', 'body work'],
    		['Therapeutic Touch', 'body work'],
    		['Touch for Health', 'body work'],
    		['Trigger Point/ Myoptherapy', 'body work'],
    		['Tui Na', 'body work'],
    		['Rolfing', 'body work'],
    		['Shiatsu', 'body work'],
    		['Structural Integration Therapy', 'body work'],
    		['Swedish Massage', 'body work'],
    		['Thai Massage', 'body work'],
    		['Applied Kinesiology', 'body work'],
    		['Ayurvedic Massage', 'body work'],
    		['Barbara Brennan Healing', 'body work'],
    		['Cranio-Sacral Therapy', 'body work'],
    		['Deep Tissue Massage', 'body work'],
    		['Healing Touch', 'body work'],
    		['Manual Lymphatic Drainage', 'body work'],
    		['Myofascial Release', 'body work'],
    		['Neuromuscular Therapy', 'body work'],
    		['Ortho-Bionomy', 'body work'],
    		['Reflexology', 'body work'],

    		['Tae Kwan Do', 'martial arts'],
    		['T\'ai Chi', 'martial arts'],
    		['Qi Gong', 'martial arts'],
    		['Akido', 'martial arts'],
    		['Chi Kung', 'martial arts'],
    		['Karate', 'martial arts'],

    		['Dance Therapy', 'movement therapy'],
    		['Movement Therapy', 'movement therapy'],
    		['Yoga Therapy', 'movement therapy'],

    		['Rugby', 'sports'],
    		['Football', 'sports'],
    		['Basketball', 'sports'],
    		['Golf', 'sports'],
    		['Baseball', 'sports'],
    		['Soccer', 'sports'],
    		['Cricket', 'sports'],
    		['Field Hockey', 'sports'],
    		['Tennis', 'sports'],
    		['Volleyball', 'sports'],
    		['Ping-Ping', 'sports'],

    		['P90x Workout', 'muscle training'],
    		['Insanity Workout', 'muscle training'],
    		['German Volume Training', 'muscle training'],
    		['Isometric', 'muscle training'],
    		['Bodybuilding', 'muscle training'],
    		['Powerlifting', 'muscle training'],
    		['Circuit Training', 'muscle training'],

    		['Walking', 'aerobics'],
    		['Running/ jogging', 'aerobics'],
    		['Sport Aerobics', 'aerobics'],
    		['Dance Aerobics', 'aerobics'],
    		['Low-Impact Aerobics', 'aerobics'],
    		['Water Aerobics', 'aerobics'],
    		['Step Aerobics', 'aerobics'],

    		['Fasting', 'spiritual nutrition'],
    		['Meditation', 'spiritual nutrition'],
    		['Scripture Reading', 'spiritual nutrition'],
    		['Prayer', 'spiritual nutrition'],
    		['Church Attendance', 'spiritual nutrition'],
    		['Acts of Selfless Service', 'spiritual nutrition'],
    		['Pastoral Counseling', 'spiritual nutrition'],

    		['Water Therapy', 'mental rejuvenation'],
    		['Music Therapy', 'mental rejuvenation'],
    		['Visualization', 'mental rejuvenation'],
    		['Art Therapy', 'mental rejuvenation'],
    		['Dream Therapy', 'mental rejuvenation'],
    		['Meditation', 'mental rejuvenation'],

    		['Visualization', 'mental fitness therapies'],
    		['Sound/ Music Therapy', 'mental fitness therapies'],
    		['Meditation', 'mental fitness therapies'],
    		['Hypnotherapy', 'mental fitness therapies'],
    		['Art Therapy', 'mental fitness therapies'],
    		['Brain Gym', 'mental fitness therapies'],
    		['EMDR (Eye movement desensitization and reprocessing)', 'mental fitness therapies'],
    		['Guided Imagery', 'mental fitness therapies'],

    		['Rebirthing', 'mental repatterning'],
    		['Biofeedback', 'mental repatterning'],
    		['Guided Imagery', 'mental repatterning'],
    		['Neuro-Linguistic Programming', 'mental repatterning'],

    		['Therapeutic Laughter', 'stress management'],
    		['Rebirthing', 'stress management'],
    		['Toning', 'stress management'],
    		['Psychotherapy', 'stress management'],
    		['Breath Work', 'stress management'],
    		['stress Counseling', 'stress management'],

    	];
    	$count = count($detailers);
	    foreach ($detailers as $key => $detailerData) {
	    	$detailer = new Detailer();

	        $detailer->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
	        $detailer->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
	        $detailer->name = $detailerData[0];
	        $detailer->category_type= $detailerData[1];

	        $detailer->save();
	        $count--;
    	}
        //
    }
}

