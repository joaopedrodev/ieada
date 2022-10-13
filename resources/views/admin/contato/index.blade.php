@include('layouts.admin')

<div class="container">
    <h2>Fale Conosco 'Mensagens</h2>
</div>

<div class="container">
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Celular ou Whatsapp</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        @foreach($contato as $contatos)
        <tr>
          <td scropt="row">{{$loop->index + 1}}</td>
          <td><a href="/admin/contato/{{$contatos->id}}">{{$contatos->name}}</a></td>
          <td><a href="/admin/contato/{{$contatos->id}}">{{substr($contatos->description,0,35)}}</a></td>
          <td>
             <form action="/admin/contato/{{$contatos->id}}" method="POST" style="display:inline-block">
                @csrf 
                @method('DELETE')
                <button type="submit" class="btn btn-danger delete-btn" ><ion-icon name="trash-outline"></ion-icon>Deletar</button>
             </form>
        </tr>
      @endforeach
      </table>
     
</div>

@include('layouts.footeradmin')




