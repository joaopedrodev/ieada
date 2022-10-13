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
        <h3 card-title class="display-6 text-center">Departamento de adolescentes <h1>Geração Eleita</h1> </h3>
        @foreach($adolescentes as $adolescentes)
        <br>
        <br>
        <img src="/img/adolescentes/{{$adolescentes->image}}" alt="" class="img-preview" class="img-fluid" alt="" width="450" height="400" style="border-radius: 10px"> <br>
        <br>
        <blockquote class="blockquote text-center">
        <p class="mb-0">{{$adolescentes->title}}</p>
          <footer class="blockquote-footer">{{$adolescentes->description}} <cite title="Título da fonte"></cite></footer>
        </blockquote>
       
        <br>
    </div>

   
 @endforeach
</div> 
</div>

@include('layouts.footer')