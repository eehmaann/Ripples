@extends('layouts.diagnosis')
@section('pagejs')
 <script src="/js/malnutrition.js"></script>
@endsection

@section('diagnosis')
<div style="width:25%">
	<p>What type of change to diet should be made</p>
	<ul>
		<li class="dietClicker" id="foodlist">Foods</li>
		<li class="dietClicker" id="herblist">Herbs</li>
		<li class="dietClicker" id="vitaminlist">Vitamins</li>
	</ul>
</div>
<div class="foodlist">
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
            			<label>
            				Avoid
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
<p class="foodlist" id="foodlisthider">Hide Food</p>
</div>

<div class="herblist">
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
            			<label>
            				Avoid
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
<p class="herblist" id="herblisthider"> Hide Herbs</p> 
</div>
<div class="vitaminlist">
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
            		<label>
            			Avoid
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
<p class="vitamlist" id="vitaminlisthider"> Hide Vitamins</p>
</div>
<p id="errormessage" class="error"> At least one item in one of the list must be selected</p>
@endsection