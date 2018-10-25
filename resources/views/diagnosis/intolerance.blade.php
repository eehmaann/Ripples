@extends('layouts.diagnosis')
@section('pagejs')
 <script src="/js/intolerance.js"></script>
@endsection

@section('diagnosis')
            <div class='form-group'>
                <label> Intolerant to what?</label>
                <input
                    type='text'
                    id='allergy'
                    name='allergy'
                    value=''><br/>
                <p id="errormessage">You must include an allergy</p>    
                   <label>What will happen? (Not required)</label>
                <input
                    type='text'
                    id='effect'
                    name='effect'
                    value=''>
@endsection