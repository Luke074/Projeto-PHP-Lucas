<?php
    require_once('../site/modulo/config.php');

    //conexão com o banco de dados
    require_once('../site/bd/conexaoMysql.php');

    if(!$conex = conexaoMysql())
    {
        echo("<script> alert('".ERRO_CONEX_BD_MYSQL."'); </script>");
        //die; //Finaliza a interpretação da página
    }    

    if(isset($_GET['modo'])){
        if(strtoupper($_GET['modo']) == "CONSULTAR"){
            if(isset($_GET['id'])&& $_GET['id'] != ""){
                $id = $_GET['id'];

                session_start();

                $_SESSION['id'] = $id;

                $sql = " select tbluser.*, tblgeneros.genero from tbluser, tblgeneros 
                where tblgeneros.idgeneros = tbluser.idgeneros and tbluser.idUser = $id ";

                $select = mysqli_query($conex, $sql);

                if ($rsContatos = mysqli_fetch_assoc($select)) {

                    $nome = $rsContatos ['nome'];
                    $nomeUser = $rsContatos ['nomeUser'];
                    $senha = $rsContatos ['senha'];
                    $email = $rsContatos ['email'];
                    $cpf = $rsContatos ['cpf'];
                    $celular = $rsContatos ['celular'];

                    $idgeneros = $rsContatos ['idgeneros'];
                    $genero = $rsContatos ['genero'];

                }
                
            }
        }
    }

    
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Visualizar</title>
        <link rel="stylesheet" href="style/style.css">
        <link rel="stylesheet" href="style/tables.css">
        <link rel="shortcut icon" href="img/menu/cms.png">
    </head>
    <body>
        <div class="centerVisualizar">
            <div class="caixaCadastro">
                <div class="voltar">
                    <a href="index.php">
                        <img src="img/icons/voltar.png">
                        Voltar para Página Inicial
                    </a>
                </div>
                <form name="frmCadatroUsuario" method="POST" action="../site/bd/atualizarUser.php">
                    <table class="tblCadastroUsuario">
                        <tr class="tblLinhaTituloCadastro">
                            <td colspan="2">
                                <h1>Cadastro Usuário</h1>
                            </td>
                        </tr>
                        <tr class="tblLinhaTituloCadastro">
                            <td class="tblColunaCadastroFixa">
                                Nome:
                            </td>
                            <td class="tblColunaCadastro">
                                <input name="txtNome" type="text" value="<?=$nome?>" placeholder="Digite seu nome" class="tblInput" required> 
                            </td>
                        </tr>
                        <tr class="tblLinhaTituloCadastro">
                            <td class="tblColunaCadastroFixa">
                                Usuario:
                            </td>
                            <td class="tblColunaCadastro">
                                <input name="txtUser" type="text" value="<?=$nomeUser?>" class="tblInput" required placeholder="Digite seu Usuario">
                            </td>
                        </tr>
                        <tr class="tblLinhaTituloCadastro">
                            <td class="tblColunaCadastroFixa">
                                Senha:
                            </td>
                            <td class="tblColunaCadastro">
                                <input name="passSenha" type="text" value="<?=$senha?>" minlength="8" placeholder="Minimo 8 caracteres" class="tblInput" required>
                            </td>
                        </tr>
                        <tr class="tblLinhaTituloCadastro">
                            <td class="tblColunaCadastroFixa">
                                E-mail:
                            </td>
                            <td class="tblColunaCadastro">
                                <input name="txtEmail" type="email" value="<?=$email?>" class="tblInput" placeholder="example@example.com" required>
                            </td>
                        </tr>
                        <tr class="tblLinhaTituloCadastro">
                            <td class="tblColunaCadastroFixa">
                                CPF:
                            </td>
                            <td class="tblColunaCadastro">
                                <input name="txtCPF" type="text" value="<?=$cpf?>" class="tblInput" maxlength="14" id="cpf_register" onkeypress="mascara_cpf();" placeholder="xxx.xxx.xxx-xx"  required>
                            </td>
                        </tr>
                        <tr class="tblLinhaTituloCadastro">
                            <td class="tblColunaCadastroFixa">
                                Celular:
                            </td>
                            <td class="tblColunaCadastro">
                                <input name="telCelular" type="tel" value="<?=$celular?>" class="tblInput" pattern="[(][0-9]{2}[)][0-9]{5}-[0-9]{4}" placeholder="(99)99999-9999" onkeypress="Mascara(this);" maxlength="14" required>
                            </td>
                        </tr>
                        <tr class="tblLinhaTituloCadastro">
                            <td class="tblColunaCadastroFixa">
                                Genero:
                            </td>
                            <td class="tblColunaCadastro">
                                <select name="sltgenero" id="tblSelect">
                                    <?php
                                            if(isset($_GET['modo'])&& strtoupper($_GET['modo'])== "CONSULTAR"){

                                        ?>

                                        <option value="<?=$idgeneros?>"><?=$genero?></option>
                                        <?php } else{ ?>
                                        <option value="">Selecione um Item</option>

                                    <?php
                                        }
                                        $sql = "select * from tblgeneros
                                                where idgeneros <>".$idgeneros;
                                        $select = mysqli_query($conex, $sql);
                                        while($rsGenero = mysqli_fetch_assoc($select)){

                                    ?>
                                        <option value="<?=$rsGenero['idgeneros']?>"> <?=$rsGenero['genero'];?> </option>
                                    
                                    <?php
                                        }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        <tr class="tblLinhaTituloCadastro">
                            <td class="tblColunaCadastro" colspan="2">
                                <input name="sbtEnviar" type="submit" value="Atualizar" class="tblInputEnviar">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </body>
</html>