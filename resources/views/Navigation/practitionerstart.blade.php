<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="/css/app.css" type='text/css' rel='stylesheet'>
    <script   src="https://code.jquery.com/jquery-3.3.1.js"   integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="   crossorigin="anonymous"></script>
     <script src="/js/sessioncreation.js"></script>
</head>
<div class="container">
    <div>
                <p>Is this a new not yet registered client</p>
                <ul class= "clicker" id="clientbuild">
	               <li class="userClicker">Yes</li>
	               <li class="userClicker">No</li>
                </ul>

<!--Only shows if user exists-->
        <div class="form-group" id="existingcustomer">
	       <label> Existing Customer
	       <select name="userSelector" id="userSelector" class="form-control input-sm">
		      <option value></option>
                @foreach($users as $user)
                    <option value={{$user->id}}>
        	       {{$user->name}}</option>
                @endforeach
            </select>
	       </label>
            <p class='error' id="usererror">Please select a user</p>
        </div>

        <div id="newcustomer">
        	<label> Customer full name</label>
        	<input
            type='text'
            id='nametext'
            name='nametext'
            value=''>
            <p class="error" id="nameerror"> Please Enter the name</p>
            <label>Email Address</label>
            <input
            type='email'
            id='emailtext'
            name='emailtext'
            value=''> 
            <p class="error" id="emailerror">Please enter the email address</p>
        </div>
    </div>

<!--This will only show if the customer already exists-->
    <div>
        <div id="optionCaseChoice">
        	<p>Is this a new case</p>
        	<ul>
        		<li class="caseClicker">Yes</li>
        		<li class="caseClicker">No</li>
        	</ul>
        </div>
        		
        <div id ="existingCaseRetriever"> 
        	<label>Case</label>
        	        <select id="caseSelector" class="form-control input-sm" name="goal_id">
                    <option value=""></option>
               </select>
               <p class="error" id="caseerror"> Please select a case</p>
        </div>
        <!-- Only shows if the problem is new-->
        <div id="newCaseBuilder">
        	<label>Reason for call</label>
        	<input
            type='text'
            id='reasontext'
            name='reasontext'
            value=''> 
            <p class="error" id="reasonerror"> Please enter why the customer schedule appointment</p>
        </div>
        <p id="reasonStater"></p>
        <div id="reasonBuilder">
            <label>What is the goal</label>
            <input
            type='text'
            id='goaltext'
            name='goaltext'
            value=''> 
            <p class="error" id="goalerror"> Please enter what you are striving for in the sessions</p>
        </div>
    </div>
<p id="sessionStarter">Begin Session</p> 
<!-- These questions will determine whether where the form is posted to.>
	<form post = location determined by questions to create User, case and session: case and session, or just session
-->
<div id="sessionform" class="container">
    <p id="reasonStater"></p>
	<form id="creationForm" method='POST' action='' >
        {{ csrf_field() }}
   		<div>
            <input
                type='number'
                id='user_id'
                name='user_id'
                value=''
                readonly>
            <input
                type='text'
                id='client_name'
                name='client_name'
                value=''
                readonly>
            <input
                type='email'
                id='client_email'
                name='client_email'
                value=''
                readonly>
            <input
                type='number'
                id='goal_id'
                name='goal_id'
                value=''
                readonly>
            <input
                type='text'
                id='case_description'
                name='case_description'
                value=''
                readonly>
            <input
                type='text'
                id='goal_description'
                name='goal_description'
                value=''
                readonly>
        </div>
	</form>
</div>
</div>