<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MYX | Início</title>
    <link rel="stylesheet" href="../css-atual/style.css">
    <link rel="icon" type="image/x-icon" href="../imgs/Oficial.gif">
    <script src="../js/Requisicoes/Header/header.js" defer></script>
</head>
<body>
   
<x-header/> 
<main>
    <ul>
        {{ session('status') ?? "" }}
            
    </ul>
    <section id="sectionForms">
        <form action="{{ route('login') }}" id="forms" method="post">
            @csrf
            <div class="titleForms">Login</div>
            <input type="text" placeholder="Digite seu Email" class="inputs">
            <input type="text" placeholder="Digite sua senha" class="inputs">
            <label><input type="checkbox" name="remember"> lembrar de mim</label>
            <button class="btnsBordersBottomLess">Entrar</button>
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">esqueceu a senha?</a>
            @endif
            <div id="possuiContaDiv">
                Não possui uma conta ? <a href="/cadastrar">Cadastre-se</a>
                <br>
                <!--<span id="senhaEsque"><a href="">Esqueceu sua senha ?</a></span>-->
            </div>                 
        </form>
    </section>
</main>
    <footer>
        COPYRIGHT ©
    </footer>
</body>
</html>