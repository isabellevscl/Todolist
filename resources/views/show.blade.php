<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ver To do list</title>
    </head>
    <body>
        
        <label for=""> Nome </label> <br>
        <input type="text" name="Nome" value="{{$todolist->Nome}}"> <br>
        <label for="">Descrição</label> <br>
        <input type="text" name="Descricao" value="{{$todolist->Descricao}}">
        <button>Salvar</button>    
    </body>
</html> 