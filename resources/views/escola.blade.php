@include('layouts.header')

<div class="container" >
    <div class="jumbotron-fluid text-center container">
        <h3 card-title class="display-6 text-center"> <h1>Escola Bíblica</h1> </h3>
        @foreach($escola as $escolas)
        <br>
        <br>
        <img src="/img/escola/{{$escolas->image}}" alt="" class="img-preview" class="img-fluid" alt="" width="450" height="400" style="border-radius: 10px"> <br>
        <br>
        <blockquote class="blockquote text-center">
        <p class="mb-0">{{$escolas->title}}</p>
          <footer class="blockquote-footer">{{$escolas->description}} <cite title="Título da fonte"></cite></footer>
        </blockquote>
       
        <br>
    </div>

   
 @endforeach
</div> 
</div>

@include('layouts.footer')