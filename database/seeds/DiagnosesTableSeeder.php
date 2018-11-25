<?php

use Illuminate\Database\Seeder;
use App\Diagnosis;
use App\Locator;

class DiagnosesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */    
	public function run(){
		$diagnoses=[            

            
			['Addictive Heart Energy', 'An energy created out of the
				heart’s desperation to feel love, joy, etc. Your heart is designed to
				feel joy, love and other positive emotions, and is the core of your being. If
				your heart is unable to experience these positive emotions, it can become
				desperate for something pleasurable— it is then that the addictive heart energy
				is created. The magnetic quality of this energy draws inappropriate, harmful 
				and/or pleasurable things to the heart as a substitutefor joy and love. 
				This energy commonly creates addiction to negative emotions, sugar, food, drugs, 
				alcohol, cigarettes, pornography, chronic illness, work or exercise. 
				Addictive heart energy can also cause other obsessive, compulsive, addictive or 
				destructive behaviors.','no', 'picture', 'Energy','ahe','cleared'],

			['Idea Allergy', 'Allergies are simply trapped energies in the body that create
				a negative reaction to whatever it is you\'re allergic to. As you can be
				allergic to a substance or a food, you can be allergic to thoughts or ideas,
				which will typically cause emotional reactions, and  avoidance or sabotage
				behaviors. Allergies to ideas are often created during a difficult emotional
				time where you had negative feelings about that particular', 'yes', 'picture',
				'Allergy/Intolerance','allergy', 'cleared'],

			['Physical Allergy', 'An energy that develops from changes in the way the energy 
				field reacts to the energy of something (i.e. a particle food, hair, dust)', 
				'yes', 'picture', 'Allergy/Intolerance','allergy', 'cleared'],

			['Intolerance', 'An energy that causes the body to have a negative reaction to 
				food or other elements.', 'no','picture', 
				'Allergy/Intolerance','intolerance', 'cleared'],             

			['Trapped Emotion', 'Harmful emotional energies from negative past events that are 
				stored in the body. They can cause depression, anxiety; they can block people 
				from love and happiness and make them feel disconnected from others.', 
				'yes','picture', 'Emotional','trappedemotion', 'cleared'],

			['Heart-Wall', "Heart Wall is made of layers of trapped emotions that have been
				designated as a buffer to protect your heart from being broken. Your heart-wall
				is literally made of trapped energies, but your subconscious has assigned it a
				physical material and thickness, which are imaginative, but symbolic of the
				level of protection your heart has needed during the course of your life. \r
				Heart Wall Emotions – are trapped emotions (harmful emotional energies from
				negative past events that are stored in the body) used by the subconscious build
				a barrier of protection around the heart.", 'yes','picture', 
				'Emotional','heartwall', 'cleared'],

			['Emotional Resonance', 'A resonance develops during an intense emotional
				experience that leaves the body &quot;ringing&quot; with the frequency of that 
				emotional vibration. Resonances often affect the whole body, as opposed to a 
				trapped emotion which is smaller and more acute, but resonances do cause similar 
				emotional difficulties.', 'yes','picture','Emotional','emotionalresonance', 'cleared'],             

			['Broadcast Message', 'An energy that is continually sent out from the body to 
				other people, who receive it subconsciously. It can influence ability to form 
				and keep relationships, as well as attract negativity, wrong people, etc.', 
				'no','picture', 'Mental','broadcast', 'cleared'],             

			['Despair Anchor', 'This was the energy of a thought that was stuck in your 
				energy field. A negative statement perceived as true that prompting your 
				subconscious mind to verify or fulfill the &quot;truth&quot; of that thought.', 
				'no','picture','Mental','anchor', 'cleared'],             

			['Images', 'The trapped energy of a “picture in the mind”. The subconscious will 
				attempt to fulfill this image, and will direct (or misdirect) behavior to make 
				sure this image “comes true”. An image often interferes with goals and relationships, 
				depending on what the image is.', 'no','picture', 'Mental','images', 'cleared'],             

			['Memory Field', 'The energy of memories stored in the energy field often in front of a 
				person. They are present when memories are traumatic and often recalled. That is why it
				makes if it difficult to move forward in life.', 'no','picture', 'Mental','memory', 'cleared'],

			['No Will to Live', 'An energy that becomes trapped when life overwhelms us and
				we lose the desire to live.', 'no', 'picture', 'Mental','willtodie', 'cleared'],             

			['Need For T3 Session', '', 'no','picture', 'Mental','T3', 'cleared'],             

			['Will to Die', 'A energy that develops from wishing for death, either as an escape 
				or from self-abusive thoughts.', 'no','picture', 'Mental','willtodie', 'cleared'],
			
			['Cording', 'An energetic connection between two people. The healthy “heart
					to heart” cord enables the exchange of positive energy. All the rest are 
					unhealthy cords and are channels for the exchange of negative energy.', 'no', 
					'picture','Offensive','cording', 'cleared'],

			['Post-Hypnotic Suggestion', 'A negative statement became stuck in the subconscious 
				mind during a time when people are in a semi-hypnotic state and their mind was open to
				suggestion. This often happens when listening to repetitive music, playing video
				games or watching some other kind of entertainment. Suggestions like this can
				come from negative vibrations in the media itself or it can also come from dark entities 
				who take advantage of one’s semi-hypnotic state. A Post Hypnotic Suggestion is perceived 
				as a truth by the subconscious mind, which will then seek to verify or fulfill it by creating
				emotions and behaviors accordingly.', 'no','picture', 'Offensive','hypnotic', 'cleared'],

			['Saboteur', 'These are weapons made of pure, invisible energy that are either
				self-inflicted or inflicted by another person. These are often a manifestation of 
				someone\'s negative feelings', 'no', 'picture', 'Offensive','saboteur', 'cleared'],

			['Entity', "Dark spirit(s) that exerts a negative influence on a person's  body
				and energy field.", 'no','picture', 'Offensive','entities', 'cleared'],             
			
			['Curses', 'A very negative energy that has been deliberately placed into a person\’s 
				energy field by another person or entity with a more nefarious purpose than
				merely causing pain.', 'no','picture', 'Offensive','curse', 'cleared'],             

			['Inflamation', 'An energy that indicates the body is trying to heal, but that the 
				healing cycles have been stopped/blocked from progressing.  When this energy
				is cleared, the healing cycle is restarted and as a result new or additional
				inflammation can be felt.', 'no','picture', 
				'Post-Traumatic','inflammation', 'cleared'],             

			['Miasm', 'An inherited distortion of the energy field from suppressed 
				disease that occurred during an ancestor’s life. It influences the balance
				of body and mind.', 'no','picture', 'Post-Traumatic','miasm', 'cleared'],             

			['Physical Trauma Energy', 'An energy that occurs when the body is under extreme or 
				sudden physical stress. Can also be from emotional trauma or event or extreme 
				prolonged stress.', 'no','picture', 'Post-Traumatic','trauma', 'cleared'],             

			['Psychic Trauma', 'Similar to a trapped emotion but must be identified as a 
				psychic trauma. When two or more emotions are felt simultaneously, 
				they become trapped into one sphere of energy.', 'yes','picture', 
				'Post-Traumatic','psychictrauma', 'cleared'],

		    //Pathogens
		    ['Parasites', 'Organisms grow, shelter, and feed in the body. There
				are many different strains, ranging from microscopic to large organisms. They
				steal nutrients, invade bodily tissues and create poisonous toxic waste. 
				85-90% of people in the U.S. have parasites not found in medical testing. 
				Herbal Corrective Suggestion:', 'no', 'picture', 
				'Pathogen','pathogen', 'energetically removed'],

			['Fungal', 'The invasion and multiplication of opportunistic mold microorganisms
				that are not normally present within the body. Mold causes a
				wide variety of symptoms including joint and muscles pain,
				fatigue and brain fog.', 'no','picture', 
				'Pathogen','pathogen', 'energetically removed'],             
			
			['Bacterial', '', 'no','picture', 'Pathogen','pathogen', 'energetically removed'],             
			
			['Viral', '', 'no', 'picture', 'Pathogen','pathogen', 'energetically removed'],
			
			['Mold', 'The invasion and multiplication of opportunistic mold microorganisms
				that are not normally present within the body. Mold causes a
				wide variety of symptoms including joint and muscles pain, fatigue and 
				brain fog.', 'no','picture', 'Pathogen','pathogen', 'energetically removed'],

			//Toxins
			['Mercury','','no','picture', 'Heavy Metals', 'heavymetal', 'energetically removed'],
        	['Lead','','no','picture', 'Heavy Metals', 'heavymetal', 'energetically removed'],
        	['Cadmium','','no','picture', 'Heavy Metals', 'heavymetal', 'energetically removed'],
        	['Aluminum','','no','picture', 'Heavy Metals', 'heavymetal', 'energetically removed'],            

			['EM Spectrum', '', 'no','picture', 'Toxins','circuits', 'energetically removed'],


			//Nutrietion and LifeStyles
			['Stress Hormones','Adrenalin and Cortisol are considered the “stress hormones”
				of the body. They can be produced in excess during difficult
				times, becoming toxic to the body.', 'no','picture', 
				'Excesses','excess', 'energetically removed'],

			['Metabolic Waste', 'The by-products of all metabolic processes. If the organs
				of elimination are compromised in any way, or are working less
				efficiently than they should, metabolic waste can build up in
				the body.', 'no','picture', 'Excesses','excess', 'energetically removed'],             

			['Free Radicals', '', 'no','picture','Excesses','excess', 'energetically removed'],             

			['Six Pernicious Influences', '', 'no','picture', 'Excesses','excess', 'energetically removed'],

			['Environmental', 'Environmental Toxicity – toxins in the environment (outdoors,
				home, office, etc.) that are absorbed through the skin, lungs
				digestive system.', 'no', 'picture','Chemicals','excess', 'energetically removed'],  

			['Pesticide toxicity', 'toxins from pesticides in the environment (outdoors,
				home, office, etc.) that are absorbed through the skin, lungs
				digestive system.', 'no', 'picture','Environmental','excess', 'energetically removed'], 

			['Herbicide toxicity', 'toxins from herbicides in the environment (outdoors,
				home, office, etc.) that are absorbed through the skin, lungs
				digestive system.', 'no', 'picture','Environmental','excess', 'energetically removed'], 

			['Cosmetic toxicity', 'toxins from cosmetics in the environment (outdoors,
				home, office, etc.) that are absorbed through the skin, lungs
				digestive system.', 'no', 'picture','Environmental','excess', 'energetically removed'], 

			['Cleaning supply toxicity', 'toxins from in the environment (outdoors,
				home, office, etc.) that are absorbed through the skin, lungs
				digestive system.', 'no', 'picture','Environmental','excess', 'energetically removed'], 

			['Building material toxicity', 'toxins from building materials in the environment (outdoors, home, office, etc.) that are absorbed through the skin, lungs
				digestive system.', 'no', 'picture','Environmental','excess', 'energetically removed'],

			['Cleaning & furnishing toxicity', 'toxins from carpet or furnishings in the environment (outdoors,
				home, office, etc.) that are absorbed through the skin, lungs
				digestive system.', 'no', 'picture','Environmental','excess', 'energetically removed'],  

			 ['Parasites toxicity', 'Organisms grow, shelter, and feed in the body. There
				are many different strains, ranging from microscopic to large organisms. They
				steal nutrients, invade bodily tissues and create poisonous toxic waste. 
				85-90% of people in the U.S. have parasites not found in medical testing. 
				Herbal Corrective Suggestion:', 'no', 'picture', 'Microbial','pathogen', 'energetically removed'],

			['Fungal toxicity', 'The invasion and multiplication of opportunistic mold microorganisms
				that are not normally present within the body. Mold causes a
				wide variety of symptoms including joint and muscles pain,
				fatigue and brain fog.', 'no','picture', 'Microbial','pathogen', 'energetically removed'],             
			
			['Bacterial toxicity', '', 'no','picture', 'Microbial',
				'pathogen', 'energetically removed'],             
			
			
			['Mold toxicity', 'The invasion and multiplication of opportunistic mold microorganisms
				that are not normally present within the body. Mold causes a
				wide variety of symptoms including joint and muscles pain, fatigue and 
				brain fog.', 'no','picture', 'Microbial','pathogen', 'energetically removed'],         

			['Food Additives excess', 'Our modern processed food is filled with all sorts of 
				chemicals that prolong shelf life, enhance flavor, etc. They interfere with 
				metabolic processes and create abnormal cells.', 'no', 'picture', 
				'Chemicals','excess', 'energetically removed'],

			['Recreational Drugs excess', 'generally are very imbalancing to the energy field, and
				will often lead to weakness in the chakras as well as liver damage, kidney 
				damage, etc. Drugs can open the body to invasion by entities.', 'no','picture', 
				'Chemicals','drugs', 'energetically removed'],             

			['Vaccination excess','','no', 'picture','Medical','excess', 'energetically removed'],

			['Medications excess','','no', 'picture', 'Medical','excesss', 'energetically removed'],             

			['Cavitation','','no','picture','Dental','excess', 'made happy'],             

			['Root Canal', '', 'no', 'picture', 'Dental','excess', 'made happy'],
			
			['Cavity','','no','picture','Dental','excess', 'energetically removed'],             

			['Fluoride excess','','no','picture','Dental','excess', 'energetically removed'],

			['Mercury Amalgam excess','','no','picture','Dental','excess', 'energetically removed'],             

			['pH Imbalance','pH measures the acidity or alkalinity of the body. A pH of 7.3 -7.5 
			is healthy for the human body. Most people have a too acid pH because of stress and 
				diet.','no', 'picture', 'Lifestyle & Nutrition','nowill', 'energetically removed'],             

			['Physical Malnutrition','A group of conditions generally related to poor quality or
				insufficient quantity of nutrient intake, absorption or utilization.','no','picture', 
				'Malnutrition','malnutrition', 'energetically removed'],             

			['Spiritual Malnutrition','A condition caused by lack of spiritual “food”. It is a 
				need for more quiet, unhurried time. Around the world, roughly 53% of the 
				people are in a state of spiritual starvation, 32%  are in a state of spiritual
				malnutrition, only 15% of the people are spiritually well-nourished. Ways
				to increase spiritual nutrition include: prayer, mediation, inspiration
				readings, engaging in meaningful discussion, etc.','no','picture',
				'Malnutrition','circuits', 'energetically removed'],
					
			['Foods','','no', 'picture', 'Foods, Herbs & Nutrients','circuits', 'energetically removed'], 

			['Herbs','','no','picture', 'Foods, Herbs & Nutrients','circuits', 'energetically removed'], 

			['Nutrients','','no', 'picture', 'Foods, Herbs & Nutrients','circuits', 'energetically removed'], 

			['Dehydration','', 'no', 'picture', 'Lifestyle & Nutrition','dehydration', 'energetically removed'], 

			['Magnertic Field','', 'no', 'picture', 'Lifestyle & Nutrition','circuits', 'energetically removed'], 

			['Sleep Deficiency','', 'no', 'picture',  'Lifestyle & Nutrition','sleep', 'energetically removed'], 

			['Color Deficiency','', 'no', 'picture',  'Lifestyle & Nutrition','circuits', 'energetically removed'], 

			['Adjunctive Therapy','', 'no', '', 'Outside Needs','activity', ''], 

			['Energy Techniques','','no','', 'Outside Needs','activity',''], 

			['Energy Work','','no','','Outside Needs','activity',''], 

			['Body Work', '', 'no', '', 'Physical Needs','activity',''],
			
			['Martial Arts', '','no', '', 'Exercise','activity',''], 

			['Movement Therapy', '', 'no', '', 'Exercise','activity',''], 

			['Sports', '', 'no', '', 'Exercise','actitivity',''], 

			['Muscle Training', '', 'no', '', 'Exercise','activity',''], 

			['Aerobics', '', 'no', '','Exercise','activity',''], 

			['Stress Management', '', 'no', '', 'Mental & Emotional Fitness','activity',''], 

			['Mental Repatterning', '', 'no', '', 'Mental & Emotional Fitness','activity',''], 

			['Spiritual Nutrition', '', 'no', '', 'Mental & Emotional Fitness','activity',''], 

			['Mental Rejuvenation', '', 'no', '', 'Mental & Emotional Fitness','activity',''], 

			['Mental Fitness Therapies', '', 'no', '', 'Mental & Emotional Fitness','activity',''],

			//Circuite and Systems

			['Bladder','','5', '', 'Organs','circuits' ,'made happy'], 

			['Colon','','3', '', 'Organs','circuits','made happy'],
			
			['Gallbladder','','4','', 'Organs','circuits','made happy'], 

			['Heart','', '1','', 'Organs','circuits','made happy'],
			
			['IlleoCecal Valve','', '1','', 'Organs','circuits','made happy'], 

			['Kidneys','', '5', '','Organs','circuits','made happy'], 

			['Liver','', '4', '', 'Organs','circuits','made happy'], 

			['Lungs','', '3', '', 'Organs','circuits','made happy'], 

			['Small Intestine','','1', '', 'Organs','circuits','made happy'],
			
			['Spleen','','2','', 'Organs','circuits','made happy'], 

			['Stomach','', '2','', 'Organs','circuits','made happy'],
			
			['Uterus','', '6', '', 'Organs','circuits','made happy'],

			['Adrenals','', '6', '', 'Glands','circuits','made happy'], 

			['Hypothalmus','','no', '','Glands','circuits','made happy'], 

			['Ovaries','','6', '', 'Glands','circuits','made happy'], 

			['Pancreas','','6', '', 'Glands','circuits','made happy'], 

			['Pineal Glands','','no','', 'Glands','circuits','made happy'], 

			['Parathyroid Glands','','6','','Glands','circuits','made happy'], 

			['Pituitary Gland','','no','','Glands','circuits','made happy'], 

			['Prostate','','6','','Glands','circuits','made happy'],
			
			['Testciles','','6','','Glands','circuits','made happy'], 

			['Thymus','','6','','Glands','circuits','made happy'],
			
			['Thyroid','','6','','Glands','circuits','made happy'],
					
		    ['Crown Chakra (Sahasrara)','The Crown chakra relates to higher
				consciousness, enlightenment, and inspiration. Located above the
				crown of the head, this Head Center chakra is related to the power of
				consciousness and corresponds with the universal self and
				divine reality.','no', '', 'Chakras','circuits','made happy'],             

			['Brow Chakra (The Third Eye Chakra, Ajna)','As the sixth of the body\’s 
				seven chakras, the Third Eye lies between the eyebrows and is the only 
				chakra in the mental body. As such, it’s the center of command and 
				corresponds with intuition, insight, and psychic awareness. 
				Furthermore, the Third Eye chakra affords us the ability to connect 
				to elements beyond the five senses and controls the individual self and 
				power of inner perception.','no','','Chakras','circuits','made happy'],

			['Throat Chakra (Vishuddha)','Located in the throat area, this chakra is the
				energy center for creativity, speech, individual needs, and will. 
				It\’s known for its purity and relates to the power of communication by
				connecting with the ether, the respiratory system, and higher intelligence. 
				This is the second chakra in the Emotional Body.','no','','Chakras',
				'circuits','made happy'],             

			['Heart Chakra (Anahata)','As one of two energy centers in the Emotional Body, 
				the Heart chakra lies in the middle of the chest and is responsible for 
				emotions and feelings like love, forgiveness, compassion, and self-esteem. 
				Not surprisingly, the heart triggers emotions of love and devotion and 
				corresponds with the element air.','no','','Chakras','circuits','made happy'],             

			['Solar Plexus Chakra (The Navel Chakra –Manipura)','As the last energy center 
				in the physical body, the Navel chakra is considered the Solar Plexus and 
				relates to the element of fire. The chakra, also known as the City of Gems, 
				closely corresponds with the emotion anger and is responsible for energies 
				like desire, vitality, inner strength, and self-control. Lastly, the Navel 
				chakra relates to the element of fire and governs the digestive system and ego
				impulse.','no','','Chakras','circuits','made happy'],             

			['Sacral Chakra (Svadhisthana)', 'Located above the genitals, the Sacral chakra 
				is referred to as the Abode of Kundalini, or the center of energy that is yet 
				to realize its potential. Because of its location, the Sacral chakra relates 
				to the water element and controls emotions that center around relationships,
				sexuality, and intimacy such as desire.', 'no', '', 'Chakras','circuits','made happy'],

			['Root Chakra (Muladhara)','The Root chakra lies below the genitals and is the
				first of three physical body energy centers. As the center for survival, security, 
				and primal energy, the Root chakra is connected to the Earth Element and relates 
				to your natural survival instincts and emotions, especially fear.','no','','Chakras','circuits','made happy'],
					
			['Descending Aorta','', 'no', '', 'Abdominal Vessels','circuits','made happy'], 

			['Inferior Vena Cava','', 'no', '', 'Abdominal Vessels','circuits','made happy'], 

			['Right External Iliac Vein','', 'no', '', 'Abdominal Vessels','circuits','made happy'], 

			['Left External Ilian Vein','', 'no', '', 'Abdominal Vessels','circuits','made happy'], 

			['Right External Iliac Artery','', 'no', '', 'Abdominal Vessels','circuits','made happy'], 

			['Left External Iliac Artery','', 'no', '', 'Abdominal Vessels','circuits','made happy'],

			['Anterior Facial Artery','','no','','Face and Neck Vessels','circuits','made happy'],
					
			['Internal Jugular Vein','','no','','Face and Neck Vessels','circuits','made happy'],
					
			['External Jugular Vein','','no','','Face and Neck Vessels','circuits','made happy'],
					
			['Carotid Artery','','no','','Face and Neck Vessels','circuits','made happy'], 

			['Vertebral Artery','','no','','Face and Neck Vessels','circuits','made happy'],

			['Superior Sagittal Sinus','','no','','Skull Interior Vessels','circuits','made happy'],
			
			['Straight Sinus','','no','','Skull Interior Vessels','circuits','made happy'], 

			['Inferior Sagittal Sinus','','no','','Skull Interior Vessels','circuits','made happy'],

			['Right Popliteal Artery','','no','','Lower Limb Vessels','circuits','made happy'], 

			['Great Saphenous Vein','','no','','Lower Limb Vessels','circuits','made happy'], 

			['Femoral Artery','','no','','Lower Limb Vessels','circuits','made happy'], 

			['Anterior Tibial Artery','','no','','Lower Limb Vessels','circuits','made happy'], 

			['Posterior Tibial Artery','','no','','Lower Limb Vessels','circuits','made happy'], 

			['Peroneal Vein','','no','','Lower Limb Vessels','circuits','made happy'],

			['Left Subclavian Artery','','no','','Thoracic Circulation','circuits','made happy'], 

			['Right Subclavian Artery','','no','','Thoracic Circulation','circuits','made happy'], 

			['Intercostal Arteries','','no','','Thoracic Circulation','circuits','made happy'], 

			['Aortic Arch','','no','','Thoracic Circulation','circuits','made happy'], 

			['Left Pulmonary Artery','','no','','Thoracic Circulation','circuits','made happy'], 

			['Rightt Pulmonary Artery','','no','','Thoracic Circulation','circuits','made happy'],

			['Mitral Valve','','no','','Heart Circulation','circuits','made happy'], 

			['Pulmonary Valve','','no','','Heart Circulation','circuits','made happy'], 

			['Tricuspid Valve','','no','','Heart Circulation','circuits','made happy'], 

			['Aortic Valve','','no','','Heart Circulation','circuits','made happy'], 

			['Cornoary Arteries','','no','','Heart Circulation','circuits','made happy'],

			['Brachial Artery','','no','','Upper Limb Vessels','circuits','made happy'], 

			['Radial Artery','','no','','Upper Limb Vessels','circuits','made happy'], 

			['Basilar Vein','','no','','Upper Limb Vessels','circuits','made happy'],

			['Tonuge','','no','','Digestive System','circuits','made happy'], 

			['Stomach Sphincters','','no','','Digestive System','circuits','made happy'], 

			['Stomach','', '2','', 'Digestive System','circuits','made happy'], 

			['Small Intestine','','1','', 'Digestive System','circuits','made happy'], 

			['Pancreas','', '6', '', 'Digestive System','circuits','made happy'], 

			['Liver','', '4', '', 'Digestive System','circuits','made happy'], 

			['IlleoCecal Valve','', '1','', 'Digestive System','circuits','made happy'], 

			['Gallbladder','','4','', 'Digestive System','circuits','made happy'],
			
			['Esophagus','','no','', 'Digestive System','circuits','made happy'], 

			['Colon','','3', '','Digestive System','circuits','made happy'],

			['Kidneys','', '5', '', 'Endocrine System','circuits','made happy'], 

			['Parathyroid Glands','','6','','Endocrine System','circuits','made happy'], 

			['Pancreas','', '6', '','Endocrine System','circuits','made happy'], 

			['Thyroid','','6','','Endocrine System','circuits','made happy'],
			
			['Ovaries','','6', '', 'Endocrine System','circuits','made happy'],
			
			['Testciles','','6','','Endocrine System','circuits','made happy'], 

			['Adrenals','', '6', '','Endocrine System','circuits','made happy'], 

			['Pituitary Gland','','no','','Endocrine System','circuits','made happy'], 

			['Pineal Glands','','no','', 'Endocrine System','circuits','made happy'],
			
			['Hypothalmus','','no', '', 'Endocrine System','circuits','made happy'],

			['Spleen','','2','', 'Lymphatic System','circuits','made happy'],
			
			['Thymus','','6','','Lymphatic System','circuits','made happy'], 

			['Lymph Nodes','','no','','Lymphatic System','circuits','made happy'], 

			['Peyers Patches','','no','','Lymphatic System','circuits','made happy'], 

			['Adenoids and Tonsils','','no','','Lymphatic System','circuits','made happy'],
			
			['Appendix','','no','','Lymphatic System','circuits','made happy'], 

			['Bone Marrow','','no','','Lymphatic System','circuits','made happy'],

			['Parasympathetic Nervous System','','no','','Peripheral Nervous System','circuits','made happy'], 

			['Sympathetic Nervous System','','no','','Peripheral Nervous System','circuits','made happy'], 

			['Enteric Nervous System','','no','','Peripheral Nervous System','circuits','made happy'],

			['Spinal cord','','no','','Central Nervous System','circuits','made happy'],
			
			['Eyes','','no','','Central Nervous System','circuits','made happy'],

			['Hypothalmus','','no', '', 'Brain','circuits','made happy'], 

			['Pineal Glands','','no','','Brain','circuits','made happy'], 

			['Pituitary Gland','','no','','Brain','circuits','made happy'], 

			['Thalamus Gland','','no','','Brain','circuits','made happy'], 

			['Cerebellum','','no','','Brain','circuits','made happy'],

			['Temporal Lobe','','no','', 'Cerebrum','circuits','made happy'], 

			['Occipital Lobe','','no','', 'Cerebrum','circuits','made happy'], 

			['Frontal lobe','','no','','Cerebrum','circuits','made happy'], 

			['Parietal lobe','','no','', 'Cerebrum','circuits','made happy'],

			['Testicle','','no','','Male','circuits','made happy'], 

			['Prostate','','no','','Male','circuits','made happy'], 

			['Vas Deferens','','no','','Male','circuits','made happy'], 

			['Seminal Vesicle','','no','','Male','circuits','made happy'],
			
			['Scrotum','','no','','Male','circuits','made happy'], 

			['Bulbo-urethral gland','','no','','Male','circuits','made happy'], 

			['Epididymus','','no','','Male','circuits','made happy'],
			
			['Prostate','','6','','Male','circuits','made happy'], 

			['Seminal Vesicle','','no','','Penis','circuits','made happy'],
			
			['Glans Penis','','no','','Penis','circuits','made happy'], 

			['Corpus Cavernosum','','no','','Penis','circuits','made happy'], 

			['Corpus Spongiosum','','no','','Penis','circuits','made happy'],

			['Uterus','', '6', '', 'Female','circuits','made happy'], 
			['Ovaries','','6', '', 'Female','circuits','made happy'],
			['Fallopian Tube','','no','', 'Female','circuits','made happy'], 
			['Mammary Glands','','no','','Female','circuits','made happy'],

			['Alveoli','','no','','Respiratory System','circuits','made happy'],
			['Bronchioles','','no','','Respiratory System','circuits','made happy'], 
			['Bronchial Tubes','','no','','Respiratory System','circuits','made happy'],
			['Lungs','','no','','Respiratory System','circuits','made happy'],
			['Nose','','no','','Respiratory System','circuits','made happy'],
			['Trachea','','no','','Respiratory System','circuits','made happy'],

			['Transverse Abdominus','','no','','Abdominal Muscles','circuits','made happy'], 
			['Rectus Abdominus','','no','','Abdominal Muscles','circuits','made happy'],
			['Pyramidalis','','no','','Abdominal Muscles','circuits','made happy'], 
			['Transverse Fascia','','no','','Abdominal Muscles','circuits','made happy'], 
			['Inguinal Ligament','','no','','Abdominal Muscles','circuits','made happy'], 
			['External Oblique','','no','','Abdominal Muscles','circuits','made happy'], 
			['Internal Oblique','','no','','Abdominal Muscles','circuits','made happy'],

			['Anterior Neck Muscles','','no','','Neck Muscles','circuits','made happy'], 
			['Posterior Neck Muscles','','no','','Neck Muscles','circuits','made happy'],

			['Deep Head Muscles','','no','','Head Muscles','circuits','made happy'], 
			['Superficial Head Muscles','','no','','Head Muscles','circuits','made happy'],

			['Serratus Anterior','','no','', 'Thoracic Muscles','circuits','made happy'], 
			['Intercostal Muscles','','no','', 'Thoracic Muscles','circuits','made happy'], 
			['Diaphragm','','no','','Thoracic Muscles','circuits','made happy'], 
			['Pectoralis Minor','','no','', 'Thoracic Muscles','circuits','made happy'], 
			['Pectoralis Major','','no','', 'Thoracic Muscles','circuits','made happy'],

			['Ilicostalis','','no','', 'Back Muscles','circuits','made happy'],
			['Longissimus','','no','', 'Back Muscles','circuits','made happy'],    
			['Quadratus Lumborum','','no','', 'Back Muscles','circuits','made happy'],     
			['Spinalis','','no','', 'Back Muscles','circuits','made happy'],
			['Serratus Posterior Inferior','','no','', 'Back Muscles','circuits','made happy'],
			['Serratus Posterior Superior','','no','', 'Back Muscles','circuits','made happy'],
			['Rhomboid Major','','no','', 'Back Muscles','circuits','made happy'],     
			['Rhomboid Minor','','no','', 'Back Muscles','circuits','made happy'],     
			['Latussmus Dorsi','','no','', 'Back Muscles','circuits','made happy'],    
			['Trapezius','','no','','Back Muscles','circuits','made happy'],

			['Forearm','','no','','Upper Limb Muscles','circuits','made happy'], 
			['Hand Muscles','','no','','Upper Limb Muscles','circuits','made happy'], 
			['Upper Arm Muscles','','no','','Upper Limb Muscles','circuits','made happy'], 
			['Shoulder Muscles','','no','','Upper Limb Muscles','circuits','made happy'],

			['Hip Muscles','','no','','Lower Limb Muscles','circuits','made happy'], 
			['Thigh Muscles','','no','','Lower Limb Muscles','circuits','made happy'],         
			['Leg Muscles','','no','','Lower Limb Muscles','circuits','made happy'],   
			['Foot Muscles','','no','','Lower Limb muscles','circuits','made happy'],

			['Uretha','','no','', 'Urinary System','circuits','made happy'], 
			['Bladder','','no','', 'Urinary System','circuits','made happy'], 
			['Ureters','','no','', 'Urinary System','circuits','made happy'],
			['Kidneys','','5','', 'Urinary System','circuits','made happy'],

			['Nails','','no','', 'Integumentary System','circuits','made happy'],
			['Hair','','no','','Integumentary System','circuits','made happy'],

		    ['Epidermis','The outermost part of skin that forms a protection
				against the external environment.  Consists of many layers of
				epithelial calls that replace themselves about every tow or two 
				and a half months','no','', 'Skin','circuits','made happy'],             
			['Dermis','The middle layer of the skin, where sweat glands and hair 
				foolicles origniate.  It contains connective tissues and blood vessels',
				'no','', 'Skin','circuits','made happy','made happy'],             

			['Hypodermis','The deepest layer of skin.  It attaches to bone or mecle and 
				hosues fat deposits (adiose tissue)','no','','Skin','circuits','made happy'],

			['Taiyin Lung Meridan of Hand','','yes', '', 'The Twelve Standard Meridians','circuits','made happy'], 
			['Shaoyin Heart Meridan of Hand','','yes', '', 'The Twelve Standard Meridians',
				'circuits','made happy'], 
			['Jueyin Pericardium Meridan of Hand','','yes', '', 'The Twelve Standard Meridians'
				,'circuits','made happy'], 
			['Shaoyang Sanjiao (Tiple Warmer) Meridan of Hand','','yes', '', 
				'The Twelve Standard Meridians','circuits','made happy'], 
			['Taiyang Small Intestine Meridan of Hand','','yes', '', 
				'The Twelve Standard Meridians','circuits','made happy'], 
			['Yangming Large Intestine Meridan of Hand','','yes', '', 
				'The Twelve Standard Meridians','circuits','made happy'], 
			['Taiyin Spleen Meridan of Foot','','yes', '',
				'The Twelve Standard Meridians','circuits','made happy'], 
			['Shaoyin Kidney Meridan of Foot','','yes', '', 
				'The Twelve Standard Meridians','circuits','made happy'], 
			['Jueyin Liver Meridan of Foot','','yes', '', 
				'The Twelve Standard Meridians','circuits','made happy'],
			['Shaoyang Gallbladder Meridan of Foot','','yes', '', 
				'The Twelve Standard Meridians','circuits','made happy'], 
			['Taiyang Bladder Meridan of Foot','','yes','', 
				'The Twelve Standard Meridians','circuits','made happy'], 
			['Yangming Stomach Meridan of Foot','','yes', '', 
				'The Twelve Standard Meridians','circuits','made happy'],

			['Yang Heel Meridian (Yang Qia Mai)','','yes', '', 
				'The Eight Extraordinary Meridians','circuits','made happy'], 
			['Conception Meridian (Ren Mai)','','yes', '', 
				'The Eight Extraordinary Meridians','circuits','made happy'],
			['Governing Meridian (Du Mai)','','yes', '', 
				'The Eight Extraordinary Meridians','circuits','made happy'], 
			['Penetrating Meridian (Chong Mai)','','yes', '', 
				'The Eight Extraordinary Meridians','circuits','made happy'], 
			['Yin Linking Meridian (Yin Wei Mai)','','yes', '', 
				'The Eight Extraordinary Meridians','circuits','made happy'], 
			['Yang Linking Meridian (Yang Wei Mai)','','yes', '', 
				'The Eight Extraordinary Meridians','circuits','made happy'], 
			['Girdle Meridian (Dai Mai)','','yes', '', 
				'The Eight Extraordinary Meridians','circuits','made happy'], 
			['Yin Heel Meridian (Yin Qia Mai)','','yes', '', 
				'The Eight Extraordinary Meridians','circuits','made happy'],

			['Facial Bones','', 'no', '', 'Cranial Bones','circuits','made happy'], 
			['Middle Ear Bones','', 'no', '', 'Cranial Bones','circuits','made happy'], 
			['Ethmoid Bone','', 'no', '','Cranial Bones','circuits','made happy'], 
			['Sphenoid Bone','', 'no', '', 'Cranial Bones','circuits','made happy'],
			['Frontal Bone','', 'no', '', 'Cranial Bones','circuits','made happy'], 
			['Parietal Bones','','no', '', 'Cranial Bones','circuits','made happy'], 
			['Temporal Bones','', 'no', '', 'Cranial Bones','circuits','made happy'], 
			['Occipital Bone','', 'no', '', 'Cranial Bones','circuits','made happy'],

			['Inferior Nasal Conchae Bones','', 'no', '', 'Facial Bones','circuits','made happy'], 
			['Vomer Bone','', 'no', '', 'Facial Bones','circuits','made happy'], 
			['Lacrimal Bones','', 'no', '','Facial Bones','circuits','made happy'], 
			['Hyoid Bone','', 'no', '', 'Facial Bones','circuits','made happy'], 
			['Nasal Bones','', 'no', '', 'Facial Bones','circuits','made happy'], 
			['Zygomatic Bones','', 'no','', 'Facial Bones','circuits','made happy'], 
			['Palatine Bones','', 'no', '', 'Facial Bones','circuits','made happy'], 
			['Maxilla Bones','', 'no', '', 'Facial Bones','circuits','made happy'], 
			['Mandible Bone','', 'no', '', 'Facial Bones','circuits','made happy'],

			['Tensor Tympani','', 'no', '', 'Middle Ear Bones','circuits','made happy'], 
			['Malleus','','no', '', 'Middle Ear Bones','circuits','made happy'], 
			['Incus','', 'no', '', 'Middle Ear Bones','circuits','made happy'], 
			['Stapedius','', 'no', '', 'Middle Ear Bones','circuits','made happy'],
			['Labyrinth','', 'no', '', 'Middle Ear Bones','circuits','made happy'], 
			['Stapes','', 'no','', 'Middle Ear Bones','circuits','made happy'], 
			['Tympanic Cavity','', 'no', '', 'Middle Ear Bones','circuits','made happy'], 
			['Eustachian Tube','', 'no', '', 'Middle Ear Bones','circuits','made happy'],
			['Tympanic Membrane (ear drums','', 'no', '', 'Middle Ear Bones','circuits','made happy'],
			['Auditory Canal','', 'no', '', 'Middle Ear Bones','circuits','made happy'],

			['Manubrium','', 'no', '', 'Thoracic Cage','circuits','made happy'], 
			['Sternum','', 'no', '','Thoracic Cage','circuits','made happy'], 
			['Xyphoid Process','', 'no', '', 'Thoracic Cage','circuits','made happy'],
			
			['1st rib','', 'no', '', 'True Ribs','circuits','made happy'], 
			['2nd rib','', 'no', '', 'True Ribs','circuits','made happy'], 
			['3rd rib','', 'no', '', 'True Ribs','circuits','made happy'], 
			['4th rib','', 'no', '', 'True Ribs','circuits','made happy'], 
			['5th rib','', 'no', '', 'True Ribs','circuits','made happy'], 
			['6th rib','', 'no', '', 'True Ribs','circuits','made happy'], 
			['7th rib','', 'no', '', 'True Ribs','circuits','made happy'], 
			
			['8th rib','', 'no', '', 'False Ribs','circuits','made happy'], 
			['9th rib','', 'no', '', 'False Ribs','circuits','made happy'], 
			['10th rib','', 'no', '', 'False Ribs','circuits','made happy'], 
			['11th rib','', 'no','', 'False Ribs','circuits','made happy'], 
			['12th rib','', 'no', '', 'False Ribs','circuits','made happy'],

			['C1(Atlas)','','no', '', 'Cervical Vertebrae','circuits','made happy'], 
			['C2(Axis)','','no','', 'Cervical Vertebrae','circuits','made happy'], 
			['C3','','no', '', 'Cervical Vertebrae','circuits','made happy'],
			['C4','','no', '', 'Cervical Vertebrae','circuits','made happy'], 
			['C5','','no', '', 'Cervical Vertebrae','circuits','made happy'], 
			['C6','','no', '', 'Cervical Vertebrae','circuits','made happy'], 
			['C7','','no','', 'Cervical Vertebrae','circuits','made happy'],

		    ['T1','Connects to: Arms from the elbows down, hands wrists and
				fingers: esophagus and trachea, heart', 'no', '', 
				'Thoracic Vertebrae','circuits','made happy'],             
			['T2','Connects to: Hear, its valves and coronary arteries; lungs 
				broncial tubes','no', '', 'Thoracic Vertebrae','circuits','made happy'],             
			['T3','Connects to: Lungs, bronchial tubes, pleura, chest, breast, 
				heart','no','','Thoracic Vertebrae','circuits','made happy'],             
			['T4','Connects to: Gallbladder, common duct, heart, lungs, bronchial 
				tubes','no','','Thoracic Vertebrae','circuits','made happy'],             
			['T5','Connects to: Liver, solar plexus, circulation, heart, esophagus, 
				stomach','no', '', 'Thoracic Vertebrae','circuits','made happy'],
			['T6','Connects to: Stomach, esophagus, peritoneum, liver, duodenum',
				'no', '','Thoracic Vertebrae','circuits','made happy'],             
			['T7','Connects to: Kidneys, appendix, testes, ovaries, uterus, adrenal 
				cortex, spleen, pancreas, large intestine', 'no', '', 
				'Thoracic Vertebrae','circuits','made happy'],             
			['T8','Connects to: Spleen, stomach, liver, pancreas, gallbladder, adrenal 
				cortex, small intestine, pyloric valve', 'no', '', 
				'Thoracic Vertebrae','circuits','made happy'],
			['T9','Connects to: Adrenal cortex, pancreas, spleen, gallbladder, overies,
				uterus, small intestine', 'no', '', 'Thoracic Vertebrae','circuits','made happy'],
			['T10','Connects to: Kidneys, appendix, testes, ovaries, uterus, adrenal cortex,
				splen, panreas, large intestine', 'no', '', 
				'Thoracic Vertebrae','circuits','made happy'],             
			['T11','Connects to: Kidneys, ureters, large intestine, urinary bladder, adrenal 
				medulla, adrenial cortex, uterus, ovaries, ileocecal valve','no', '', 
				'Thoracic Vertebrae','circuits','made happy'],
			['T12','Connects to: Small intestine, lymph circulation, large intestine, urinary bladder, 
				uterus, kidneys, ilececal valve', 'no', '', 'Thoracic Vertebrae','circuits','made happy'],

			['L1','Connects to: Large intestine, inguinal rings, uterus','no', '', 
				'Lumbar Vertebrae','circuits','made happy'], 
			['L2','Connects to: Appendix, abdomen,Upper leg, urinary bladder','no', '', 
				'Lumbar Vertebrae','circuits','made happy'],
			['L3','Connects to: Sex organs, uterus, bladder, knee, prostate, large intestine','no', '', 
				'Lumbar Vertebrae','circuits','made happy'], 
			['L4','Connects to: Prostate gland, muscles of Lower back, sciatic nerve','no', '', 'Lumbar Vertebrae','circuits','made happy'], 
			['L5','Connects to: Lower legs, ankles, feet, prostate','no', '', 
				'Lumbar Vertebrae','circuits','made happy'],

		    ['Sacrum','Connects to: Hip bones, buttocks, rectrum, sex organs, genitallia, urinary bladder, ureter, 
		    	prostate', 'no', '', 'Vertebral Column','circuits','made happy'],             
		    ['Coccyx','Connects to: Rectum, anus','no', '', 'Vertebral Column','circuits','made happy'],

			['Ulna Bones','','no','','Upper Limbs','circuits','made happy'], 
			['Radius Bones','','no','','Upper Limbs','circuits','made happy'], 
			['Clavicle Bones','','no','','Upper Limbs','circuits','made happy'], 
			['Scapula bone','','no','','Upper Limbs','circuits','made happy'], 
			['Humerus bones','','no','', 'Upper Limbs','circuits','made happy'],

			['Harmate', '', 'no', '', 'Wrist Bones','circuits','made happy'], 
			['Capitate', '', 'no', '','Wrist Bones','circuits','made happy'], 
			['Trapezoid', '', 'no', '', 'Wrist Bones','circuits','made happy'],
			['Trapezium', '', 'no', '', 'Wrist Bones','circuits','made happy'], 
			['Scaphoid', '', 'no', '','Wrist Bones','circuits','made happy'], 
			['Lunate', '', 'no', '', 'Wrist Bones','circuits','made happy'],
			['Triquetrum', '', 'no', '', 'Wrist Bones','circuits','made happy'], 
			['Pisiform', '', 'no','', 'Wrist Bones','circuits','made happy'],

			['Distral Phalange Bones', '', 'no', '', 'Hand Bones','circuits','made happy'], 
			['Medial Phalange Bones', '', 'no', '', 'Hand Bones','circuits','made happy'], 
			['Metcarpal Bones','', 'no', '', 'Hand Bones','circuits','made happy'], 
			['Proximal Phalange Bones', '', 'no','', 'Hand Bones','circuits','made happy'],

			['Tibia','','no','','Leg','circuits','made happy'], 
			['Femur','','no','','Leg','circuits','made happy'],
			['Fibula','','no','','Leg','circuits','made happy'], 
			['Patella','','no','','Leg','circuits','made happy'],
			['Meniscus','','no','','Leg','circuits','made happy'],

			['Iliium','','no','','Pelvis','circuits','made happy'], 
			['Ischium','','no','','Pelvis','circuits','made happy'],
			['Pubis','','no','','Pelvis','circuits','made happy'],

			['Tarsal Bones','','no','','Foot','circuits','made happy'],    
			['Proximal Phalanges','','no','','Foot','circuits','made happy'], 
			['Distal Phalanges','','no','','Foot','circuits','made happy'], 
			['Medial Phalanges','','no','','Foot','circuits','made happy'], 
			['Metatarsal Bones','','no','','Foot','circuits','made happy'],

		    ['Tendons','Tendons connect muscles to bone, and are found on both
				ends of every muscle in the body', 'no','','Connective Tissue','circuits','made happy'],
			['Ligaments','Ligaments connect bone to bone and are found throughout 
				the body','no','', 'Connective Tissue','circuits','made happy'],             
			['Fascia','Connective tissue that surrounds and protects all the 
				other tissues of the body.','yes','', 'Connective Tissue','circuits','made happy'],

			['T1-T2','','no','', 'Thoracic Disks Upper','circuits','made happy'],
			['T2-T3','','no','','Thoracic Disks Upper','circuits','made happy'],
			['T3-T4','','no','','Thoracic Disks Upper','circuits','made happy'],
			['T4-T5','','no','','Thoracic Disks Upper','circuits','made happy'],
			['T5-T6','','no','','Thoracic Disks Upper','circuits','made happy'],
			['T6-T7','','no','','Thoracic Disks Upper','circuits','made happy'],
			['T7-T8','','no','','Thoracic Disks Lower','circuits','made happy'],
			['T8-T9','','no','','Thoracic Disks Lower','circuits','made happy'],
			['T9-T10','','no','','Thoracic Disks Lower','circuits','made happy'],
			['T0-T11','','no','','Thoracic Disks Lower','circuits','made happy'],
			['T11-T12','','no','','Thoracic Disks Lower','circuits','made happy'],
			['T12-L1','','no','','Thoracic Disks Lower','circuits','made happy'],
			
			['L1-L2','','no','','Lumbar Disks','circuits','made happy'], 
			['L2-L3','','no','','Lumbar Disks','circuits','made happy'], 
			['L3-L4','','no','','Lumbar Disks','circuits','made happy'],
			['L4-L5','','no','','Lumbar Disks','circuits','made happy'], 
			['L5-S1','','no','','Lumbar Disks','circuits','made happy'], 

			['C2-C3','','no','','Cervical Disks','circuits','made happy'],
			['C3-C4','','no','','Cervical Disks','circuits','made happy'], 
			['C4-C5','','no','','Cervical Disks','circuits','made happy'], 
			['C5-C6','','no','','Cervical Disks','circuits','made happy'],
			['C6-C7','','no','','Cervical Disks','circuits','made happy'], 
			['C7-T1','','no','','Cervical Disks','circuits','made happy'],

        ];           
	    $count = count($diagnoses);         
	    foreach ($diagnoses as $key => $diagnosisData) {
        	$locator_id = Locator::where('name', '=', $diagnosisData[4])->pluck('id')->first();
	    	$diagnosis = new Diagnosis();
	        $diagnosis->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
			$diagnosis->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
			$diagnosis->name = $diagnosisData[0];             
			$diagnosis->definition=$diagnosisData[1];             
			$diagnosis->trapped_emotions= $diagnosisData[2];
			$diagnosis->picture= $diagnosisData[3];   
			$diagnosis->category_type=$diagnosisData[4];	
			$diagnosis->url=$diagnosisData[5];
			$diagnosis->clear_statement=$diagnosisData[6];
			$diagnosis->locator_id=$locator_id;  
	        $diagnosis->save();             
	        $count--;     
	    } 
	} 
}