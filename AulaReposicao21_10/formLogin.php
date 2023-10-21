<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <?php
            if(isset($_GET["mensagem"]) && !empty($_GET["mensagem"])){
        ?>
            <div class="alert alert-success" role="alert">
                <?php
                $mensagem = $_GET["mensagem"];
                echo $mensagem;
                ?>
            </div>
        <?php
            }
            else{
        ?>
                <div class="alert alert-danger" role="alert">               
                <?php
                $mensagem = "Você não está autenticado na plataforma";
                echo $mensagem;
                ?>
                </div>
        <?php
            }
        ?>

        <h1>Autenticação de Usuários</h1>
        <p>Para acessar o sistema de controle de estoque é necessário realizar a autenticação de usuário.</p>

        <form action="autenticar.php" method="POST">
        <div class="form-group">
            <label for="login">Exemplo de input de arquivo</label>
            <input class="form-control" type="text" name="login" placeholder="Informe o login">
        </div>
        <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Informe a senha">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Continuar conectado</label>
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
        </form>


    </div>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>