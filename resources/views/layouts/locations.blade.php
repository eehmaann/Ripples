<div class="container">
  <div class="row">
    <div class="col-4" >
  	   <div id="locators" class="col-12" style="border: blue solid; display: inline-block;">
          <h3>Search category of causes</h3>
          <p id="backclicker"></p>
          <ul>
            @foreach($locators as $locator)
              <li class="clickLocate" id='{{$locator->name}}' 
              data-category="{{$locator->category_type}}">{{$locator->name}}</li>
            @endforeach
          </ul>
      </div>
    </div>
    <div class="col-7">
      <div id="diagnoses" style="border: red solid; display: inline-block;">
        <h3 id='diagnosehader'></h3>
        <ul class="list-unstyled">
          @foreach($diagnoses as $diagnosis)
              <li class='clickDiagnose' id="{{$diagnosis->name}}"                      
                data-category="{{$diagnosis->category_type}}"> 
                <a href='../diagnosis/{{$diagnosis->url}}/{{$diagnosis->id}}/create/{{$appointment->id}}'>  
                  {{ $diagnosis->name}}
                </a>
              </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</div>