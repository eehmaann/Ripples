
  <script src="/js/appointmentexit.js"></script>
  <div class="container-fluid">

    <ul class="nav navbar-nav">
    	 <a href="{{ url('/homesession') }}"><li class='goClicker'>Save and Exit</li></a>
    	<li>
    		<form class="goClicker" id="publishForm" action='{{ route("appointment.publish", [$appointment->id]) }}' method="POST">
    			<span id="publish">Publish Appointment</span>
                                        @csrf
            </form>
    	</li>
    
        <li>   
        	<form class="destroyClicker" id="destroyForm" action='{{ route("appointment.delete", [$appointment->id])}}' method="POST">
    			<span  id="destroy">Destroy Appointment</span>
    			{!! method_field('delete') !!}
                 @csrf
            </form>
    	</li>

       @if(!empty($deletableProblem))
        <li>Should {!!$deletableProblem->description!!} be the last cause?</li>
        <li>
          <form class="destroyClicker" id="deleteForm" action='{{ route("problem.delete", [$deletableProblem->id, $appointment->id])}}' method="POST">
          <span id="delete">Delete Cause</span>
          {!! method_field('delete') !!}
                 @csrf
          </form>
        </li>
        @endif

    </ul>
        <div class="row">

       <p class="warning" id="publishWarning">Publishing is not a reversable action.  After publishing the report, the customer can see the report, but to continue working you will need to create a new appointment, unresolved problems will carry over.</p>
       <p class="warning" id="destroyWarning">This action is not reversable.  All work except chnages to heartwalls and disconnections will be undone. </p>
       <p class="warning" id="deleteWarning">This action is not reversable.  Cause will forever be deleted </p>
   </div>
  </div> 