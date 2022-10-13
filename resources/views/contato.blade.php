@include('layouts.header')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<style>
		.whatsapp-link {
			position: fixed;
			width: 60px;
			height: 60px;
			bottom: 40px;
			right: 40px;
			background-color: #25d366;
			color: #fff;
			border-radius: 50px;
			text-align: center;
			font-size: 30px;
			box-shadow: 1px 1px 2px #888;
			z-index: 1000;
		}
 
		.fa-whatsapp {
			margin-top: 16px;
		}
	</style>
<div class="container  col-md-6 ml-sm-6">
        <h1 class="text-center">Fale Conosco</h1>
        <br>
    <form action="/admin/contato/" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            @csrf
            <div class="form-group">
                <input type="text" id="title" name="name" class="form-control" placeholder="Nome" required>
            </div>
            <div class="form-group">
                <input type="text" id="title" name="smartphone" class="form-control" placeholder="Celular ou Whatsapp" required>
            </div>

           <div class="form-group">
                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" placeholder="Descreva o assunto" required rows="10"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Enviar</button>
            </div> 
        </div>    
    </form>

    <a class="whatsapp-link" href="https://web.whatsapp.com/send?phone=5561996081715" target="_blank">
		<i class="fa fa-whatsapp"></i>
	</a>
    
</div>     

@include('layouts.footer')