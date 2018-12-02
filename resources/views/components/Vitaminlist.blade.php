<p>Vitamins</p>
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
				<td style="border: black thin solid;">					
	      		@foreach($vitamins as $vitamin)
	      			@if($vitamin->columnNumber==$column && $vitamin->rowNumber==$row)
      				<label>
                	<input
                   		type='checkbox'
                    	name='vitamins[]'
                    	class="vitaminCheckBox"
                    	value='{{ $vitamin->id }}'>
                		Take <strong>{{$vitamin->vitamin}}</strong>
            		</label>
                <br>
            		<label>
            			Avoid <strong>{{$vitamin->vitamin}}</strong>
                	<input
                    	type='checkbox'
                    	name='avoidvitamins[]'
                    	class="avoidvitaminCheckBox"
                    	value='{{$vitamin->id }}'>
            		</label>
					<br>
       				@endif
       			@endforeach
       			</td>
       		@endfor
       	</tr>
    @endfor
</table>