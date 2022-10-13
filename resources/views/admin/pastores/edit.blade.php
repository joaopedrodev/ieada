
@include('layouts.header')
<div class="container  col-md-6 ml-sm-6">
        <h1 class="text-center"> Editar Formulário de Cadastro de Pastor</h1>
        <br>
    <form action="{{ url('/admin/pastores/' . $pastore->id) }}" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            @csrf
            @method('PUT')
            <div class="form-group">
            <img src="/img/pastor/{{$pastore->image}}" alt="" class="img-preview" class="img-fluid" alt="" style="border-radius: 10px"> <br>
                <label for="image">Foto do Pastor</label>
                <input type="file" id="image" name="image" class="form-control-file" required="campo obrigatorio">
            </div>
            <div class="form-group">
                
                    <input type="text"  name="name"class="form-control" placeholder="Nome" required="nome" value="{{$pastore->name}}" required="campo obrigatorio">
                

                <div class="form-group">
                   <br>
                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" placeholder="Texto sobre o Pastor" required rows="50" required="campo obrigatorio">{{$pastore->description}}</textarea>
                </div>
            
            </div>
        
            
            <br> 
            
            <button type="submit" class="btn btn-primary">Enviar Cadastro</button>
        </div>
    </form> 
</div>
@include('layouts.footer')