@include('layouts.admin')

<div class="container">
    <h4>Cadastrar evento</h4>
</div>
<br>
<div class="container">
    <form action="/admin/sermoes" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            @csrf
                
                <div class="form-group">
                  <label for="exampleFormControlInput1">Título</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" name="title" placeholder="escreva aqui o titulo do evento" required="campo obrigatorio">
                </div>
                
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Escreva o sermão</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3" required="campo obrigatorio"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div> 
    </form>             
</div>


@include('layouts.footeradmin')