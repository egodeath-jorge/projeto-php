<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <title>CRUD PHP</title> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
    
</head>

<?php
session_start();
$usuario = $_SESSION['usuario'];
if(!isset($_SESSION['usuario'])){
    header('Location: index.php');
}
?>
<body>
    <div class="container" style="margin-top: 40px;">
            <h3>Lista de categorias</h3>
        <br>
        <br>
        <table class="table" id="table_id">
            <thead>
                <tr>
                    <th scope="col">Nome da categoria</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>

            <?php
            include 'conexao.php';
            $sql = "SELECT * FROM categoria";
            $busca = mysqli_query($conec,$sql);

            while ($array = mysqli_fetch_array($busca)) {
                $id_estoque = $array['id_estoque'];
                $numproduto = $array['numproduto'];
                $nomeproduto = $array['nomeproduto'];
                $categoria = $array['categoria'];
                $quantidade = $array['quantidade'];
                $fornecedor = $array['fornecedor'];
            ?>
            <tr>
                <td> <?php echo $categoria ?> </td>
            <td>
                <a href="editar_produto.php?id = <?php echo $id_produto ?>"
                role = "button" class = "btn btn-warning btn-sm"><i class = "far fa-edit"></i>Editar</a>

                <a href="deletar_produto.php?id = <?php echo $id_produto ?>"
                role = "button" class = "btn btn-danger btn-sm"><i class = "far fa-edit"></i>Excluir</a>
            </td>

                <td>
            <?php } ?>
                </td>
            </tr>
        </table>

        <div style="text-align: right; margin-top:30px;">
            <a href="adicionar_produto.php" role="button"
            class="btn btn-success btn-sm">Cadastrar categoria</a>
           
            <a href="menu.php" role="button"
            class="btn btn-primary btn-sm">Voltar ao menu</a>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>;
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>;
    </script>

    <script>
    $(document).ready(function() {
        $('#table_id').DataTable({
            "language": {
                "lengthMenu": "Mostrando _MENU_ registros por página",
                "zeroRecords": "Nada encontrado",
                "info": "Mostrando _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum registro encontrado",
                "infoFiltered": "(Filtrado de _MAX_ registros totais)",
                "search": "Pesquisar:",
                "paginate": {
                   "next": "Próximo",
                   "previous": "Anterior",
                   "first": "Primeiro",
                   "last": "Último"
                },
            }
        });
    });
    </script>

</body>

</html>