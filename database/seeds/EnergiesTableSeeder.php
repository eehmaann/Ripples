<?php

use Illuminate\Database\Seeder;

class EnergiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $energies = [
        	['Addictive Heart Energy', 'An energy created out of the heart’s desperation to feel love, joy, etc. Your heart is designed to 
	        	feel joy, love and other positive emotions, and is the core of your being. If your heart is unable to experience these positive emotions, 
	        	it can become desperate for something pleasurable— it is then that the addictive heart energy is created. The magnetic quality of this energy 
	        	draws inappropriate, harmful and/or pleasurable things to the heart as a substitute for joy and love. This energy commonly creates addiction 
	        	to negative emotions, sugar, food, drugs, alcohol, cigarettes, pornography, chronic illness, work or exercise. Addictive heart energy can also
				cause other obsessive, compulsive, addictive or destructive behaviors.', 'no', 'energy', 'definer'],
	        ['Allergy/Intolerance', '', 'no', 'energy', 'locator'],
	        ['Emotional', '', 'no', 'energy', 'locator'],
	        ['Mental', '', 'no', 'energy', 'locator'],
	        ['Offensive', '', 'no', 'energy', 'locator'],
	        ['Post-Traumatic', '', 'no', 'energy', 'locator'],
	        ['Idea Allergy', 'Allergies are simply trapped energies in the body that create a negative reaction to whatever it is you\'re allergic to. 
	        	As you can be allergic to a substance or a food, you can be allergic to thoughts or ideas, which will typically cause emotional reactions, and 
	        	avoidance or sabotage behaviors. Allergies to ideas are often created during a difficult emotional time where you had negative feelings about 
	        	that particular', 'yes', 'allergy/intolerance', 'definer'],
	        ['Physical Allergy', 'An energy that develops from changes in the way the energy field reacts to the energy of something 
	        	(i.e. a particle food, hair, dust)', 'yes', 'allergy/intolerance', 'definer']
	        ['Intolerance', 'An energy that causes the body to have a negative reaction to food or other elements.', 'no', 'allergy/intolerance', 'definer'],
	        ['Trapped Emotion', 'Harmful emotional energies from negative past events that are stored in the body. They can cause depression, 
	        	anxiety; they can block people from love and happiness and make them feel disconnected from others.', 'yes', 'emotional', 'definer']
	        ['Heart-Wall', "Heart Wall is made of layers of trapped emotions that have been designated as a buffer to protect your heart from being broken. 
	        	Your heart-wall is literally made of trapped energies, but your subconscious has assigned it a physical material and thickness, which are 
	        	imaginative, but symbolic of the level of protection your heart has needed during the course of your life. \r
	        	Heart Wall Emotions – are trapped emotions (harmful emotional energies from negative past events that are stored in the body) used by 
	        	the subconscious build a barrier of protection around the heart.", 'yes', 'emotional', 'definer' ],
	        ['Emotional Resonance', 'A resonance develops during an intense emotional experience that leaves the body &quot;ringing&quot; with the 
	        	frequency of that emotional vibration. Resonances often affect the whole body, as opposed to a trapped emotion which is smaller
				and more acute, but resonances do cause similar emotional difficulties.', 'yes', 'emotional', 'definer'],
			['Pre-Natal Trapped Emotion', 'Harmful emotional energies absorbed by the fetus during his/her mother’s pregnancy that are stored in the body. 
				They can cause depression, anxiety; they can block people from love and happiness and make them feel disconnected from others.', 'no',
				'trapped emotion', 'detailer'],
			['Pre-Conception Trapped Emotion', 'Emotions that became lodged before conception', 'no', 'trapped emotion', 'detailer'],
			['Inherited Trapped Emotion', 'Emotions that are received at the moment of conception from mother or father. When inherited trapped 
				emotions are cleared from an individual, they are also cleared his/her siblings, progenies, as well as from the ancestors that 
				preceded him/her.', 'no', 'trapped emotion', 'detailer']
			['Broadcast Message', 'An energy that is continually sent out from the body to other people, who receive it subconsciously. It can 
				influence ability to form and keep relationships, as well as attract negativity, wrong people, etc.', 'no', 'mental', 'definer'],
			['Despair Anchor', 'This was the energy of a thought that was stuck in your energy field. A negative statement perceived as true 
				that prompting your subconscious mind to verify or fulfill the &quot;truth&quot; of that thought.', 'no', 'mental', 'definer'],
			['Images', 'The trapped energy of a “picture in the mind”. The subconscious will attempt to fulfill this image, and will direct 
				(or misdirect) behavior to make sure this image “comes true”. An image often interferes with goals and relationships, depending 
				on what the image is.', 'no', 'mental', 'definer'],
			['Memory Field', 'The energy of memories stored in the energy field often in front of a person. They are present when memories are 
				traumatic and often recalled. That is why it makes if it difficult to move forward in life.', 'no', 'mental', 'definer'],
			['No Will to Live', 'An energy that becomes trapped when life overwhelms us and we lose the desire to live.', 'no', 'mental', 'definer'],
			['Need For T3 Session', '', 'no', 'mental', 'definer'],
			['Will to Die', 'A energy that develops from wishing for death, either as an escape or from self-abusive thoughts.', 'no', 'mental', 'definer'],
			['Cording', 'An energetic connection between two people. The healthy “heart to heart” cord enables the exchange of positive energy. 
				All the rest are unhealthy cords and are channels for the exchange of negative energy.', 'no', 'offensive', 'definer'],
			['Cording: Brain to Brain', 'Logic suppressed by another\'s logic (example: How can you possibly think that?)', 'no', 'cording', 'descriptor'],
			['Cording: Brain to Heart', 'Logic suppressing another\'s emotions (example: There is no reason to be angry!)', 'no', 'cording', 'descriptor'],
			['Cording: Brain to Gut', 'Logic suppressing another\'s intuition (example:  That will never work.)', 'no', 'cording', 'definer'],
			['Cording: Brain to Privates', 'Logic suppressing another\'s creativity/ identity (example: Dreams are for other people.)', 'no','cording', 'descriptor'],
			['Cording: Heart to Brain', 'Emotions suppressing another\'s logic (example: It hurts me that you would even think that.)', 'no', 'cording', 'descriptor'],
			['Cording: Heart to Gut', 'Emotions suppressing another\'s intuition (example: I\'d be scared to even attempt what you are doing'
				'no', 'cording', 'descriptor'],
			['Cording: Heart to Privates', 'Emotions suppressing another\'s creativity / identity (example: Aren\'t you embarassed to 
				be seen like that?', 'no', 'cording', 'descriptor'],
			['Cording: Gut to Brain', 'Intuition suppressing another\'s logic (example:  I don\'t need your advice here)', 'no', 'cording', 'descriptor'],
			['Cording: Gut to Heart', 'Intuition suppressing another\'s emotions (example:  It will work; stop crying!)', 'no', 'cording', 'descriptor'],
			['Cording: Gut to Gut', 'Intuition suppressing another\'s intuition (example: Just follow along; I have experience)', 'no', 'cording', 'descriptor'],
			['Cording: Gut to Privates',	'Intuition suppressing another\'s creativity / identity (example: I feel your vision is 
				just off right now)', 'no', 'cording', 'descriptor'],
			['Cording: Privates to Brain', 'Identity/ creativity suppressing another\'s logic (example: No child of mine will think like that)',
				'no', 'descriptor'],
			['Cording: Privates to Heart Cording', 	'Creativity / identity suppressing another\'s emotions (example: My children are strong they 
				don\'t need counciling', 'no', 'cording', 'descriptor'], 
			['Cording: Privates to Gut', 'Creativity/ identiy suppressing another\'s intuition (example: Remember, the nail that stands out 
				gets hit)', 'no', 'cording', 'descriptor'],
			['Cording: Privates to Privates', 'Creativity /identity suppressing another\'s creativity/ identity (example: Your vision just 
				doesn\'t fit with my vision', 'no', 'cording', 'descriptor'],
			['Post-Hypnotic Suggestion', 'A negative statement became stuck in the subconscious mind during a time when people are in a 
				semi-hypnotic state and their mind was open to suggestion. This often happens when listening to repetitive music, playing video
				games or watching some other kind of entertainment. Suggestions like this can come from negative vibrations in the media 
				itself or it can also come from dark entities who take advantage of one’s semi-hypnotic state. A Post Hypnotic Suggestion is 
				perceived as a truth by the subconscious mind, which will then seek to verify or fulfill it by creating emotions and behaviors 
				accordingly.', 'no', 'offensive', 'definer'],
			['Saboteur', 'These are weapons made of pure, invisible energy that are either self-inflicted or inflicted by another
				person. These are often a manifestation of someone\s negative feelings', 'no', 'offensive', 'definer'],
			['Entity', "Dark spirit(s) that exerts a negative influence on a person's  body and energy field.", 'no', 'offensive', 'definer'],
			['Disembodied Spirit', 'Spirits that were once in human form and will to anything to experience that again, even 
				if it is only temporary or in a muffled way.', 'no', 'entity', 'detailer'],
			['Evil Spirit', 'Spirts never had human form. Their main desire is to evert control over a person, to addict them to 
				anything they can, to get them to do things that distance them from the Creator.', 'no', 'entity', 'detailer'],
			['Curses', 'A very negative energy that has been deliberately placed into a person’s energy field by another
				person or entity with a more nefarious purpose than merely causing pain.', 'no', 'offensive', 'definer'],
			['Inflamation', 'An energy that indicates the body is trying to heal, but that the healing cycles have been stopped/blocked 
				from progressing.  When this energy is cleared, the healing cycle is restarted and as a result new or additional 
				inflammation can be felt.', 'no', 'post-traumatic', 'definer'],
			['Miasm', 'An inherited distortion of the energy field from suppressed disease that occurred during an ancestor’s life. 
				It influences the balance of body and mind.', 'no', 'post-traumatic', 'definer'],
			['Physical Trauma', 'An energy that occurs when the body is under extreme or sudden physical stress. Can also be from 
				emotional trauma or event or extreme prolonged stress.', 'no', 'post-traumatic', 'definer'],
			['Psychich Trauma', 'Similar to a trapped emotion but must be identified as a psychic trauma. When two or more 
				emotions are felt simultaneously, they become trapped into one sphere of energy.', 'yes', 'post-traumatic', 'definer'],

	    ]; 
	    $count = count($energies);
	    foreach ($energies as $key => $energyData) {
	        $energy = new Energy();

	        $energy->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
	        $energy->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
	        $energy->name = $energyData[0];
	        $energy->definition = $energyData[1];
	        $energy->emotion_trapped = $energyData[2];
	        $energy->energy_type= $energyData[3];
	        $energy->purpose= $energyData[4];

	        $energy->save();
	        $count--;
    	}
    }
}



 

   

   