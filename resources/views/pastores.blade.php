@include('layouts.header')

<div class="container" >
    <div class="jumbotron-fluid text-center container">
        <h3 card-title class="display-6 text-center"> Pastores deste Ministério</h3>
        @foreach($pastore as $pasto)
        <br>
        <br>
        <img src="/img/pastor/{{$pasto->image}}" alt="" class="img-preview" class="img-fluid" alt="" width="300" height="300" style="border-radius: 10px"> <br>
        <br>
        <br>
        <br>
    </div>

    <div class="container  col-md-6 ml-sm-6">
    
  <div class="form-group">
    <div class="form-group">
       <div class="form-group">
          {{$pasto->name}}
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1"></label>
          {{$pasto->description}} 
        </div>
    </div>
  </div>    
  @endforeach
</div> 
</div>

@include('layouts.footer')