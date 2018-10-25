@extends('layouts.diagnosis')
@section('pagejs')
 <script src="/js/miasm.js"></script>
@endsection

@section('diagnosis')
<label>Generation path</label>
    <input
    type='text'
    id='generationpath'
    name='generationpath'
     style="width: 50em;"
    value=' '
    readonly>
<p>Clear all</p>
<ul>
    <li class="singleclicker">Mother</li>
    <li class="singleclicker">Father</li>
    <li class="singleclicker">Undo</li>
</ul>

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
 <label>Pattern build</label>
    <input
    type='text'
    style="width: 50em;"
    id='patternstring'
    name='patternstring'
    value=''
    readonly>
 <ul>
    <li class="patternclicker">Mother</li>
    <li class="patternclicker">Father</li>
    <li class="patternclicker">Undo</li>
</ul>
<p id="parentgenerror" class="error"> Please click a button to add to pattern build</p>
<label>How many times does this pattern repeat?</label>
<input
    type='number'
    id='genrepeatsinput'
    name='genrepeatsinput'
    pattern='[0-9]*'
    value=''>
<p id="patternadderror" class="error"> Please enter a positive integer</p>
<p id="pattogenclicker"> Add pattern to Generation path</p>

@endsection