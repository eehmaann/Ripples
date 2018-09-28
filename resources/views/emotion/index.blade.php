@extends('layouts.pracitioner')

@section('content')

<!-- You are repeating yourself far too muuch.  Ask for help!!-->
	<table>
		<tr>
			<td> </td>
			<td> Column A</td>
			<td>Column B</td>
		</tr>
		<tr>
			<td> Row 1 </td>
			<td>
      			@foreach($emotions as $emotion)
      				@if($emotion->col_name=="1" && $emotion->row_name=="1")
      					<span class="emotion"> {{ $emotion->name}} </span> <br>
       				@endif
       			@endforeach
   			</td>
   			<td> 
	   			 @foreach($emotions as $emotion)
	      			@if($emotion->col_name=="2" && $emotion->row_name=="1")
	      				<span class="emotion"> {{ $emotion->name}} </span> <br>
	       			@endif
	       		@endforeach
   			</td>
   		</tr>

   		<tr>
			<td> Row 2 </td>
			<td>
	      		@foreach($emotions as $emotion)
	      			@if($emotion->col_name=="1" && $emotion->row_name=="2")
	      				<span class="emotion"> {{ $emotion->name}} </span> <br>
	       			@endif
	       		@endforeach
	   		</td>
	   		<td> 
	   			@foreach($emotions as $emotion)
	      			@if($emotion->col_name=="2" && $emotion->row_name=="2")
	      				<span class="emotion"> {{ $emotion->name}} </span> <br>
	       			@endif
	       		@endforeach
	   		</td>
   		</tr>

	   	<tr>
			<td> Row 3 </td>
			<td>
	      		@foreach($emotions as $emotion)
	      			@if($emotion->col_name=="1" && $emotion->row_name=="3")
	      				<span class="emotion"> {{ $emotion->name}} </span> <br>
	       			@endif
	       		@endforeach
	   		</td>
	   		<td> 
	   			@foreach($emotions as $emotion)
	      			@if($emotion->col_name=="2" && $emotion->row_name=="3")
	      				<span class="emotion"> {{ $emotion->name}} </span> <br>
	       			@endif
	       		@endforeach
	   		</td>
	   	</tr>

	   	<tr>
			<td> Row 4 </td>
			<td>
	      		@foreach($emotions as $emotion)
	      			@if($emotion->col_name=="1" && $emotion->row_name=="4")
	      				<span class="emotion"> {{ $emotion->name}} </span> <br>
	       			@endif
	       		@endforeach
	   		</td>

	   		<td> 
	   			@foreach($emotions as $emotion)
	      			@if($emotion->col_name=="2" && $emotion->row_name=="4")
	      				<span class="emotion"> {{ $emotion->name}} </span> <br>
	       			@endif
	       		@endforeach
	   		</td>
	   	</tr>

	   	<tr>
			<td> Row 5 </td>
			<td>
		      @foreach($emotions as $emotion)
		      	@if($emotion->col_name=="1" && $emotion->row_name=="5")
		      		<span class="emotion"> {{ $emotion->name}} </span> <br>
		       	@endif
		       @endforeach
	   		</td>
	   		<td> 
	   			@foreach($emotions as $emotion)
	      			@if($emotion->col_name=="2" && $emotion->row_name=="5")
	      				<span class="emotion"> {{ $emotion->name}} </span> <br>
	       			@endif
	       		@endforeach
	   		</td>
	   	</tr>

	   	<tr>
			<td> Row 6 </td>
			<td>
		      @foreach($emotions as $emotion)
		      	@if($emotion->col_name=="1" && $emotion->row_name=="6")
		      		<span class="emotion"> {{ $emotion->name}} </span> <br>
		       	@endif
		       @endforeach
	   		</td>	
	   		<td> 
	   			 @foreach($emotions as $emotion)
	      			@if($emotion->col_name=="2" && $emotion->row_name=="6")
	      				<span class="emotion"> {{ $emotion->name}} </span> <br>
	       			@endif
	       		@endforeach
	   		</td>
	   	</tr>
   </table>
@endsection