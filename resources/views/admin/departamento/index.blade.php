@include('layouts.admin')

<div class="container">
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        @foreach($departamento as $departamentos)
        <tr>
          <td scropt="row">{{$loop->index + 1}}</td>
          <td><a href="/admin/departamentos->id}}">{{$departamentos->title}}</a></td>
          <td>
            <a href="/admin/departamento/{{$departamentos->id}}" class="btn btn-success "><ion-icon name="create-outline"></ion-icon>Visualizar</a>
            <a href="/admin/departamento/{{$departamentos->id}}/edit" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon>Editar</a>
             <form action="/admin/departamento/{{$departamentos->id}}" method="POST" style="display:inline-block">
                @csrf 
                @method('DELETE')
                <button type="submit" class="btn btn-danger delete-btn" ><ion-icon name="trash-outline"></ion-icon>Deletar</button>
             </form>
        </tr>
      @endforeach
      </table>
      <a href="/admin/departamento/create" class="btn btn-success edit-btn"><ion-icon name="create-outline"></ion-icon>Cadastrar novos lideres </a>
</div>




@include('layouts.footeradmin')