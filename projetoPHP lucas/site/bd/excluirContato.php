<?php

if(isset($_GET['modo']))
{
    if(strtoupper($_GET['modo']) == 'EXCLUIR')
    {
        if(isset($_GET['id']) && $_GET['id'] != "")
        {
            
            require_once('../modulo/config.php');

            require_once('conexaoMysql.php');

            if(!$conex = conexaoMysql())
            {
                echo("<script> alert('".ERRO_CONEX_BD_MYSQL."'); </script>");
                //die; //Finaliza a interpretação da página
            }
            
            //Recebendo o id para a exclusão
            $idFaleconosco = $_GET['id'];

            $sql = "delete from tblfaleconosco 
                    where idFaleconosco = " . $idFaleconosco;

            //Executa no BD o Script SQL

            if (mysqli_query($conex, $sql))
            {
                echo("
                        <script>
                            alert('Registro Excluido com sucesso!');
                            location.href = '../../CMS/index.php';
                        </script>
                    ");

                //Permite redirecionar para uma outra página
                //header('location:../index.php');
            }
            else
                echo("
                        <script>
                            alert('Erro ao Excluir os dados do Banco de Dados!');
                            location.href = '../../CMS/index.php';
                            window.history.back();
                        </script>

                    ");
            
            
        }else //Condição para tratar se foi informado um ID válido para excluir o registro
            echo("
            <script>
                alert('Nenhum registro foi informado para realizar a exclusão');
                location.href = '../../CMS/index.php';
            </script>
    
            ");
        
    }else
        echo("
            <script>
                alert('Requisição inválida para excluir um registro!');
                location.href = '../../CMS/index.php';
            </script>
    
            ");
    
}else
    echo("
            <script>
                alert('Acesso inválido para esse arquivo!');
                location.href = '../../CMS/index.php';
            </script>
        ");

?>