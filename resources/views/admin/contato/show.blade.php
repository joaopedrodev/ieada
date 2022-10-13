@include('layouts.admin')
<div class="container  col-md-6 ml-sm-6">
        <h1 class="text-center">Fale Conosco</h1>
        <br>
    
        <div class="form-group">
            @csrf
            <div class="form-group">
               <label>Nome</label>
              {{$contato->name}}
            </div>
            <div class="form-group">
               <label>Celular ou Whatsapp</label>
              {{$contato->smartphone}}
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Descrição</label>
               {{$contato->description}}
              </div>
             
            </div>
        </div>    
    
</div> 

@include('layouts.footeradmin')