@extends('templates.main')

@section('content')
    <section class="bloco bg-success bg-opacity-25">
            
        <div class="p-1 bg-success-subtle">
        <br><br>
            <form class="form-control-lg p-5" action="/postform" method="POST">
            @csrf
                <h3>Seu Contato:</h3>
                <label for="Nome">Nome</label>
                <input class="form-control" type="text" id="Nome" name="Nome" placeholder="Quem é você?">
                
                <br>
                
                <label for="email">E-mail</E-mail></label>
                <input class="form-control" type="e-mail" id="email" name="email" placeholder="insira seu email">
                
                <br>
                
                <label for="produto">produto</label>
                <input class="form-control" type="text" id="produto" name="produto" placeholder="qual produto deseja?">
                
                <br>
                <br>
                
                <h3>Medidas (em centimetros)</h3>
                <label for="comprimento">comprimento</label>
                <input class="form-control" type="text" id="comprimento" name="comprimento" placeholder="comprimento">
            
                <br>
            
                <label for="largura">Largura</label>
                <input class="form-control" type="text" id="largura" name="largura" placeholder="largura">
                
                <br>

                <label for="espessura">Espessura</label>
                <input class="form-control" type="text" id="espessura" name="espessura" placeholder="espessura">
                <br>
                <br>
                <input class="btn btn-light" type="submit" name="ENVIAR" value="ENVIAR"><br><br><br>
            </form>
        </div>

        <a href="index.php" id="link"><h2>Voltar para o Inicio</h2></a>
        <br><br>
    </section>
    
@endsection