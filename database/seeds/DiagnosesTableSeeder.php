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
				destructive behaviors.','no', '', 'Energy','ahe'],

			['Idea Allergy', 'Allergies are simply trapped energies in the body that create
				a negative reaction to whatever it is you\'re allergic to. As you can be
				allergic to a substance or a food, you can be allergic to thoughts or ideas,
				which will typically cause emotional reactions, and  avoidance or sabotage
				behaviors. Allergies to ideas are often created during a difficult emotional
				time where you had negative feelings about that particular', 'yes', '',
				'Allergy/Intolerance','allergy'],

			['Physical Allergy', 'An energy that develops from changes in the way the energy 
				field reacts to the energy of something (i.e. a particle food, hair, dust)', 
				'yes', '', 'Allergy/Intolerance','allergy'],

			['Intolerance', 'An energy that causes the body to have a negative reaction to 
				food or other elements.', 'no','', 'Allergy/Intolerance','intolerance'],             

			['Trapped Emotion', 'Harmful emotional energies from negative past events that are 
				stored in the body. They can cause depression, anxiety; they can block people 
				from love and happiness and make them feel disconnected from others.', 
				'yes','', 'Emotional','trappedemotion'],

			['Heart-Wall', "Heart Wall is made of layers of trapped emotions that have been
				designated as a buffer to protect your heart from being broken. Your heart-wall
				is literally made of trapped energies, but your subconscious has assigned it a
				physical material and thickness, which are imaginative, but symbolic of the
				level of protection your heart has needed during the course of your life. \r
				Heart Wall Emotions – are trapped emotions (harmful emotional energies from
				negative past events that are stored in the body) used by the subconscious build
				a barrier of protection around the heart.", 'yes','', 'Emotional','heartwall'],

			['Emotional Resonance', 'A resonance develops during an intense emotional
				experience that leaves the body &quot;ringing&quot; with the frequency of that 
				emotional vibration. Resonances often affect the whole body, as opposed to a 
				trapped emotion which is smaller and more acute, but resonances do cause similar 
				emotional difficulties.', 'yes','','Emotional','emotionalresonance'],             

			['Broadcast Message', 'An energy that is continually sent out from the body to 
				other people, who receive it subconsciously. It can influence ability to form 
				and keep relationships, as well as attract negativity, wrong people, etc.', 
				'no','', 'Mental','broadcast'],             

			['Despair Anchor', 'This was the energy of a thought that was stuck in your 
				energy field. A negative statement perceived as true that prompting your 
				subconscious mind to verify or fulfill the &quot;truth&quot; of that thought.', 
				'no','','Mental','anchor'],             

			['Images', 'The trapped energy of a “picture in the mind”. The subconscious will 
				attempt to fulfill this image, and will direct (or misdirect) behavior to make 
				sure this image “comes true”. An image often interferes with goals and relationships, 
				depending on what the image is.', 'no','', 'Mental','images'],             

			['Memory Field', 'The energy of memories stored in the energy field often in front of a 
				person. They are present when memories are traumatic and often recalled. That is why it
				makes if it difficult to move forward in life.', 'no','', 'Mental','memory'],

			['No Will to Live', 'An energy that becomes trapped when life overwhelms us and
				we lose the desire to live.', 'no', '', 'Mental','willtodie'],             

			['Need For T3 Session', '', 'no','', 'Mental','T3'],             

			['Will to Die', 'A energy that develops from wishing for death, either as an escape 
				or from self-abusive thoughts.', 'no','', 'Mental','willtodie'],
			
			['Cording', 'An energetic connection between two people. The healthy “heart
					to heart” cord enables the exchange of positive energy. All the rest are 
					unhealthy cords and are channels for the exchange of negative energy.', 'no', 
					'','Offensive','cording'],

			['Post-Hypnotic Suggestion', 'A negative statement became stuck in the subconscious 
				mind during a time when people are in a semi-hypnotic state and their mind was open to
				suggestion. This often happens when listening to repetitive music, playing video
				games or watching some other kind of entertainment. Suggestions like this can
				come from negative vibrations in the media itself or it can also come from dark entities 
				who take advantage of one’s semi-hypnotic state. A Post Hypnotic Suggestion is perceived 
				as a truth by the subconscious mind, which will then seek to verify or fulfill it by creating
				emotions and behaviors accordingly.', 'no','', 'Offensive','hypnotic'],

			['Saboteur', 'These are weapons made of pure, invisible energy that are either
				self-inflicted or inflicted by another person. These are often a manifestation of 
				someone\'s negative feelings', 'no', '', 'Offensive','saboteur'],

			['Entity', "Dark spirit(s) that exerts a negative influence on a person's  body
				and energy field.", 'no','', 'offensive','entities'],             
			
			['Curses', 'A very negative energy that has been deliberately placed into a person\’s 
				energy field by another person or entity with a more nefarious purpose than
				merely causing pain.', 'no','', 'Offensive','curse'],             

			['Inflamation', 'An energy that indicates the body is trying to heal, but that the 
				healing cycles have been stopped/blocked from progressing.  When this energy
				is cleared, the healing cycle is restarted and as a result new or additional
				inflammation can be felt.', 'no','', 'Post-Traumatic','inflammation'],             

			['Miasm', 'An inherited distortion of the energy field from suppressed 
				disease that occurred during an ancestor’s life. It influences the balance
				of body and mind.', 'no','', 'Post-Traumatic','miasm'],             

			['Physical Trauma', 'An energy that occurs when the body is under extreme or 
				sudden physical stress. Can also be from emotional trauma or event or extreme 
				prolonged stress.', 'no','', 'Post-Traumatic','trauma'],             

			['Psychic Trauma', 'Similar to a trapped emotion but must be identified as a 
				psychic trauma. When two or more emotions are felt simultaneously, 
				they become trapped into one sphere of energy.', 'yes','', 'Post-Traumatic','psychictrauma'],

		    //Pathogens
		    ['Parasites', 'Organisms grow, shelter, and feed in the body. There
				are many different strains, ranging from microscopic to large organisms. They
				steal nutrients, invade bodily tissues and create poisonous toxic waste. 
				85-90% of people in the U.S. have parasites not found in medical testing. 
				Herbal Corrective Suggestion:', 'no', '', 'Pathogen','pathogen'],

			['Fungal', 'The invasion and multiplication of opportunistic mold microorganisms
				that are not normally present within the body. Mold causes a
				wide variety of symptoms including joint and muscles pain,
				fatigue and brain fog.', 'no','', 'Pathogen','pathogen'],             
			
			['Bacterial', '', 'no','', 'Pathogen','pathogen'],             
			
			['Viral', '', 'no', '', 'Pathogen','pathogen'],
			
			['Mold', 'The invasion and multiplication of opportunistic mold microorganisms
				that are not normally present within the body. Mold causes a
				wide variety of symptoms including joint and muscles pain, fatigue and 
				brain fog.', 'no','', 'Pathogen','pathogen'],

			//Toxins
			['Heavy Metals','', 'no','', 'Toxins','circuits'],             

			['EM Spectrum', '', 'no','', 'Toxins','circuits'],


			//Nutrietion and LifeStyles
			['Stress Hormones','Adrenalin and Cortisol are considered the “stress hormones”
				of the body. They can be produced in excess during difficult
				times, becoming toxic to the body.', 'no','', 'Excesses','excess'],

			['Metabolic Waste', 'The by-products of all metabolic processes. If the organs
				of elimination are compromised in any way, or are working less
				efficiently than they should, metabolic waste can build up in
				the body.', 'no','', 'Excesses','excess'],             

			['Free Radicals', '', 'no','','Excesses','excess'],             

			['Six Pernicious Influences', '', 'no','', 'Excesses','excess'],

			['Environmental', 'Environmental Toxicity – toxins in the environment (outdoors,
				home, office, etc.) that are absorbed through the skin, lungs
				digestive system.', 'no', '','Chemicals','excess'],             

			['Food Additives', 'Our modern processed food is filled with all sorts of 
			chemicals that prolong shelf life, enhance flavor, etc. They interfere with 
			metabolic processes and create abnormal cells.', 'no', '', 'Chemicals','excess'],

			['Recreational Drugs', 'generally are very imbalancing to the energy field, and
				will often lead to weakness in the chakras as well as liver damage, kidney 
				damage, etc. Drugs can open the body to invasion by entities.', 'no','', 
				'Chemicals','drugs'],             

			['Vaccination','','no', '','Medical','excess'],

			['Medications','','no', '', 'Medical','excesss'],             

			['Cavitation','','no','','Dental','excess'],             

			['Root Canal', '', 'no', '', 'Dental','excess'],
			
			['Cavity','','no','','Dental','excess'],             

			['Fluoride','','no','','Dental','excess'],

			['Mercury Amalgam','','no','','Dental','excess'],             

			['pH Imbalance','pH measures the acidity or alkalinity of the body. A pH of 7.3 -7.5 
			is healthy for the human body. Most people have a too acid pH because of stress and 
				diet.','no', '', 'Lifestyle & Nutrition','circuits'],             

			['Physical Malnutrition','A group of conditions generally related to poor quality or
				insufficient quantity of nutrient intake, absorption or utilization.','no','', 
				'Malnutrition','malnutrition'],             

			['Spiritual Malnutrition','A condition caused by lack of spiritual “food”. It is a 
				need for more quiet, unhurried time. Around the world, roughly 53% of the 
				people are in a state of spiritual starvation, 32%  are in a state of spiritual
				malnutrition, only 15% of the people are spiritually well-nourished. Ways
				to increase spiritual nutrition include: prayer, mediation, inspiration
				readings, engaging in meaningful discussion, etc.','no','','Malnutrition','circuits'],
					
			['Foods','','no', '', 'Foods, Herbs & Nutrients','circuits'], 

			['Herbs','','no','', 'Foods, Herbs & Nutrients','circuits'], 

			['Nutrients','','no', '', 'Foods, Herbs & Nutrients','circuits'], 

			['Dehydration','', 'no', '', 'Lifestyle & Nutrition','dehydration'], 

			['Magnertic Field','', 'no', '', 'Lifestyle & Nutrition','circuits'], 

			['Sleep','', 'no', '',  'Lifestyle & Nutrition','sleep'], 

			['Color Deficiency','', 'no', '',  'Lifestyle & Nutrition','circuits'], 

			['Adjunctive Therapy','', 'no', '', 'Outside Needs','circuits'], 

			['Energy Techniques','','no','', 'Outside Needs','circuits'], 

			['Energy Work','','no','','Outside Needs','circuits'], 

			['Body Work', '', 'no', '', 'Physical Needs','circuits'],
			
			['Martial Arts', '','no', '', 'Exercise','circuits'], 

			['Movement Therapy', '', 'no', '', 'Exercise','circuits'], 

			['Sports', '', 'no', '', 'Exercise','circuits'], 

			['Muscle Training', '', 'no', '', 'Exercise','circuits'], 

			['Aerobics', '', 'no', '','Exercise','circuits'], 

			['Stress Management', '', 'no', '', 'Mental & Emotional Fitness','circuits'], 

			['Mental Repatterning', '', 'no', '', 'Mental & Emotional Fitness','circuits'], 

			['Spiritual Nutrition', '', 'no', '', 'Mental & Emotional Fitness','circuits'], 

			['Mental Rejuvenation', '', 'no', '', 'Mental & Emotional Fitness','circuits'], 

			['Mental Fitness Therapies', '', 'no', '', 'Mental & Emotional Fitness','circuits'],

			//Circuite and Systems

			['Bladder','','5', '', 'Organs','circuits'], 

			['Colon','','3', '', 'Organs','circuits'],
			
			['Gallbladder','','4','', 'Organs','circuits'], 

			['Heart','', '1','', 'Organs','circuits'],
			
			['IlleoCecal Valve','', '1','', 'Organs','circuits'], 

			['Kidneys','', '5', '','Organs','circuits'], 

			['Liver','', '4', '', 'Organs','circuits'], 

			['Lungs','', '3', '', 'Organs','circuits'], 

			['Small Intestine','','1', '', 'Organs','circuits'],
			
			['Spleen','','2','', 'Organs','circuits'], 

			['Stomach','', '2','', 'Organs','circuits'],
			
			['Uterus','', '6', '', 'Organs','circuits'],

			['Adrenals','', '6', '', 'Glands','circuits'], 

			['Hypothalmus','','no', '','Glands','circuits'], 

			['Ovaries','','6', '', 'Glands','circuits'], 

			['Pancreas','','6', '', 'Glands','circuits'], 

			['Pineal Glands','','no','', 'Glands','circuits'], 

			['Parathyroid Glands','','6','','Glands','circuits'], 

			['Pituitary Gland','','no','','Glands','circuits'], 

			['Prostate','','6','','Glands','circuits'],
			
			['Testciles','','6','','Glands','circuits'], 

			['Thymus','','6','','Glands','circuits'],
			
			['Thyroid','','6','','Glands','circuits'],
					
		    ['Crown Chakra (Sahasrara)','The Crown chakra relates to higher
				consciousness, enlightenment, and inspiration. Located above the
				crown of the head, this Head Center chakra is related to the power of
				consciousness and corresponds with the universal self and
				divine reality.','no', '', 'Chakras','circuits'],             

			['Brow Chakra (The Third Eye Chakra, Ajna)','As the sixth of the body\’s 
				seven chakras, the Third Eye lies between the eyebrows and is the only 
				chakra in the mental body. As such, it’s the center of command and 
				corresponds with intuition, insight, and psychic awareness. 
				Furthermore, the Third Eye chakra affords us the ability to connect 
				to elements beyond the five senses and controls the individual self and 
				power of inner perception.','no','','Chakras','circuits'],

			['Throat Chakra (Vishuddha)','Located in the throat area, this chakra is the
				energy center for creativity, speech, individual needs, and will. 
				It\’s known for its purity and relates to the power of communication by
				connecting with the ether, the respiratory system, and higher intelligence. 
				This is the second chakra in the Emotional Body.','no','','Chakras','circuits'],             

			['Heart Chakra (Anahata)','As one of two energy centers in the Emotional Body, 
				the Heart chakra lies in the middle of the chest and is responsible for 
				emotions and feelings like love, forgiveness, compassion, and self-esteem. 
				Not surprisingly, the heart triggers emotions of love and devotion and 
				corresponds with the element air.','no','','Chakras','circuits'],             

			['Solar Plexus Chakra (The Navel Chakra –Manipura)','As the last energy center 
				in the physical body, the Navel chakra is considered the Solar Plexus and 
				relates to the element of fire. The chakra, also known as the City of Gems, 
				closely corresponds with the emotion anger and is responsible for energies 
				like desire, vitality, inner strength, and self-control. Lastly, the Navel 
				chakra relates to the element of fire and governs the digestive system and ego
				impulse.','no','','Chakras','circuits'],             

			['Sacral Chakra (Svadhisthana)', 'Located above the genitals, the Sacral chakra 
				is referred to as the Abode of Kundalini, or the center of energy that is yet 
				to realize its potential. Because of its location, the Sacral chakra relates 
				to the water element and controls emotions that center around relationships,
				sexuality, and intimacy such as desire.', 'no', '', 'Chakras','circuits'],

			['Root Chakra (Muladhara)','The Root chakra lies below the genitals and is the
				first of three physical body energy centers. As the center for survival, security, 
				and primal energy, the Root chakra is connected to the Earth Element and relates 
				to your natural survival instincts and emotions, especially fear.','no','','Chakras','circuits'],
					
			['Descending Aorta','', 'no', '', 'Abdominal Vessels','circuits'], 

			['Inferior Vena Cava','', 'no', '', 'Abdominal Vessels','circuits'], 

			['Right External Iliac Vein','', 'no', '', 'Abdominal Vessels','circuits'], 

			['Left External Ilian Vein','', 'no', '', 'Abdominal Vessels','circuits'], 

			['Right External Iliac Artery','', 'no', '', 'Abdominal Vessels','circuits'], 

			['Left External Iliac Artery','', 'no', '', 'Abdominal Vessels','circuits'],

			['Anterior Facial Artery','','no','','Face and Neck Vessels','circuits'],
					
			['Internal Jugular Vein','','no','','Face and Neck Vessels','circuits'],
					
			['External Jugular Vein','','no','','Face and Neck Vessels','circuits'],
					
			['Carotid Artery','','no','','Face and Neck Vessels','circuits'], 

			['Vertebral Artery','','no','','Face and Neck Vessels','circuits'],

			['Superior Sagittal Sinus','','no','','Skull Interior Vessels','circuits'],
			
			['Straight Sinus','','no','','Skull Interior Vessels','circuits'], 

			['Inferior Sagittal Sinus','','no','','Skull Interior Vessels','circuits'],

			['Right Popliteal Artery','','no','','Lower Limb Vessels','circuits'], 

			['Great Saphenous Vein','','no','','Lower Limb Vessels','circuits'], 

			['Femoral Artery','','no','','Lower Limb Vessels','circuits'], 

			['Anterior Tibial Artery','','no','','Lower Limb Vessels','circuits'], 

			['Posterior Tibial Artery','','no','','Lower Limb Vessels','circuits'], 

			['Peroneal Vein','','no','','Lower Limb Vessels','circuits'],

			['Left Subclavian Artery','','no','','Thoracic Circulation','circuits'], 

			['Right Subclavian Artery','','no','','Thoracic Circulation','circuits'], 

			['Intercostal Arteries','','no','','Thoracic Circulation','circuits'], 

			['Aortic Arch','','no','','Thoracic Circulation','circuits'], 

			['Left Pulmonary Artery','','no','','Thoracic Circulation','circuits'], 

			['Rightt Pulmonary Artery','','no','','Thoracic Circulation','circuits'],

			['Mitral Valve','','no','','Heart Circulation','circuits'], 

			['Pulmonary Valve','','no','','Heart Circulation','circuits'], 

			['Tricuspid Valve','','no','','Heart Circulation','circuits'], 

			['Aortic Valve','','no','','Heart Circulation','circuits'], 

			['Cornoary Arteries','','no','','Heart Circulation','circuits'],

			['Brachial Artery','','no','','Upper Limb Vessels','circuits'], 

			['Radial Artery','','no','','Upper Limb Vessels','circuits'], 

			['Basilar Vein','','no','','Upper Limb Vessels','circuits'],

			['Tonuge','','no','','Digestive System','circuits'], 

			['Stomach Sphincters','','no','','Digestive System','circuits'], 

			['Stomach','', '2','', 'Digestive System','circuits'], 

			['Small Intestine','','1','', 'Digestive System','circuits'], 

			['Pancreas','', '6', '', 'Digestive System','circuits'], 

			['Liver','', '4', '', 'Digestive System','circuits'], 

			['IlleoCecal Valve','', '1','', 'Digestive System','circuits'], 

			['Gallbladder','','4','', 'Digestive System','circuits'],
			
			['Esophagus','','no','', 'Digestive System','circuits'], 

			['Colon','','3', '','Digestive System','circuits'],

			['Kidneys','', '5', '', 'Endocrine System','circuits'], 

			['Parathyroid Glands','','6','','Endocrine System','circuits'], 

			['Pancreas','', '6', '','Endocrine System','circuits'], 

			['Thyroid','','6','','Endocrine System','circuits'],
			
			['Ovaries','','6', '', 'Endocrine System','circuits'],
			
			['Testciles','','6','','Endocrine System','circuits'], 

			['Adrenals','', '6', '','Endocrine System','circuits'], 

			['Pituitary Gland','','no','','Endocrine System','circuits'], 

			['Pineal Glands','','no','', 'Endocrine System','circuits'],
			
			['Hypothalmus','','no', '', 'Endocrine System','circuits'],

			['Spleen','','2','', 'Lymphatic System','circuits'],
			
			['Thymus','','6','','Lymphatic System','circuits'], 

			['Lymph Nodes','','no','','Lymphatic System','circuits'], 

			['Peyers Patches','','no','','Lymphatic System','circuits'], 

			['Adenoids and Tonsils','','no','','Lymphatic System','circuits'],
			
			['Appendix','','no','','Lymphatic System','circuits'], 

			['Bone Marrow','','no','','Lymphatic System','circuits'],

			['Parasympathetic Nervous System','','no','','Peripheral Nervous System','circuits'], 

			['Sympathetic Nervous System','','no','','Peripheral Nervous System','circuits'], 

			['Enteric Nervous System','','no','','Peripheral Nervous System','circuits'],

			['Spinal cord','','no','','Central Nervous System','circuits'],
			
			['Eyes','','no','','Central Nervous System','circuits'],

			['Hypothalmus','','no', '', 'Brain','circuits'], 

			['Pineal Glands','','no','','Brain','circuits'], 

			['Pituitary Gland','','no','','Brain','circuits'], 

			['Thalamus Gland','','no','','Brain','circuits'], 

			['Cerebellum','','no','','Brain','circuits'],

			['Temporal Lobe','','no','', 'Cerebrum','circuits'], 

			['Occipital Lobe','','no','', 'Cerebrum','circuits'], 

			['Frontal lobe','','no','','Cerebrum','circuits'], 

			['Parietal lobe','','no','', 'Cerebrum','circuits'],

			['Testicle','','no','','Male','circuits'], 

			['Prostate','','no','','Male','circuits'], 

			['Vas Deferens','','no','','Male','circuits'], 

			['Seminal Vesicle','','no','','Male','circuits'],
			
			['Scrotum','','no','','Male','circuits'], 

			['Bulbo-urethral gland','','no','','Male','circuits'], 

			['Epididymus','','no','','Male','circuits'],
			
			['Prostate','','6','','Male','circuits'], 

			['Seminal Vesicle','','no','','Penis','circuits'],
			
			['Glans Penis','','no','','Penis','circuits'], 

			['Corpus Cavernosum','','no','','Penis','circuits'], 

			['Corpus Spongiosum','','no','','Penis','circuits'],

			['Uterus','', '6', '', 'Female','circuits'], 
			['Ovaries','','6', '', 'Female','circuits'],
			['Fallopian Tube','','no','', 'Female','circuits'], 
			['Mammary Glands','','no','','Female','circuits'],

			['Alveoli','','no','','Respiratory System','circuits'],
			['Bronchioles','','no','','Respiratory System','circuits'], 
			['Bronchial Tubes','','no','','Respiratory System','circuits'],
			['Lungs','','no','','Respiratory System','circuits'],
			['Nose','','no','','Respiratory System','circuits'],
			['Trachea','','no','','Respiratory System','circuits'],

			['Transverse Abdominus','','no','','Abdominal Muscles','circuits'], 
			['Rectus Abdominus','','no','','Abdominal Muscles','circuits'],
			['Pyramidalis','','no','','Abdominal Muscles','circuits'], 
			['Transverse Fascia','','no','','Abdominal Muscles','circuits'], 
			['Inguinal Ligament','','no','','Abdominal Muscles','circuits'], 
			['External Oblique','','no','','Abdominal Muscles','circuits'], 
			['Internal Oblique','','no','','Abdominal Muscles','circuits'],

			['Anterior Neck Muscles','','no','','Neck Muscles','circuits'], 
			['Posterior Neck Muscles','','no','','Neck Muscles','circuits'],

			['Deep Head Muscles','','no','','Head Muscles','circuits'], 
			['Superficial Head Muscles','','no','','Head Muscles','circuits'],

			['Serratus Anterior','','no','', 'Thoracic Muscles','circuits'], 
			['Intercostal Muscles','','no','', 'Thoracic Muscles','circuits'], 
			['Diaphragm','','no','','Thoracic Muscles','circuits'], 
			['Pectoralis Minor','','no','', 'Thoracic Muscles','circuits'], 
			['Pectoralis Major','','no','', 'Thoracic Muscles','circuits'],

			['Ilicostalis','','no','', 'Back Muscles','circuits'],
			['Longissimus','','no','', 'Back Muscles','circuits'],    
			['Quadratus Lumborum','','no','', 'Back Muscles','circuits'],     
			['Spinalis','','no','', 'Back Muscles','circuits'],
			['Serratus Posterior Inferior','','no','', 'Back Muscles','circuits'],
			['Serratus Posterior Superior','','no','', 'Back Muscles','circuits'],
			['Rhomboid Major','','no','', 'Back Muscles','circuits'],     
			['Rhomboid Minor','','no','', 'Back Muscles','circuits'],     
			['Latussmus Dorsi','','no','', 'Back Muscles','circuits'],    
			['Trapezius','','no','','Back Muscles','circuits'],

			['Forearm','','no','','Upper Limb Muscles','circuits'], 
			['Hand Muscles','','no','','Upper Limb Muscles','circuits'], 
			['Upper Arm Muscles','','no','','Upper Limb Muscles','circuits'], 
			['Shoulder Muscles','','no','','Upper Limb Muscles','circuits'],

			['Hip Muscles','','no','','Lower Limb Muscles','circuits'], 
			['Thigh Muscles','','no','','Lower Limb Muscles','circuits'],         
			['Leg Muscles','','no','','Lower Limb Muscles','circuits'],   
			['Foot Muscles','','no','','Lower Limb muscles','circuits'],

			['Uretha','','no','', 'Urinary System','circuits'], 
			['Bladder','','no','', 'Urinary System','circuits'], 
			['Ureters','','no','', 'Urinary System','circuits'],
			['Kidneys','','5','', 'Urinary System','circuits'],

			['Nails','','no','', 'Integumentary System','circuits'],
			['Hair','','no','','Integumentary System','circuits'],

		    ['Epidermis','The outermost part of skin that forms a protection
				against the external environment.  Consists of many layers of
				epithelial calls that replace themselves about every tow or two 
				and a half months','no','', 'Skin','circuits'],             
			['Dermis','The middle layer of the skin, where sweat glands and hair 
				foolicles origniate.  It contains connective tissues and blood vessels',
				'no','', 'Skin','circuits'],             

			['Hypodermis','The deepest layer of skin.  It attaches to bone or mecle and 
				hosues fat deposits (adiose tissue)','no','','Skin','circuits'],

			['Taiyin Lung Meridan of Hand','','yes', '', 'The Twelve Standard Meridians','circuits'], 
			['Shaoyin Heart Meridan of Hand','','yes', '', 'The Twelve Standard Meridians','circuits'], 
			['Jueyin Pericardium Meridan of Hand','','yes', '', 'The Twelve Standard Meridians','circuits'], 
			['Shaoyang Sanjiao (Tiple Warmer) Meridan of Hand','','yes', '', 'The Twelve Standard Meridians','circuits'], 
			['Taiyang Small Intestine Meridan of Hand','','yes', '', 'The Twelve Standard Meridians','circuits'], 
			['Yangming Large Intestine Meridan of Hand','','yes', '', 'The Twelve Standard Meridians','circuits'], 
			['Taiyin Spleen Meridan of Foot','','yes', '','The Twelve Standard Meridians','circuits'], 
			['Shaoyin Kidney Meridan of Foot','','yes', '', 'The Twelve Standard Meridians','circuits'], 
			['Jueyin Liver Meridan of Foot','','yes', '', 'The Twelve Standard Meridians','circuits'],
			['Shaoyang Gallbladder Meridan of Foot','','yes', '', 'The Twelve Standard Meridians','circuits'], 
			['Taiyang Bladder Meridan of Foot','','yes','', 'The Twelve Standard Meridians','circuits'], 
			['Yangming Stomach Meridan of Foot','','yes', '', 'The Twelve Standard Meridians','circuits'],

			['Yang Heel Meridian (Yang Qia Mai)','','yes', '', 'The Eight Extraordinary Meridians','circuits'], 
			['Conception Meridian (Ren Mai)','','yes', '', 'The Eight Extraordinary Meridians','circuits'],
			['Governing Meridian (Du Mai)','','yes', '', 'The Eight Extraordinary Meridians','circuits'], 
			['Penetrating Meridian (Chong Mai)','','yes', '', 'The Eight Extraordinary Meridians','circuits'], 
			['Yin Linking Meridian (Yin Wei Mai)','','yes', '', 'The Eight Extraordinary Meridians','circuits'], 
			['Yang Linking Meridian (Yang Wei Mai)','','yes', '', 'The Eight Extraordinary Meridians','circuits'], 
			['Girdle Meridian (Dai Mai)','','yes', '', 'The Eight Extraordinary Meridians','circuits'], 
			['Yin Heel Meridian (Yin Qia Mai)','','yes', '', 'The Eight Extraordinary Meridians','circuits'],

			['Facial Bones','', 'no', '', 'Cranial Bones','circuits'], 
			['Middle Ear Bones','', 'no', '', 'Cranial Bones','circuits'], 
			['Ethmoid Bone','', 'no', '','Cranial Bones','circuits'], 
			['Sphenoid Bone','', 'no', '', 'Cranial Bones','circuits'],
			['Frontal Bone','', 'no', '', 'Cranial Bones','circuits'], 
			['Parietal Bones','','no', '', 'Cranial Bones','circuits'], 
			['Temporal Bones','', 'no', '', 'Cranial Bones','circuits'], 
			['Occipital Bone','', 'no', '', 'Cranial Bones','circuits'],

			['Inferior Nasal Conchae Bones','', 'no', '', 'Facial Bones','circuits'], 
			['Vomer Bone','', 'no', '', 'Facial Bones','circuits'], 
			['Lacrimal Bones','', 'no', '','Facial Bones','circuits'], 
			['Hyoid Bone','', 'no', '', 'Facial Bones','circuits'], 
			['Nasal Bones','', 'no', '', 'Facial Bones','circuits'], 
			['Zygomatic Bones','', 'no','', 'Facial Bones','circuits'], 
			['Palatine Bones','', 'no', '', 'Facial Bones','circuits'], 
			['Maxilla Bones','', 'no', '', 'Facial Bones','circuits'], 
			['Mandible Bone','', 'no', '', 'Facial Bones','circuits'],

			['Tensor Tympani','', 'no', '', 'Middle Ear Bones','circuits'], 
			['Malleus','','no', '', 'Middle Ear Bones','circuits'], 
			['Incus','', 'no', '', 'Middle Ear Bones','circuits'], 
			['Stapedius','', 'no', '', 'Middle Ear Bones','circuits'],
			['Labyrinth','', 'no', '', 'Middle Ear Bones','circuits'], 
			['Stapes','', 'no','', 'Middle Ear Bones','circuits'], 
			['Tympanic Cavity','', 'no', '', 'Middle Ear Bones','circuits'], 
			['Eustachian Tube','', 'no', '', 'Middle Ear Bones','circuits'],
			['Tympanic Membrane (ear drums','', 'no', '', 'Middle Ear Bones','circuits'],
			['Auditory Canal','', 'no', '', 'Middle Ear Bones','circuits'],

			['Manubrium','', 'no', '', 'Thoracic Cage','circuits'], 
			['Sternum','', 'no', '','Thoracic Cage','circuits'], 
			['Xyphoid Process','', 'no', '', 'Thoracic Cage','circuits'],
			
			['1st rib','', 'no', '', 'True Ribs','circuits'], 
			['2nd rib','', 'no', '', 'True Ribs','circuits'], 
			['3rd rib','', 'no', '', 'True Ribs','circuits'], 
			['4th rib','', 'no', '', 'True Ribs','circuits'], 
			['5th rib','', 'no', '', 'True Ribs','circuits'], 
			['6th rib','', 'no', '', 'True Ribs','circuits'], 
			['7th rib','', 'no', '', 'True Ribs','circuits'], 
			
			['8th rib','', 'no', '', 'False Ribs','circuits'], 
			['9th rib','', 'no', '', 'False Ribs','circuits'], 
			['10th rib','', 'no', '', 'False Ribs','circuits'], 
			['11th rib','', 'no','', 'False Ribs','circuits'], 
			['12th rib','', 'no', '', 'False Ribs','circuits'],

			['C1(Atlas)','','no', '', 'Cervical Vertebrae','circuits'], 
			['C2(Axis)','','no','', 'Cervical Vertebrae','circuits'], 
			['C3','','no', '', 'Cervical Vertebrae','circuits'],
			['C4','','no', '', 'Cervical Vertebrae','circuits'], 
			['C5','','no', '', 'Cervical Vertebrae','circuits'], 
			['C6','','no', '', 'Cervical Vertebrae','circuits'], 
			['C7','','no','', 'Cervical Vertebrae','circuits'],

		    ['T1','Connects to: Arms from the elbows down, hands wrists and
				fingers: esophagus and trachea, heart', 'no', '', 'Thoracic Vertebrae','circuits'],             
			['T2','Connects to: Hear, its valves and coronary arteries; lungs 
				broncial tubes','no', '', 'Thoracic Vertebrae','circuits'],             
			['T3','Connects to: Lungs, bronchial tubes, pleura, chest, breast, 
				heart','no','','Thoracic Vertebrae','circuits'],             
			['T4','Connects to: Gallbladder, common duct, heart, lungs, bronchial 
				tubes','no','','Thoracic Vertebrae','circuits'],             
			['T5','Connects to: Liver, solar plexus, circulation, heart, esophagus, 
				stomach','no', '', 'Thoracic Vertebrae','circuits'],
			['T6','Connects to: Stomach, esophagus, peritoneum, liver, duodenum',
				'no', '','Thoracic Vertebrae','circuits'],             
			['T7','Connects to: Kidneys, appendix, testes, ovaries, uterus, adrenal 
				cortex, spleen, pancreas, large intestine', 'no', '', 'Thoracic Vertebrae','circuits'],             
			['T8','Connects to: Spleen, stomach, liver, pancreas, gallbladder, adrenal 
				cortex, small intestine, pyloric valve', 'no', '', 'Thoracic Vertebrae','circuits'],
			['T9','Connects to: Adrenal cortex, pancreas, spleen, gallbladder, overies,
				uterus, small intestine', 'no', '', 'Thoracic Vertebrae','circuits'],
			['T10','Connects to: Kidneys, appendix, testes, ovaries, uterus, adrenal cortex,
				splen, panreas, large intestine', 'no', '', 'Thoracic Vertebrae','circuits'],             
			['T11','Connects to: Kidneys, ureters, large intestine, urinary bladder, adrenal 
				medulla, adrenial cortex, uterus, ovaries, ileocecal valve','no', '', 'Thoracic Vertebrae','circuits'],
			['T12','Connects to: Small intestine, lymph circulation, large intestine, urinary bladder, 
				uterus, kidneys, ilececal valve', 'no', '', 'Thoracic Vertebrae','circuits'],

			['L1','Connects to: Large intestine, inguinal rings, uterus','no', '', 'Lumbar Vertebrae','circuits'], 
			['L2','Connects to: Appendix, abdomen,Upper leg, urinary bladder','no', '', 'Lumbar Vertebrae','circuits'],
			['L3','Connects to: Sex organs, uterus, bladder, knee, prostate, large intestine','no', '', 
				'Lumbar Vertebrae','circuits'], 
			['L4','Connects to: Prostate gland, muscles of Lower back, sciatic nerve','no', '', 'Lumbar Vertebrae','circuits'], 
			['L5','Connects to: Lower legs, ankles, feet, prostate','no', '', 'Lumbar Vertebrae','circuits'],

		    ['Sacrum','Connects to: Hip bones, buttocks, rectrum, sex organs, genitallia, urinary bladder, ureter, 
		    	prostate', 'no', '', 'Vertebral Column','circuits'],             
		    ['Coccyx','Connects to: Rectum, anus','no', '', 'Vertebral Column','circuits'],

			['Ulna Bones','','no','','Upper Limbs','circuits'], 
			['Radius Bones','','no','','Upper Limbs','circuits'], 
			['Clavicle Bones','','no','','Upper Limbs','circuits'], 
			['Scapula bone','','no','','Upper Limbs','circuits'], 
			['Humerus bones','','no','', 'Upper Limbs','circuits'],

			['Harmate', '', 'no', '', 'Wrist Bones','circuits'], 
			['Capitate', '', 'no', '','Wrist Bones','circuits'], 
			['Trapezoid', '', 'no', '', 'Wrist Bones','circuits'],
			['Trapezium', '', 'no', '', 'Wrist Bones','circuits'], 
			['Scaphoid', '', 'no', '','Wrist Bones','circuits'], 
			['Lunate', '', 'no', '', 'Wrist Bones','circuits'],
			['Triquetrum', '', 'no', '', 'Wrist Bones','circuits'], 
			['Pisiform', '', 'no','', 'Wrist Bones','circuits'],

			['Distral Phalange Bones', '', 'no', '', 'Hand Bones','circuits'], 
			['Medial Phalange Bones', '', 'no', '', 'Hand Bones','circuits'], 
			['Metcarpal Bones','', 'no', '', 'Hand Bones','circuits'], 
			['Proximal Phalange Bones', '', 'no','', 'Hand Bones','circuits'],

			['Tibia','','no','','Leg','circuits'], 
			['Femur','','no','','Leg','circuits'],
			['Fibula','','no','','Leg','circuits'], 
			['Patella','','no','','Leg','circuits'],
			['Meniscus','','no','','Leg','circuits'],

			['Iliium','','no','','Pelvis','circuits'], 
			['Ischium','','no','','Pelvis','circuits'],
			['Pubis','','no','','Pelvis','circuits'],

			['Tarsal Bones','','no','','Foot','circuits'],    
			['Proximal Phalanges','','no','','Foot','circuits'], 
			['Distal Phalanges','','no','','Foot','circuits'], 
			['Medial Phalanges','','no','','Foot','circuits'], 
			['Metatarsal Bones','','no','','Foot','circuits'],

		    ['Tendons','Tendons connect muscles to bone, and are found on both
				ends of every muscle in the body', 'no','','Connective Tissue','circuits'],
			['Ligaments','Ligaments connect bone to bone and are found throughout 
				the body','no','', 'Connective Tissue','circuits'],             
			['Fascia','Connective tissue that surrounds and protects all the 
				other tissues of the body.','yes','', 'Connective Tissue','circuits'],

			['T1-T2','','no','', 'Thoracic Disks Upper','circuits'],
			['T2-T3','','no','','Thoracic Disks Upper','circuits'],
			['T3-T4','','no','','Thoracic Disks Upper','circuits'],
			['T4-T5','','no','','Thoracic Disks Upper','circuits'],
			['T5-T6','','no','','Thoracic Disks Upper','circuits'],
			['T6-T7','','no','','Thoracic Disks Upper','circuits'],
			['T7-T8','','no','','Thoracic Disks Lower','circuits'],
			['T8-T9','','no','','Thoracic Disks Lower','circuits'],
			['T9-T10','','no','','Thoracic Disks Lower','circuits'],
			['T0-T11','','no','','Thoracic Disks Lower','circuits'],
			['T11-T12','','no','','Thoracic Disks Lower','circuits'],
			['T12-L1','','no','','Thoracic Disks Lower','circuits'],
			
			['L1-L2','','no','','Lumbar Disks','circuits'], 
			['L2-L3','','no','','Lumbar Disks','circuits'], 
			['L3-L4','','no','','Lumbar Disks','circuits'],
			['L4-L5','','no','','Lumbar Disks','circuits'], 
			['L5-S1','','no','','Lumbar Disks','circuits'], 

			['C2-C3','','no','','Cervical Disks','circuits'],
			['C3-C4','','no','','Cervical Disks','circuits'], 
			['C4-C5','','no','','Cervical Disks','circuits'], 
			['C5-C6','','no','','Cervical Disks','circuits'],
			['C6-C7','','no','','Cervical Disks','circuits'], 
			['C7-T1','','no','','Cervical Disks','circuits'],

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
			$diagnosis->locator_id=$locator_id;  
	        $diagnosis->save();             
	        $count--;     
	    } 
	} 
}