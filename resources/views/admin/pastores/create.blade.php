@include('layouts.admin')
<div class="container  col-md-6 ml-sm-6">
        <h1 class="text-center">Formulário de Cadastro de Pastor</h1>
        <br>
    <form action="/admin/pastores" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            @csrf
            <div class="form-group">
                <label for="image">Foto do Pastor</label>
                <input type="file" id="image" name="image" class="form-control-file" required="campo obrigatorio">
            </div>
            <div class="form-group">
                
                    <input type="text"  name="name"class="form-control" placeholder="Nome" required="nome" required="campo obrigatorio">
                

                <div class="form-group">
                   <br>
                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" placeholder="Texto sobre o Pastor" required rows="50" required="campo obrigatorio"></textarea>
                </div>
            
            </div>
        
            
            <br> 
            
            <button type="submit" class="btn btn-primary">Enviar Cadastro</button>
        </div>
    </form> 
</div>
@include('layouts.footeradmin')