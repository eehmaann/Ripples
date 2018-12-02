
<div class="container">
	<div class="col-md-8">
       <div class="card">
           <div class="card-body">
				<div class="row">
					<div class="panel panel-default">
						<h2>
							<strong>Working towards {{$appointments->goals->reason}}</strong>
						</h2>
					</div>
				</div>
				@if(!empty($problems))
				<div class="row">
					<div class="breadcrumbs panel panel-default" style="outline: black solid 1px;">
						<h4>Underlying causes not yet cleared</h4>
							@foreach($problems as $problem)
	  					<span id='breadcrumb'>{{$problem->diagnosis->name}}</span>
	    					{{$loop->last?'':'->'}}
						@endforeach
					</div>
				</div>
				@endif
				<span style="display:none;">{{$appointments->id}}</span>
	  			@if(!empty($lastProblem))
	  				<h2>Can {{$lastProblem->description}} be cleared</h2>
	  			@endif
	  		
			</div>
		</div>
	</div>
</div>
