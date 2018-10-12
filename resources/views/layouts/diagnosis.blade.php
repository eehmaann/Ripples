@extends('layouts.pracitioner')
@section('head')
    <script src="/js/navigation.js"></script>
@endsection


@section('content')
	<div id="diagnosisform">
		<form method='POST' action='/diagnosis'>
		@yield('diagnosis')
		</form>

		<table>
		<tr>
			<td> </td>
			<td> Column A</td>
			<td>Column B</td>
		</tr>
		
			@for($row = 1; $row <= 6; $row++)
			<tr>
				<td>Row {{$row}}</td>
				@for($column = 1; $column<=2; $column++ )
				<td>					
      				@foreach($emotions as $emotion)
      					@if($emotion->col_name==$column && $emotion->row_name==$row)
      						<span class="emotion"> {{ $emotion->name}} </span> <br>
       					@endif
       				@endforeach
       			</td>
       			@endfor
       		</tr>
       		@endfor
   </table>

		<p>Are there any underlying causes </p>
		<p id="lastcause">No</p>
		<p id="newcause">Yes</p> 
	</div>
@endsection