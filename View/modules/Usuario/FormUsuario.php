<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Cadastro Usuario</title>
    <style>
        label, input { display: block;}
    </style>
   
</head>
<body>
    <form action="/Usuario/save" method="post">
        <fieldset>
            <legend>Cadastro do Usuario</legend>

            <input type="hidden" value="<?= $model->id ?>" name="id" />

            <label for="nome">Nome:</label>
            <input id="nome" name="nome" value="<?= $model->nome ?>" type="text" />

            <label for="senha">Senha:</label>
            <input id="senha" name="senha value="<?= $model->senha ?>" type="text" />

        

            <button type="submit">Enviar</button>

        </fieldset>
    </form>    
</body>
</html>