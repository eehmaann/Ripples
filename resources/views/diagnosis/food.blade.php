@extends('layouts.diagnosis')
@section('pagejs')
 <script src="/js/malnutrition.js"></script>
@endsection

@section('diagnosis')
<p>What foods should be added or subtracted?</p>
@include('components.Foodlist')