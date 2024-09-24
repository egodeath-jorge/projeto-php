<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <style>
    #container {
        width: 500px;
    }
    </style>

</head>

<body>

<?php 

session_start();
$usuario = $_SESSION['usuario'];
if(!isset($_SESSION['usuario'])){
    header('Location: index.php');
}

?>

    <div class="container" style="margin-top: 40px" id="container">
        <h3>Formulário de cadastro</h3>

        <form action="_inserir_produto.php" method="post" style="margin-top: 20px">
            <div class="form-group">
                <label>Nome do produto</label>
                <input type="text" class="form-control" name="nomeproduto" placeholder="Insira o nome do produto">
            </div>
            <div class="form-group">
                <label>codigo do produto</label>
                <input type="number" class="form-control" name="numproduto" placeholder="Insira o número do produto">
            </div>
            <div class="form-group">
                <label>fornecedor</label>
                <select class="form-control" name="fornecedor">
                    <?php
                    include 'conexao.php';
                    $sql1="SELECT * FROM fornecedor";
                    $buscar1=mysqli_query($conec,$sql1);
                    while($array = mysqli_fetch_array($buscar1)){
                          $id_fornecedor = $array['id_fornecedor'];
                          $nome_fornecedor = $array['nome_fornecedor'];
                          ?>
                        <option><?php echo $nome_fornecedor?></option>
                   <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label>Quantidade</label>
                <input type="number" class="form-control" name="quantidade" placeholder="Insira a quantidade disponível">
            </div>
            <div class="form-group">
                <label>Categoria</label>
                <select class="form-control" name="categoria">
                    <?php
                    include 'conexao.php';
                    $sql="SELECT * FROM categoria order by categoria ASC";
                    $buscar=mysqli_query($conec,$sql);
                    while($array = mysqli_fetch_array($buscar)){
                          $id_categoria = $array['id_categoria'];
                          $nome_categoria = $array['categoria'];
                          ?>
                        <option><?php echo $nome_categoria?></option>
                   <?php } ?>
                </select>
            </div>
            <div style="text-align: right;">
                <a href="menu.php" role="button" class="btn btn-primary btn-sm">Voltar ao menu</a>
                <button type="submit" id="botao" class="btn btn-success btn-sm">Cadastrar</button>
            </div>
        </form>
    </div>

</body>
</html>
            



