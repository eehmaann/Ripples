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
				<td style="border: thin black solid">					
      				@foreach($emotions as $emotion)
      					@if($emotion->col_name==$column && $emotion->row_name==$row)
      						<label>
                				<input
                    				type='checkbox'
                    				name='emotions[]'
                    				class="emotionCheckBox"
                    				value='{{ $emotion->id }}'>
                					{{ $emotion->name }}
            					</label>
								<br>
       					@endif
       				@endforeach
       			</td>
       			@endfor
       		</tr>
       		@endfor
</table>