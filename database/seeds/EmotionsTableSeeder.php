<?php

use Illuminate\Database\Seeder;
use App\Emotion;

class EmotionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        $emotions = [
        ['abandonment', '1', '1', 'Physical abandonment is being left alone; left behind or deserted (this is the type of
			abandonment that we most often see in childhood). Emotional abandonment is being given up on;
			withdrew from; emotionally deserted or separated from; a feeling of being “left behind” in a non-
			physical form.'],
        ['betrayal', '1', '1', 'Betrayed is to have your trust broken, to be deserted or hurt by a trusted one. Betrayal of
			another is to be unfaithful in guarding or fulfilling a trust; to be disloyal or violate a confidence, to desert
			someone who trusts you. Betrayal of the self is to break integrity; act against one’s morals, to abuse the
			body or soul.'],
        ['forlorn', '1', '1', 'Miserable; sad and lonely by reason of abandonment, desolation or emptiness; hopeless; forsaken'],
        ['lost', '1',  '1', 'Unable to see the correct or acceptable course; having no direction. Physically lost most often
			shows up from childhood- (e.g. being lost in the woods and cannot find the way home, etc.) Emotionally
			lost refers to a feeling of being unable to see what the right decision or direction, being unable to find
			emotional stability (e.g. He felt lost after his wife died; She has not done anything with her life, she
			seems really lost.)'],
        ['love unrecieved', '1', '1', 'A feeling that love expressed is or has been rejected. Feeling unwanted, not cared
				for; not accepted; a lack of love where it is desired'],
        ['anxiety', '1', '2', 'A generalized feeling of uneasiness and foreboding; a fear of the unknown; fear without a
			subject (e.g. she feels anxious and fearful all the time for no apparent reason).'],
        ['despair', '1', '2', 'A complete loss of hope; misery; difficult or unable to be helped or comforted'],
        ['disgust', '1','2', 'A feeling of loathing; when good taste or moral sense is offended; a strong aversion. (e.g. She
			felt disgusted when the killer was acquitted.)'],
	 	['nervousness', '1','2', 'Unnaturally or acutely uneasy or apprehensive; fearful; timid; to feel jumpy or on edge.'],
	 	['worry', '1','2', 'Dwelling on difficulty or troubles; unease or anxiety about a situation or a person; extreme
			concern over potential problems; concern about a loved one in possible distress.'],
	 	['crying', '1','3', 'The (often) involuntary art of expressing a strong emotion; a response to pain or suffering
			(emotion or physical). A response to or expression of helplessness. A physical sensation felt in the
			throat, chest, and/or diaphragm. Often becomes trapped when one does not allow him/herself to cry
			(i.e. suppressing this action or stuffing it down).'],
		['discouragement', '1','3', 'Feeling a lack of courage, hope or confidence; disheartened, dispirited. Losing the
			nerve to try or attempt something'],
		['rejection', '1','3', 'Feeling denied, refused or rebuffed; discarded as useless or unimportant; cast out;
			unwanted; forsaken'],
		['sadness', '1','3', 'Unhappy; sorrowful; mournful; affected by grief.'],
		['sorrow', '1','3', 'A sad regret; distress caused by loss, disappointment or grief; to feel or express grief,
			unhappiness, or sadness.'],
		['anger', '1', '4', 'A strong displeasure and belligerence aroused by a real or supposed wrong; wrath. Anger is
			often used as a cover-up or form of denial for emotions of hurt or fear..'],
        ['bitterness', '1', '4', 'A harsh, disagreeable or cynical attitude. Being angry or resentful because of hurt or unfair
			experiences.'],
        ['guilt', '1', '4', 'The feeling of having done wrong or committed an offense. Feeling responsible for the harmful
			actions of another (e.g., abuse, parents&#39; divorce, death, etc.) Often accompanied by feelings of
			depression, shame and self-abuse.'],
        ['hatred', '1',  '4', 'To loathe; despise; great dislike or aversion. Often comes as a result of “hurt love”. Often
			hatred is of a situation rather than a person (e.g. hatred of anotherʼs behavior, unjust circumstances,
			etc.) Self-hatred creates destructive behaviors and illnesses.'],
        ['resentment', '1', '4', 'A feeling of displeasure or indignation at someone or something regarded as the cause of
			injury or insult; bitter for having been treated unfairly; unwilling to forgive. Often this emotion comes
			along with animosity (ill-will that displays itself in action, strong hostility or antagonism).'],
		['blaming', '1', '5', 'Being blamed is to be held responsible; accused; or held guilty for something. Blaming
			another is to hold responsible; accuse; find fault with. Putting responsibility on someone or something
			else to avoid taking responsibility. This is a key emotion in creating a victim mentality and can cause a
			deterioration of personal power. Blaming the self is finding fault with oneself, which can lead to feelings
			of self-abuse, depression, etc.'],
        ['dread', '1', '5', 'Fear of something that is about to happen; apprehension as to something in the future, usually
			real but sometimes unknown. (e.g. He dreaded going to the high school reunion and facing the bullies
			who had tormented him).'],
        ['fear', '1', '5', 'A strongly distressing emotion aroused by impending danger, evil or pain; the threat may be real
			or imagined.'],
        ['horror', '1',  '5', 'A strong emotion of alarm, disgust, or outrage caused by something frightful or shocking (e.g.
			an event of extreme violence, cruelty, or macabre.'],
        ['peeved', '1', '5', 'Irritated; annoyed; exasperated; irked; aggravated; ticked off.'],
		['humiliation', '1', '6', 'A painful loss of pride, dignity or self-respect; to feel mortified; embarrassed.'],
        ['jealousy', '1', '6', 'Resentful and envious of someone&#39;s success, achievements, or advantages. Having suspicious
			fears; fears of rivalry or unfaithfulness. Results from a fear of not being loved and/or from insecurity.'],
        ['longing', '1', '6', 'To have a strong desire or craving; a yearning or pining; aching for; to miss someone or
			something; to want something you do not have (e.g. She longed for a different life).'],
        ['lust', '1',  '6', 'Intense sexual desire or appetite; an overwhelming want or craving (e.g., lust for power); passion;
			to covet.'],
        ['overwhelm', '1', '6', 'To be overpowered in mind or emotion; extreme stress; feeling overpowered with
			superior force; feeling excessively burdened.'],
		['effort unrecieved', '2', '1', 'When one&#39;s work, achievement, attempts or endeavors are not accepted or
			recognized; when one&#39;s best effort is not considered good enough; a feeling of being unappreciated. Not
			feeling approved of or validated.'],
        ['heartache', '2', '1', 'Anguish and pain of the heart; distress usually as a result of difficulty or sadness in a
			relationship. Felt as a crushing or burning physical sensation in the chest.'],
        ['insecurity', '2', '1', 'A lack of confidence; self-consciousness; shy. Feeling unsafe from danger or ridicule.'],
        ['overjoy', '2',  '1', 'Intense delight or elation suddenly shattered; it is overpowering for the body and shocks the
			entire system.'],
        ['vulnerability', '2', '1', 'Feeling susceptible to harm, emotional or physical; unsafe; unstable.'],
        ['failure', '2', '2', 'When one falls short of success or achievement in something expected, attempted, or desired;
			(e.g. The failure of a marriage or other relationship, being fired, bankruptcy, performing poorly in
			athletics, art, academics, etc.)'],
        ['helplessness', '2', '2', 'Being unable to help oneself; being without the aid or protection of another. Having little
			strength or personal power. A common emotion for those suffering from a “victim mentality”. Feeling
			unable to change oneʼs circumstances or state.'],
        ['hopelessness', '2','2', 'Devoid of hope; having no expectation of good; having no remedy or cure; no prospect
			of change or improvement.'],
	 	['lack of control', '2','2', 'Lacking restraint or direction; unable to regulate or command; a feeling that someone
			or something else determines your course.'],
	 	['low self-esteem', '2','2', 'A low appraisal of oneʼs own worth or value; feeling and focusing on oneʼs flaws;
			holding a feeling of disrespect for the self; not confident; lack of self-love.'],
	 	['confusion', '2','3', 'A disoriented feeling; foggy thinking; chaos; lack of clearness; perplexity; bewilderment; a
			disturbed mental state.'],
		['defensiveness', '2','3', 'A state of resisting attack or protecting oneself; being sensitive to the threat of
			criticism or injury to one’s ego; being on guard against real or imagined threats to one’s person, physical
			and/or emotional.'],
		['grief', '2','3', 'Intense emotional suffering caused by loss, disaster, misfortune, etc.; an acute sorrow and deep
			sadness. A universal reaction to bereavement. Also can be feeling harassed, vexed, or exasperated (e.g.
			if someone gives you grief)'],
		['self-abuse', '2','3', 'Abusing the self emotionally includes negative self-talk (e.g. “I’m such an idiot.”), blaming
			the self, etc. Abusing the self physically includes mistreating the body by use of addictive substances; to
			not care for the body by lack of sleep, proper diet or nutrition; to work beyond what one can or should
			endure; to punish or tax oneself excessively. This abuse may appear to help atone for “sins”, real and
			imagined, and is usually driven by anger. Illnesses can be forms of self-abuse (e.g. I don’t deserve to be
			healed)'],
		['stubborness', '2','3', 'Being difficult; unbendable; unable or unwilling to forgive; obstinate; headstrong;
			resistant.'],
		['depression', '2', '4', 'A state of being sad, gloomy, low in spirits, dejected. Often a secondary emotion caused by
			“anger turned inward” at the self and feelings of shame and guilt, etc.'],
        ['frustration', '2', '4', 'Exasperation; being stuck or unable to progress; feeling blocked from causing a change or
			achieving an objective or goal.'],
        ['indecisiveness', '2', '4', 'An inability to make a decision; wavering back and forth between one choice or
			another. Stems from distrust of the self or doubting the ability to make a good decision.'],
        ['panic', '2',  '4', 'A sudden, overwhelming fear that produces hysterical behavior, unreasonably fearful thoughts
			or physical symptoms such as trembling and hyperventilation; a strong feeling of impending doom.'],
        ['taken for granted', '2', '4', 'Feels treated with careless indifference; not given thanks or for something
			accomplished, similar to ignored'],
		['conflict', '2', '5', 'Internal Conflict is a mental and emotional struggle within the self, arising from opposing
			demands or impulses. (e.g. He was feeling conflicted about whether or not to take the new job) External
			Conflict is to fight; to disagree or be disagreeable; to struggle or battle against; to antagonize. Prolonged
			strife or struggle. (e.g. She and her ex-husband experience continual conflict about custody of their
			children).'],
        ['creative insecurity', '2', '5', 'Feeling unsafe or untrusting the self about the creation or development of
			anything: relationships, family, health, money, career and/or artistic endeavors. A feeling of insecurity
			that arises and blocks the creative process. (e.g. writer’s block)'],
        ['terror', '2', '5', 'Intense, sharp, overmastering fear; extreme fright; alarm.'],
        ['unsupported', '2',  '5', 'A lack of support, help or encouragement; not provided for by another; not defended
			when help is needed; feeling the burden is too heavy to bear alone, etc.'],
        ['wishy washy', '2', '5', 'Weak, spiritless; undecided; irresolute; without strength of character. To lack
			conviction; without a backbone.'],
		['pride', '2', '6', 'An overly high assessment of one’s superiority or inferiority based on some real or imagined
			justifications; vanity (an excessive desire to be noticed, praised, or approved); feeling better or lower
			than others; haughty; non-teachable; has to be right; expects more credit than earned; or treats others
			with disdain or contempt. "\r"
			* Having a healthy amount of pride (self-respect or self-esteem) is a good thing, and this type of pride
			usually does not show up as a trapped emotion. (Although it may show up if oneʼs healthy pride is
			injured.)'],
        ['shame', '2', '6', 'A feeling of being wrong, defective or disreputable. The painful feeling of having done or
			experienced something dishonorable, improper or foolish; disgrace; humiliation; a cause for regret. The
			lowest vibration of all the emotions. Leads to guilt, depression and even suicide.'],
        ['shock', '2', '6', 'A sudden or violent disturbance of the emotions or sensibilities; extreme surprise; to feel
			traumatized or stunned.'],
        ['unworthy', '2',  '6', 'Not good enough; beneath the dignity of; not commendable or credible; undeserving; not
			valuable or suitable; unbecoming.'],
        ['worthless', '2', '6', 'Of no importance or value; without excellence of character, quality or esteem; serving no
			purpose'],

    ];
        $count = count($emotions);

	    foreach ($emotions as $key => $emotionData) {
	        $emotion = new Emotion();

	        $emotion->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
	        $emotion->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
	        $emotion->name = $emotionData[0];
	        $emotion->col_name = $emotionData[1];
	        $emotion->row_name = $emotionData[2];
	        $emotion->definition = $emotionData[3];

	        $emotion->save();
	        $count--;

	    }
	}
}