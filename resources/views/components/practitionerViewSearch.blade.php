@if(!empty($appointments))
    @if(!empty($appointment))
        <div class="col-4"><a href='report/{{$appointment->id}}'> <p class="toReportClicker" id={{$appointment->id}}>
            View {{$appointment->users->name}}: {{$appointment->goals->goal}} {{$appointment->created_at}}
                </p></a></div>
    @endif
        <div class="viewReports">
            <label> Select User</label>
                <select name="clientSelector" id="clientSelector" class="form-control input-sm">
                    <option value></option>
                    @foreach($clients as $client)
                        <option value={{$client->id}}>{{$client->name}}</option>
                    @endforeach
                 </select>
                <p class='error' id="clienterror">*Please select a user</p>
                    
              
            <label>Select Case</label>
                <select id="viewCaseSelector" class="form-control input-sm" name="viewCaseSelector">
                    <option value=""></option>
                </select>
            <p class="error" id="viewcaseerror">*Please select a case</p>
            <label>Select Appointment</label>
                <select id="appointmentViewSelector" class="form-control input-sm" name="appointment">
                    <option value=""></option>
                </select>
            <p class="error" id="viewappointmenterror">*Please select an appointment</p>
            <br>
            <a id="reportViewer"  href="#"><p class="goClicker"> View appointment</p></a>
        </div>
@endif