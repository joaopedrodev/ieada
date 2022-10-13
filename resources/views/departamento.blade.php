@include('layouts.header')

<div class="container" >
    <div class="jumbotron-fluid text-center container">
        <h3 card-title class="display-6 text-center">Departamento de Louvor <h1>...</h1> </h3>
        @foreach($departamento as $departamentos)
        <br>
        <br>
        <img src="/img/departamento/{{$departamentos->image}}" alt="" class="img-preview" class="img-fluid" alt="" width="450" height="400" style="border-radius: 10px"> <br>
        <br>
        <blockquote class="blockquote text-center">
        <p class="mb-0">{{$departamentos->title}}</p>
          <footer class="blockquote-footer">{{$departamentos->description}} <cite title="Título da fonte"></cite></footer>
        </blockquote>
       
        <br>
    </div>

   
 @endforeach
</div> 
</div>

@include('layouts.footer')