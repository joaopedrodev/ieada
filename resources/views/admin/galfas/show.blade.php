@include('layouts.admin')

<div class="container">
    <h3>Vizualização</h3>
</div>
<div class="container">
    <img src="/img/galfas/{{$galfa->image}}" class="img-fluid" alt="" style="border-radius: 10px" style="width: 70px" height="70px">

    <h4>Nomes dos Lideres</h4>
    {{$galfa->title}}

    <h4>Descrição</h4>
    {{$galfa->description}}
</div>

@include('layouts.footeradmin')