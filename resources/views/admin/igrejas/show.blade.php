@include('layouts.admin')
<div class="container  col-md-6 ml-sm-6">
        <h1 class="text-center">{{$igreja->title}}</h1>
        <br>
    
        <div class="form-group">
            @csrf
           
            <div class="form-group">
               <label>  </label>
               {{$igreja->title}}
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1"></label>
                {{$igreja->description}} 
              </div>
              Escrito por:  {{$igrejaOwner['name']}}
             
            </div>
        </div>    
    
</div> 

@include('layouts.footeradmin')