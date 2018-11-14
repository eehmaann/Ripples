@extends('layouts.app')
@section('content')
 <div class="col-md-8 col-sm-12">
    <p>
       For more information or to schedule an appointment, Please fill in the form to the left and submit.
    </p>

	{!! Form::open(['route' => 'contact.store']) !!}

	<div class="form-group">
	    {!! Form::label('name', 'Your Name') !!}
	    {!! Form::text('name', null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
	    {!! Form::label('email', 'E-mail Address') !!}
	    {!! Form::text('email', null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('msg', 'Comment/ Question') !!}
	    {!! Form::textarea('msg', null, ['class' => 'form-control']) !!}
	</div>

	{!! Form::submit('Submit', ['class' => 'btn btn-info']) !!}

	{!! Form::close() !!}

</div>
@endsection