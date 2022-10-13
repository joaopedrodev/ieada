@include('layouts.admin')
<div class="container">
    <h2>Resultado de cadastro de membros 2022</h2>
</div>


<div class="col-md-10 offset-md-1 dashboard-title-container">
    <hr>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">NOME</th>
        <th scope="col">SOBRENOME</th>
        <th scope="col">AÇÕES</th>
      </tr>
    </thead>
  
  <tbody>
    @foreach($cadastro as $mem)
      <tr>
        <td scropt="row">{{$loop->index + 1}}</td>
        <td><a href="/admin/cadastros/{{$mem->id}}">{{$mem->nome}}</a></td>
        <td><a href="/admin/cadastros/{{$mem->id}}">{{$mem->sobrenome}}</a></td>
        <td>
          <a href="/admin/cadastros/{{$mem->id}}" class="btn btn-success "><ion-icon name="create-outline"></ion-icon>Visualizar</a>
          <a href="/admin/cadastros/{{$mem->id}}/edit" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon>Editar</a>
           <form action="/admin/cadastros/{{$mem->id}}" method="POST" style="display:inline-block">
              @csrf 
              @method('DELETE')
              <button type="submit" class="btn btn-danger delete-btn" ><ion-icon name="trash-outline"></ion-icon>Deletar</button>
           </form>
      </tr>
    @endforeach
  </table>
  <a href="/admin/cadastros/create" class="btn btn-success edit-btn"><ion-icon name="create-outline"></ion-icon>Cadastrar membro </a>
  </tbody>








@include('layouts.footeradmin')