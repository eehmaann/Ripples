@extends('layouts.diagnosis')
@section('pagecss')
<link rel="stylesheet" href='/css/autocomplete.css' type='text/css'>
@endsection
@section('pagejs')
 <script src="/js/curse.js"></script>
@endsection

@section('diagnosis')
  <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
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
                                name='curseinput'
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
                    <fieldset>
                        <label> Where is it?</label>
                        <input
                            type='text'
                            id='bodyinput'
                            name='body'
                            value=''>
                        <p id="bodyerror" class="error">Please state where the sabotuer is.</p>
                    </fieldset>
                    <p id="bodyPartsToggler" class="clicker">Search for where the {{$diagnosis->name}} may be located</p>
                    <div id="LocationDisplay">
                        @include('layouts.locations')
                    </div> 
                </div>
            </div>
        </div>
    </div>

@endsection