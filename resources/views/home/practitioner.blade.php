@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Welcome {{$user()->name}}</div>
                <div class="card-body">
                    <div class="col-md-5">
                        <p id="startPanelRetriever" class="clicker">Conduct Session</p>
                        <div class="sessionStart">
                            @include('Navigation.practiionerstart')
                        </div>
                    </div>

                 
            </div>
        </div>
    </div>
</div>
@endsection