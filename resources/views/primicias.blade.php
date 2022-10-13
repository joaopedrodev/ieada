@include('layouts.header')
 <!--Estilo de todo o site!-->
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


      <!--Fecha estilo do site-->
<div class="container" >
    <div class="jumbotron-fluid text-center container">
        <h3 card-title class="display-6 text-center">Departamento de crianças <h1>Primícias</h1> </h3>
        @foreach($primicias as $primicia)
        <br>
        <br>
        <img src="/img/primicias/{{$primicia->image}}" alt="" class="img-preview" class="img-fluid" alt=""  style="border-radius: 10px"> <br>
        <br>
        <blockquote class="blockquote text-center">
        <p class="mb-0">{{$primicia->title}}</p>
          <footer class="blockquote-footer">{{$primicia->description}} <cite title="Título da fonte"></cite></footer>
        </blockquote>
       
        <br>
    </div>

   
 @endforeach
</div> 
</div>

@include('layouts.footer')