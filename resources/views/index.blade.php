@include('layouts.header')

<div class="container" >
    <div class="jumbotron-fluid text-center container">
        
        <br>
        <img src="image/ieada.jpg" class="img-fluid" width="300" height="300">
        <br>
        <br>
        <h3 card-title class="display-6 text-center">LINHA DO TEMPO </h3>
        <br>
        <br>
    </div>
</div>
<div class="container  text-justify">
    <blockquote class="blockquote">
    @foreach($igreja as $igrejas)
        <p class=" text-justify">
           {{$igrejas->name}}
           {{$igrejas->description}}
        </p> 
    @endforeach     
    <br>
    
    </blockquote>  
</div>
@include('layouts.footer')