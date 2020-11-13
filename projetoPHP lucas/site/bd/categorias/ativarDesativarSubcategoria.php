<?php

if(isset($_GET['modo']))
{
    if(strtoupper($_GET['modo']) == 'STATUS')
    {
        if(isset($_GET['id']) && $_GET['id'] != "")
        {
            
            //Import do arquivo de Variaveis e Constantes
            require_once('../conexaoMysql.php');

            require_once('../../modulo/config.php');

            //chama a função que vai estabelecer a conexão com o BD
            if(!$conex = conexaoMysql())
            {
                echo("<script> alert('".ERRO_CONEX_BD_MYSQL."'); </script>");
                //die; //Finaliza a interpretação da página
            }
            //Recebendo o id para a exclusão
            $idSubcategoria = $_GET['id'];
            if($_GET['status'] == 0)
                $statusSubcategoria = 1;
            else
                $statusSubcategoria = 0;

            $sql = "update tblsubcategoria set statusSubcategoria = '".$statusSubcategoria."'
                    where idSubcategoria = " . $idSubcategoria;

            if (mysqli_query($conex, $sql))
            {
                echo("
                        <script>
                            alert('status alterado com sucesso!');
                            location.href = '../../../CMS/index.php';
                        </script>
                ");

                //Permite redirecionar para uma outra página
                //header('location:../index.php');
            }
            else
                echo("
                        <script>
                            alert('Erro ao Alterar o status no Banco de Dados!');
                            location.href = '../../../CMS/index.php';
                            window.history.back();
                        </script>

                    ");
            
            //###################### FIM DA EXCLUSÃO DO REGISTRO #####################################
            
        }else //Condição para tratar se foi informado um ID válido para excluir o registro
            echo("
            <script>
                alert('Nenhum registro foi informado para realizar a exclusão');
                location.href = '../../../CMS/index.php';
            </script>
    
        ");
        
    }else //Condição para tratar a variavel modo se é igual a EXCLUIR
        echo("
            <script>
                alert('Requisição inválida para alterar o status do registro!');
                location.href = '../../../CMS/index.php';
            </script>
    
        ");
    
    }else //Condição para tratar o acesso do arquivo
        echo("
            <script>
                alert('Acesso inválido para esse arquivo!');
                location.href = '../../../CMS/index.php';
            </script>
        ");

?>