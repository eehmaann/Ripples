@extends('layouts.diagnosis')


@section('diagnosis')
<label for ="cureselection">"Please select cure"</label>
<select id="cureselection" name="cureselection style="width:350px;" tabindex="5">
        @foreach($cures as $cure)
            <option value={{$cure->id}}>{{$cure->name}}</option>
        @endforeach
</select>


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

@endsection