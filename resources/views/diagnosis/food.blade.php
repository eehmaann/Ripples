@extends('layouts.diagnosis')
@section('pagejs')
 <script src="/js/food.js"></script>
@endsection

@section('diagnosis')
<p>What foods should be added or subtracted?</p>
@include('components.Foodlist')
@endsection