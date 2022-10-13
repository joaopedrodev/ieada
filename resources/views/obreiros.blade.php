@include('layouts.header')

<div class="container" >
    <div class="jumbotron-fluid text-center container">
        <h3 card-title class="display-6 text-center"> <h1>Obreiros</h1> </h3>
        @foreach($obreiro as $obreiros)
        <br>
        <br>
        <img src="/img/obreiros/{{$obreiros->image}}" alt="" class="img-preview" class="img-fluid" alt="" width="450" height="400" style="border-radius: 10px"> <br>
        <br>
        <blockquote class="blockquote text-center">
        <p class="mb-0">{{$obreiros->title}}</p>
          <footer class="blockquote-footer">{{$obreiros->description}} <cite title="Título da fonte"></cite></footer>
        </blockquote>
        @endforeach
        <br>
    </div>
       
</div> 


@include('layouts.footer')