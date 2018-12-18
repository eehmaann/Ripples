@extends('layouts.diagnosis')
@section('pagejs')
 <script src="/js/images.js"></script>
@endsection
@section('diagnosis')



 <div class="row">
	<div class="col-4">
		 <label>Please describe the image</label><br>
	    <textarea
	        type='text'
	        id='imageTextBox'
	        name='imageTextBox'
	        cols="30" 
	        rows="20">
	    </textarea>
	        <p id="errormessage" class="error">Please include an description for the image.</p>
	</div>
	<div class="col=1"></div>
	<div class="col-6">
		<p> Is the image of a particular emotions?</p>
		<p id="emotionClicker" class="clicker">Show/Hide Emotions</p>
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
		      						<div class="emotionClicker clicker" >{{ $emotion->name }} </div>
		       					@endif
		       				@endforeach
		       			</td>
		       			@endfor
		       		</tr>
		       	@endfor
		</table>
	</div>
</div>
@endsection