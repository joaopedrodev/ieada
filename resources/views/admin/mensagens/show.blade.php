@include('layouts.admin')
<div class="container  col-md-6 ml-sm-6">
        <h1 class="text-center">Mensagem Bíblica</h1>
        <br>
    
        <div class="form-group">
            @csrf
           
            <div class="form-group">
               <label>  </label>
               {{$mensagemBiblica->title}}
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1"></label>
                {{$mensagemBiblica->description}} 
              </div>
              Escrito por:  {{$mensagemBiblicaOwner['name']}}
             
            </div>
        </div>    
    
</div> 

@include('layouts.footeradmin')