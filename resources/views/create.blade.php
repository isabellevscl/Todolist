<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>To do list</title>
        <style>
         #master{
            margin: 0%;
            padding: 0%;
            background-color: #063970;
        }
        </style>    
    </head>
    <body>
        <div id="master">
            <div> <h2> To do list </h2> </div>
            <form action="{{ route('cadastrar_tarefa') }}" method="POST">
                @csrf
                <label for=""> Nome </label> <br>
                <input type="text" name="Nome"> <br>
                <label for="">Descrição</label> <br>
                <input type="text" name="Descricao">
                <button>Salvar</button>
            </form> 
        </div>        
    </body>
</html> 