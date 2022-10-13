@include('layouts.admin')

<div class="container">
    <h2>Mensagem Bíblica da Igreja 2022</h2>
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
        @foreach($mensagemBiblica as $mensa)
        <tr>
          <td scropt="row">{{$loop->index + 1}}</td>
          <td><a href="/admin/mensagens/{{$mensa->title}}">{{$mensa->title}}</a></td>
          <td><a href="/admin/mensagens/{{$mensa->description}}">{{substr($mensa->description,0,35)}}</a></td>
          <td>
            
            <a href="/admin/mensagens/{{$mensa->id}}/edit" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon>Editar</a>
             <form action="/admin/mensagens/{{$mensa->id}}" method="POST" style="display:inline-block">
                @csrf 
                @method('DELETE')
                <button type="submit" class="btn btn-danger delete-btn" ><ion-icon name="trash-outline"></ion-icon>Deletar</button>
             </form>
        </tr>
      @endforeach
      </table>
      <td>
        <a href="/admin/mensagens/create" class="btn btn-success edit-btn"><ion-icon name="create-outline"></ion-icon>Nova Mensagem Bíblica </a>
      </td>
</div>

@include('layouts.footeradmin')




