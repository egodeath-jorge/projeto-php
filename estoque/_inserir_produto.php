<?php

include 'conexao.php';

$numproduto = $_POST['numproduto'];//Recebe valor atributo
$numproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

$sql = "INSERT INTO 'estoque' ('numproduto', 'nomeproduto', 'categoria', 'quantidade')
VALUES ($numproduto,'$nomeproduto','$categoria','$quantidade','$fornecedor')";

$inserir = mysqli_query($conec, $sql);
?>

<div class="container" style="width: 500px; margin-top:30px">
     <center>
        <h4>produto adicionado com sucesso!</h4>
     </center>
     <div style="padding-top:20px;">
      <center>
        <a href="menu.php" 
      </center>
    
    </div>




</div>