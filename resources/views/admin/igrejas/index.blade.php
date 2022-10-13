@include('layouts.admin')

<div class="container">
    <h2>Bio da Igreja</h2>
</div>

<div class="container">
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titulo</th>
            <th scope="col">Descrição</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        @foreach($igreja as $igrejas)
        <tr>
          <td scropt="row">{{$loop->index + 1}}</td>
          <td><a href="/admin/igrejas/{{$igrejas->title}}">{{$igrejas->title}}</a></td>
          <td><a href="/admin/igrejas/{{$igrejas->description}}">{{substr($igrejas->description,0,35)}}</a></td>
          <td>
            
            <a href="/admin/igrejas/{{$igrejas->id}}/edit" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon>Editar</a>
             <form action="/admin/igrejas/{{$igrejas->id}}" method="POST" style="display:inline-block">
                @csrf 
                @method('DELETE')
                <button type="submit" class="btn btn-danger delete-btn" ><ion-icon name="trash-outline"></ion-icon>Deletar</button>
             </form>
        </tr>
      @endforeach
      </table>
      <td>
        <a href="/admin/igrejas/create" class="btn btn-success edit-btn"><ion-icon name="create-outline"></ion-icon>Criar nova História da Igreja </a>
      </td>
</div>

@include('layouts.footeradmin')




