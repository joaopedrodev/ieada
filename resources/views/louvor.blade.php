@include('layouts.header')

<div class="container" >
    <div class="jumbotron-fluid text-center container">
        <h3 card-title class="display-6 text-center">Departamento de Senhoras <h1>Sublime Louvor</h1> </h3>
        @foreach($louvor as $sublime)
        <br>
        <br>
        <img src="/img/louvor/{{$sublime->image}}" alt="" class="img-preview" class="img-fluid" alt="" width="450" height="400" style="border-radius: 10px"> <br>
        <br>
        <blockquote class="blockquote text-center">
        <p class="mb-0">{{$sublime->title}}</p>
          <footer class="blockquote-footer">{{$sublime->description}} <cite title="Título da fonte"></cite></footer>
        </blockquote>
       
        <br>
    </div>

   
 @endforeach
</div> 
</div>

@include('layouts.footer')