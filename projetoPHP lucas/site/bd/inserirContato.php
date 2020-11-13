<?php 

require_once('conexaoMysql.php');

require_once('../modulo/config.php');

if(!$conex = conexaoMysql()) {
    echo ("<script> alert('". ERRO_CONEX_BD_MYSQL ."'); </script>");
}
//*** recebendo nome dos inputs do form cadastro usuarios ***

//definir as variaveis do form Fale Conosco
$nome = (string) null;
$celular = (string) null;
$email = (string) null;
$homepage = (string) null;
$profissao = (string) null;
$idgenero = (string) null;
$tipomensagem = (string) null;
$mensagem = (string) null;

//*** recebendo nome dos inputs do form faleconosco ***
$nome = $_POST['txtnome'];
$celular = $_POST['txtcelular'];
$email = $_POST['txtEmail'];
$homepage = $_POST['txtHome'];
$profissao = $_POST['txtProfissao'];
$idgeneros = $_POST['sltgenero'];
$mensagem = $_POST['txtComentario'];

$sql = "insert into tblfaleconosco
            (
                nome,
                celular,
                email,
                homepage,
                profissao,
                idgeneros,
                mensagem
            )
            values 
            (
                '".$nome."',
                '".$celular."',
                '".$email."',
                '".$homepage."',
                '".$profissao."',
                '".$idgeneros."',
                '".$mensagem."'
            )";
            
if(mysqli_query($conex, $sql)){
    echo ("
            <script>
                alert('Registro Inserido com Sucesso!');
                location.href = '../index.php';
            </script>
        ");
} 
else
    echo ("
            <script>
                alert('Erro na conexão com o Banco de Dados! Favor verifique se voce preencheu todos os campos.');
                location.href = '../index.php';
            </script>
        ");

?>