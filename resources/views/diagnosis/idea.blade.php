@extends('layouts.diagnosis')
@section('pagejs')
 <script src="/js/ideaallergy.js"></script>
@endsection

@section('diagnosis')
<div class="row justify-content-center">
    <div class="col-md-11">
        <div class="card">
            <div class="card-body">
                <div class="row">
						<div class="col-3">
							<label> Allergic to what?</label>
							<input
						    type='text'
						    id='allergy'
						    name='allergy'
						    value=''>
							<p id="errormessage" class="error">You must include an allergy</p>
						</div>
						<div class="col-8">
							<p id="emotionClicker" class="clicker" style="width:20%">Show/Hide Emotions</p>
							<table id="emotionList">
									<tr>
										<td> </td>
										<td> Column A</td>
										<td>Column B</td>
									</tr>
									@for($row = 1; $row <= 6; $row++)
										<tr>
											<td>Row {{$row}}</td>
											@for($column = 1; $column<=2; $column++ )
											<td style="border: thin black solid">					
							      				@foreach($emotions as $emotion)
							      					@if($emotion->col_name==$column && $emotion->row_name==$row)
							      						<span class="emotionClicker">
							                					{{ $emotion->name }}
							                			</span>
							   
															<br>
							       					@endif
							       				@endforeach
							       			</td>
							       			@endfor
							       		</tr>
							       	@endfor
							</table>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection