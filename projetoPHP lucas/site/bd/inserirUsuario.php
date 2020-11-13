<?php 

require_once('../conexaoMysql.php');

require_once('../../modulo/config.php');

if(!$conex = conexaoMysql()) {
    echo ("<script> alert('". ERRO_CONEX_BD_MYSQL ."'); </script>");
}
//definir as variaveis do form Cadastro de Contato
$nome = (string) null;
$nomeUser= (string) null;
$senha = (string) null;
$email = (string) null;
$cpf = (string) null;
$celular = (string) null;
$idgeneros = (string) null;
$statusUser = (integer) 0;

$nome = $_POST['txtNome'];
$nomeUser = $_POST['txtUser'];
$senha = $_POST['passSenha'];
$email = $_POST['txtEmail'];
$cpf = $_POST['txtCPF'];
$celular = $_POST['telCelular'];
$idgeneros = $_POST['sltgenero'];

$senha = md5($senha);

$sql = "insert into tbluser
            (
                nome,
                nomeUser,
                senha,
                email,
                cpf,
                celular,
                idgeneros,
                statusUser
            )
            values 
            (
                '".$nome."',
                '".$nomeUser."',
                '".$senha."',
                '".$email."',
                '".$cpf."',
                '".$celular."',
                '".$idgeneros."',
                '".$statusUser."'
            )";

if(mysqli_query($conex, $sql)){
    echo ("
            <script>
                alert('Registro Inserido com Sucesso!');
                location.href = '../../CMS/index.php';
            </script>
        ");
} 
else
    echo ("
            <script>
                alert('Erro na conexão com o Banco de Dados! Favor verifique se voce preencheu todos os campos.');
                location.href = '../../CMS/index.php';
            </script>
        ");

?>