@extends('layouts.pracitioner')
@section('head')
    <script src="/js/navigation.js"></script>
@endsection


@section('content')
  <p> You are looking at <div id="test">Base</div></p>
	<div id="locators" class="col-4" style="border: blue solid; display: inline-block;">
    <p>Do you need to look in this section</p>
    <ul>
      @foreach($locators as $locator)
          <li class="{{$locator->category_type}}" value='{{$locator->name}}'> {{ $locator->name}}</li>
      @endforeach
    </ul>
  </div>

  <div id="diagnoses" class="col-4" style="border: red solid; display: inline-block;">
    <p> Possible Causes</p>
    <ul>
      @foreach($diagnoses as $diagnosis)
          <li class='{{$diagnosis->category_type}}' value='{{$diagnosis->name}}'> {{ $diagnosis->name}} </span> </li>
      @endforeach
    </ul>
  </div>
@endsection


  <script   src="https://code.jquery.com/jquery-3.3.1.js"   integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="   crossorigin="anonymous"></script>
    <script src="js/navigation.js"></script>
