<?php
require_once('../conexaoMysql.php');

require_once('../../modulo/config.php');

if(!$conex = conexaoMysql()) {
    echo ("<script> alert('". ERRO_CONEX_BD_MYSQL ."'); </script>");
}

$nomesub = (string) null;
$statusSubcategoria = (string) 0;
$idCategoria = (string) null;

$nomesub = $_POST['txtName'];
$idCategoria = $_POST['sltSubcategoria'];

$sql = "insert into tblsubcategoria
        (
            nomesub,
            statusSubcategoria,
            idCategoria
        )
        values 
        (
            '".$nomesub."',
            '".$statusSubcategoria."',
            '".$idCategoria."'
        )";

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