@extends('layouts.pracitioner')

@section('content')

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
  <ul>
   @foreach($locators as $locator)
   <li>{{$locator->name}}</li>
   @endforeach
</ul>
@endsection