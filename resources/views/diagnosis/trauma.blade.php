@extends('layouts.diagnosis')
 @section('pagejs')
 <script src="/js/physicaltrauma.js"></script>
 @endsection


@section('diagnosis')
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-body">
                    <label> When did the trauma happen?</label>
                    <input
                        type='number'
                        id='ageinput'
                        name='age'
                        value=''>
                    <label> Was anyone else involved?</label>
                    <input
                        type='text'
                        id='peopleinvolvedinput'
                        name='peopleinvolved'
                        value=''>
                   
                    <label>Did this come from an emotional or physical trauma</label>
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
                </div>
            </div>
        </div>
    </div>
@endsection