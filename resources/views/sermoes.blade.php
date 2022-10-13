@include('layouts.header')

<div class="container" >
    <div class="jumbotron-fluid text-center container">
        <h3 card-title class="display-6 text-center"> <h1>Sermões</h1> </h3>
        @foreach($sermao as $sermoes)
        <br>
        <br>
        <blockquote class="blockquote text-center">
        <p class="mb-0">{{$sermoes->title}}</p>
          <footer class="blockquote-footer">{{$sermoes->description}} <cite title="Título da fonte"></cite></footer>
        </blockquote>
       
        <hr>
    </div>

   
 @endforeach
</div> 
</div>

@include('layouts.footer')