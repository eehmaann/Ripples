@extends('layouts.diagnosis')
@section('pagejs')
 <script src="/js/suggestionList.js"></script>
@endsection


@section('diagnosis')
<div class="row justify-content-center">
    <div class="col-md-11">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="curesuggestions">
                        <p> These are possible suggestions</p>
                        <ul>
                            @foreach($diagnosis->cures as $cure)
                                <li class="suggestion">{{$cure->name}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--
<label for ="cureselection">Please select cure</label>
<select id="cureselection" name="cureselection" style="width:50%;" tabindex="5">
        @foreach($diagnosis->cures as $cure)
            <option value={{$cure->id}}>{{$cure->name}}</option>
        @endforeach
</select>

<br>

   <label>Amount at a time</label>
    <input
        type='number'
        id='serving'
        name='serving'
    >
     <label>Times per day</label>
    <input
        type='number'
        id='frequency'
        name='frequency'
    >
     <label>Number of days</label>
    <input
        type='number'
        id='days'
        name='days'
    >
          <label>Notes</label>
      <input
        type='text'
        id='notes'
        name='notes'
    >
   <label>Description</label>
    <input
        type='text'
        id='description'
        name='description'
        value='{{$diagnosis->name}}'
        readonly
    >
-->
@endsection