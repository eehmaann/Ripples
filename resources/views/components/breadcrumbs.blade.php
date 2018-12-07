
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
	       <div class="card">
	           <div class="card-body">
					<div class="row">
						<div class="panel panel-default">
							<h2>
								<strong>Working towards {{$appointment->goals->goal}}</strong>
							</h2>
						</div>
					</div>
					@if(count($problems)>0)
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
				
		  		
				</div>
			</div>
		</div>
	</div>
</div>
