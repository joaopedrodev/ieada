@include('layouts.admin')

<div class="container  col-md-6 ml-sm-6">
        <h1 class="text-center">Editar formulário de Cadastro de Membros  2022</h1>
        <br>
    <form action="{{ url('/admin/cadastros/' . $cadastro->id) }}" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            @csrf
            @method('PUT')
            <div class="form-group">
                <div class="foto">
                    <img src="/img/membro/{{$cadastro->image}}" alt="" class="img-preview" class="img-fluid" alt="" style="height: 300px;" required="campo obrigatorio"> <br>
                </div>
                
                <label for="image">Foto do Membro</label>
                <input type="file" id="image" name="image" class="form-control-file" required="campo obrigatorio">
                
            </div>
            <div class="row">
                <div class="col">
                    <input type="text"  name="nome"class="form-control" placeholder="Nome" required="nome" value="{{$cadastro->nome}}" >
                </div>

                <div class="col">
                    <input type="text" name="sobrenome" class="form-control" placeholder="Sobrenome" required="sobrenome" value="{{$cadastro->sobrenome}}">
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col">
                    <label for="inputAddress"></label> <input type="text"
                        class="form-control" name="endereco" id="inputAddress"
                        placeholder="Endereço" required="endereco" value="{{$cadastro->endereco}}">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <input type="text" name="bairro" class="form-control" placeholder="Bairro" required="bairro" value="{{$cadastro->bairro}}">
                </div>
                <div class="col">
                    <input type="text" name="cidade" class="form-control" placeholder="Cidade" required="cidade" value="{{$cadastro->cidade}}">
                </div>
                
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <input type="text" name="cep" class="form-control" placeholder="Cep" required="cep" value="{{$cadastro->cep}}">
                </div>
                <div class="col">
                    <input type="text" name="registro" class="form-control"
                        placeholder="Registro Geral" required="rg" value="{{$cadastro->registro}}">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <input type="text" name="orgao" class="form-control"
                        placeholder="Órgão Expedidor" required="orgao" value="{{$cadastro->orgao}}">
                </div>
                
                <div class="col">
                    <input type="text" name="cpf" class="form-control" placeholder="CPF" required="cpf" value="{{$cadastro->cpf}}">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <input type="email" name="email" class="form-control"
                        placeholder="Email" required="email" value="{{$cadastro->email}}">
                </div>
                
                <div class="col">
                    <input type="text" name="profissao" class="form-control" placeholder="Profissão" required="profissao" value="{{$cadastro->profissao}}">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <input type="text" name="formacao" class="form-control"
                        placeholder="Grau de Escolaridade" required="formacao" value="{{$cadastro->formacao}}">
                </div>
                
                <div class="col">
                    <input type="text" name="estadocivil" class="form-control" placeholder="Estado Civil" required="estadocivil" value="{{$cadastro->estadocivil}}">
                </div>
            </div>
            <br>
            
            
            
            
                <div class="row">
                <div class="col">
                    <input type="text" name="unidadefederativa" class="form-control"
                        placeholder="Unidade Federativa" required="Uf" value="{{$cadastro->unidadefederativa}}">
                </div>
                <br>
                <div class="col">
                    <input type="text" name="tiposanguineo" class="form-control" placeholder="Tipo Sanguineo" required="tiposanguineo" value="{{$cadastro->tiposanguineo}}">
                </div>
            </div>
            <br>
                <div class="row">
                <div class="col">
                    <input type="text" name="telefone" class="form-control"
                        placeholder="Telefone ou Celular" required="telefone" value="{{$cadastro->telefone}}">
                </div>
                <br>
                <div class="col">
                <input type="text" name="batizado" class="form-control"
                        placeholder="Você é Batizado ?" required="batizado" value="{{$cadastro->batizado}}">
                    
                </div>
            </div>
            <br>
            <div class="form-group">
                <label for="date">Data de nascimento</label>
                <input type="date" name="date" id="date" value="{{$cadastro->date->format('Y-m-d')}}">
            </div>

            <div class="form-group">
                <label for="title">Tem algum dom</label>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Cantar" id="">Cantar
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Tocar violão" id="">Tocar Violão
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Tocar baixo" id="">Tocar baixo
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Tocar guitarra" id="">Tocar guitarra
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Tocar bateria" id="">Tocar bateria
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Tocar teclado" id="">Tocar teclado
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Pregador(a)" id="">Pregador(a)
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Prefiro não informar" id="">Prefiro não informar
                </div>
            </div>
        
            
            <br> 
            
            <button type="submit" class="btn btn-primary">Editar Cadastro</button>
        </div>
    </form> 
</div>
@include('layouts.footeradmin')
