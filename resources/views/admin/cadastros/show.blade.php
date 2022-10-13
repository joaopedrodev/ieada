@include('layouts.admin')
 
<div class="container">
    Visualização de cadastro
</div>
<div class="col-md10 offset-md-1">
    <div class="row">
        <div id="image-container" class="col-md-6">
            <img src="/img/membro/{{$cadastro->image}}" class="img-fluid" alt="" style="border-radius: 10px">
        </div>
       

        <div id="info-container"  class="col-md-6" style="margin-top: 2.5%">
            
        <h6>ID: {{$cadastro->id}}</h6>
        <h6>CADASTRADO POR: {{$cadastroOwner['name']}}</h6>
        <h6>NOME: {{strtoupper($cadastro->nome)}}</h6> 
        <h6>SOBRENOME: {{strtoupper($cadastro->sobrenome)}}</h6>
        <h6>ENDEREÇO: {{strtoupper($cadastro->endereco)}}</h6>
        <h6>BAIRRO: {{strtoupper($cadastro->bairro)}}</h6>
        <h6>CIDADE: {{strtoupper($cadastro->cidade)}}</h6>
        <h6>CEP: {{strtoupper($cadastro->cep)}}</h6>
        <h6>REGISTRO GERAL: {{strtoupper($cadastro->registro)}}</h6>
        <h6>ORGÃO EXPEDIDOR: {{strtoupper($cadastro->orgao)}}</h6>
        <h6>CPF: {{strtoupper($cadastro->cpf)}}</h6>
        <h6>EMAIL: {{strtoupper($cadastro->email)}}</h6>
        <h6>PROFISSÃO: {{strtoupper($cadastro->profissao)}}</h6>
        <h6>FORMAÇÃO: {{strtoupper($cadastro->formacao)}}</h6>
        <h6>ESTADO CIVIL: {{strtoupper($cadastro->estadocivil)}}</h6>
        <h6>TIPO SANGUINEO: {{strtoupper($cadastro->tiposanguineo)}}</h6>
        <h6>TELEFONE: {{strtoupper($cadastro->telefone)}}</h6>
        <h6>BATIZADO?:{{strtoupper($cadastro->batizado)}}</h6>
    
        <h6>DATA DE NASCIMENTO: {{date('d/m/Y', strtotime($cadastro->date))}}</h6>
        <h6>Suas habilidades</h6>
        <ul id="items-list">
            @foreach($cadastro->items as $item)
            <li>{{strtoupper($item)}}</li>
            @endforeach
        </ul>

        </div>
    </div>
</div>
