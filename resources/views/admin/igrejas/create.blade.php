@include('layouts.admin')
<div class="container  col-md-6 ml-sm-6">
        <h1 class="text-center">Criar História sobre a Igreja</h1>
        <br>
    <form action="/admin/igrejas" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            @csrf
            <div class="form-group">
               <label>Titulo</label>
                <input type="text" id="title" name="title" class="form-control" placeholder="Titulo" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Texto da Mensagem</label>
                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" required rows="50"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Salvar </button>
            </div>
        </div>    
    </form>
</div>     

@include('layouts.footeradmin')