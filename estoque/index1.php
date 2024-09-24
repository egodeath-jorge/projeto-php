<?php
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    session_start();
    $_SESSION['usuario'] = $usuario;

    $conectou = 0;
    include 'conexao.php';

    if ($conectou) {
        $sql = "SELECT * FROM usuarios WHERE nome_usuario = '$usuario' and senha_usuario = '$senha'";

        $buscar = mysqli_query($conec, $sql);
        $total = mysqli_num_rows($buscar);

        if($total > 0){
            $dados = mysqli_fetch_array($buscar);
            if($dados){
                header("location: menu.php");
            }
        }
        else{
            echo("<script>alert('Erro nos dados do Usuario/Senha!');</script");
            echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=http://localhost:/estoque/index.php'>";
        }
    }
?>