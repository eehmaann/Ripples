@extends('layouts.diagnosis')
 @section('pagejs')
 <script src="/js/circuits.js"></script>
 @endsection

@section('diagnosis')
@if(sizeof($emotions)> 0)
<h3>{{$diagnosis->name}} Emotions</h3>

  <div class="row">
    <div class="col-2" style="border: thin black solid">
		  <h4>Column A</h4>
            @foreach($emotions as $emotion)
             @if($emotion->col_name==1)
                {{ $emotion->name }}<br>
            @endif
          @endforeach
    </div>
    <div class="col-2" style="border: thin black solid">
      <h4>Column B</h4>
            @foreach($emotions as $emotion)
             @if($emotion->col_name==2)
                {{ $emotion->name }}<br>
            @endif
          @endforeach
    </div>
  </div>
@endif
@endsection
                