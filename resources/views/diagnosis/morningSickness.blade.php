@extends('layouts.diagnosis')
 @section('pagejs')
    <script src="/js/sickness.js"></script>

 @endsection
@section('diagnosis')
<fieldset>
  <label> What percent in still connected?</label>
    <input
        type='number'
        id='disconnectionPercentage'
        name='disconnectionPercentage'
        value=''>
    <p id="percenterror" class="error">Please include what percent between 0-100%</p>
 </fieldset>
<fieldset>
  <label> What direction is the disconnection?</label>
    <input
        type='text'
        id='disconnectionDirection'
        name='disconnectionDirection'
        readonly
        value=''>
    <p id="disconnectionerror" class="error">There needs be a direction</p>
 </fieldset>
 <ul id="directionChooser"> 
 	<li id="unbornClicker" class="clicker directionClicker">Unborn child disconnected from mother</li>
 	<li id="motherClicker" class="clicker directionClicker">Mother disconnected from unborn child</li>
 </ul>

<fieldset>
   <label> What part of mother is disconnected?</label>
    <input
        type='text'
        id='motherDisconnection'
        name='motherDisconnection'
        readonly
        value=''>
    <p id="mothererror" class="error">Please include what is disconnected</p>
</fieldset>
    <ul>
    	<li id="motherSpiritClicker" class="clicker motherClicker">Mother's spirirt</li>
    	<li id="motherBodyClicker" class="clicker motherClicker">Mother's body</li>
    	<li id="motherBrainClicker" class="clicker motherClicker">Mother's brain</li>
    </ul>

<fieldset>
   <label> What form of unborn child is disconnected?</label>
    <input
        type='text'
        id='unbornformDisconnection'
        name='unbornDisconnection'
        readonly
        value=''>
    <p id="unbornformerror" class="error">Please include what is disconnected</p>
</fieldset>
	<ul>
		<li id="unbornSpiritCLicker" class="clicker unbornFormClicker">Spiritual unborn child</li>
		<li id="unbornBodyCLicker" class="clicker unbornFormClicker">Spiritual unborn child</li>
	</ul>
<fieldset>
   <label> What part of unborn child is disconnected?</label>
    <input
        type='text'
        id='unbornDisconnection'
        name='unbornDisconnection'
        readonly
        value=''>
    <p id="unbornerror" class="error">Please include what is disconnected</p>
</fieldset>
	<ul>
		<li id="unbornFetusClicker" class="unbornPartClicker clicker">Fetus</li>
		<li id="unbornPlacentaClicker" class="unbornPartClicker clicker">Placenta</li>
		<li id="unbornFluidClicker" class="unbornPartClicker clicker">Amniotic Fluid</li>
		<li id="unbornCordClicker" class="unbornPartClicker clicker">Umbilical Cord</li>

@section('diagnosis')