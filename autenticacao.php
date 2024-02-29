<?php
$login=$_POST["login"];
$senha=$_POST["senha"];


        if ($login=='Samuel' && $senha==123){

            echo "Seja bem vindo ".$login;

        }else {
            echo "Senha e/ou Usuário incorretos.";
        }
?>