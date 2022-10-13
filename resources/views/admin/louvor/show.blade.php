@include('layouts.admin')

<div class="container">
    <h3>Vizualização das Lideres</h3>
</div>
<div class="container">
    <img src="/img/louvor/{{$louvor->image}}" class="img-fluid" alt="" style="border-radius: 10px" style="width: 70px" height="70px">

    <h4>Nome das Lideres</h4>
    {{$louvor->title}}

    <h4>Descrição</h4>
    {{$louvor->description}}
</div>

@include('layouts.footeradmin')