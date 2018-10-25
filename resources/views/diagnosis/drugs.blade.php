@extends('layouts.diagnosis')
@section('pagejs')
 <script src="/js/drugs.js"></script>
@endsection
@section('diagnosis')
					
<p> Uppers</p>
@foreach($drugs as $drug)
	@if($drug->drug_type =="Uppers")
		<label for="drugs[]">
		<input
			type='checkbox'
			name='drugs[]'
			class="drugCheckBox"
			value='{{ $drug->id }}'>
			{{ $drug->name }}
		</label><br/>
	@endif
@endforeach


<p> Hallucinogens</p>
@foreach($drugs as $drug)
	@if($drug->drug_type =="Hallucinogens")
		<label for="drugs[]">
		<input
			type='checkbox'
			name='drugs[]'
			class="drugCheckBox"
			value='{{ $drug->id }}'>
			{{ $drug->name }}
		</label><br/>
	@endif
@endforeach

<p> Downers</p>
@foreach($drugs as $drug)
	@if($drug->drug_type =="Downers")
		<label for="drugs[]">
		<input
			type='checkbox'
			name='drugs[]'
			class="drugCheckBox"
			value='{{ $drug->id }}'>
			{{ $drug->name }}
		</label><br/>
	@endif
@endforeach


@endsection