<?php
    //Alterado IFNMG
    $host="127.0.0.1";          //Ip do servidor local ou local
    $port=3306;                 //porta do serviço
    $user="root";               //usuário do banco
    $password="";               //senha do usuário do banco
    $dbname="estoque";          //Nome do banco de dados

    $conec = mysqli_connect($host, $user, $password, $dbname, $port);

        //Verificando o estado da conexão
        if(!$conec){
            echo "Falha na conexão";
            $conectou = 0;
        }
        else{
            //echo "Conectadocom sucesso";
            $conectou = 1;
        }
?>