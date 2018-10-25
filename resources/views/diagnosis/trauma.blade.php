@extends('layouts.diagnosis')
 @section('pagejs')
 <script src="/js/physicaltrauma.js"></script>
 @endsection

@section('diagnosis')
    <label> When did the trauma happen?></label>
    <input
        type='number'
        id='ageinput'
        name='age'
        value=''>
    <label> Was anyone else involved?></label>
    <input
        type='text'
        id='peopleinvolvedinput'
        name='peopleinvolved'
        value=''>
   
    <label>Did this come from an emotional or physical trauma></label>
    <ul>
        <li class="traumaclicker">Phyiscal trauma</li>
        <li class="traumaclicker">Emotional trauma</li>
    </ul>
    <input
        type='text'
        id='traumadisplay'
        name='trauma'
        readonly
        value=''>
@endsection