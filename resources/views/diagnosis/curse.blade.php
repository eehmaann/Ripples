@extends('layouts.diagnosis')


@section('diagnosis')
    <label> Who began the curse?></label>
        <input
            type='text'
            id='origin'
            name='origin'
            value=''>
        <label> What does the curse do?></label>
        <input
            type='text'
            id='curse'
            name='curse'
            value=''>

       
        <label> Where is the curse held?></label>
        <input
            type='text'
            id='body'
            name='body'
            value=''>
@endsection