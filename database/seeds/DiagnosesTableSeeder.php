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
				destructive behaviors.','no', '', 'Energy','ahe/1/createt'],

			['Idea Allergy', 'Allergies are simply trapped energies in the body that create
				a negative reaction to whatever it is you\'re allergic to. As you can be
				allergic to a substance or a food, you can be allergic to thoughts or ideas,
				which will typically cause emotional reactions, and  avoidance or sabotage
				behaviors. Allergies to ideas are often created during a difficult emotional
				time where you had negative feelings about that particular', 'yes', '',
				'Allergy/Intolerance',''],

			['Physical Allergy', 'An energy that develops from changes in the way the energy 
				field reacts to the energy of something (i.e. a particle food, hair, dust)', 
				'yes', '', 'Allergy/Intolerance',''],

			['Intolerance', 'An energy that causes the body to have a negative reaction to 
				food or other elements.', 'no','', 'Allergy/Intolerance',],             

			['Trapped Emotion', 'Harmful emotional energies from negative past events that are 
				stored in the body. They can cause depression, anxiety; they can block people 
				from love and happiness and make them feel disconnected from others.', 
				'yes','', 'Emotional',''],

			['Heart-Wall', "Heart Wall is made of layers of trapped emotions that have been
				designated as a buffer to protect your heart from being broken. Your heart-wall
				is literally made of trapped energies, but your subconscious has assigned it a
				physical material and thickness, which are imaginative, but symbolic of the
				level of protection your heart has needed during the course of your life. \r
				Heart Wall Emotions – are trapped emotions (harmful emotional energies from
				negative past events that are stored in the body) used by the subconscious build
				a barrier of protection around the heart.", 'yes','', 'Emotional',''],

			['Emotional Resonance', 'A resonance develops during an intense emotional
				experience that leaves the body &quot;ringing&quot; with the frequency of that 
				emotional vibration. Resonances often affect the whole body, as opposed to a 
				trapped emotion which is smaller and more acute, but resonances do cause similar 
				emotional difficulties.', 'yes','','Emotional',''],             

			['Broadcast Message', 'An energy that is continually sent out from the body to 
				other people, who receive it subconsciously. It can influence ability to form 
				and keep relationships, as well as attract negativity, wrong people, etc.', 
				'no','', 'Mental',''],             

			['Despair Anchor', 'This was the energy of a thought that was stuck in your 
				energy field. A negative statement perceived as true that prompting your 
				subconscious mind to verify or fulfill the &quot;truth&quot; of that thought.', 
				'no','','Mental',''],             

			['Images', 'The trapped energy of a “picture in the mind”. The subconscious will 
				attempt to fulfill this image, and will direct (or misdirect) behavior to make 
				sure this image “comes true”. An image often interferes with goals and relationships, 
				depending on what the image is.', 'no','', 'Mental',''],             

			['Memory Field', 'The energy of memories stored in the energy field often in front of a 
				person. They are present when memories are traumatic and often recalled. That is why it
				makes if it difficult to move forward in life.', 'no','', 'Mental',''],

			['No Will to Live', 'An energy that becomes trapped when life overwhelms us and
				we lose the desire to live.', 'no', '', 'Mental',''],             

			['Need For T3 Session', '', 'no','', 'Mental',''],             

			['Will to Die', 'A energy that develops from wishing for death, either as an escape 
				or from self-abusive thoughts.', 'no','', 'Mental',''],

			['Post-Hypnotic Suggestion', 'A negative statement became stuck in the subconscious 
				mind during a time when people are in a semi-hypnotic state and their mind was open to
				suggestion. This often happens when listening to repetitive music, playing video
				games or watching some other kind of entertainment. Suggestions like this can
				come from negative vibrations in the media itself or it can also come from dark entities 
				who take advantage of one’s semi-hypnotic state. A Post Hypnotic Suggestion is perceived 
				as a truth by the subconscious mind, which will then seek to verify or fulfill it by creating
				emotions and behaviors accordingly.', 'no','', 'Offensive',''],

			['Saboteur', 'These are weapons made of pure, invisible energy that are either
				self-inflicted or inflicted by another person. These are often a manifestation of 
				someone\'s negative feelings', 'no', '', 'Offensive',''],

			['Entity', "Dark spirit(s) that exerts a negative influence on a person's  body
				and energy field.", 'no','', 'offensive',''],             
			
			['Curses', 'A very negative energy that has been deliberately placed into a person\’s 
			energy field by another person or entity with a more nefarious purpose than
			merely causing pain.', 'no','', 'Offensive',''],             

			['Inflamation', 'An energy that indicates the body is trying to heal, but that the 
				healing cycles have been stopped/blocked from progressing.  When this energy
				is cleared, the healing cycle is restarted and as a result new or additional
				inflammation can be felt.', 'no','', 'Post-Traumatic',''],             

			['Miasm', 'An inherited distortion of the energy field from suppressed 
				disease that occurred during an ancestor’s life. It influences the balance
				of body and mind.', 'no','', 'Post-Traumatic',''],             

			['Physical Trauma', 'An energy that occurs when the body is under extreme or 
				sudden physical stress. Can also be from emotional trauma or event or extreme 
				prolonged stress.', 'no','', 'Post-Traumatic',''],             

			['Psychich Trauma', 'Similar to a trapped emotion but must be identified as a 
				psychic trauma. When two or more emotions are felt simultaneously, 
				they become trapped into one sphere of energy.', 'yes','', 'Post-Traumatic',''],

		    //Pathogens
		    ['Parasites', 'Organisms grow, shelter, and feed in the body. There
				are many different strains, ranging from microscopic to large organisms. They
				steal nutrients, invade bodily tissues and create poisonous toxic waste. 
				85-90% of people in the U.S. have parasites not found in medical testing. 
				Herbal Corrective Suggestion:', 'no', '', 'Pathogen',''],

			['Fungal', 'The invasion and multiplication of opportunistic mold microorganisms
				that are not normally present within the body. Mold causes a
				wide variety of symptoms including joint and muscles pain,
				fatigue and brain fog.', 'no','', 'Pathogen',''],             
			
			['Bacterial', '', 'no','', 'Pathogen',''],             
			
			['Viral', '', 'no', '', 'Pathogen',''],
			
			['Mold', 'The invasion and multiplication of opportunistic mold microorganisms
				that are not normally present within the body. Mold causes a
				wide variety of symptoms including joint and muscles pain, fatigue and 
				brain fog.', 'no','', 'Pathogen' ],

			//Toxins
			['Heavy Metals','', 'no','', 'Toxins',''],             

			['EM Spectrum', '', 'no','', 'Toxins',''],


			//Nutrietion and LifeStyles
			['Stress Hormones','Adrenalin and Cortisol are considered the “stress hormones”
				of the body. They can be produced in excess during difficult
				times, becoming toxic to the body.', 'no','', 'Excesses',''],

			['Metabolic Waste', 'The by-products of all metabolic processes. If the organs
				of elimination are compromised in any way, or are working less
				efficiently than they should, metabolic waste can build up in
				the body.', 'no','', 'Excesses',''],             

			['Free Radicals', '', 'no','','Excesses',''],             

			['Six Pernicious Influences', '', 'no','', 'Excesses',''],

			['Environmental', 'Environmental Toxicity – toxins in the environment (outdoors,
				home, office, etc.) that are absorbed through the skin, lungs
				digestive system.', 'no', '','Chemicals',''],             

			['Food Additives', 'Our modern processed food is filled with all sorts of 
			chemicals that prolong shelf life, enhance flavor, etc. They interfere with 
			metabolic processes and create abnormal cells.', 'no', '', 'Chemicals',''],

			['Recreational Drugs', 'generally are very imbalancing to the energy field, and
				will often lead to weakness in the chakras as well as liver damage, kidney 
				damage, etc. Drugs can open the body to invasion by entities.', 'no','', 
				'Chemicals',''],             

			['Vaccination','','no', '','Medical',''],

			['Medications','','no', '', 'Medical',''],             

			['Cavitation','','no','','Dental',''],             

			['Root Canal', '', 'no', '', 'Dental',''],
			
			['Cavity','','no','','Dental',''],             

			['Fluoride','','no','','Dental',''],

			['Mercury Amalgam','','no','','Dental',''],             

			['pH Imbalance','pH measures the acidity or alkalinity of the body. A pH of 7.3 -7.5 
			is healthy for the human body. Most people have a too acid pH because of stress and 
				diet.','no', '', 'Lifestyle & Nutrition',''],             

			['PhysicalMalnutrition','A group of conditions generally related to poor quality or
				insufficient quantity of nutrient intake, absorption or utilization.','no','', 
				'Malnutrition',''],             

			['Spiritual Malnutrition','A condition caused by lack of spiritual “food”. It is a 
				need for more quiet, unhurried time. Around the world, roughly 53% of the 
				people are in a state of spiritual starvation, 32%  are in a state of spiritual
				malnutrition, only 15% of the people are spiritually well-nourished. Ways
				to increase spiritual nutrition include: prayer, mediation, inspiration
				readings, engaging in meaningful discussion, etc.','no','','Malnutrition',''],
					
			['Foods','','no', '', 'Foods, Herbs & Nutrients',''], 

			['Herbs','','no','', 'Foods, Herbs & Nutrients',''], 

			['Nutrients','','no', '', 'Foods, Herbs & Nutrients',''], 

			['Dehydration','', 'no', '', 'Lifestyle & Nutrition',''], 

			['Magnertic Field','', 'no', '', 'Lifestyle & Nutrition',''], 

			['Sleep','', 'no', '',  'Lifestyle & Nutrition',''], 

			['Color Deficiency','', 'no', '',  'Lifestyle & Nutrition',''], 

			['Adjunctive Therapy','', 'no', '', 'Outside Needs' ], 

			['Energy Techniques','','no','', 'Outside Needs',''], 

			['Energy Work','','no','','Outside Needs',''], 

			['Body Work', '', 'no', '', 'Physical Needs',''],
			
			['Martial Arts', '','no', '', 'Exercise',''], 

			['Movement Therapy', '', 'no', '', 'Exercise',''], 

			['Sports', '', 'no', '', 'Exercise',''], 

			['Muscle Training', '', 'no', '', 'Exercise',''], 

			['Aerobics', '', 'no', '','Exercise',''], 

			['Stress Management', '', 'no', '', 'Mental & Emotional Fitness',''], 

			['Mental Repatterning', '', 'no', '', 'Mental & Emotional Fitness',''], 

			['Spiritual Nutrition', '', 'no', '', 'Mental & Emotional Fitness',''], 

			['Mental Rejuvenation', '', 'no', '', 'Mental & Emotional Fitness',''], 

			['Mental Fitness Therapies', '', 'no', '', 'Mental & Emotional Fitness',''],

			//Circuite and Systems

			['Bladder','','5', '', 'Organs',''], 

			['Colon','','3', '', 'Organs',''],
			
			['Gallbladder','','4','', 'Organs',''], 

			['Heart','', '1','', 'Organs',''],
			
			['IlleoCecal Valve','', '1','', 'Organs',''], 

			['Kidneys','', '5', '','Organs',''], 

			['Liver','', '4', '', 'Organs',''], 

			['Lungs','', '3', '', 'Organs',''], 

			['Small Intestine','','1', '', 'Organs',''],
			
			['Spleen','','2','', 'Organs',''], 

			['Stomach','', '2','', 'Organs',''],
			
			['Uterus','', '6', '', 'Organs',''],

			['Adrenals','', '6', '', 'Glands',''], 

			['Hypothalmus','','no', '','Glands',''], 

			['Ovaries','','6', '', 'Glands',''], 

			['Pancreas','','6', '', 'Glands',''], 

			['Pineal Glands','','no','', 'Glands',''], 

			['Parathyroid Glands','','6','','Glands',''], 

			['Pituitary Gland','','no','','Glands',''], 

			['Prostate','','6','','Glands',''],
			
			['Testciles','','6','','Glands',''], 

			['Thymus','','6','','Glands',''],
			
			['Thyroid','','6','','Glands',''],
					
		    ['Crown Chakra (Sahasrara)','The Crown chakra relates to higher
				consciousness, enlightenment, and inspiration. Located above the
				crown of the head, this Head Center chakra is related to the power of
				consciousness and corresponds with the universal self and
				divine reality.','no', '', 'Chakras',''],             

			['Brow Chakra (The Third Eye Chakra, Ajna)','As the sixth of the body\’s 
				seven chakras, the Third Eye lies between the eyebrows and is the only 
				chakra in the mental body. As such, it’s the center of command and 
				corresponds with intuition, insight, and psychic awareness. 
				Furthermore, the Third Eye chakra affords us the ability to connect 
				to elements beyond the five senses and controls the individual self and 
				power of inner perception.','no','','Chakras',''],

			['Throat Chakra (Vishuddha)','Located in the throat area, this chakra is the
				energy center for creativity, speech, individual needs, and will. 
				It\’s known for its purity and relates to the power of communication by
				connecting with the ether, the respiratory system, and higher intelligence. 
				This is the second chakra in the Emotional Body.','no','','Chakras',''],             

			['Heart Chakra (Anahata)','As one of two energy centers in the Emotional Body, 
				the Heart chakra lies in the middle of the chest and is responsible for 
				emotions and feelings like love, forgiveness, compassion, and self-esteem. 
				Not surprisingly, the heart triggers emotions of love and devotion and 
				corresponds with the element air.','no','','Chakras',''],             

			['Solar Plexus Chakra (The Navel Chakra –Manipura)','As the last energy center 
				in the physical body, the Navel chakra is considered the Solar Plexus and 
				relates to the element of fire. The chakra, also known as the City of Gems, 
				closely corresponds with the emotion anger and is responsible for energies 
				like desire, vitality, inner strength, and self-control. Lastly, the Navel 
				chakra relates to the element of fire and governs the digestive system and ego
				impulse.','no','','Chakras',''],             

			['Sacral Chakra (Svadhisthana)', 'Located above the genitals, the Sacral chakra 
				is referred to as the Abode of Kundalini, or the center of energy that is yet 
				to realize its potential. Because of its location, the Sacral chakra relates 
				to the water element and controls emotions that center around relationships,
				sexuality, and intimacy such as desire.', 'no', '', 'Chakras' ],

			['Root Chakra (Muladhara)','The Root chakra lies below the genitals and is the
				first of three physical body energy centers. As the center for survival, security, 
				and primal energy, the Root chakra is connected to the Earth Element and relates 
				to your natural survival instincts and emotions, especially fear.','no','','Chakras',''],
					
			['Descending Aorta','', 'no', '', 'Abdominal Vessels',''], 

			['Inferior Vena Cava','', 'no', '', 'Abdominal Vessels',''], 

			['Right External Iliac Vein','', 'no', '', 'Abdominal Vessels',''], 

			['Left External Ilian Vein','', 'no', '', 'Abdominal Vessels',''], 

			['Right External Iliac Artery','', 'no', '', 'Abdominal Vessels',''], 

			['Left External Iliac Artery','', 'no', '', 'Abdominal Vessels',''],

			['Anterior Facial Artery','','no','','Face and Neck Vessels',''],
					
			['Internal Jugular Vein','','no','','Face and Neck Vessels',''],
					
			['External Jugular Vein','','no','','Face and Neck Vessels',''],
					
			['Carotid Artery','','no','','Face and Neck Vessels',''], 

			['Vertebral Artery','','no','','Face and Neck Vessels',''],

			['Superior Sagittal Sinus','','no','','Skull Interior Vessels',''],
			
			['Straight Sinus','','no','','Skull Interior Vessels',''], 

			['Inferior Sagittal Sinus','','no','','Skull Interior Vessels',''],

			['Right Popliteal Artery','','no','','Lower Limb Vessels',''], 

			['Great Saphenous Vein','','no','','Lower Limb Vessels',''], 

			['Femoral Artery','','no','','Lower Limb Vessels',''], 

			['Anterior Tibial Artery','','no','','Lower Limb Vessels',''], 

			['Posterior Tibial Artery','','no','','Lower Limb Vessels',''], 

			['Peroneal Vein','','no','','Lower Limb Vessels',''],

			['Left Subclavian Artery','','no','','Thoracic Circulation',''], 

			['Right Subclavian Artery','','no','','Thoracic Circulation',''], 

			['Intercostal Arteries','','no','','Thoracic Circulation',''], 

			['Aortic Arch','','no','','Thoracic Circulation',''], 

			['Left Pulmonary Artery','','no','','Thoracic Circulation',''], 

			['Rightt Pulmonary Artery','','no','','Thoracic Circulation',''],

			['Mitral Valve','','no','','Heart Circulation',''], 

			['Pulmonary Valve','','no','','Heart Circulation',''], 

			['Tricuspid Valve','','no','','Heart Circulation',''], 

			['Aortic Valve','','no','','Heart Circulation',''], 

			['Cornoary Arteries','','no','','Heart Circulation',''],

			['Brachial Artery','','no','','Upper Limb Vessels',''], 

			['Radial Artery','','no','','Upper Limb Vessels',''], 

			['Basilar Vein','','no','','Upper Limb Vessels',''],

			['Tonuge','','no','','Digestive System',''], 

			['Stomach Sphincters','','no','','Digestive System',''], 

			['Stomach','', '2','', 'Digestive System',''], 

			['Small Intestine','','1','', 'Digestive System',''], 

			['Pancreas','', '6', '', 'Digestive System',''], 

			['Liver','', '4', '', 'Digestive System',''], 

			['IlleoCecal Valve','', '1','', 'Digestive System',''], 

			['Gallbladder','','4','', 'Digestive System',''],
			
			['Esophagus','','no','', 'Digestive System',''], 

			['Colon','','3', '','Digestive System',''],

			['Kidneys','', '5', '', 'Endocrine System',''], 

			['Parathyroid Glands','','6','','Endocrine System',''], 

			['Pancreas','', '6', '','Endocrine System',''], 

			['Thyroid','','6','','Endocrine System',''],
			
			['Ovaries','','6', '', 'Endocrine System',''],
			
			['Testciles','','6','','Endocrine System',''], 

			['Adrenals','', '6', '','Endocrine System',''], 

			['Pituitary Gland','','no','','Endocrine System',''], 

			['Pineal Glands','','no','', 'Endocrine System',''],
			
			['Hypothalmus','','no', '', 'Endocrine System',''],

			['Spleen','','2','', 'Lymphatic System',''],
			
			['Thymus','','6','','Lymphatic System',''], 

			['Lymph Nodes','','no','','Lymphatic System',''], 

			['Peyers Patches','','no','','Lymphatic System',''], 

			['Adenoids and Tonsils','','no','','Lymphatic System',''],
			
			['Appendix','','no','','Lymphatic System',''], 

			['Bone Marrow','','no','','Lymphatic System',''],

			['Parasympathetic Nervous System','','no','','Peripheral Nervous System',''], 

			['Sympathetic Nervous System','','no','','Peripheral Nervous System',''], 

			['Enteric Nervous System','','no','','Peripheral Nervous System',''],

			['Spinal cord','','no','','Central Nervous System',''],
			
			['Eyes','','no','','Central Nervous System',''],

			['Hypothalmus','','no', '', 'Brain',''], 

			['Pineal Glands','','no','','Brain',''], 

			['Pituitary Gland','','no','','Brain',''], 

			['Thalamus Gland','','no','','Brain',''], 

			['Cerebellum','','no','','Brain',''],

			['Temporal Lobe','','no','', 'Cerebrum',''], 

			['Occipital Lobe','','no','', 'Cerebrum',''], 

			['Frontal lobe','','no','','Cerebrum',''], 

			['Parietal lobe','','no','', 'Cerebrum',''],

			['Testicle','','no','','Male',''], 

			['Prostate','','no','','Male',''], 

			['Vas Deferens','','no','','Male',''], 

			['Seminal Vesicle','','no','','Male',''],
			
			['Scrotum','','no','','Male',''], 

			['Bulbo-urethral gland','','no','','Male',''], 

			['Epididymus','','no','','Male',''],
			
			['Prostate','','6','','Male',''], 

			['Seminal Vesicle','','no','','Penis',''],
			
			['Glans Penis','','no','','Penis',''], 

			['Corpus Cavernosum','','no','','Penis',''], 

			['Corpus Spongiosum','','no','','Penis',''],

			['Uterus','', '6', '', 'Female',''], 
			['Ovaries','','6', '', 'Female',''],
			['Fallopian Tube','','no','', 'Female',''], 
			['Mammary Glands','','no','','Female',''],

			['Alveoli','','no','','Respiratory System',''],
			['Bronchioles','','no','','Respiratory System',''], 
			['Bronchial Tubes','','no','','Respiratory System',''],
			['Lungs','','no','','Respiratory System',''],
			['Nose','','no','','Respiratory System',''],
			['Trachea','','no','','Respiratory System',''],

			['Transverse Abdominus','','no','','Abdominal Muscles',''], 
			['Rectus Abdominus','','no','','Abdominal Muscles',''],
			['Pyramidalis','','no','','Abdominal Muscles',''], 
			['Transverse Fascia','','no','','Abdominal Muscles',''], 
			['Inguinal Ligament','','no','','Abdominal Muscles',''], 
			['External Oblique','','no','','Abdominal Muscles',''], 
			['Internal Oblique','','no','','Abdominal Muscles',''],

			['Anterior Neck Muscles','','no','','Neck Muscles',''], 
			['Posterior Neck Muscles','','no','','Neck Muscles',''],

			['Deep Head Muscles','','no','','Head Muscles',''], 
			['Superficial Head Muscles','','no','','Head Muscles',''],

			['Serratus Anterior','','no','', 'Thoracic Muscles',''], 
			['Intercostal Muscles','','no','', 'Thoracic Muscles',''], 
			['Diaphragm','','no','','Thoracic Muscles',''], 
			['Pectoralis Minor','','no','', 'Thoracic Muscles',''], 
			['Pectoralis Major','','no','', 'Thoracic Muscles',''],

			['Ilicostalis','','no','', 'Back Muscles',''],
			['Longissimus','','no','', 'Back Muscles',''],    
			['Quadratus Lumborum','','no','', 'Back Muscles',''],     
			['Spinalis','','no','', 'Back Muscles',''],
			['Serratus Posterior Inferior','','no','', 'Back Muscles',''],
			['Serratus Posterior Superior','','no','', 'Back Muscles',''],
			['Rhomboid Major','','no','', 'Back Muscles',''],     
			['Rhomboid Minor','','no','', 'Back Muscles',''],     
			['Latussmus Dorsi','','no','', 'Back Muscles',''],    
			['Trapezius','','no','','Back Muscles',''],

			['Forearm','','no','','Upper Limb Muscles',''], 
			['Hand Muscles','','no','','Upper Limb Muscles',''], 
			['Upper Arm Muscles','','no','','Upper Limb Muscles',''], 
			['Shoulder Muscles','','no','','Upper Limb Muscles',''],

			['Hip Muscles','','no','','Lower Limb Muscles',''], 
			['Thigh Muscles','','no','','Lower Limb Muscles',''],         
			['Leg Muscles','','no','','Lower Limb Muscles',''],   
			['Foot Muscles','','no','','Lower Limb muscles',''],

			['Uretha','','no','', 'Urinary System',''], 
			['Bladder','','no','', 'Urinary System',''], 
			['Ureters','','no','', 'Urinary System',''],
			['Kidneys','','5','', 'Urinary System',''],

			['Nails','','no','', 'Integumentary System',''],
			['Hair','','no','','Integumentary System',''],

		    ['Epidermis','The outermost part of skin that forms a protection
				against the external environment.  Consists of many layers of
				epithelial calls that replace themselves about every tow or two 
				and a half months','no','', 'Skin',''],             
			['Dermis','The middle layer of the skin, where sweat glands and hair 
				foolicles origniate.  It contains connective tissues and blood vessels',
				'no','', 'Skin',''],             

			['Hypodermis','The deepest layer of skin.  It attaches to bone or mecle and 
				hosues fat deposits (adiose tissue)','no','','Skin',''],

			['Taiyin Lung Meridan of Hand','','yes', '', 'The Twelve Standard Meridians',''], 
			['Shaoyin Heart Meridan of Hand','','yes', '', 'The Twelve Standard Meridians',''], 
			['Jueyin Pericardium Meridan of Hand','','yes', '', 'The Twelve Standard Meridians',''], 
			['Shaoyang Sanjiao (Tiple Warmer) Meridan of Hand','','yes', '', 'The Twelve Standard Meridians',''], 
			['Taiyang Small Intestine Meridan of Hand','','yes', '', 'The Twelve Standard Meridians',''], 
			['Yangming Large Intestine Meridan of Hand','','yes', '', 'The Twelve Standard Meridians',''], 
			['Taiyin Spleen Meridan of Foot','','yes', '','The Twelve Standard Meridians',''], 
			['Shaoyin Kidney Meridan of Foot','','yes', '', 'The Twelve Standard Meridians',''], 
			['Jueyin Liver Meridan of Foot','','yes', '', 'The Twelve Standard Meridians',''],
			['Shaoyang Gallbladder Meridan of Foot','','yes', '', 'The Twelve Standard Meridians',''], 
			['Taiyang Bladder Meridan of Foot','','yes','', 'The Twelve Standard Meridians',''], 
			['Yangming Stomach Meridan of Foot','','yes', '', 'The Twelve Standard Meridians',''],

			['Yang Heel Meridian (Yang Qia Mai)','','yes', '', 'The Eight Extraordinary Meridians',''], 
			['Conception Meridian (Ren Mai)','','yes', '', 'The Eight Extraordinary Meridians',''],
			['Governing Meridian (Du Mai)','','yes', '', 'The Eight Extraordinary Meridians',''], 
			['Penetrating Meridian (Chong Mai)','','yes', '', 'The Eight Extraordinary Meridians',''], 
			['Yin Linking Meridian (Yin Wei Mai)','','yes', '', 'The Eight Extraordinary Meridians',''], 
			['Yang Linking Meridian (Yang Wei Mai)','','yes', '', 'The Eight Extraordinary Meridians',''], 
			['Girdle Meridian (Dai Mai)','','yes', '', 'The Eight Extraordinary Meridians',''], 
			['Yin Heel Meridian (Yin Qia Mai)','','yes', '', 'The Eight Extraordinary Meridians',''],

			['Facial Bones','', 'no', '', 'Cranial Bones',''], 
			['Middle Ear Bones','', 'no', '', 'Cranial Bones',''], 
			['Ethmoid Bone','', 'no', '','Cranial Bones',''], 
			['Sphenoid Bone','', 'no', '', 'Cranial Bones',''],
			['Frontal Bone','', 'no', '', 'Cranial Bones',''], 
			['Parietal Bones','','no', '', 'Cranial Bones',''], 
			['Temporal Bones','', 'no', '', 'Cranial Bones',''], 
			['Occipital Bone','', 'no', '', 'Cranial Bones',''],

			['Inferior Nasal Conchae Bones','', 'no', '', 'Facial Bones',''], 
			['Vomer Bone','', 'no', '', 'Facial Bones',''], 
			['Lacrimal Bones','', 'no', '','Facial Bones',''], 
			['Hyoid Bone','', 'no', '', 'Facial Bones',''], 
			['Nasal Bones','', 'no', '', 'Facial Bones',''], 
			['Zygomatic Bones','', 'no','', 'Facial Bones',''], 
			['Palatine Bones','', 'no', '', 'Facial Bones',''], 
			['Maxilla Bones','', 'no', '', 'Facial Bones',''], 
			['Mandible Bone','', 'no', '', 'Facial Bones',''],

			['Tensor Tympani','', 'no', '', 'Middle Ear Bones',''], 
			['Malleus','','no', '', 'Middle Ear Bones',''], 
			['Incus','', 'no', '', 'Middle Ear Bones',''], 
			['Stapedius','', 'no', '', 'Middle Ear Bones',''],
			['Labyrinth','', 'no', '', 'Middle Ear Bones',''], 
			['Stapes','', 'no','', 'Middle Ear Bones',''], 
			['Tympanic Cavity','', 'no', '', 'Middle Ear Bones',''], 
			['Eustachian Tube','', 'no', '', 'Middle Ear Bones',''],
			['Tympanic Membrane (ear drums','', 'no', '', 'Middle Ear Bones',''],
			['Auditory Canal','', 'no', '', 'Middle Ear Bones',''],

			['Manubrium','', 'no', '', 'Thoracic Cage',''], 
			['Sternum','', 'no', '','Thoracic Cage',''], 
			['Xyphoid Process','', 'no', '', 'Thoracic Cage',''],
			
			['1st rib','', 'no', '', 'True Ribs',''], 
			['2nd rib','', 'no', '', 'True Ribs',''], 
			['3rd rib','', 'no', '', 'True Ribs',''], 
			['4th rib','', 'no', '', 'True Ribs',''], 
			['5th rib','', 'no', '', 'True Ribs',''], 
			['6th rib','', 'no', '', 'True Ribs',''], 
			['7th rib','', 'no', '', 'True Ribs',''], 
			
			['8th rib','', 'no', '', 'False Ribs',''], 
			['9th rib','', 'no', '', 'False Ribs',''], 
			['10th rib','', 'no', '', 'False Ribs',''], 
			['11th rib','', 'no','', 'False Ribs',''], 
			['12th rib','', 'no', '', 'False Ribs',''],

			['C1(Atlas)','','no', '', 'Cervical Vertebrae',''], 
			['C2(Axis)','','no','', 'Cervical Vertebrae',''], 
			['C3','','no', '', 'Cervical Vertebrae',''],
			['C4','','no', '', 'Cervical Vertebrae',''], 
			['C5','','no', '', 'Cervical Vertebrae',''], 
			['C6','','no', '', 'Cervical Vertebrae',''], 
			['C7','','no','', 'Cervical Vertebrae',''],

		    ['T1','Connects to: Arms from the elbows down, hands wrists and
				fingers: esophagus and trachea, heart', 'no', '', 'Thoracic Vertebrae',''],             
			['T2','Connects to: Hear, its valves and coronary arteries; lungs 
				broncial tubes','no', '', 'Thoracic Vertebrae',''],             
			['T3','Connects to: Lungs, bronchial tubes, pleura, chest, breast, 
				heart','no','','Thoracic Vertebrae',''],             
			['T4','Connects to: Gallbladder, common duct, heart, lungs, bronchial 
				tubes','no','','Thoracic Vertebrae',''],             
			['T5','Connects to: Liver, solar plexus, circulation, heart, esophagus, 
				stomach','no', '', 'Thoracic Vertebrae',''],
			['T6','Connects to: Stomach, esophagus, peritoneum, liver, duodenum',
				'no', '','Thoracic Vertebrae',''],             
			['T7','Connects to: Kidneys, appendix, testes, ovaries, uterus, adrenal 
				cortex, spleen, pancreas, large intestine', 'no', '', 'Thoracic Vertebrae',''],             
			['T8','Connects to: Spleen, stomach, liver, pancreas, gallbladder, adrenal 
				cortex, small intestine, pyloric valve', 'no', '', 'Thoracic Vertebrae',''],
			['T9','Connects to: Adrenal cortex, pancreas, spleen, gallbladder, overies,
				uterus, small intestine', 'no', '', 'Thoracic Vertebrae',''],
			['T10','Connects to: Kidneys, appendix, testes, ovaries, uterus, adrenal cortex,
				splen, panreas, large intestine', 'no', '', 'Thoracic Vertebrae',''],             
			['T11','Connects to: Kidneys, ureters, large intestine, urinary bladder, adrenal 
				medulla, adrenial cortex, uterus, ovaries, ileocecal valve','no', '', 'Thoracic Vertebrae',''],
			['T12','Connects to: Small intestine, lymph circulation, large intestine, urinary bladder, 
				uterus, kidneys, ilececal valve', 'no', '', 'Thoracic Vertebrae',''],

			['L1','Connects to: Large intestine, inguinal rings, uterus','no', '', 'Lumbar Vertebrae',''], 
			['L2','Connects to: Appendix, abdomen,Upper leg, urinary bladder','no', '', 'Lumbar Vertebrae',''],
			['L3','Connects to: Sex organs, uterus, bladder, knee, prostate, large intestine','no', '', 
				'Lumbar Vertebrae',''], 
			['L4','Connects to: Prostate gland, muscles of Lower back, sciatic nerve','no', '', 'Lumbar Vertebrae',''], 
			['L5','Connects to: Lower legs, ankles, feet, prostate','no', '', 'Lumbar Vertebrae',''],

		    ['Sacrum','Connects to: Hip bones, buttocks, rectrum, sex organs, genitallia, urinary bladder, ureter, 
		    	prostate', 'no', '', 'Vertebral Column',''],             
		    ['Coccyx','Connects to: Rectum, anus','no', '', 'Vertebral Column',''],

			['Ulna Bones','','no','','Upper Limbs',''], 
			['Radius Bones','','no','','Upper Limbs',''], 
			['Clavicle Bones','','no','','Upper Limbs',''], 
			['Scapula bone','','no','','Upper Limbs',''], 
			['Humerus bones','','no','', 'Upper Limbs',''],

			['Harmate', '', 'no', '', 'Wrist Bones',''], 
			['Capitate', '', 'no', '','Wrist Bones',''], 
			['Trapezoid', '', 'no', '', 'Wrist Bones',''],
			['Trapezium', '', 'no', '', 'Wrist Bones',''], 
			['Scaphoid', '', 'no', '','Wrist Bones',''], 
			['Lunate', '', 'no', '', 'Wrist Bones',''],
			['Triquetrum', '', 'no', '', 'Wrist Bones',''], 
			['Pisiform', '', 'no','', 'Wrist Bones',''],

			['Distral Phalange Bones', '', 'no', '', 'Hand Bones',''], 
			['Medial Phalange Bones', '', 'no', '', 'Hand Bones',''], 
			['Metcarpal Bones','', 'no', '', 'Hand Bones',''], 
			['Proximal Phalange Bones', '', 'no','', 'Hand Bones',''],

			['Tibia','','no','','Leg',''], 
			['Femur','','no','','Leg',''],
			['Fibula','','no','','Leg',''], 
			['Patella','','no','','Leg',''],
			['Meniscus','','no','','Leg',''],

			['Iliium','','no','','Pelvis',''], 
			['Ischium','','no','','Pelvis',''],
			['Pubis','','no','','Pelvis',''],

			['Tarsal Bones','','no','','Foot',''],    
			['Proximal Phalanges','','no','','Foot',''], 
			['Distal Phalanges','','no','','Foot',''], 
			['Medial Phalanges','','no','','Foot',''], 
			['Metatarsal Bones','','no','','Foot',''],

		    ['Tendons','Tendons connect muscles to bone, and are found on both
				ends of every muscle in the body', 'no','','Connective Tissue',''],
			['Ligaments','Ligaments connect bone to bone and are found throughout 
				the body','no','', 'Connective Tissue',''],             
			['Fascia','Connective tissue that surrounds and protects all the 
				other tissues of the body.','yes','', 'Connective Tissue',''],

			['T1-T2','','no','', 'Thoracic Disks Upper',''],
			['T2-T3','','no','','Thoracic Disks Upper',''],
			['T3-T4','','no','','Thoracic Disks Upper',''],
			['T4-T5','','no','','Thoracic Disks Upper',''],
			['T5-T6','','no','','Thoracic Disks Upper',''],
			['T6-T7','','no','','Thoracic Disks Upper',''],
			['T7-T8','','no','','Thoracic Disks Lower',''],
			['T8-T9','','no','','Thoracic Disks Lower',''],
			['T9-T10','','no','','Thoracic Disks Lower',''],
			['T0-T11','','no','','Thoracic Disks Lower',''],
			['T11-T12','','no','','Thoracic Disks Lower',''],
			['T12-L1','','no','','Thoracic Disks Lower',''],
			
			['L1-L2','','no','','Lumbar Disks',''], 
			['L2-L3','','no','','Lumbar Disks',''], 
			['L3-L4','','no','','Lumbar Disks',''],
			['L4-L5','','no','','Lumbar Disks',''], 
			['L5-S1','','no','','Lumbar Disks',''], 

			['C2-C3','','no','','Cervical Disks',''],
			['C3-C4','','no','','Cervical Disks',''], 
			['C4-C5','','no','','Cervical Disks',''], 
			['C5-C6','','no','','Cervical Disks',''],
			['C6-C7','','no','','Cervical Disks',''], 
			['C7-T1','','no','','Cervical Disks',''],

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