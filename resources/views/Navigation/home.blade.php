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

                    <div class="col-md-5">
                        <span id="reportID">style="display:none;"
                        <p id="viewPanelRetriever" class="clicker">View reports</p>
                        <p id"recentReport" class="clicker">View most recent completed report
                            <br> <span id="mostRecentDetails">(Enter the details)</span></p>
                        <div class="viewReports">
                            <select name="clientSelector" id="clientSelector" class="form-control input-sm">
                                <option value></option>
                                @foreach($users as $user)
                                <option value={{$user->id}}>
                                    {{$user->name}}</option>
                                @endforeach
                            </select>
                            </label>
                            <p class='error' id="clienterror">*Please select a user</p>
                            <p id="mostRecentOfUser" class="clicker">

                    
                                <label>Case</label>
                                    <select id="viewCaseSelector" class="form-control input-sm" name="case">
                                        <option value=""></option>
                                    </select>
                                <p class="error" id="viewcaseerror">*Please select a case</p>

                                <label>Appointment</label>
                                    <select id="appointmentViewSelector" class="form-control input-sm" name="appointment">
                                        <option value=""></option>
                                    </select>
                                <p class="error" id="viewappointmenterror">*Please select an appointment</p>
                                <p id="reportViewer" class="clicker"> Go</p>
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection