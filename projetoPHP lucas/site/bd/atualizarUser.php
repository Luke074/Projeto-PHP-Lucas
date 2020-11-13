<?php

require_once('../modulo/config.php');

require_once('conexaoMysql.php');

if(!$conex = conexaoMysql())
{
    echo("<script> alert('".ERRO_CONEX_BD_MYSQL."'); </script>");
    //die; //Finaliza a interpretação da página
}

$nome = (string) null;
$nomeUser= (string) null;
$senha = (string) null;
$email = (string) null;
$cpf = (string) null;
$celular = (string) null;
$idgeneros = (int) null;

$nome = $_POST['txtNome'];
$nomeUser = $_POST['txtUser'];
$senha = $_POST['passSenha'];
$email = $_POST['txtEmail'];
$cpf = $_POST['txtCPF'];
$celular = $_POST['telCelular'];
$idgeneros = $_POST['sltgenero'];

session_start();

$sql = "update tbluser set
        nome = '".$nome."',
        nomeUser = '".$nomeUser."',
        senha = '".$senha."',
        email = '".$email."',
        cpf = '".$cpf."',
        celular = '".$celular."',
        idgeneros = '".$idgeneros."'
        where idUser = ".$_SESSION['id'];


if (mysqli_query($conex, $sql))
{
    echo("
            <script>
                alert('Registro atualizado com sucesso!');
                location.href = '../../CMS/index.php';
            </script>
    "); 
}
else
    echo("
            <script>
                alert('Erro ao atualizar os dados no Banco de Dados! Favor verificar a digitação de todos os dados.');
                location.href = '../../CMS/index.php';
                window.history.back();
            </script>
        ");

?>