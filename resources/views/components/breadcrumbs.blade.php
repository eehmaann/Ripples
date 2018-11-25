<div class="container">
	<div class="row">
			<div class="panel panel-default">
				<h2>
					<strong>Working towards {{$appointments->goals->reason}}</strong>
				</h2>
			</div>
	</div>
	<div class="row">
		<div class="breadcrumbs panel panel-default" style="outline: black solid 1px;">
			<h4>Underlying causes not yet cleared</h4>
			@foreach($problems as $problem)
	  			<span id='breadcrumb'>{{$problem->diagnosis->name}}</span>
	    		{{$loop->last?'':'->'}}
			@endforeach
		</div>
	</div>
	<span style="display:none;">{{$appointments->id}}</span>

	  <h2>Can {!! $problems->last()->description !!} be cleared</h2>
</div>