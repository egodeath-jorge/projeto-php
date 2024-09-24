<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <?php
        setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        date_default_timezone_set('America/Sao_Paulo');

        session_start();

        $usario = $_SESSION['usuario'];

        if(!isset($_SESSION['usuario'])){
            header('Location: index.php');
        }

        include 'cabecalho.php'

    ?>     
</body>
</html>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>

<?php
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
session_start();

$usuario = $_SESSION['usuario'];

if(!isset($_SESSION['usuario'])){
    header('Location: index.php');
}
 include "cabecalho.php";
?>

    <div class="container" style="margin-top:25px;">
        <div class="row">
            <div class="col-sm-6" style="margin-top: 25px;">
                <div class="card text-white bg-danger mb-3">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-ambulance"></i>&nbsp;Adicionar produto</h5>
                        <p class="card-text">Adicione novos produtos em seu estoque.</p>
                        <a href="adicionar_produto.php" class="btn btn-sm btn-primary" style="text-align: left; width: 200px">Cadastrar produto</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6" style="margin-top: 25px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-clipboard-list"></i>&nbsp;Lista de produtos</h5>
                        <p class="card-text">Edite, liste e adicione exclua seus produtos.</p>
                        <a href="listar_produtos.php" class="btn btn-sm btn-primary">Listar produtos</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6" style="margin-top: 25px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-box"></i>&nbsp;Adicionar categorias</h5>
                        <p class="card-text">Adicione novas categorias para seus produtos.</p>
                        <a href="adicionar_categoria.php" class="btn btn-sm btn-primary">Adicionar categoria</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 25px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-pencil-alt"></i>&nbsp Listar categorias</h5>
                        <p class="card-text">Edite, liste e adicione exclua suas categorias cadastradas.</p>
                        <a href="listar_categorias.php" class="btn btn-sm btn-primary">Listar categorias</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6" style="margin-top: 25px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="far fa-id-card"></i>&nbspAdicionar Fornecedores</h5>
                        <p class="card-text">Adicione novos fornecedores de seus produtos.</p>
                        <a href="adicionar_fornecedor.php" class="btn btn-sm btn-primary">Adicionar fornecedor</a>
                    </div>
                </div>
            </div>            
            <div class="col-sm-6" style="margin-top: 25px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-user-edit"></i>&nbsp Listar fornecedores</h5>
                        <p class="card-text">Edite, liste e adicione exclua seus fornecedores ja cadastrados.</p>
                        <a href="listar_fornecedores.php" class="btn btn-sm btn-primary" aria-disabled="true">Listar fornecedores</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6" style="margin-top: 25px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-user-check"></i>&nbsp Cadastrar usuários</h5>
                        <p class="card-text">Cadastre novos usuários no sistema.</p>
                        <a href="cadastro_usuario.php" class="btn btn-sm btn-primary">Cadastrar novo</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6" style="margin-top: 25px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-user-check"></i>&nbsp Aprovar usuários</h5>
                        <p class="card-text">Aprove os usuários que se cadastraram no sistema por meio externo.</p>
                        <a href="aprovar_usuario.php" class="btn btn-sm btn-primary">Exibir lista</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/cae6919cdb.js"></script>;
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>;
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>;
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>;
</body>
<?php
    include "rodape.php";
?>
</html>
<?php
include "rodape.php"
?><div class="col-sm-6" style="margin-top: 25px;">
<div class="card">
    <div class="card-body">
        <h5 class="card-title"><i class="fas fa-cart-plus"></i>&nbsp;Adicionar produto</h5>
        <p class="card-text">Adicione novos produtos em seu estoque.</p>
        <a href="adicionar_produto.php" class="btn btn-sm btn-primary">Cadastrar produto</a>
    </div>
</div>
</div>
<div class="container" style="margin-top:25px;">
        <div class="row">

            <div class="col-sm-6" style="margin-top: 25px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-cart-plus"></i>&nbsp;Adicionar produto</h5>
                        <p class="card-text">Adicione novos produtos em seu estoque.</p>
                        <a href="adicionar_produto.php" class="btn btn-sm btn-primary">Cadastrar produto</a>
                    </div>
                </div>
            </div>
	</div>
</div>