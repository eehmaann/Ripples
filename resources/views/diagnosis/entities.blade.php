@extends('layouts.diagnosis')
@section('pagejs')
 <script src="/js/entity.js"></script>
@endsection
@section('diagnosis')
<p>Please click on type of entity</p>
<p id="spiritsentence"> </p>
<ul id="spirittype">
    <li class="spiritclicker">Disembodied Spirits</li>
    <li class="spiritclicker">Evil Spirits</li>
</ul>
<p id="errormessage" class="error"> You must select a type of entitiy to continue</p>
@endsection