@include('layouts.admin')

<div class="container">
    <h4>Editar evento</h4>
</div>
<br>
<div class="container">
    <form action="/admin/events/" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            @csrf
                <div class="form-group">
                <img src="/img/events/{{$event->image}}" alt="" class="img-preview" class="img-fluid" alt="" style="border-radius: 10px" required="campo obrigatorio"> <br>
                <label for="image">Imagem ilustrativa</label>
                <input type="file" id="image" name="image" class="form-control-file">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Titulo do evento</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" name="title" placeholder="escreva aqui o titulo do evento" value="{{$event->title}}" required="campo obrigatorio">
                </div>
                
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Descrição do evento</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3" required="campo obrigatorio"{{$event->description}}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Cadastrar evento</button>
        </div> 
    </form>             
</div>


@include('layouts.footeradmin')