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
				destructive behaviors.','no', '', 'Energy','ahe','cleared'],

			['Idea Allergy', 'Allergies are simply trapped energies in the body that create
				a negative reaction to whatever it is you\'re allergic to. As you can be
				allergic to a substance or a food, you can be allergic to thoughts or ideas,
				which will typically cause emotional reactions, and  avoidance or sabotage
				behaviors. Allergies to ideas are often created during a difficult emotional
				time where you had negative feelings about that particular', 'yes', '',
				'Allergy/Intolerance','allergy', 'cleared'],

			['Physical Allergy', 'An energy that develops from changes in the way the energy 
				field reacts to the energy of something (i.e. a particle food, hair, dust)', 
				'yes', '', 'Allergy/Intolerance','allergy', 'cleared'],

			['Intolerance', 'An energy that causes the body to have a negative reaction to 
				food or other elements.', 'no','', 
				'Allergy/Intolerance','intolerance', 'cleared'],             

			['Trapped Emotion', 'Harmful emotional energies from negative past events that are 
				stored in the body. They can cause depression, anxiety; they can block people 
				from love and happiness and make them feel disconnected from others.', 
				'yes','', 'Emotional','trappedemotion', 'cleared'],

			['Heart-Wall', "Heart Wall is made of layers of trapped emotions that have been
				designated as a buffer to protect your heart from being broken. Your heart-wall
				is literally made of trapped energies, but your subconscious has assigned it a
				physical material and thickness, which are imaginative, but symbolic of the
				level of protection your heart has needed during the course of your life. \r
				Heart Wall Emotions – are trapped emotions (harmful emotional energies from
				negative past events that are stored in the body) used by the subconscious build
				a barrier of protection around the heart.", 'yes','', 
				'Emotional','heartwall', 'cleared'],

			['Emotional Resonance', 'A resonance develops during an intense emotional
				experience that leaves the body &quot;ringing&quot; with the frequency of that 
				emotional vibration. Resonances often affect the whole body, as opposed to a 
				trapped emotion which is smaller and more acute, but resonances do cause similar 
				emotional difficulties.', 'yes','','Emotional','emotionalresonance', 'cleared'],             

			['Broadcast Message', 'An energy that is continually sent out from the body to 
				other people, who receive it subconsciously. It can influence ability to form 
				and keep relationships, as well as attract negativity, wrong people, etc.', 
				'no','', 'Mental','broadcast', 'cleared'],             

			['Despair Anchor', 'This was the energy of a thought that was stuck in your 
				energy field. A negative statement perceived as true that prompting your 
				subconscious mind to verify or fulfill the &quot;truth&quot; of that thought.', 
				'no','','Mental','anchor', 'cleared'],             

			['Images', 'The trapped energy of a “picture in the mind”. The subconscious will 
				attempt to fulfill this image, and will direct (or misdirect) behavior to make 
				sure this image “comes true”. An image often interferes with goals and relationships, 
				depending on what the image is.', 'no','', 'Mental','images', 'cleared'],             

			['Memory Field', 'The energy of memories stored in the energy field often in front of a 
				person. They are present when memories are traumatic and often recalled. That is why it
				makes if it difficult to move forward in life.', 'no','', 'Mental','memoryfield', 
				'cleared'],

			['No Will to Live', 'An energy that becomes trapped when life overwhelms us and
				we lose the desire to live.', 'no', '', 'Mental','willtodie', 'cleared'],             

			['Need For T3 Session', '', 'no','', 'Mental','T3', 'cleared'],             

			['Will to Die', 'A energy that develops from wishing for death, either as an escape 
				or from self-abusive thoughts.', 'no','', 'Mental','willtodie', 'cleared'],
			
			['Cording', 'An energetic connection between two people. The healthy “heart
					to heart” cord enables the exchange of positive energy. All the rest are 
					unhealthy cords and are channels for the exchange of negative energy.', 'no', 
					'','Offensive','cording', 'cleared'],

			['Post-Hypnotic Suggestion', 'A negative statement became stuck in the subconscious 
				mind during a time when people are in a semi-hypnotic state and their mind was open to
				suggestion. This often happens when listening to repetitive music, playing video
				games or watching some other kind of entertainment. Suggestions like this can
				come from negative vibrations in the media itself or it can also come from dark entities 
				who take advantage of one’s semi-hypnotic state. A Post Hypnotic Suggestion is perceived 
				as a truth by the subconscious mind, which will then seek to verify or fulfill it by creating
				emotions and behaviors accordingly.', 'no','', 'Offensive','hypnotic', 'cleared'],

			['Saboteur', 'These are weapons made of pure, invisible energy that are either
				self-inflicted or inflicted by another person. These are often a manifestation of 
				someone\'s negative feelings', 'no', '', 'Offensive','saboteur', 'cleared'],

			['Entity', "Dark spirit(s) that exerts a negative influence on a person's  body
				and energy field.", 'no','', 'Offensive','entities', 'cleared'],             
			
			['Curses', 'A very negative energy that has been deliberately placed into a person\’s 
				energy field by another person or entity with a more nefarious purpose than
				merely causing pain.', 'no','', 'Offensive','curse', 'cleared'],             

			['Inflamation', 'An energy that indicates the body is trying to heal, but that the 
				healing cycles have been stopped/blocked from progressing.  When this energy
				is cleared, the healing cycle is restarted and as a result new or additional
				inflammation can be felt.', 'no','', 
				'Post-Traumatic','inflammation', 'energetically removed'],             

			['Miasm', 'An inherited distortion of the energy field from suppressed 
				disease that occurred during an ancestor’s life. It influences the balance
				of body and mind.', 'no','', 'Post-Traumatic','miasm', 'cleared'],             

			['Physical Trauma Energy', 'An energy that occurs when the body is under extreme or 
				sudden physical stress. Can also be from emotional trauma or event or extreme 
				prolonged stress.', 'no','', 'Post-Traumatic','trauma', 'energetically removed'],             

			['Psychic Trauma', 'Similar to a trapped emotion but must be identified as a 
				psychic trauma. When two or more emotions are felt simultaneously, 
				they become trapped into one sphere of energy.', 'yes','', 
				'Post-Traumatic','psychictrauma', 'cleared'],

		    //Pathogens
		    ['Parasites', 'Organisms grow, shelter, and feed in the body. There
				are many different strains, ranging from microscopic to large organisms. They
				steal nutrients, invade bodily tissues and create poisonous toxic waste. 
				85-90% of people in the U.S. have parasites not found in medical testing. 
				Herbal Corrective Suggestion:', 'no', '', 
				'Pathogen','pathogen', 'energetically removed'],

			['Fungal', 'The invasion and multiplication of opportunistic mold microorganisms
				that are not normally present within the body. Mold causes a
				wide variety of symptoms including joint and muscles pain,
				fatigue and brain fog.', 'no','', 
				'Pathogen','pathogen', 'energetically removed'],             
			
			['Bacterial', '', 'no','', 'Pathogen','pathogen', 'energetically removed'],             
			
			['Viral', '', 'no', '', 'Pathogen','pathogen', 'energetically removed'],
			
			['Mold', 'The invasion and multiplication of opportunistic mold microorganisms
				that are not normally present within the body. Mold causes a
				wide variety of symptoms including joint and muscles pain, fatigue and 
				brain fog.', 'no','', 'Pathogen','pathogen', 'energetically removed'],

			//Toxins
			['Mercury','','no','', 'Heavy Metals', 'heavymetal', 'energetically removed'],
        	['Lead','','no','', 'Heavy Metals', 'heavymetal', 'energetically removed'],
        	['Cadmium','','no','', 'Heavy Metals', 'heavymetal', 'energetically removed'],
        	['Aluminum','','no','', 'Heavy Metals', 'heavymetal', 'energetically removed'],            

			['EM Spectrum', '', 'no','', 'Toxins','circuits', 'energetically removed'],


			//Nutrietion and LifeStyles
			['Stress Hormones','Adrenalin and Cortisol are considered the “stress hormones”
				of the body. They can be produced in excess during difficult
				times, becoming toxic to the body.', 'no','', 
				'Excesses','excess', 'energetically removed'],

			['Metabolic Waste', 'The by-products of all metabolic processes. If the organs
				of elimination are compromised in any way, or are working less
				efficiently than they should, metabolic waste can build up in
				the body.', 'no','', 'Excesses','excess', 'energetically removed'],             

			['Free Radicals', '', 'no','','Excesses','excess', 'energetically removed'],

			['Prions', '', 'no','','Excesses','excess', 'energetically removed'],             

			
			['Pernicious Influences (Cold)', '', 'no','', 'Six Pernicious Influences','excess', 'energetically removed'],

			['Pernicious Influences (Summer Heat)', '', 'no','', 'Six Pernicious Influences','excess', 'energetically removed'],

			['Pernicious Influences (Wind)', '', 'no','', 'Six Pernicious Influences','excess', 'energetically removed'],

			['Pernicious Influences (Dryness)', '', 'no','', 'Six Pernicious Influences','excess', 'energetically removed'],

			['Pernicious Influences (Dampness)', '', 'no','', 'Six Pernicious Influences','excess', 'energetically removed'],

			['Pernicious Influences (Heat)', '', 'no','', 'Six Pernicious Influences','excess', 'energetically removed'],

			['Pesticide toxicity', 'toxins from pesticides in the environment (outdoors,
				home, office, etc.) that are absorbed through the skin, lungs
				digestive system.', 'no', '','Environmental','excess', 'energetically removed'], 

			['Herbicide toxicity', 'toxins from herbicides in the environment (outdoors,
				home, office, etc.) that are absorbed through the skin, lungs
				digestive system.', 'no', '','Environmental','excess', 'energetically removed'], 

			['Cosmetic toxicity', 'toxins from cosmetics in the environment (outdoors,
				home, office, etc.) that are absorbed through the skin, lungs
				digestive system.', 'no', '','Environmental','excess', 'energetically removed'], 

			['Cleaning supply toxicity', 'toxins from in the environment (outdoors,
				home, office, etc.) that are absorbed through the skin, lungs
				digestive system.', 'no', '','Environmental','excess', 'energetically removed'], 

			['Building material toxicity', 'toxins from building materials in the environment (outdoors, home, office, etc.) that are absorbed through the skin, lungs
				digestive system.', 'no', '','Environmental','excess', 'energetically removed'],

			['Cleaning & furnishing toxicity', 'toxins from carpet or furnishings in the environment (outdoors,
				home, office, etc.) that are absorbed through the skin, lungs
				digestive system.', 'no', '','Environmental','excess', 'energetically removed'],  

			 ['Parasites toxicity', 'Organisms grow, shelter, and feed in the body. There
				are many different strains, ranging from microscopic to large organisms. They
				steal nutrients, invade bodily tissues and create poisonous toxic waste. 
				85-90% of people in the U.S. have parasites not found in medical testing. 
				Herbal Corrective Suggestion:', 'no', '', 'Microbial','pathogen', 'energetically removed'],

			['Fungal toxicity', 'The invasion and multiplication of opportunistic mold microorganisms
				that are not normally present within the body. Mold causes a
				wide variety of symptoms including joint and muscles pain,
				fatigue and brain fog.', 'no','', 'Microbial','pathogen', 'energetically removed'],             
			
			['Bacterial toxicity', '', 'no','', 'Microbial',
				'pathogen', 'energetically removed'],             
			
			
			['Mold toxicity', 'The invasion and multiplication of opportunistic mold microorganisms
				that are not normally present within the body. Mold causes a
				wide variety of symptoms including joint and muscles pain, fatigue and 
				brain fog.', 'no','', 'Microbial','pathogen', 'energetically removed'],         

			['Food Additives excess', 'Our modern processed food is filled with all sorts of 
				chemicals that prolong shelf life, enhance flavor, etc. They interfere with 
				metabolic processes and create abnormal cells.', 'no', '', 
				'Chemicals','excess', 'energetically removed'],

			['Recreational Drugs excess', 'generally are very imbalancing to the energy field, and
				will often lead to weakness in the chakras as well as liver damage, kidney 
				damage, etc. Drugs can open the body to invasion by entities.', 'no','', 
				'Chemicals','drugs', 'energetically removed'],             

			['Vaccination excess','','no', '','Medical','excess', 'energetically removed'],

			['Medications excess','','no', '', 'Medical','excesss', 'energetically removed'],             

			['Cavitation','','no','','Dental','excess', 'made happy'],             

			['Root Canal', '', 'no', '', 'Dental','excess', 'made happy'],
			
			['Cavity','','no','','Dental','excess', 'energetically removed'],             

			['Fluoride excess','','no','','Dental','excess', 'energetically removed'],

			['Mercury Amalgam excess','','no','','Dental','excess', 'energetically removed'],             

			['pH Imbalance','pH measures the acidity or alkalinity of the body. A pH of 7.3 -7.5 
			is healthy for the human body. Most people have a too acid pH because of stress and 
				diet.','no', '', 'Lifestyle & Nutrition','nowill', 'energetically removed'],             

			['Physical Malnutrition','A group of conditions generally related to poor quality or
				insufficient quantity of nutrient intake, absorption or utilization.','no','', 
				'Malnutrition','malnutrition', 'energetically removed'],             

			['Spiritual Malnutrition','A condition caused by lack of spiritual “food”. It is a 
				need for more quiet, unhurried time. Around the world, roughly 53% of the 
				people are in a state of spiritual starvation, 32%  are in a state of spiritual
				malnutrition, only 15% of the people are spiritually well-nourished. Ways
				to increase spiritual nutrition include: prayer, mediation, inspiration
				readings, engaging in meaningful discussion, etc.','no','',
				'Malnutrition','circuits', 'energetically removed'],
					
			['Foods','','no', '', 'Foods, Herbs & Nutrients','food', 'energetically removed'], 

			['Herbs','','no','', 'Foods, Herbs & Nutrients','herb', 'energetically removed'], 

			['Nutrients','','no', '', 'Foods, Herbs & Nutrients','vitamin', 'energetically removed'], 

			['Dehydration','', 'no', '', 'Lifestyle & Nutrition','dehydration', 'energetically removed'], 

			['Magnetic Field','', 'no', '', 'Lifestyle & Nutrition','circuits', 'energetically removed'], 

			['Sleep Deficiency','', 'no', '',  'Lifestyle & Nutrition','sleep', 'energetically removed'], 

			['Color Deficiency','', 'no', '',  'Lifestyle & Nutrition','color', 'energetically removed'], 

			['Adjunctive Therapy','', 'no', '', 'Outside Needs','activity', ''], 

			['Energy Techniques','','no','', 'Outside Needs','activity',''], 

			['Energy Work','','no','','Outside Needs','activity',''], 

			['Body Work', '', 'no', '', 'Physical Needs','activity',''],
			
			['Martial Arts', '','no', '', 'Exercise','activity',''], 

			['Movement Therapy', '', 'no', '', 'Exercise','activity',''], 

			['Sports', '', 'no', '', 'Exercise','activity',''], 

			['Muscle Training', '', 'no', '', 'Exercise','activity',''], 

			['Aerobics', '', 'no', '','Exercise','activity',''], 

			['Stress Management', '', 'no', '', 'Mental & Emotional Fitness','activity',''], 

			['Mental Repatterning', '', 'no', '', 'Mental & Emotional Fitness','activity',''], 

			['Spiritual Nutrition', '', 'no', '', 'Mental & Emotional Fitness','activity',''], 

			['Mental Rejuvenation', '', 'no', '', 'Mental & Emotional Fitness','activity',''], 

			['Mental Fitness Therapies', '', 'no', '', 'Mental & Emotional Fitness','activity',''],

			//Circuite and Systems

			['Bladder','','5', '/images/Bladder.png', 'Organs','circuits' ,'made happy'], 

			['Colon','','3', '/images/Colon.png', 'Organs','circuits','made happy'],
			
			['Gallbladder','','4','/images/Gallbladder.png', 'Organs','circuits','made happy'], 

			['Heart','', '1','/images/Heart.png', 'Organs','circuits','made happy'],
			
			['IlleoCecal Valve','', '1','/images/IleocecalValve.png', 'Organs','circuits','made happy'], 

			['Kidneys','', '5', '/images/Kidneys.png','Organs','circuits','made happy'], 

			['Liver','', '4', '/images/Liver.png', 'Organs','circuits','made happy'], 

			['Lungs','', '3', '/images/Lungs.png', 'Organs','circuits','made happy'], 

			['Small Intestine','','1', '/images/SmallIntestine.png', 'Organs','circuits','made happy'],
			
			['Spleen','','2','/images/Spleen.png', 'Organs','circuits','made happy'], 

			['Stomach','', '2','/images/Stomach.png', 'Organs','circuits','made happy'],
			
			['Uterus','', '6', '/images/Uterus.png', 'Organs','circuits','made happy'],

			['Adrenals','', '6', '/images/Adrenals.png', 'Glands','circuits','made happy'], 

			['Hypothalmus','','no', '/images/Hypothalamus.png','Glands','circuits','made happy'], 

			['Ovaries','','6', '/images/Ovaries.png', 'Glands','circuits','made happy'], 

			['Pancreas','','6', '/images/Pancreas.png', 'Glands','circuits','made happy'], 

			['Pineal Glands','','no','/images/Pineal.png', 'Glands','circuits','made happy'], 

			['Parathyroid Glands','','6','/images/ParathyroidGlands.png','Glands','circuits','made happy'], 

			['Pituitary Gland','','no','/images/Pituitary.png','Glands','circuits','made happy'], 

			['Prostate','','6','/images/Prostate.png','Glands','circuits','made happy'],
			
			['Testicles','','6','/images/Testicles.png','Glands','circuits','made happy'], 

			['Thymus','','6','/images/Thymus.png','Glands','circuits','made happy'],
			
			['Thyroid','','6','/images/Thyroid.png','Glands','circuits','made happy'],
					
		    ['Crown Chakra (Sahasrara)','The Crown chakra relates to higher
				consciousness, enlightenment, and inspiration. Located above the
				crown of the head, this Head Center chakra is related to the power of
				consciousness and corresponds with the universal self and
				divine reality.','no', '/images/CrownChakras.png', 
				'Chakras','circuits','made happy'],             

			['Brow Chakra (The Third Eye Chakra, Ajna)','As the sixth of the body\’s 
				seven chakras, the Third Eye lies between the eyebrows and is the only 
				chakra in the mental body. As such, it’s the center of command and 
				corresponds with intuition, insight, and psychic awareness. 
				Furthermore, the Third Eye chakra affords us the ability to connect 
				to elements beyond the five senses and controls the individual self and 
				power of inner perception.','no','/images/BrowChakras.png','Chakras','circuits','made happy'],

			['Throat Chakra (Vishuddha)','Located in the throat area, this chakra is the
				energy center for creativity, speech, individual needs, and will. 
				It\’s known for its purity and relates to the power of communication by
				connecting with the ether, the respiratory system, and higher intelligence. 
				This is the second chakra in the Emotional Body.','no','/images/ThroatChakras.png','Chakras',
				'circuits','made happy'],             

			['Heart Chakra (Anahata)','As one of two energy centers in the Emotional Body, 
				the Heart chakra lies in the middle of the chest and is responsible for 
				emotions and feelings like love, forgiveness, compassion, and self-esteem. 
				Not surprisingly, the heart triggers emotions of love and devotion and 
				corresponds with the element air.','no','/images/HeartChakras.png',
				'Chakras','circuits','made happy'],             

			['Solar Plexus Chakra (The Navel Chakra –Manipura)','As the last energy center 
				in the physical body, the Navel chakra is considered the Solar Plexus and 
				relates to the element of fire. The chakra, also known as the City of Gems, 
				closely corresponds with the emotion anger and is responsible for energies 
				like desire, vitality, inner strength, and self-control. Lastly, the Navel 
				chakra relates to the element of fire and governs the digestive system and ego
				impulse.','no','/images/SolarPlexus.png','Chakras','circuits','made happy'],             

			['Sacral Chakra (Svadhisthana)', 'Located above the genitals, the Sacral chakra 
				is referred to as the Abode of Kundalini, or the center of energy that is yet 
				to realize its potential. Because of its location, the Sacral chakra relates 
				to the water element and controls emotions that center around relationships,
				sexuality, and intimacy such as desire.', 'no', '/images/SacralChakras.png', 
				'Chakras','circuits','made happy'],

			['Root Chakra (Muladhara)','The Root chakra lies below the genitals and is the
				first of three physical body energy centers. As the center for survival, security, 
				and primal energy, the Root chakra is connected to the Earth Element and relates 
				to your natural survival instincts and emotions, especially fear.','no',
				'/images/RootChakras.png','Chakras','circuits','made happy'],
					
			['Descending Aorta','', 'no', '/images/DescendingAorta.png', 'Abdominal Vessels','circuits','made happy'], 

			['Inferior Vena Cava','', 'no', '/images/InferiorVenaCava.png', 'Abdominal Vessels','circuits','made happy'], 

			['Right External Iliac Vein','', 'no', '/images/RightExternalIliacVein.png', 'Abdominal Vessels','circuits','made happy'], 

			['Left External Iliac Vein','', 'no', '/images/LeftExternalIliacVein.png', 
				'Abdominal Vessels','circuits','made happy'], 

			['Right External Iliac Artery','', 'no', '/images/RightExternalIliacArtery.png', 'Abdominal Vessels','circuits','made happy'], 

			['Left External Iliac Artery','', 'no', '/images/LeftExternalIliacArtery.png', 'Abdominal Vessels','circuits','made happy'],

			['Anterior Facial Artery','','no','/images/AnteriorFacialArtery.png','Face and Neck Vessels','circuits','made happy'],
					
			['Internal Jugular Vein','','no','/images/InternalJugularVein.png','Face and Neck Vessels',
				'circuits','made happy'],
					
			['External Jugular Vein','','no','/images/ExternalJugularVein.png','Face and Neck Vessels','circuits','made happy'],
					
			['Carotid Artery','','no','/images/CarotidArtery.png','Face and Neck Vessels','circuits','made happy'], 

			['Vertebral Artery','','no','/images/VertebralArtery.png','Face and Neck Vessels',
				'circuits','made happy'],

			['Superior Sagittal Sinus','','no','/images/SuperiorSagittalSinus.png',
				'Skull Interior Vessels','circuits','made happy'],
			
			['Straight Sinus','','no','/images/StraightSinus.png','Skull Interior Vessels',
				'circuits','made happy'], 

			['Inferior Sagittal Sinus','','no','/images/InferiorSagittalSinus.png','Skull Interior Vessels','circuits','made happy'],

			['Right Popliteal Artery','','no','/images/RightPoplitealArtery.png',
				'Lower Limb Vessels','circuits','made happy'], 

			['Great Saphenous Vein','','no','/images/GreatSaphenousVein.png','Lower Limb Vessels','circuits','made happy'], 

			['Femoral Artery','','no','/images/FemoralArtery.png','Lower Limb Vessels','circuits','made happy'], 

			['Anterior Tibial Artery','','no','/images/AnteriorTibialArtery.png',
				'Lower Limb Vessels','circuits','made happy'], 

			['Posterior Tibial Artery','','no','/images/PosteriorTibialArtery.png',
				'Lower Limb Vessels','circuits','made happy'], 

			['Peroneal Vein','','no','/images/PeronealVein.png','Lower Limb Vessels','circuits','made happy'],

			['Left Subclavian Artery','','no','/images/LeftSubclavianArtery.png','Thoracic Circulation','circuits','made happy'], 

			['Right Subclavian Artery','','no','/images/RightSubclavianArtery.png',
				'Thoracic Circulation','circuits','made happy'], 

			['Intercostal Arteries','','no','/images/IntercostalArteries.png','Thoracic Circulation','circuits','made happy'], 

			['Aortic Arch','','no','/images/AorticArch.png','Thoracic Circulation','circuits','made happy'], 

			['Left Pulmonary Artery','','no','/images/LeftPulmonaryArtery.png','Thoracic Circulation','circuits','made happy'], 

			['Right Pulmonary Artery','','no','/images/RightPulmonaryArtery.png',
				'Thoracic Circulation','circuits','made happy'],

			['Mitral Valve','','no','/images/MitralValve.png','Heart Circulation','circuits','made happy'], 

			['Pulmonary Valve','','no','/images/PulmonaryValve.png','Heart Circulation','circuits','made happy'], 

			['Tricuspid Valve','','no','/images/TricuspidValve.png',
				'Heart Circulation','circuits','made happy'], 

			['Aortic Valve','','no','/images/AorticValve.png','Heart Circulation','circuits','made happy'], 

			['Coronary Arteries','','no','/images/CoronaryArteries.png',
				'Heart Circulation','circuits','made happy'],

			['Brachial Artery','','no','/images/BrachialArtery.png',
				'Upper Limb Vessels','circuits','made happy'], 

			['Radial Artery','','no','/images/RadialArtery.png','Upper Limb Vessels','circuits','made happy'], 

			['Basilar Vein','','no','/images/BasilarVeins.png','Upper Limb Vessels','circuits','made happy'],

			['Tongue','','no','/images/Tongue.png','Digestive System','circuits','made happy'], 

			['Stomach Sphincters','','no','/images/Stomach.png','Digestive System','circuits','made happy'], 

			['Stomach','', '2','/images/Stomach.png', 'Digestive System','circuits','made happy'], 

			['Small Intestine','','1','/images/SmallIntestine.png', 'Digestive System','circuits','made happy'], 

			['Pancreas','', '6', '/images/Pancreas.png', 'Digestive System','circuits','made happy'], 

			['Liver','', '4', '/images/Liver.png', 'Digestive System','circuits','made happy'], 

			['IlleoCecal Valve','', '1','/images/IleocecalValve.png', 
				'Digestive System','circuits','made happy'], 

			['Gallbladder','','4','/images/Gallbladder.png', 'Digestive System','circuits','made happy'],
			
			['Esophagus','','no','/images/Esophagus.png', 'Digestive System','circuits','made happy'], 

			['Colon','','3', '/images/Colon.png','Digestive System','circuits','made happy'],

			['Kidneys','', '5', '/images/Kidneys.png', 'Endocrine System','circuits','made happy'], 

			['Parathyroid Glands','','6','/images/ParathyroidGlands.png','Endocrine System','circuits','made happy'], 

			['Pancreas','', '6', '/images/Pancreas.png','Endocrine System','circuits','made happy'], 

			['Thyroid','','6','/images/Thyroid.png','Endocrine System','circuits','made happy'],
			
			['Ovaries','','6', '/images/Ovaries.png', 'Endocrine System','circuits','made happy'],
			
			['Testicles','','6','/images/Testicles.png','Endocrine System','circuits','made happy'], 

			['Adrenals','', '6', '/images/Adrenals.png','Endocrine System','circuits','made happy'], 

			['Pituitary Gland','','no','/images/Pituitary.png','Endocrine System','circuits','made happy'], 

			['Pineal Glands','','no','/images/Pineal.png', 'Endocrine System','circuits','made happy'],
			
			['Hypothalamus','','no', '/images/Hypothalamus.png', 'Endocrine System','circuits','made happy'],

			['Spleen','','2','/images/Spleen.png', 'Lymphatic System','circuits','made happy'],
			
			['Thymus','','6','/images/Thymus.png','Lymphatic System','circuits','made happy'], 

			['Lymph Nodes','','no','/images/LymphNodes.png','Lymphatic System','circuits','made happy'], 

			['Peyers Patches','','no','/images/PeyersPatch.png','Lymphatic System','circuits','made happy'], 

			['Adenoids and Tonsils','','no','/images/TonsilsAndAdenoids.png',
				'Lymphatic System','circuits','made happy'],
			
			['Appendix','','no','/images/Appendix.png','Lymphatic System','circuits','made happy'], 

			['Bone Marrow','','no','/images/BoneMarrow.png','Lymphatic System','circuits','made happy'],

			['Parasympathetic Nervous System','','no','','Peripheral Nervous System','circuits','made happy'], 

			['Sympathetic Nervous System','','no','','Peripheral Nervous System','circuits','made happy'], 

			['Enteric Nervous System','','no','','Peripheral Nervous System','circuits','made happy'],

			['Spinal cord','','no','/images/SpinalCord.png','Central Nervous System','circuits','made happy'],
			
			['Eyes','','no','/images/Eyes.png','Central Nervous System','circuits','made happy'],

			['Hypothalamus','','no', '/images/Hypothalamus.png', 'Brain','circuits','made happy'], 

			['Pineal Glands','','no','/images/Pineal.png','Brain','circuits','made happy'], 

			['Pituitary Gland','','no','/images/Pituitary.png','Brain','circuits','made happy'], 

			['Thalamus Gland','','no','/images/ThalamusGland.png','Brain','circuits','made happy'], 

			['Cerebellum','','no','/images/Cerebellum.png','Brain','circuits','made happy'],

			['Temporal Lobe','','no','/images/TemporalLobe.png', 'Cerebrum','circuits','made happy'], 

			['Occipital Lobe','','no','/images/OccipitalLobe.png', 'Cerebrum','circuits','made happy'], 

			['Frontal lobe','','no','/images/FrontalLobe.png','Cerebrum','circuits','made happy'], 

			['Parietal lobe','','no','/images/ParietalBones.png', 'Cerebrum','circuits','made happy'],

			['Testicles','','no','/images/Testicles.png','Male','circuits','made happy'], 

			['Prostate','','no','/images/Prostate.png','Male','circuits','made happy'], 

			['Vas Deferens','','no','/images/VasDeferens.png','Male','circuits','made happy'], 

			['Seminal Vesicle','','no','/images/SeminalVesicle.png','Male','circuits','made happy'],
			
			['Scrotum','','no','/images/Scrotum.png','Male','circuits','made happy'], 

			['Bulbo-urethral gland','','no','/images/Bulbo-urethralGland.png','Male','circuits','made happy'], 

			['Epididymus','','no','/images/Epididymus.png','Male','circuits','made happy'],
			
			['Prostate','','6','/images/Prostate.png','Male','circuits','made happy'], 

			['Seminal Vesicle','','no','/images/SeminalVesicle.png','Penis','circuits','made happy'],
			
			['Glans Penis','','no','/images/Penis.png','Penis','circuits','made happy'], 

			['Corpus Cavernosum','','no','/images/Penis.png','Penis','circuits','made happy'], 

			['Corpus Spongiosum','','no','/images/Penis.png','Penis','circuits','made happy'],

			['Uterus','', '6', '/images/Uterus.png', 'Female','circuits','made happy'], 
			['Ovaries','','6', '/images/Ovaries.png', 'Female','circuits','made happy'],
			['Fallopian Tube','','no','/images/FallopianTubes.png', 'Female','circuits','made happy'], 
			['Mammary Glands','','no','/images/MammaryGlands.png','Female','circuits','made happy'],

			['Alveoli','','no','/images/Alveoli.png','Respiratory System','circuits','made happy'],
			['Bronchioles','','no','/images/Bronchioles.png','Respiratory System','circuits','made happy'], 
			['Bronchial Tubes','','no','/images/BronchialTubes.png','Respiratory System','circuits','made happy'],
			['Lungs','','no','/images/Lungs.png','Respiratory System','circuits','made happy'],
			['Nose','','no','/images/Nose.png','Respiratory System','circuits','made happy'],
			['Trachea','','no','/images/Trachea.png','Respiratory System','circuits','made happy'],

			['Transverse Abdominus','','no','/images/TransverseAbdominus.png',
				'Abdominal Muscles','circuits','made happy'], 
			['Rectus Abdominus','','no','/images/RectusAbdominus.png',
				'Abdominal Muscles','circuits','made happy'],
			['Pyramidalis','','no','/images/Pyramidalis.png','Abdominal Muscles','circuits','made happy'], 
			['Transverse Fascia','','no','/images/TransverseFascia.png',
				'Abdominal Muscles','circuits','made happy'], 
			['Inguinal Ligament','','no','/images/InguinalLigament.png',
				'Abdominal Muscles','circuits','made happy'], 
			['External Oblique','','no','/images/ExternalOblique.png','Abdominal Muscles','circuits','made happy'], 
			['Internal Oblique','','no','/images/InternalOblique.png',
				'Abdominal Muscles','circuits','made happy'],

			['Anterior Neck Muscles','','no','/images/AnteriorNeckMuscles.png',
				'Neck Muscles','circuits','made happy'], 
			['Posterior Neck Muscles','','no','/images/PosteriorNeckMuscles.png',
				'Neck Muscles','circuits','made happy'],

			['Deep Head Muscles','','no','/images/DeepHeadMuscles.png','Head Muscles','circuits','made happy'], 
			['Superficial Head Muscles','','no','/images/SuperficialHeadMuscles.png',
				'Head Muscles','circuits','made happy'],

			['Serratus Anterior','','no','/images/SerratusAnterior.png', 
				'Thoracic Muscles','circuits','made happy'], 
			['Intercostal Muscles','','no','/images/IntercostalMuscles.png', 
				'Thoracic Muscles','circuits','made happy'], 
			['Diaphragm','','no','/images/Diaphragm.png','Thoracic Muscles','circuits','made happy'], 
			['Pectoralis Minor','','no','/images/PectoralisMinor.png', 
				'Thoracic Muscles','circuits','made happy'], 
			['Pectoralis Major','','no','/images/PectoralisMajor.png', 
				'Thoracic Muscles','circuits','made happy'],

			['Ilicostalis','','no','/images/Ilicostalis.png', 'Back Muscles','circuits','made happy'],
			['Longissimus','','no','/images/Longissimus.png', 'Back Muscles','circuits','made happy'],    
			['Quadratus Lumborum','','no','/images/QuadratusLumborum.png', 
				'Back Muscles','circuits','made happy'],     
			['Spinalis','','no','/images/Spinalis.png', 'Back Muscles','circuits','made happy'],
			['Serratus Posterior Inferior','','no','/images/SerratusPosteriorInferior.png', 
				'Back Muscles','circuits','made happy'],
			['Serratus Posterior Superior','','no','/images/SerratusPosteriorSuperior.png', 
				'Back Muscles','circuits','made happy'],
			['Rhomboid Major','','no','/images/RhomboidMajor.png', 'Back Muscles','circuits','made happy'],     
			['Rhomboid Minor','','no','/images/RhomboidMinor.png', 'Back Muscles','circuits','made happy'],     
			['Latissmus Dorsi','','no','/images/LatissmusDorsi.png', 'Back Muscles','circuits','made happy'],    
			['Trapezius','','no','/images/Trapezius.png','Back Muscles','circuits','made happy'],

			['Forearm','','no','/images/ForearmMuscles.png','Upper Limb Muscles','circuits','made happy'], 
			['Hand Muscles','','no','/images/HandMuscles.png','Upper Limb Muscles','circuits','made happy'], 
			['Upper Arm Muscles','','no','/images/UpperArmMuscles.png',
				'Upper Limb Muscles','circuits','made happy'], 
			['Shoulder Muscles','','no','/images/ShoulderMuscles.png',
				'Upper Limb Muscles','circuits','made happy'],

			['Hip Muscles','','no','/images/HipMuscles.png','Lower Limb Muscles','circuits','made happy'], 
			['Thigh Muscles','','no','/images/ThighMuscles.png',
				'Lower Limb Muscles','circuits','made happy'],         
			['Leg Muscles','','no','/images/LegMuscles.png','Lower Limb Muscles','circuits','made happy'],   
			['Foot Muscles','','no','/images/FootMuscles.png','Lower Limb muscles','circuits','made happy'],

			['Uretha','','no','/images/Uretha.png', 'Urinary System','circuits','made happy'], 
			['Bladder','','no','/images/Bladder.png', 'Urinary System','circuits','made happy'], 
			['Ureters','','no','/images/Ureters.png', 'Urinary System','circuits','made happy'],
			['Kidneys','','5','/images/Kidneys.png', 'Urinary System','circuits','made happy'],

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

			['Taiyin Lung Meridan of Hand','','yes', '/images/TaiyinLungMeridianOfHand.png', 
				'The Twelve Standard Meridians','circuits','made happy'], 
			['Shaoyin Heart Meridian of Hand','','yes', '/images/ShaoyinHeartMeridianOfHand.png', 
				'The Twelve Standard Meridians', 'circuits','made happy'], 
			['Jueyin Pericardium Meridian of Hand','','yes', '/images/JueyinPericardiumMeridianOfHand.png', 
				'The Twelve Standard Meridians','circuits','made happy'], 
			['Shaoyang Sanjiao (Tiple Warmer) Meridian of Hand','','yes', 
				'/images/ShaoyangSanjiaoMeridianOfHand.png', 'The Twelve Standard Meridians',
				'circuits','made happy'], 
			['Taiyang Small Intestine Meridian of Hand','','yes', 
				'/images/TaiyangSmallIntestineMeridianOfHand.png', 'The Twelve Standard Meridians',
				'circuits','made happy'], 
			['Yangming Large Intestine Meridian of Hand','','yes', 
				'/images/YangmingLargeIntestineMeridianOfHand.png', 
				'The Twelve Standard Meridians','circuits','made happy'], 
			['Taiyin Spleen Meridian of Foot','','yes', '',
				'The Twelve Standard Meridians','circuits','made happy'], 
			['Shaoyin Kidney Meridian of Foot','','yes', '/images/ShaoyinKidneyMeridianOfFoot.png', 
				'The Twelve Standard Meridians','circuits','made happy'], 
			['Jueyin Liver Meridian of Foot','','yes', '/images/JueyinLiverMeridianOfFoot.png', 
				'The Twelve Standard Meridians','circuits','made happy'],
			['Shaoyang Gallbladder Meridian of Foot','','yes', '/images/ShaoyangGallbladderMeridianOfFoot.png', 
				'The Twelve Standard Meridians','circuits','made happy'], 
			['Taiyang Bladder Meridian of Foot','','yes','/images/TaiyangBladderMeridianOfFoot.png', 
				'The Twelve Standard Meridians','circuits','made happy'], 
			['Yangming Stomach Meridian of Foot','','yes', '/images/YangmingStomachMeridianOfFoot.png', 
				'The Twelve Standard Meridians','circuits','made happy'],

			['Yang Heel Meridian (Yang Qia Mai)','','yes', '/images/YangHeelMeridian.png', 
				'The Eight Extraordinary Meridians','circuits','made happy'], 
			['Conception Meridian (Ren Mai)','','yes', '/images/ConceptionMeridian.png', 
				'The Eight Extraordinary Meridians','circuits','made happy'],
			['Governing Meridian (Du Mai)','','yes', '/images/GoverningMeridian.png', 
				'The Eight Extraordinary Meridians','circuits','made happy'], 
			['Penetrating Meridian (Chong Mai)','','yes', '/images/PenetratingMeridian.png', 
				'The Eight Extraordinary Meridians','circuits','made happy'], 
			['Yin Linking Meridian (Yin Wei Mai)','','yes', '/images/YinLinkingMeridian.png', 
				'The Eight Extraordinary Meridians','circuits','made happy'], 
			['Yang Linking Meridian (Yang Wei Mai)','','yes', '/images/YangLinkingMeridian.png', 
				'The Eight Extraordinary Meridians','circuits','made happy'], 
			['Girdle Meridian (Dai Mai)','','yes', '/images/GirdleMeridian.png', 
				'The Eight Extraordinary Meridians','circuits','made happy'], 
			['Yin Heel Meridian (Yin Qia Mai)','','yes', '/images/YinHeelMeridian.png', 
				'The Eight Extraordinary Meridians','circuits','made happy'],

			['Facial Bones','', 'no', '', 'Cranial Bones','circuits','made happy'], 
			['Middle Ear Bones','', 'no', '/images/MiddleEarBones.png', 'Cranial Bones','circuits','made happy'], 
			['Ethmoid Bone','', 'no', '/images/EthmoidBones.png','Cranial Bones','circuits','made happy'], 
			['Sphenoid Bone','', 'no', '/images/SphenoidBone.png', 'Cranial Bones','circuits','made happy'],
			['Frontal Bone','', 'no', '/images/FrontalBone.png', 'Cranial Bones','circuits','made happy'], 
			['Parietal Bones','','no', '/images/ParietalBones.png', 'Cranial Bones','circuits','made happy'], 
			['Temporal Bones','', 'no', '/images/TemporalBones.png', 'Cranial Bones','circuits','made happy'], 
			['Occipital Bone','', 'no', '/images/OccipitalBone.png', 'Cranial Bones','circuits','made happy'],

			['Inferior Nasal Conchae Bones','', 'no', '/images/InferiorNasalConchae.png', 
				'Facial Bones','circuits','made happy'], 
			['Vomer Bone','', 'no', '/images/VomerBone.png', 'Facial Bones','circuits','made happy'], 
			['Lacrimal Bones','', 'no', '/images/LacrimalBone.png','Facial Bones','circuits','made happy'], 
			['Hyoid Bone','', 'no', '/images/HyoidBone.png', 'Facial Bones','circuits','made happy'], 
			['Nasal Bones','', 'no', '/images/NasalBones.png', 'Facial Bones','circuits','made happy'], 
			['Zygomatic Bones','', 'no','/images/ZygomaticBones.png', 'Facial Bones','circuits','made happy'], 
			['Palatine Bones','', 'no', '/images/PalatineBones.png', 'Facial Bones','circuits','made happy'], 
			['Maxilla Bone','', 'no', '/images/MaxillaBone.png', 'Facial Bones','circuits','made happy'], 
			['Mandible Bone','', 'no', '/images/MandibleBone.png', 'Facial Bones','circuits','made happy'],

			['Tensor Tympani','', 'no', '/images/MiddleEarBones.png', 'Middle Ear Bones','circuits','made happy'], 
			['Malleus','','no', '/images/MiddleEarBones.png', 'Middle Ear Bones','circuits','made happy'], 
			['Incus','', 'no', '/images/MiddleEarBones.png', 'Middle Ear Bones','circuits','made happy'], 
			['Stapedius','', 'no', '/images/MiddleEarBones.png', 'Middle Ear Bones','circuits','made happy'],
			['Labyrinth','', 'no', '/images/MiddleEarBones.png', 'Middle Ear Bones','circuits','made happy'], 
			['Stapes','', 'no','/images/MiddleEarBones.png', 'Middle Ear Bones','circuits','made happy'], 
			['Tympanic Cavity','', 'no', '/images/MiddleEarBones.png', 'Middle Ear Bones','circuits','made happy'], 
			['Eustachian Tube','', 'no', '/images/MiddleEarBones.png', 'Middle Ear Bones','circuits','made happy'],
			['Tympanic Membrane (ear drums','', 'no', '/images/MiddleEarBones.png', 
				'Middle Ear Bones','circuits','made happy'],
			['Auditory Canal','', 'no', '/images/MiddleEarBones.png', 'Middle Ear Bones','circuits','made happy'],

			['Manubrium','', 'no', '/images/Manubrium.png', 'Thoracic Cage','circuits','made happy'], 
			['Sternum','', 'no', '/images/Sternum.png','Thoracic Cage','circuits','made happy'], 
			['Xyphoid Process','', 'no', '/images/Xyphoid.png', 'Thoracic Cage','circuits','made happy'],
			
			['1st rib','', 'no', '/images/1stRib.png', 'True Ribs','circuits','made happy'], 
			['2nd rib','', 'no', '/images/2ndRib.png', 'True Ribs','circuits','made happy'], 
			['3rd rib','', 'no', '/images/3rdRib.png', 'True Ribs','circuits','made happy'], 
			['4th rib','', 'no', '/images/4thRib.png', 'True Ribs','circuits','made happy'], 
			['5th rib','', 'no', '/images/5thRib.png', 'True Ribs','circuits','made happy'], 
			['6th rib','', 'no', '/images/6thRib.png', 'True Ribs','circuits','made happy'], 
			['7th rib','', 'no', '/images/7thRib.png', 'True Ribs','circuits','made happy'], 
			
			['8th rib','', 'no', '/images/8thRib.png', 'False Ribs','circuits','made happy'], 
			['9th rib','', 'no', '/images/9thRib.png', 'False Ribs','circuits','made happy'], 
			['10th rib','', 'no', '/images/10thRib.png', 'False Ribs','circuits','made happy'], 
			['11th rib','', 'no', '/images/11thRib.png', 'False Ribs','circuits','made happy'], 
			['12th rib','', 'no', '/images/12thRib.png', 'False Ribs','circuits','made happy'],

			['C1(Atlas)','','no', '/images/C1Atlas.png', 'Cervical Vertebrae','circuits','made happy'], 
			['C2(Axis)','','no', '/images/C2Axis.png', 'Cervical Vertebrae','circuits','made happy'], 
			['C3','','no', '/images/C3.png', 'Cervical Vertebrae','circuits','made happy'],
			['C4','','no', '/images/C4.png', 'Cervical Vertebrae','circuits','made happy'], 
			['C5','','no', '/images/C5.png', 'Cervical Vertebrae','circuits','made happy'], 
			['C6','','no', '/images/C6.png', 'Cervical Vertebrae','circuits','made happy'], 
			['C7','','no', '/images/C7.png', 'Cervical Vertebrae','circuits','made happy'],

			['Thoracic disks upper','','no', '', 'Disks', 'circuits', 'made happy'],
			['Thoracic disks lower','','no', '', 'Disks', 'circuits', 'made happy'],
			['Lumbar disks','','no', '', 'Disks', 'circuits', 'made happy'],
			['Cervical disks','','no', '', 'Disks', 'circuits', 'made happy'],

		    ['T1','Connects to: Arms from the elbows down, hands wrists and
				fingers: esophagus and trachea, heart', 'no', '/images/T1.png', 
				'Thoracic Vertebrae','circuits','made happy'],             
			['T2','Connects to: Hear, its valves and coronary arteries; lungs 
				broncial tubes','no', '/images/T2.png', 'Thoracic Vertebrae',
				'circuits','made happy'],             
			['T3','Connects to: Lungs, bronchial tubes, pleura, chest, breast, 
				heart','no','/images/T3.png','Thoracic Vertebrae','circuits','made happy'],             
			['T4','Connects to: Gallbladder, common duct, heart, lungs, bronchial 
				tubes','no','/images/T4.png','Thoracic Vertebrae','circuits','made happy'],             
			['T5','Connects to: Liver, solar plexus, circulation, heart, esophagus, 
				stomach','no', '/images/T5.png', 'Thoracic Vertebrae','circuits','made happy'],
			['T6','Connects to: Stomach, esophagus, peritoneum, liver, duodenum',
				'no', '/images/T6.png','Thoracic Vertebrae','circuits','made happy'],             
			['T7','Connects to: Kidneys, appendix, testes, ovaries, uterus, adrenal 
				cortex, spleen, pancreas, large intestine', 'no', '/images/T7.png', 
				'Thoracic Vertebrae','circuits','made happy'],             
			['T8','Connects to: Spleen, stomach, liver, pancreas, gallbladder, adrenal 
				cortex, small intestine, pyloric valve', 'no', '/images/T8.png', 
				'Thoracic Vertebrae','circuits','made happy'],
			['T9','Connects to: Adrenal cortex, pancreas, spleen, gallbladder, overies,
				uterus, small intestine', 'no', '/images/T9.png', 'Thoracic Vertebrae','circuits','made happy'],
			['T10','Connects to: Kidneys, appendix, testes, ovaries, uterus, adrenal cortex,
				splen, panreas, large intestine', 'no', '/images/T10.png', 
				'Thoracic Vertebrae','circuits','made happy'],             
			['T11','Connects to: Kidneys, ureters, large intestine, urinary bladder, adrenal 
				medulla, adrenial cortex, uterus, ovaries, ileocecal valve','no', '/images/T11.png', 
				'Thoracic Vertebrae','circuits','made happy'],
			['T12','Connects to: Small intestine, lymph circulation, large intestine, urinary bladder, 
				uterus, kidneys, ilececal valve', 'no', '/images/T12.png', 
				'Thoracic Vertebrae','circuits','made happy'],

			['L1','Connects to: Large intestine, inguinal rings, uterus','no', '/images/L1.png', 
				'Lumbar Vertebrae','circuits','made happy'], 
			['L2','Connects to: Appendix, abdomen,Upper leg, urinary bladder','no', '/images/L2.png', 
				'Lumbar Vertebrae','circuits','made happy'],
			['L3','Connects to: Sex organs, uterus, bladder, knee, prostate, large intestine',
				'no', '/images/L3.png', 'Lumbar Vertebrae','circuits','made happy'], 
			['L4','Connects to: Prostate gland, muscles of Lower back, sciatic nerve','no', 
				'/images/L4.png', 'Lumbar Vertebrae','circuits','made happy'], 
			['L5','Connects to: Lower legs, ankles, feet, prostate','no', '/images/L5.png', 
				'Lumbar Vertebrae','circuits','made happy'],

		    ['Sacrum','Connects to: Hip bones, buttocks, rectrum, sex organs, genitallia, 
		    	urinary bladder, ureter, prostate', 'no', '/images/Sacrum.png', 
		    		'Vertebral Column','circuits','made happy'],             
		    ['Coccyx','Connects to: Rectum, anus','no', '/images/Coccyx.png', 'Vertebral Column','circuits','made happy'],

			['Ulna Bones','','no','/images/UlnaBones.png','Upper Limbs','circuits','made happy'], 
			['Radius Bones','','no','/images/RadiusBones.png','Upper Limbs','circuits','made happy'], 
			['Clavicle Bones','','no','/images/ClavicleBones.png','Upper Limbs','circuits','made happy'], 
			['Scapula bone','','no','/images/ScapulaBones.png','Upper Limbs','circuits','made happy'], 
			['Humerus bones','','no','/images/HumerusBones.png', 'Upper Limbs','circuits','made happy'],

			['Hamate', '', 'no', '/images/Hamate.png', 'Wrist Bones','circuits','made happy'], 
			['Capitate', '', 'no', '/images/Capitate.png','Wrist Bones','circuits','made happy'], 
			['Trapezoid', '', 'no', '/images/Trapezoid.png', 'Wrist Bones','circuits','made happy'],
			['Trapezium', '', 'no', '/images/Trapezium.png', 'Wrist Bones','circuits','made happy'], 
			['Scaphoid', '', 'no', '/images/Scaphoid.png','Wrist Bones','circuits','made happy'], 
			['Lunate', '', 'no', '/images/Wrist/Lunate.png', 'Wrist Bones','circuits','made happy'],
			['Triquetrum', '', 'no', '/images/Wrist/Triquetrum.png', 'Wrist Bones','circuits','made happy'], 
			['Pisiform', '', 'no','/images/Wrist/Pisiform.png', 'Wrist Bones','circuits','made happy'],

			['Distal Phalange Bones', '', 'no', '/images/DistalPhalangeBones.png', 'Hand Bones','circuits','made happy'], 
			['Medial Phalange Bones', '', 'no', '/images/MedialPhalangeBones.png', 'Hand Bones','circuits','made happy'], 
			['Metcarpal Bones','', 'no', '/images/MetcarpalBones.png', 'Hand Bones','circuits','made happy'], 
			['Proximal Phalange Bones', '', 'no','/images/ProximalPhalangeBones.png', 
				'Hand Bones','circuits','made happy'],

			['Tibia','','no','/images/Tibia.png','Leg','circuits','made happy'], 
			['Femur','','no','/images/Femur.png','Leg','circuits','made happy'],
			['Fibula','','no','/images/Fibula.png','Leg','circuits','made happy'], 
			['Patella','','no','/images/Patella.png','Leg','circuits','made happy'],
			['Meniscus','','no','/images/Meniscus.png','Leg','circuits','made happy'],

			['Iliium','','no','/images/Iliium.png','Pelvis','circuits','made happy'], 
			['Ischium','','no','/images/Ischium.png','Pelvis','circuits','made happy'],
			['Pubis','','no','/images/Pubis.png','Pelvis','circuits','made happy'],

			['Tarsal Bones','','no','/images/TarsalBones.png','Foot','circuits','made happy'],    
			['Proximal Phalanges','','no','/images/ProximalPhalanges.png','Foot','circuits','made happy'], 
			['Distal Phalanges','','no','/images/DistralPhalanges.png','Foot','circuits','made happy'], 
			['Medial Phalanges','','no','/images/MedialPhalanges.png','Foot','circuits','made happy'], 
			['Metatarsal Bones','','no','/images/MetatarsalBones.png','Foot','circuits','made happy'],

		    ['Tendons','Tendons connect muscles to bone, and are found on both
				ends of every muscle in the body', 'no','/images/Tendons.png',
				'Connective Tissue','circuits','made happy'],
			['Ligaments','Ligaments connect bone to bone and are found throughout 
				the body','no','/images/Ligaments.png', 'Connective Tissue','circuits','made happy'],             
			['Fascia','Connective tissue that surrounds and protects all the 
				other tissues of the body.','yes','', 
				'Connective Tissue','circuits','made happy'],

			['T1-T2','','no','/images/ThoracicDisksUpper.png', 'Thoracic Disks Upper','circuits','made happy'],
			['T2-T3','','no','/images/ThoracicDisksUpper.png','Thoracic Disks Upper','circuits','made happy'],
			['T3-T4','','no','/images/ThoracicDisksUpper.png','Thoracic Disks Upper','circuits','made happy'],
			['T4-T5','','no','/images/ThoracicDisksUpper.png','Thoracic Disks Upper','circuits','made happy'],
			['T5-T6','','no','/images/ThoracicDisksUpper.png','Thoracic Disks Upper','circuits','made happy'],
			['T6-T7','','no','/images/ThoracicDisksUpper.png','Thoracic Disks Upper','circuits','made happy'],
			['T7-T8','','no','/images/ThoracicDisksLower.png','Thoracic Disks Lower','circuits','made happy'],
			['T8-T9','','no','/images/ThoracicDisksLower.png','Thoracic Disks Lower','circuits','made happy'],
			['T9-T10','','no','/images/ThoracicDisksLower.png','Thoracic Disks Lower','circuits','made happy'],
			['T0-T11','','no','/images/ThoracicDisksLower.png','Thoracic Disks Lower','circuits','made happy'],
			['T11-T12','','no','/images/ThoracicDisksLower.png','Thoracic Disks Lower','circuits','made happy'],
			['T12-L1','','no','/images/ThoracicDisksLower.png','Thoracic Disks Lower','circuits','made happy'],
			
			['L1-L2','','no','/images/LumbarDisks.png','Lumbar Disks','circuits','made happy'], 
			['L2-L3','','no','/images/LumbarDisks.png','Lumbar Disks','circuits','made happy'], 
			['L3-L4','','no','/images/LumbarDisks.png','Lumbar Disks','circuits','made happy'],
			['L4-L5','','no','/images/LumbarDisks.png','Lumbar Disks','circuits','made happy'], 
			['L5-S1','','no','/images/LumbarDisks.png','Lumbar Disks','circuits','made happy'], 

			['C2-C3','','no','/images/CervicalDisks.png','Cervical Disks','circuits','made happy'],
			['C3-C4','','no','/images/CervicalDisks.png','Cervical Disks','circuits','made happy'], 
			['C4-C5','','no','/images/CervicalDisks.png','Cervical Disks','circuits','made happy'], 
			['C5-C6','','no','/images/CervicalDisks.png','Cervical Disks','circuits','made happy'],
			['C6-C7','','no','/images/CervicalDisks.png','Cervical Disks','circuits','made happy'], 
			['C7-T1','','no','/images/CervicalDisks.png','Cervical Disks','circuits','made happy'],

			['Morning Sickness','','no','','Disconnections','sickness', 'made happy'],
			['Spirit out of Body','','no','','Disconnections','spirit', 'reconnected'],
			['Spirit to Physical Disconection', '','no', '','Disconnections', 
				'body', 'reconnected'],
			['Spirit to Spirit Disconection', 'One or more breaks or tears in the spirit or energy body. 
				Usually it affects the heart but it can affect other body parts or even the whole 
				spiritual body. A spirit/spirit disconnection of the heart would be considered 
				a "broken heart".','no','','Disconnections', 
				'spirit', 'reconnected'],
			['Physical to Physical Disconection','', 'no', '','Disconnections', 
				'spiritbody', 'reconnected'],


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