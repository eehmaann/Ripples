@extends('layouts.diagnosis')
@section('pagejs')
 <script src="/js/curse.js"></script>
@endsection

@section('diagnosis')
<fieldset>
    <label> Who began the curse?</label>
        <input
            type='text'
            id='inflicterinput'
            name='origin'
            value=''>
        <p id="errormessage" class="error"> Please include who placed the curse</p>
</fieldset>
<fieldset>
        <label> What does the curse do?</label>
        <input
            type='text'
            id='curseinput'
            name='curse'
            value=''>
        <p id="curseerror" class="error"> Please write what the curse does</p>

</fieldset>
   <fieldset>
        <label> What age did this happen?</label>
        <input
            type='number'
            id='ageinput'
            name='age'
            value=''>
        <p id="ageerror" class="error">Please state what age the sabotage occured</p>
    </fieldset>
@endsection