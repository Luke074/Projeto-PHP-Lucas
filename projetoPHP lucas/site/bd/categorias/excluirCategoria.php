<?php

//validação para tratar o acesso do arquivo direto pela URL
if(isset($_GET['modo']))
{
    //Validação para tratar se a requisição é realmente para excluir um registro
    if(strtoupper($_GET['modo']) == 'EXCLUIR')
    {
        //Validação para tratar se foi informado um ID para exclusão
        if(isset($_GET['id']) && $_GET['id'] != "")
        {
            
         //###################### INICIO DA EXCLUSÃO DO REGISTRO #####################################  
            
            //Import do arquivo de Variaveis e Constantes
            require_once('../../modulo/config.php');

            //Import do arquivo de função para conectar no BD
            require_once('../conexaoMysql.php');

            //chama a função que vai estabelecer a conexão com o BD
            if(!$conex = conexaoMysql())
            {
                echo("<script> alert('".ERRO_CONEX_BD_MYSQL."'); </script>");
                //die; //Finaliza a interpretação da página
            }
            
            //Recebendo o id para a exclusão
            $idCategoria = $_GET['id'];

            $sql = "delete from tblcategoria
                    where idCategoria = " . $idCategoria;

            //Executa no BD o Script SQL

            if (mysqli_query($conex, $sql))
            {
                echo("
                        <script>
                            alert('Registro Excluido com sucesso!');
                            location.href = '../../../CMS/index.php';
                        </script>
                ");

                //Permite redirecionar para uma outra página
                //header('location:../index.php');
            }
            else
                echo("
                        <script>
                            alert('Erro ao Excluir os dados do Banco de Dados!');
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
                alert('Requisição inválida para excluir um registro!');
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