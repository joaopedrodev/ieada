@include('layouts.header')
<style>
 .img{
   max-width:100%;
   max-height:100%;
   
 }
 .img-preview{
  width: 450px;
   height: 400px;
 }
</style>
<div class="container" >
    <div class="jumbotron-fluid text-center container">
        <h3 card-title class="display-6 text-center">Departamento de Varões <h1>Grupo Alfa</h1> </h3>
        @foreach($galfa as $galfas)
        <br>
        <br>
      
            <img src="/img/galfas/{{$galfas->image}}" alt="" class="img-preview class="img-fluid" alt=""  style="border-radius: 10px"> <br>
        

        <br>
        <blockquote class="blockquote text-center">
        <p class="mb-0">{{$galfas->title}}</p>
          <footer class="blockquote-footer">{{$galfas->description}} <cite title="Título da fonte"></cite></footer>
        </blockquote>
       
        <br>
    </div>

   
 @endforeach
</div> 
</div>

@include('layouts.footer')