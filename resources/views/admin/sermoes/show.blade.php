@include('layouts.admin')

<div class="container">
    <h3>Vizualização</h3>
</div>
<div class="container">
   

    <h4>Nomes dos Lideres</h4>
    {{$sermao->title}}

    <h4>Descrição</h4>
    {{$sermao->description}}
</div>

@include('layouts.footeradmin')