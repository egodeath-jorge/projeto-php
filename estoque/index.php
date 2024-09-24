<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

     

</head>

<body style="margin: auto">

<style>
    .box {
        background-color: #00BFFF;
        border-radius: 15px;
        border: 0.1em solid;
        padding: 30px;
        border-color: #cfd6dc;
        width: 400px;
    }
    </style>

    <div class="container box" id="tamanho" style="margin-top:60px; ">
        <div style="text-align: center">
            <img src="./imagens/mercado (1).png" alt="logo" width="200px" style="margin-bottom:20px;">
            <h4>Controle de estoque</h4>
        </div>
       
        <form action="index1.php" method="post" style="margin-top:20px;">
            <div class="form-group">
                <label>Usuário</label>
                <input type="text" name="usuario" class="form-control" placeholder="Digite o usuário"
                    autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Senha</label>
                <input type="password" name="senha" class="form-control" placeholder="Senha" autocomplete="off"
            required>
            </div>
       
        <div style="text-align:right;">
            <button class=" btn btn-sm btn-success" type="submit">Entrar</button>
        </div>
        </form>

    </div>

    <div style="margin-top:20px;text-align: center">
            <p>Não possuí cadastro? Clique <a href="cadastro_usuario_externo.php">aqui</a>!</p>
    </div>

</body>

</html>