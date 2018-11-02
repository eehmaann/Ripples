
<p>Is this a new not yet registered client</p>
<ul class= "clicker" id="clientbuild">
	<li class="userClicker">Yes</li>
	<li class="userClicker">No</li>
</ul>

<!--Only shows if user exists-->
<div id="existingcustomer">
	<h3> Existing Customer</h3>
	<select name="userSelector" id="user" class="form-control input-sm">
        <option value=""></option>
    </select>
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

<!--This will only show if the customer already exists-->
<div id="optionCaseChoice">
	<p>Is this a new case</p>
	<ul>
		<li class="caseClicker">Yes</li>
		<li class="caseClicker">No</li>
	</ul>
</div>
		
<div id ="existingCaseRetriever"> 
	        <select id="caseSelector" class="form-control input-sm" name="case_id">
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
<div id="reasonBuilder"
    <label>What is the goal</label>
    <input
    type='text'
    id='goaltext'
    name='goaltext'
    value=''> 
    <p class="error" id="goalerror"> Please enter what you are striving for in the sessions</p>
</div>
<p id="sessionStarter">Begin Session</p> 
<!-- These questions will determine whether where the form is posted to.>
	<form post = location determined by questions to create User, case and session: case and session, or just session
-->
<div id="sessionform" class="container">
	<form method='POST' action='' >
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
                id='case_id'
                name='case_id'
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