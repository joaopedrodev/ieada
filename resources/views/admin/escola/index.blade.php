@include('layouts.admin')

<div class="container">
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titulo</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        @foreach($escola as $escolas)
        <tr>
          <td scropt="row">{{$loop->index + 1}}</td>
          <td><a href="/admin/escola/{{$escolas->id}}">{{$escolas->title}}</a></td>
          <td>
            <a href="/admin/escola/{{$escolas->id}}" class="btn btn-success "><ion-icon name="create-outline"></ion-icon>Visualizar</a>
            <a href="/admin/escola/{{$escolas->id}}/edit" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon>Editar</a>
             <form action="/admin/escola/{{$escolas->id}}" method="POST" style="display:inline-block">
                @csrf 
                @method('DELETE')
                <button type="submit" class="btn btn-danger delete-btn" ><ion-icon name="trash-outline"></ion-icon>Deletar</button>
             </form>
        </tr>
      @endforeach
      </table>
      <a href="/admin/escola/create" class="btn btn-success edit-btn"><ion-icon name="create-outline"></ion-icon>novos lideres </a>
</div>




@include('layouts.footeradmin')