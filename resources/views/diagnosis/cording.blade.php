@extends('layouts.diagnosis')
 @section('pagejs')
 <script src="/js/cording.js"></script>
 @endsection
@section('diagnosis')
  <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-body">
                    <fieldset>
                    <label>Corded to who</label>
                    <input
                        type='text'
                        id='corded'
                        name='corded'
                        value=''>
                        <br>
                        <p id="errormessage" class="error">Please state who/what the cord is connected to</p>
                    </fieldset>
                    <?php
                        $cordport = array("Brain", "Heart", "Gut", "Privates");
                        $alength = count($cordport);?>
                        @for($client = 0; $client < $alength; $client++)
                            @for($corded =0; $corded< $alength; $corded++)
                            <label>Number of {{$cordport[$client]}} to {{$cordport[$corded]}} cords</label>
                            <input
                                type="number"
                                class="cord"
                                id={{$cordport[$client]}}to{{$cordport[$corded]}}number
                                name={{$cordport[$client]}}to{{$cordport[$corded]}}number
                                min=0
                                step="0.01"
                                value=''>

                                                

                            <label>x 10 to the</label>
                            <input
                                type='number'
                                class='cordmultiple'
                                min=1
                                step="1"
                                id={{$cordport[$client]}}to{{$cordport[$corded]}}multiplier
                                name={{$cordport[$client]}}to{{$cordport[$corded]}}multiplier
                                value=''> <br>

                            <input
                                type='text' 
                                readonly 
                                id={{$cordport[$client]}}to{{$cordport[$corded]}}text
                                class="cordtexts"> 
                            </input>
                            <br>
                            <p class="error" id=={{$cordport[$client]}}to{{$cordport[$corded]}}error>
                                If there is {{$cordport[$client]}} to {{$cordport[$corded]}} cord please include both fields</p>
                            <p id={{$cordport[$client]}}to{{$cordport[$corded]}}definition class="definition"></p> 
                            @endfor
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    <div style="display:none;">
        <p id="BraintoBrainStatement">Logic suppressing logic. <br> 
            Example statement: How can you possibly think that?</p>
        
        <p id="BraintoHeartStatement">Logic suppressing emotions  
            Example statement: There is no reason to be angry.</p>

        <p id="BraintoGutStatement">Logic suppressing intuition   
            Example statement That will never work.</p>
        
        <p id="BraintoPrivatesStatement">Logic suppressing creativity/ identity
            Example statement: Dreams are for other people.</p>
        
        <p id="HearttoBrainStatement">Emotions suppressing logic 
            Example statement: It hurts me that you would even think that.</p>
        
        <p id="HearttoGutStatement">Emotions suppressing intuition
            Example statement: I'd be scared to even attempt what you are doing 
        </p>

        <p id="HearttoPrivatesStatement">Emotions suppressing creativity / identity 
            Example statement: Aren't you embarassed to be seen like that?
        </p>

        <p id="GuttoBrainStatement">Intuition suppressing logic
            Example statement: I don't need your advice here
        </p>

        <p id="GuttoHeartStatement">Intuition suppressing emotions 
            Example statement: It will work; stop crying!
        </p>

        <p id="GuttoGutStatement">Intuition suppressing intuition
            Example statement: Just follow along; I have experience
        </p>

        <p id="GuttoPrivatesStatement">Intuition suppressing creativity / identity
            Example statement: I feel your vision is just off right now
        </p>

        <p id="PrivatestoBrainStatement">Identity/ creativity suppressing logic
            Example statement: No child of mine will think like that
        </p>

        <p id="PrivatestoHeartStatement">Creativity / identity suppressing emotions 
            Example statement: My children are strong they don't need counciling
        </p>

        <p id="PrivatestoGutStatement">Creativity/ identiy suppressing intuition 
            Example statement: Remember, the nail that stands out gets hit
        </p>

        <p id="PrivatestoPrivatesStatement">Creativity/ identiy suppressing creativity/ identiy
            Example statement: Your vision just doesn't fit with my vision
        </p> 

</div>
@endsection 


