<p> Herbs</p>
<table>
		<tr>
			<td> </td>
			<td> Column A</td>
			<td>Column B</td>
			<td>Column C</td>
			<td>Column D</td>
		</tr>
		
		@for($row = 1; $row <= 6; $row++)
		<tr>
			<td>Row {{$row}}</td>
			@for($column = 1; $column<=4; $column++ )
			<td style="border: black thin solid;">					
      			@foreach($herbs as $herb)
      				@if($herb->columnNumber==$column && $herb->rowNumber==$row)
      					<label>
                		<input
                    		type='checkbox'
                    		name='herbs[]'
                    		class="herbCheckBox"
                    		value='{{ $herb->id }}'>
                			Take <strong>{{ $herb->name }}</strong>
            			</label>
                  <br>
            			<label>
            				Avoid <strong>{{ $herb->name }}</strong>
                			<input
                    		type='checkbox'
                    		name='avoidherbs[]'
                    		class="avoidherbCheckBox"
                    		value='{{ $herb->id }}'>
            			</label>
						<br>
       				@endif
       			@endforeach
       		</td>
       		@endfor
       	</tr>
       	@endfor
</table>