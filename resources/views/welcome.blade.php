@include('layouts.header')

<!-- Abre Corpo Principal -->
<div class="container" >
    <div class="jumbotron-fluid text-center container">
        <h3 card-title class="display-6 text-center"> Seja Bem Vindo a Igreja Assembléia de Deus Ministerio de Anápolis</h3>
        <br>
        <img src="image/ieada.jpg" class="img-fluid" width="300" height="300">
        <br>
        <br>
        <br>
        <br>
    </div>
</div>


<div class="container">
    <div class=" text-center">
        <h2>Nossa Programação Semanal</h2>

        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">Dias da semana</th>
                <th scope="col">Horário</th>
                <th scope="col">Nome do departamento</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Segunda-Feira</td>
                <td>19:30 às 21:30</td>
                <td>Ensaio de varões</td>
              </tr>
              <tr>
                <td>Terça-Feira</td>
                <td>19:30 às 21:30</td>
                <td>Culto de ensino</td>
              </tr>
              <tr>
                <td>Quarta-Feira</td>
                <td>19:30 às 21:30</td>
                <td>Ensaio de senhoras</td>
              </tr>
              <tr>
                <td>Quinta-Feira</td>
                <td>19:30 às 21:30</td>
                <td>Culto de libertação</td>
              </tr>
              <tr>
                <td>Sexta-Feira</td>
                <td>19:30 às 20:00</td>
                <td>Oração </td>
              </tr>
              <tr>
                <td>Sexta-Feira</td>
                <td>20:00 às 22:00</td>
                <td>Ensaio do Ministério de louvor</td>
              </tr>
              <tr>
                <td>Sábado</td>
                <td>14:00 às 15:30</td>
                <td>Ensaio de Coreografia</td>
              </tr>
              <tr>
                <td>Sábado</td>
                <td>16:00 às 17:30</td>
                <td>Ensaio dos adolescentes</td>
              </tr>
              <tr>
                <td>Domingo</td>
                <td>08:00 às 10:00</td>
                <td>Escola Bíblica</td>
              </tr>
              <tr>
                <td>Domingo</td>
                <td>18:00 às 20:30</td>
                <td>Culto da Família</td>
              </tr>
              <tr>
                <td>Segunda a sexta</td>
                <td>08:00 às 9:00</td>
                <td>Consagração do circulo de oração</td>
              </tr>
              <tr>
                <td>Terça a Sexta</td>
                <td>09:00 as 12:00 às 14:00 as 18:00</td>
                <td>Expediente gabinete Pastoral (Obs. agende seu horário na sua casa) </td>
              </tr>

            </tbody>
          </table>
    </div>
</div>    

                  
      <div class="container">
        <div class=" text-center">
            <div  id="fb-root" class="container text-center" ><h2>Mensagem Bíblica do dia</h2></div>
              @foreach($mensagemBiblica as $mensa)
                  <tr>
                    
                    <td>{{$mensa->title}}</td>
                    <td>{{$mensa->description}}</td>
             
                  </tr>
              @endforeach
            </div>
          </div> 
        </div>    
        <br>
              <br>
              <br>
            

    <div class="container">
        <div class=" text-center">
            <div  id="fb-root" class="container text-center" ><h2>Nosso Facebook</h2></div>
                <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.2';
                fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>
                    <div class="fb-page" class="container text-center" 
                        data-href="https://www.facebook.com/IEADA-Girassol-363301131100110/" 
                        data-width="540"
                        data-hide-cover="false"
                        data-show-facepile="true"></div>
                    </div>
            </div> 
        </div>    
        <br>
        <!--Fecha Corpo do facebook-->

        <!--Google Mapas-->
        <div class="card-body">
            <div class=" container card-title text-center">
                <hr>
                <h1 class="card-title text-center">Nossa Localização </h1>
                    <iframe class="container" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3840.274043453483!2d-48.40555799545827!3d-15.736635563520045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x82d9afa0eecf7f41!2sIEADA+GIRASSOL!5e0!3m2!1spt-BR!2sbr!4v1542382490822" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
 
        <!--Fecha Google Mapas-->

        <!-- Fecha Corpo Principal -->

@include('layouts.footer')        
