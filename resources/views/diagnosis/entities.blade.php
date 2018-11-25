@extends('layouts.diagnosis')
@section('pagejs')
 <script src="/js/entity.js"></script>
@endsection
@section('diagnosis')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
					
					<p>Select type of entity?</p>
					<p id="spiritsentence"> </p>
					<ul id="spirittype" style="width: 30%;">
    					<li class="spiritclicker clicker">Disembodied Spirits</li>
    					<li class="spiritclicker clicker">Evil Spirits</li>
					</ul>
					<p id="errormessage" class="error"> You must select a type of entitiy to continue</p>
				
				</div>
			</div>
		</div>
	</div>
@endsection