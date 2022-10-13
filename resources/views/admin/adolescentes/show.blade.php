@include('layouts.admin')

<div class="container">
    <h3>Vizualização dos Lideres</h3>
</div>
<div class="container">
    <img src="/img/adolescentes/{{$adolescentes->image}}" class="img-fluid" alt="" style="border-radius: 10px" style="width: 70px" height="70px">

    <h4>Nome das Lideres</h4>
    {{$adolescentes->title}}

    <h4>Descrição</h4>
    {{$adolescentes->description}}
</div>

@include('layouts.footeradmin')