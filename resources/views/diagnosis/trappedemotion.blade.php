@extends('layouts.diagnosis')
@section('pagejs')
 <script src="/js/trappedemotion.js"></script>
@endsection

@section('diagnosis')
@if(!empty($heartwall))
    <p style="display:none;" id="heartwallid">{{$heartwall->describable->id}}</p>
    @if(is_null($lastproblem->describable_type))
    <p>Heartwall made of {{$heartwall->describable->material}} extending <span id="currentDistance">{{$heartwall->describable->current_distance}}</span> miles</p>
     <label>Update Distance</label>
        <input
            type='number'  
            id='updatedistance'
            name='updatedistance'
            value=''>
        <p id="distanceerror" class="error"> Update distance must be less than current distance</p>
        <div class="row">
            <div class="col-2"> 
                <p id="heartwallUpdater" class="clicker">Update Heartwall</p>
            </div>
            <div class="col-2"> 
                <p id="heartwallClearer" class="clicker" style="background:pink;">Remove Heartwall</p>
            </div>
        </div>
    @endif  
@endif
<br>
<br>
@include('layouts.currentTrappedEmotion')
 <div class="container" style="margin:3rem">
     <div class="col-6" >
        <div class="card">
            <div class="card-body">
                <p>When did the trapped emotion occur?</p>
                <p id="self" class="timeselector clicker">Current</p>
                <p id="prenatal" class="timeselector clicker">Prenatal</p>
                <p id="pastlife" class="timeselector clicker">Past life</p>
                <p id="inherited" class="timeselector clicker">Inherited</p>
            </div>
        </div>
    </div>
