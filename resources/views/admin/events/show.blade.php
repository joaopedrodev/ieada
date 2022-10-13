@include('layouts.admin')

<div class="container">
    <h3>Vizualização do evento</h3>
</div>
<div class="container">
    <img src="/img/events/{{$event->image}}" class="img-fluid" alt="" style="border-radius: 10px" style="width: 70px" height="70px">

    <h4>Titulo do evento</h4>
    {{$event->title}}

    <h4>Descrição</h4>
    {{$event->description}}
</div>

@include('layouts.footeradmin')