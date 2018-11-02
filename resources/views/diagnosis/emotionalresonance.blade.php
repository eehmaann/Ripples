@extends('layouts.diagnosis')
@section('pagejs')
 <script src="/js/emotionres.js"></script>
@endsection

@section('diagnosis')
@section('destination','../../../problemsemotion') 
@include('layouts.currentTrappedEmotion')

@include('layouts.emotions')
@endsection
