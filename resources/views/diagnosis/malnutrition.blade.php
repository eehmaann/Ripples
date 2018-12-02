@extends('layouts.diagnosis')
@section('pagejs')
 <script src="/js/malnutrition.js"></script>
@endsection

@section('diagnosis')
<p>What type of change to diet should be made?</p>
<div style="width:25%">
	
	<ul class ="list-unstyled">
		<li class="dietClicker clicker" id="foodlist">Foods</li>
		<li class="dietClicker clicker" id="herblist">Herbs</li>
		<li class="dietClicker clicker" id="vitaminlist">Vitamins</li>
	</ul>
</div>
<div class="foodlist">
@include('components.Foodlist')
<span class="clicker"><p class="foodlist" id="foodlisthider">Hide Food</p></span>
</div>

<div class="herblist">
  @include('components.Herblist')

<span class="clicker"><p class="herblist" id="herblisthider"> Hide Herbs</p></span>
</div>
<div class="vitaminlist">
@include('components.Vitaminlist')
<div class="clicker"><p class="vitaminlist" id="vitaminlisthider"> Hide Vitamins</p></div>
</div>
<p id="errormessage" class="error"> At least one item in one of the list must be selected</p>
@endsection