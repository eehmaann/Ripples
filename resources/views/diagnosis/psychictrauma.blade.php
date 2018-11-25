@extends('layouts.diagnosis')
@section('pagejs')
 <script src="/js/psychic.js"></script>
 <script src="/js/geneology.js"></script>
@endsection
@section('diagnosis') 
   <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-body">
                	<div class="row"> 
						<p>Is the physic trauma inherited?</p>
						<div class="col-md-3">
							<ul >
								<li class="originClicker clicker">Yes</li>
								<li class="originClicker clicker">No</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div id="ownTrauma">
							<label>At what age did this occur?</label>
    						<input
        						type='text'
        						id='ageinput'
        						name='ageinput'
        						value=''>
        						<p id="ageError" class="error">Please include age of trauma</p>
 						</div>
 						
 						<div id="inheritedTrauma">
 							@include('layouts.geneology')
 						</div>
 					</div>

	<div id="emotionList">
	@include('layouts.emotions')
	</div>
				</div>
			</div>
		</div>
	</div>

@endsection