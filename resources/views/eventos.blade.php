@include('layouts.header')

<div class="container" >
    <div class="jumbotron-fluid text-center container">
        <h3 card-title class="display-6 text-center"> Eventos do ano 2022</h3>
        <br>
        <img src="image/ieada.jpg" class="img-fluid" width="300" height="300">
        <br>
        <br>
        <br>
        <br>
        @foreach ($event as $events)
        <img src="/img/events/{{$events->image}}" class="img-fluid" alt="" style="border-radius: 10px">
           <h5>Titulo:  {{$events->title}}</h5>
            <h6>Descrição: {{$events->description}}</h6>
        @endforeach
    </div>
</div>

@include('layouts.footer')