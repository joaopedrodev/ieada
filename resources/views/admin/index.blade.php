@include('layouts.admin')

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1></h1>
      </div>
         <div class="container">
           <h5>Seja Bem Vindo {{strtoupper(auth()->user()->name)}}  <img class="img-circle elevation-2" alt="User Image" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" /></h5>
           
         </div> 
    </div>
  </div><!-- /.container-fluid -->
</section>
@include('layouts.footeradmin')

         