</div>

 <div class='prenatal'>
     <div class="container">
         <div class="col-4" >
            <div class="card">
                <div class="card-body">
                
                   <label>Who did it come from?</label>
                    <input
                        type='text'
                        id='presource'
                        name='presource'
                        value=''
                        readonly>
               
                            <ul class="list-unstyled">
                                <li class="prenatalclicker clicker"> Mother</li>
                                <li class="prenatalclicker clicker">Father</li>
                                <li class="prenatalclicker clicker" id="otherprenatal">Other</li>
                            </ul>

                    <div  id="relationInputBox">
                        <label>Who?</label>
                            <input
                            type='text'
                            name='relationshipinput'
                            id='relationshipinput'
                            value=''>
                            <p id="prenatalerror" class="error"> Please type the relationship</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="pastlife">
            <label>Year of Birth?</label>
            <input
                type='number'
                id='birth'
                name='birth'
                pattern='[0-9]*'
                readonly
                value=''>
         <label> Age of Death?</label>
        <input
            type='number'
            id='pastage'
            name='pastage'
            pattern='[0-9]*'
            value=''>
         <p id="pastageerror" class="error">Please include an age</p>
        
        <label>Year of Death</label>
        <input
            type='text'
            id='died'
            name='died'
            value=''>
        <p id="deatherror" class="error"> Please include year died</p>

         <p> Gender</p>
            <input type="radio" id="male"
                   name="gender" value="male" />
            <label for="male">Male</label>

            <input type="radio" id="female"
                   name="gender" value="female" />
            <label for="female">Female</label>

            <input type="radio" id="unsure"
                   name="gender" value="unsure" />
            <label for="unsure">Unknown</label>
       

        <div id="relationshipstatus" class ="plquestion">
            <p>Was the person married?</p>

            <div>
                <input type="radio" id="married"
                       name="wasmarried" value="married" />
                <label for="married">Married</label>
            </div>

            <div>
                <input type="radio" id="single"
                       name="wasmarried" value="single" />
                <label for="single">Single</label>
            </div>

            <div>
                <input type="radio" id="divorced"
                       name="wasmarried" value="divorced" />
                <label for="divorced">Divorced</label>
            </div>

            <div>
                <input type="radio" id="widow"
                       name="wasmarried" value="widow" />
                <label for="widow">Widow</label>
            </div>

             <div>
                <input type="radio" id="unknown"
                       name="wasmarried" value="unknown" checked/>
                <label for="unknown">Unknown</label>
            </div>
            <label> Editable details of married</label>
            <input
                type='text'
                id='marriedtext'
                name='marriedtext'
                value=''>

            <label> How many children did the person have</label>
            <input
                type='number'
                id='children'
                name='children'
                pattern='[0-9]*'
                value=''>
            <p id="childrerror" class="error">Please enter the number of children</p>
        </div>

       

        <p> Was the death an accident?</p>
            <input type="radio" id="accident"
                   name="accidental" value="accidental" />
            <label for="accident">Yes</label>

            <input type="radio" id="intentional"
                   name="accidental" value="intentional" />
            <label for="intentional">No</label>

            <input type="radio" id="canttell"
                   name="accidental" value="canttell" />
            <label for="canttell">Can't tell</label>
            <label>Detail of death</label>
            <input
            type='text'
            id='deathinput'
            name='deathinput'
            value=''>


        <p> Was the death war related?</p>
            <input type="radio" id="war"
                   name="warrelated" value="war related" />
            <label for="war">Yes</label>

            <input type="radio" id="peace"
                   name="warrelated" value="not war related" />
            <label for="peace">No</label>

            <input type="radio" id="noclue"
                   name="warrelated" value="no clue" />
            <label for="canttell">Can't tell</label>
            <label>Detail of war</label>
            <input
            type='text'
            id='warinput'
            name='warinput'
            value=''>

      
        <!-- only if war related soldier?-->
        <div id="soldierquestion" class="plquestion">
            <p>Was the person a soldier </p>
                <input type="radio" id="soldier"
                       name="soldierlife" value="soldier" />
                <label for="soldier">Yes</label>

                <input type="radio" id="notsoldier"
                       name="soldierlife" value="not a soldier" />
                <label for="notsoldier">No</label>

                <input type="radio" id="maybesoldier"
                       name="soldierlife" value="maybe a soldier" />
                <label for="maybesoldier">Can't tell</label>
                <label>Details of soldier</label>
                <input
                    type='text'
                    id='soldierinput'
                    name='soldierinput'
                    value=''>
        </div>

        <!--only if soldier-->

        <div id="kidnappedquestion" class="plquestion">
            <p>Was the person a kidnapped </p>
            <input type="radio" id="kidnapped"
                   name="kidnappedlife" value="kidnapped" />
            <label for="kidnapped">Yes</label>

            <input type="radio" id="notkidnapped"
                   name="kidnappedlife" value="not kidnapped" />
            <label for="notkidnapped">No</label>

            <input type="radio" id="maybekidnapped"
                   name="kidnappedlife" value="maybe kidnapped" />
            <label for="maybekidnapped">Can't tell</label>
        </div>
        <!-- only if kidnapped-->
        <div id="kidnappingage" class="plquestion">
              <label>Age of kidnapping</label>
            <input
            type='number'
            id='agekidnapped'
            name='agekidnapped'
            pattern='[0-9]*'
            value=''>
        <p id="kidnappingageerror" class="error"> Enter a valid age for kidnapping</p>
            
        </div>
        
        <div id="demographicquestion" class="plquestion">
            <p>What was the lifestyle of the person </p>
            <input type="radio" id="peasant"
                   name="demographic" value="peasant" />
            <label for="peasant">Peasant</label>

            <input type="radio" id="middleclass"
                   name="demographic" value="middle class" />
            <label for="middleclass">Middle Class</label>

            <input type="radio" id="noble"
                   name="demographic" value="noble" />
            <label for="noble">Noble</label>

            <input type="radio" id="other"
                   name="demographic" value="other" />
            <label for="other">Other</label>
              <label>Details of demographic</label>
            <input
            type='text'
            id='demographicinput'
            name='demographicinput'
            value=''>
        </div>  

         <label>Details of Life?</label>
        <textarea
        type='text'
        id='life'
        name='life'
        cols="40" 
        rows="5">
        </textarea>
        <p id="lifeerror" class="error">The details of life must be at least 21 characters long</p>
    </div>    

    <div class="inherited">
    @include('components.geneology')        
    </div>


@include('layouts.emotions')
<p class="error" id="emotionListError">Please select at least one emotion</p>
<p class=error id="emptyStatementError">Please complete all required questions</p>
<p class="error repitionerror">Please enter how many times this emotion occured</p>
@endsection



