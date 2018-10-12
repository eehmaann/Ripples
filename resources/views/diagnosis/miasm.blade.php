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
                </div>

                <div>
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
                    readonly>
            </div>
        </div>
    </div>
</div>