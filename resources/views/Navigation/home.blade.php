@extends('layouts.app')

@section('content') 
 <script src="/js/viewGetter.js"></script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h2>What would you like to do?</h2>
                    <div class=row>
                        <p id="viewPanelRetriever" class="clicker col-3">View reports</p>
                        <p id="startPanelRetriever" class="clicker col-3">Conduct Session</p>
                    </div>
                    <div id="sessionBeginner">
                        @include('Navigation.practitionerstart')
                    </div>


                     <div id="reportSearch">
                        @include('components.practitionerViewSearch')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection