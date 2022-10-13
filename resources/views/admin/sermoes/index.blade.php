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
        @foreach($sermao as $sermoes)
        <tr>
          <td scropt="row">{{$loop->index + 1}}</td>
          <td><a href="/admin/sermoes/{{$sermoes->id}}">{{$sermoes->title}}</a></td>
          <td>
            <a href="/admin/sermoes/{{$sermoes->id}}" class="btn btn-success "><ion-icon name="create-outline"></ion-icon>Visualizar</a>
            <a href="/admin/sermoes/{{$sermoes->id}}/edit" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon>Editar</a>
             <form action="/admin/sermoes/{{$sermoes->id}}" method="POST" style="display:inline-block">
                @csrf 
                @method('DELETE')
                <button type="submit" class="btn btn-danger delete-btn" ><ion-icon name="trash-outline"></ion-icon>Deletar</button>
             </form>
        </tr>
      @endforeach
      </table>
      <a href="/admin/sermoes/create" class="btn btn-success edit-btn"><ion-icon name="create-outline"></ion-icon>novo sermão </a>
</div>




@include('layouts.footeradmin')