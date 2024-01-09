<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MYX | Início</title>
    <link rel="stylesheet" href="/css-atual/style.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="/imgs/Oficial.gif">
    <script src="/js/Requisicoes/Header/header.js" defer></script>
</head>
<body>
<x-header/>
    <main>
    <section id="sectionForms">
    <!-- o form faz a validação dos inputs no back,
        e eles retornam (se tiver) uma string com o erro,
        vou deixar num span aq, mas dps ce faz sua mágica.
    -->
    <span>
        @error('email','password','password_confirmation')
            {{ $message }}
        @enderror
    </span>
        <form action="{{ route('register') }}" id="forms" method="post">
            <!-- esse csrf e a meta dele lá em cima prescisa pra mandar a requisição :P -->
            @csrf
            <div class="titleForms">Cadastre-se</div>
            <input type="text" placeholder="Digite seu Nome" class="inputs" name="name" required autocomplete="name" > 
            <input type="email" placeholder="Digite seu Email" class="inputs" name="email"required autocomplete="username" >
            <input type="password" placeholder="Digite sua senha" class="inputs" name="password" required autocomplete="new-password">
            <input type="password" placeholder="Confirme sua senha" class="inputs" name="password" required autocomplete="new-password">
            <button class="btnsBordersBottomLess">Cadastrar</button>
            <div id="possuiContaDiv">
                Já possui uma conta ? <a href="/entrar">Entre</a>
            </div>
        </form>
    </section>
</main>
    <footer>
        COPYRIGHT ©
    </footer>
</body>

</html>