<div class="row">
    <label>How many generations does this go back?</label>
    <input
        type='number'
        id='genrepeatsinput'
        name='genrepeatsinput'
        pattern='[0-9]*'
        value=''>
    <p id="patternadderror" class="error"> Please enter a positive integer</p>

</div>
<div class="row">
    <label>Year</label>
        <input
        type='text'
        id='yeardisplay'
        name='yeardisplay'
        style="width: 7em;"
        pattern='[0-9]*'
        value=''
        readonly>
    <br/>
</div>
<div class="row">
    <label>Is there a repeating pattern</label>
        <input
        type='text'
        style="width: 50em;"
        id='patternstring'
        name='patternstring'
        value=''
        readonly>
     <div class="col-md-3">
            <p class="patternclicker clicker">Mother</p>
            <p class="patternclicker clicker">Father</p>
            <p class="patternclicker clicker">Undo</p>
    </div>
</div>
<p id="pattogenclicker" class="clicker"> Add pattern to Generation path &darr;</p>
<p id="parentgenerror" class="error"> Please click a button to add to pattern build</p>

<div class="row">
    <label>Generation path</label>
        <input
            type='text'
            id='generationpath'
            name='generationpath'
             style="width: 50em;"
            value=' '
            readonly>
    <p id="patherror" class="error">Please include source of miasim</p>
    <div class="col-md-3">
        
            <p> Add single ancestor</p>  
            <p class="singleclicker clicker">Mother</p>
            <p class="singleclicker clicker">Father</p>
            <p class="singleclicker clicker">Undo</p>
        
    </div>
</div>
     <p class="singleclicker clicker">Undo</p>
    <p id="clearer" class="clicker">Clear all</p>





