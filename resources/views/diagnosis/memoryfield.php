@extends('layouts.diagnosis')
 @section('pagejs')
 <script src="/js/memory.js"></script>
 @endsection
@section('diagnosis')

<label>What is the Memory</label>
<input
    type='text'
    id='messagetext'
    name='messagetext'
    value=''>
<p id="errormessage" class="error">There needs to be a memory</p>
 
 <label>Where does the memory need to go?</label>
<input
    type='text'
    id='memorysolutiontext'
    name='memory'
    value=''>
<p>Suggestions</p>
<ul >
    <li class ="clicker" id="clickableSolutions">Move the field from front to back</li>
    <li class ="clicker" id="clickableSolutions">Release from field entirely</li>
</ul>

 

@endsection