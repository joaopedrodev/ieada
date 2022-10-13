@include('layouts.admin')
<div class="container  col-md-6 ml-sm-6">
        <h1 class="text-center">Resultado da ata de  reunião</h1>
        <br>
    
        <div class="form-group">
            @csrf
            <div class="form-group">
               <label>Titulo</label>
              {{$ata->title}}
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Texto da reunião</label>
               {{$ata->description}}
              </div>
             
            </div>
        </div>    
    
</div> 

@include('layouts.footeradmin')