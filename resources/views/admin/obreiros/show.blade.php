@include('layouts.admin')

<div class="container">
    <h3>Vizualização</h3>
</div>
<div class="container">
    <img src="/img/obreiros/{{$obreiro->image}}" class="img-fluid" alt="" style="border-radius: 10px" style="width: 70px" height="70px">

    <h4>Nomes dos Lideres</h4>
    {{$obreiro->title}}

    <h4>Descrição</h4>
    {{$obreiro->description}}
</div>

@include('layouts.footeradmin')