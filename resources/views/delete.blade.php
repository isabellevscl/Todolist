<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Deletar To do list</title>
    </head>
    <body>
        <form action="{{ route('excluir_tarefa', ['id' => $todolist->id])}}" method="POST">
            @csrf
            <label for=""> Tem certeza que deseja excluir essa tarefa?</label> <br>
            <input type="text" name="Nome" value="{{$todolist->Nome}}" > <br>
            <button>Sim</button>
        </form>     
    </body>
</html> 