<?php
require_once('../conexaoMysql.php');

require_once('../../modulo/config.php');

if(!$conex = conexaoMysql()) {
    echo ("<script> alert('". ERRO_CONEX_BD_MYSQL ."'); </script>");
}

$nome = (string) null;
$statusCategoria = (string) 0;

$nome = $_POST['txtNome'];

$sql = "insert into tblcategoria(nome, statusCategoria)
        values ('".$nome."', '".$statusCategoria."')";


if(mysqli_query($conex, $sql)){
    echo ("
            <script>
                alert('Registro Inserido com Sucesso!');
                location.href = '../../../CMS/index.php';
            </script>
        ");
}
else
    echo ("
            <script>
                alert('Erro na conexão com o Banco de Dados! Favor verifique se voce preencheu todos os campos.');
                location.href = '../../../CMS/index.php';
            </script>
        ");
?>