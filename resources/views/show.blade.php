<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/estilo.css">
        <title>Ver To do list</title>
    </head>
    <body>
        <div class="container col-sm-12 col-md-12 col-lg-12 logo img">
            <div class="container-fluid"> <img src="/img/Todolist_2.png"> </div>
        </div>
        <div class=container1>
            <div class="form">
                <label for=""> Nome </label> <br>
                <input type="text" name="Nome" value="{{$todolist->Nome}}"> <br>
                <label for="">Descrição</label> <br>
                <input type="text" name="Descricao" value="{{$todolist->Descricao}}">
                <button class="button">Salvar</button>
            </div>    
        </div>        
    </body>
</html> 