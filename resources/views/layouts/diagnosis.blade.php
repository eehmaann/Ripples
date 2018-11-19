@extends('layouts.practitioner')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
@yield('pagecss')
@section('js')
     <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
      <script src="/js/generalsubmit.js"></script>
    @yield('pagejs')
    <script src="/js/navigation.js"></script>
@endsection
@section('content')
    <h1>{{$diagnosis->name}}</h1>
	<div id="diagnosisform" class="container">
		<form id="barrierform" method='POST' action=@yield('destination','../../../problemsb') >
			@yield('diagnosis')
             {{ csrf_field() }}
            <div id="hiddenform">
                <p id="diagnosisname">{{$diagnosis->name}}</p>
                <p id="appointmentnumber">{{$appointment->id}}</p>
                <label>Diagnosis ID</label>
                <input
                    type='text'
                    id='diagnosis_id'
                    name='diagnosis_id'
                    value='{{$diagnosis->id}}'
                    readonly>
                <label>Description</label>
                    <input
                        type='text'
                        id='description'
                        name='description'
                        value=''
                        readonly>
                <label>Solution</label>
                    <input 
                        type="text" 
                        name="solution"
                        id="solution"
                        readonly>
            </div>
            @yield('emotion')
        </form>
    		<div id="nextstep" >
    			<h3 id="progressionQuestion">Are there any underlying causes </h3>
                <div style="width: 15%;">
    			     <p id="lastCauseClicker" class="pathClicker alert alert-danger">No</p>
    			     <p id="newCauseClicker" class="pathClicker alert alert-success">Yes</p>
                     @yield('paths')
                </div>
    	   </div> 

	</div>

@endsection

