@extends('layouts.diagnosis')


@section('diagnosis')

<h1>{{diagnosis.name}}</h1>
<p>When did the trapped emotion occur?</p>
<ul> 
    <li id="self>">Current</li>
    <li id="prenatal">Prenatal</li>
    <li id="pastlife">Past life</li>
    <li id="inherited">Inherited</li>
</ul>
<div class="container">
	<div class="row">
		<div class="col-md-8">
            <div class='form-group'>
                <label> How many times did the trapped emotion occur?</label>
                <input
                    type='number'
                    id='repeititions'
                    name='repeititions'
                    value=''>
                
                <div class="self"> 
                   <label>At what age did this occur?</label>
                    <input
                        type='text'
                        id='age'
                        name='age'
                        value=''>
                </div>
                
                <div class='prenatal'>
                   <label>Who did it come from?</label>
                    <input
                        type='text'
                        id='presource'
                        name='presource'
                        value=''
                        readonly>
                    <ul>
                        <li class="prenatal">Mother</li>
                        <li class="prenatal">Father</li>
                        <li class="prenatal">Other</li>
                    </ul>
                    <label>Who?</label>
                        <input
                        type='text'
                        id='relationship'
                        name='relationship'
                        value=''>
                </div>
                
                <div class="pastlife">
                     <label> Year of Birth?</label>
                    <input
                        type='number'
                        id='birth'
                        name='birth'
                        value=''>
                     <label>Year of Death</label>
                    <input
                        type='number'
                        id='died'
                        name='died'
                        value=''>
                    <label>Details of Life?</label>
                    <input
                    type='text'
                    id='life'
                    name='life'
                    value=''>
                    <label>Details of Death</label>
                        <input
                        type='text'
                        id='death'
                        name='death'
                        value=''>
                </div>

                <div class="inherited">
                     <ul>
                        <li class="inherited">Mother</li>
                        <li class="inherited">Father</li>
                        <li class="inherited">Undo</li>
                    </ul>
                    <label>How many times does this pattern repeat?</label>
                    <input
                        type='number'
                        id='generations'
                        name='generations'
                        value=''>
                </div>
                label>Description</label>
                <input
                    type='text'
                    id='description'
                    name='description'
                    value=''
                    readonly
                >
            </div>
        </div>
    </div>
</div>