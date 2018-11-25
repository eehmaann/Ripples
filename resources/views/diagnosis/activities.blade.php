@extends('layouts.diagnosis')
 @section('pagejs')
    <script src="/js/activity.js"></script>
  <script src="/js/suggestionList.js"></script>

 @endsection


@section('diagnosis')
<div class="row justify-content-center">
    <div class="col-md-11">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="curesuggestions">
                        <p>Need for {{$diagnosis->name}}</p>
                        <p> These are possible suggestions</p>
                        <ul>
                            @foreach($diagnosis->detailer as $detailer)
                                <li class="suggestion">{{$detailer->name}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 @endsection


