<p>Foods</p>
	<table>
		<tr>
			<td> </td>
			<td> Column A</td>
			<td>Column B</td>
			<td>Column C</td>
			<td>Column D</td>
		</tr>
		
		@for($row = 1; $row <= 9; $row++)
			<tr>
				<td>Row {{$row}}</td>
				@for($column = 1; $column<=4; $column++ )
				<td style="border: black thin solid;">					
      			@foreach($foods as $food)
      				@if($food->columnNumber==$column && $food->rowNumber==$row)
      					<label>
                			<input
                    		type='checkbox'
                    		name='foods[]'
                    		class="foodCheckBox"
                    		value='{{ $food->id }}'>
                			Take <strong>{{ $food->name }}</strong>
            			</label>
                  <br>
            			<label>
            				Avoid <strong>{{ $food->name }}</strong>
                			<input
                    		type='checkbox'
                    		name='avoidfoods[]'
                    		class="avoidfoodCheckBox"
                    		value='{{ $food->id }}'>
            				</label>
								<br>
       					@endif
       				@endforeach
       			</td>
       			@endfor

       		</tr>
       	@endfor
</table>