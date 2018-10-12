@extends('layouts.practitioner')


@section('diagnosis')

<h1>{{diagnosis.name}}</h1>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class='form'>
            <form method='POST' action='/diagnosis'>
            	 <label>Corded to who</label>
                <input
                    type='text'
                    id='corded'
                    name='corded'
                    value=''>
             	<?php
                	$cordport = array("Brain", "Heart", "Gut", "Privates")
                	$arrlength = count($cordport);
                        for($client = 0; $client < $arrlength; $client++) {
                        	for($corded =0; $corded< $arrlength; $corded++){
                        		echo
                        		"<label> number of".$cordport[$client]." to ".$cordport[$corded]."/label"

                        		"<input
                    				type='number'
                    				class='cord'
                    				id=".$cordport[$client].'to'.$cordport[$corded]."number"
                    				"name=".$cordport[$client].'to'.$cordport[$corded].
                    				"value=''>

                    			

                    			<label>x 10 to the/label>
                        		<input
                    				type='number'
                    				class='cordmultiple'
                    				id=".$cordport[$client].'to'.$cordport[$corded]."multiplier"
                    				"name=".$cordport[$client].'to'.$cordport[$corded]."multiplier"
                    				"value=''> <br>"	


                        	}
                        } ?>

               <label>Description</label>
                <input
                    type='text'
                    id='description'
                    name='description'
                    value='description'
                    readonly>
            </div>
        </div>
    </div>
</div>



