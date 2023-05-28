<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"type="text/css">
</head>

<body class="">
    <nav>
        <div class="logo">
            <a class="" href="">SIMPLES TASKS</a>
            <img src="https://www.pngall.com/wp-content/uploads/12/Green-Check-PNG-Cutout.png" alt="">
        </div>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Nova Tarefa</a></li>
            <li><a href="#">Listagem</a></li>
            <li><a href="#" onclick="document.getElementById('formLogout').submit()">Sair</a></li>
            <form id="formLogout" method="POST" action="{{ route('auth.logout') }}">
                @csrf
            </form>
        </ul>
    </nav>


    <main id="container">
        <form method="" action="" id="commomForm">
            <div class="content-header">
                <h2>Criar nova tarefa</h2>
            </div>
            <label for="name">Nome da tarefa:</label>
            <input type="text" name="name" placeholder="Digite o nome"
                value="" />
                <button class="btn" type="submit">Criar</button>
        </form>
    </main>

</html>
