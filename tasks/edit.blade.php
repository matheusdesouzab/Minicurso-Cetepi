<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar tarefa</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</head>

<body class="">
  
    <nav>
        <div class="logo">
            <a class="{{ route('todo-list.index') }}" href="">SIMPLES TASKS</a>
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
        <form method="POST" action="" id="commomForm">
            <div class="content-header">
                <h2>Editar</h2>
                <a class="link" href="">Listagem de tarefas</a>
            </div>
            <label for="label">Nome da lista de tarefa:</label>
            <input type="text" name="label" placeholder="Digite o nome da lista"
                value="" />
            <div>
                <input type="checkbox" id="is_complete" name="is_complete">
                <label for="is_complete">Já foi completada?</label>
            </div>
            <button class="btn" type="submit">Editar lista</button>
        </form>
    </main>

</html>
