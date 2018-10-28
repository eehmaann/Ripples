@extends('layouts.practitioner')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
@section('js')
      <script   src="https://code.jquery.com/jquery-3.3.1.js"   integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="   crossorigin="anonymous"></script>
    @yield('pagejs')
    <script src="/js/navigation.js"></script>
@endsection

@section('content')
    <h1>{{$diagnosis->name}}</h1>
	<div id="diagnosisform" class="container">
		<form method='POST' action=@yield('destination','../../../problemsb') >
			@yield('diagnosis')
             {{ csrf_field() }}
            <div>
                <p id="diagnosisname">{{$diagnosis->name}}</p>
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
    		<div id="nextstep" style="width: 15%;">
    			<p>Are there any underlying causes </p>
    			<p id="lastcause" class="pathClicker alert alert-danger">No</p>
    			<p id="newcause" class="pathClicker alert alert-success">Yes</p>
    	   </div> 
		</form>
	</div>

@endsection

