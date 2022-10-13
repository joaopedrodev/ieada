@include('layouts.admin')
<div class="container  col-md-6 ml-sm-6">
 
  <div class="form-group">
    <div class="form-group">
      <img src="/img/pastor/{{$pastore->image}}" alt="" class="img-preview" class="img-fluid" alt="" style="border-radius: 10px"> <br>
       <div class="form-group">
            {{$pastore->name}}
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1"></label>
          {{$pastore->description}} 
        </div>
        Digitado por:  {{$pastoresOwner['name']}}
             
    </div>
  </div>    
    
</div> 

@include('layouts.footeradmin')