<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem das listas de tarefas</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</head>

<body>
    <nav>
        <div class="logo">
            <a class="" href="">SIMPLES TASKS</a>
            <img src="https://www.pngall.com/wp-content/uploads/12/Green-Check-PNG-Cutout.png" alt="">
        </div>
        <ul>
            <li><a href="#" onclick="document.getElementById('logout').submit()"><i
                        class="bi bi-box-arrow-right"></i></a></li>
            <form id="logout" action="{{ route('logout') }}" method="POST">
                @csrf
            </form>
        </ul>
    </nav>

    <main id="container">
        <div class="content-header">
            <h2>Listagem de listas de tarefas</h2>
            <a class="link" href="{{ route('todo-list.create') }}">Criar nova lista</a>
        </div>         
    </main>

</html>
