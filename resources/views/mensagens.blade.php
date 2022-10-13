@include('layouts.header')

<div class="container" >
    <div class="jumbotron-fluid text-center container">
        <h3 card-title class="display-6 text-center">Mensagem Bíblica</h3>
        <br>
        <img src="image/ieada.jpg" class="img-fluid" width="300" height="300">
        <br>
        <br>
        @foreach($mensagemBiblica as $mensa)
        <tr>
          <td scropt="row">{{$loop->index + 1}}</td>
          <td><a href="/mensagens/{{$mensa->id}}">{{$mensa->title}}</a></td>
          <td><a href="/mensagens/{{$mensa->id}}">{{substr($mensa->description,0,35)}}</a></td>
             
        </tr>
      @endforeach
        <br>
        <br>
    </div>
</div>

@include('layouts.footer')