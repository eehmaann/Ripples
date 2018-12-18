@if(!empty($appointments))

<div class="row">
	<div class="col-2">
		<p>View Other Reports</p>
	</div>
	<div class="col-7">  
		<select name="reportSelector" id="reportSelector" class="form-control input-sm">
			<option></option>
			@foreach($appointments as $appointment) 
				<option value={{$appointment->id}}>
				{{$appointment->created_at}} for {{$appointment->goals->goal}}</option>
			@endforeach
		</select>
	</div>
	<a id="reportGetter" class="col-2" href="#">
		<p class="clicker" id="newReport" style="background-color:green; color:white;">
			Go</p>
	</a>
</div>

@endif