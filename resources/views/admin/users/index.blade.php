@include('layouts.admin')

<div class="container">
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
          </tr>
        </thead>
        @foreach($user as $use)
        <tr>
          <td scropt="row">{{$loop->index + 1}}</td>
          <td><a href="">{{$use->name}}</a></td>
          <td><a href="">{{$use->email}}</a></td>
          <td>
            <a href="" class="btn btn-success edit-btn"><ion-icon name="create-outline"></ion-icon>Visualizar</a>
            <a href="" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon>Editar</a>
             <form action="" method="POST" style="display:inline-block">
                @csrf 
                @method('DELETE')
                <button type="submit" class="btn btn-danger delete-btn" ><ion-icon name="trash-outline"></ion-icon>Deletar</button>
             </form>
        </tr>
      @endforeach
      </table>
</div>




@include('layouts.footeradmin')