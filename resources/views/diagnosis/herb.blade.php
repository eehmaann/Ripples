@extends('layouts.diagnosis')
@section('pagejs')
 <script src="/js/herb.js"></script>
@endsection

@section('diagnosis')
<p>What foods should be added or subtracted?</p>
@include('components.Herblist')
@endsection