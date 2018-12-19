<div class="container">
  <div class="row">
    <div class="col-4" >
  	   <div id="locators" class="col-12" >
         <div class="card" style="border: blue solid; display: inline-block;">
                <div class="card-body" >
          <h3>Search areas</h3>
          <p id="backclicker"></p>
          <ul class="list-unstyled">
            @foreach($locators as $locator)
              <li class="clickLocate clicker" id='{{$locator->name}}' 
              data-category="{{$locator->category_type}}">{{$locator->name}}</li>
            @endforeach
          </ul>
        </div>
      </div>
      </div>
    </div>
    <div class="col-7">
      <div id="diagnoses" style="border: red solid; display: inline-block;">
        <div class="card">
                <div class="card-body">
        <h3 id='diagnosehader'></h3>
        <ul class="list-unstyled">
          @foreach($diagnoses as $diagnosis)
               <a href='../diagnosis/{{$diagnosis->url}}/{{$diagnosis->id}}/create/{{$appointment->id}}'>  
              <li class='clickDiagnose clicker' id="{{$diagnosis->name}}"                      
                data-category="{{$diagnosis->category_type}}"> 
                  @if(strlen($diagnosis->picture)>4)
                    <img src="{{$diagnosis->picture}}" style="width:10rem;height:10rem;" alt="Picture of {{$diagnosis->name}}">
                  @endif
                  {{ $diagnosis->name}}
              </li>
            </a>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
    </div>
  </div>
</div>