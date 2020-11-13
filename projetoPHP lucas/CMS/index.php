<!-- <h2>Categoria</h2>
                                    <input name="txtNome" type="text" placeholder="Insira o nome da Categoria" value="">
                                    <input type="submit" value="Cadastrar"> -->

<?php

    require_once('../site/modulo/config.php');

    //conexão com o banco de dados
    require_once('../site/bd/conexaoMysql.php');

    if(!$conex = conexaoMysql())
    {
        echo("<script> alert('".ERRO_CONEX_BD_MYSQL."'); </script>");
        //die; //Finaliza a interpretação da página
    }
    
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>CMS</title>
        <link rel="stylesheet" href="style/style.css">
        <link rel="stylesheet" href="style/tables.css">
        <link rel="shortcut icon" href="img/menu/cms.png">
    </head>
    <body>

        <!-- conteudo -->
        <div id="caixaConteudo">
            <header class="centerObject">
                <h1>CMS - Sistema de Gerenciamento de Site</h1>
                <div id="logoCMS">
                    <img src="img/logofundo/camisaLogo.png" alt="logo">
                </div>
            </header>
            <div id="menu" class="centerObject">
                <div class="containerMenu">
                    <a href="#div_aba1" onclick="mostrar_abas(this);" id="mostra_aba1">
                        <img src="img/menu/conteudo.png" alt="conteudo">
                        Conteudo
                    </a>
                </div>
                <div class="containerMenu">
                    <a href="#div_aba2" onclick="mostrar_abas(this);" id="mostra_aba2">
                        <img src="img/menu/telefone.png" alt="conteudo">
                        Fale Conosco
                    </a>
                </div>
                <div class="containerMenu">
                    <a href="#div_aba3" onclick="mostrar_abas(this);" id="mostra_aba3">
                        <img src="img/menu/comprar.png" alt="conteudo">
                        Produtos
                    </a>
                </div>
                <div class="containerMenu">
                    <a href="#div_aba4" onclick="mostrar_abas(this);" id="mostra_aba4">
                        <img src="img/menu/usuario.png" alt="conteudo">
                        Usuarios
                    </a>
                </div>
                <div class="user">
                    <p id="userName">Bem-Vindo {user.name}</p>
                    <a href="../site/index.php">
                        <p id="userLoggout">Loggout</p>
                    </a>
                </div>
            </div>
            <div id="containerDados" class="centerObject">
                <div id="div_aba1" class="hidden">
                    <div class="containerLojas">
                        <div id="formLojas">
                            <form name="frmLojas" method="POST" action="../site/bd/categorias/inserirLojas.php">
                                <table class="tblLojas">
                                    <tr>
                                        <td class="tblLojasTitulo" colspan="2">
                                            <h1>Nossas Lojas</h1>
                                        </td>
                                    </tr>
                                    <tr class="tblLojasLinha">
                                        <td class="tblLojasColuna"> 
                                            Nome:
                                        </td>
                                        <td class="tblLojasColunaFixa">
                                            <input type="text" name="txtNome" value="" placeholder="Ex. ">
                                        </td>
                                    </tr>
                                    <tr class="tblLojasLinha">
                                        <td class="tblLojasColuna"> 
                                            Imagem:
                                        </td>
                                        <td class="tblLojasColunaFixa">
                                            <input type="file" accept=".jpg, .jprg, .png" name="filImage" value="">
                                        </td>
                                    </tr>
                                    <tr class="tblLojasLinha">
                                        <td class="tblLojasColuna"> 
                                            CEP:
                                        </td>
                                        <td class="tblLojasColunaFixa">
                                            <input type="text" id="cep" placeholder="Digite um CEP...">
                                        </td>
                                    </tr>
                                    <tr class="tblLojasLinha">
                                        <td class="tblLojasColuna"> 
                                            Rua:
                                        </td>
                                        <td class="tblLojasColunaFixa">
                                            <input type="text" id="rua" placeholder="rua">
                                        </td>
                                    </tr>
                                    <tr class="tblLojasLinha">
                                        <td class="tblLojasColuna"> 
                                            Bairro:
                                        </td>
                                        <td class="tblLojasColunaFixa">
                                            <input type="text" id="bairro" placeholder="bairro">
                                        </td>
                                    </tr>
                                    <tr class="tblLojasLinha">
                                        <td class="tblLojasColuna"> 
                                            Cidade:
                                        </td>
                                        <td class="tblLojasColunaFixa">
                                            <input type="text" id="cidade" placeholder="cidade">
                                        </td>
                                    </tr>
                                    <tr class="tblLojasLinha">
                                        <td class="tblLojasColuna" colspan="2">
                                            <input name="sbtCadastrar" type="submit" value="Cadastrar">
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                        <div id="tabelaLojas">

                        </div>
                    </div>
                    
                </div>


                <div id="div_aba2" class="hidden">
                    <div id="dadosConteudo" class="centerObject">
                        <table class="tblConsulta">
                            <tr>
                                <td class="tblTitulo" colspan="9">
                                    <h1> Consulta de Dados (Fale Conosco)</h1>
                                </td>
                            </tr>
                            <tr class="tblLinhas">
                                <td class="tblColunaFixa"> Nome </td>
                                <td class="tblColunaFixa"> Celular </td>
                                <td class="tblColunaFixa"> E-mail </td>
                                <td class="tblColunaFixa"> Home Page </td>
                                <td class="tblColunaFixa"> Profissão </td>
                                <td class="tblColunaFixa"> Sexo </td>
                                <td class="tblColunaFixa"> Mensagem </td>
                                <td class="tblColunaFixa"> Opcões </td>
                            </tr>
                            <tr id="tblLinhas">
                                <?php
                                    // Script para buscar todos os dados no banco de dados
                                    $sql = "
                                            select tblfaleconosco.idFaleconosco, 
                                            tblfaleconosco.nome, 
                                            tblfaleconosco.celular, 
                                            tblfaleconosco.email, 
                                            tblfaleconosco.homepage, 
                                            tblfaleconosco.profissao,  
                                            tblfaleconosco.mensagem,
                                            tblgeneros.sigla from tblfaleconosco,
                                            tblgeneros where tblfaleconosco.idgeneros = tblgeneros.idgeneros 
                                            order by tblfaleconosco.idFaleconosco desc;
                                            ";

                                    $select = mysqli_query($conex, $sql);

                                    
                                    while($rsContatos= mysqli_fetch_assoc($select))
                                    {  
                                    ?>
                                    <tr class="tblLinhas">
                                        <td class="tblColunas"> <?=$rsContatos['nome']?> </td>
                                        <td class="tblColunas"> <?=$rsContatos['celular']?> </td>
                                        <td class="tblColunas"> <?=$rsContatos['email']?> </td>
                                        <td class="tblColunas"> <?=$rsContatos['homepage']?> </td>
                                        <td class="tblColunas"> <?=$rsContatos['profissao']?> </td>
                                        <td class="tblColunas"> <?=$rsContatos['sigla']?> </td>
                                        <td class="tblColunas"> <?=$rsContatos['mensagem']?> </td>
                                        <td class="tblColunas">
                                            <a href="../site/bd/excluirContato.php?modo=excluir&id=<?=$rsContatos['idFaleconosco']?>" onclick="return confirm('Deseja realmente excluir esse Registro?')">
                                                <img src="img/icons/trash.png" class="imgicon">
                                            </a>
                                        </td>
                                    </tr>
                                <?php
                                    }
                                ?>
                            </tr>
                        </table>
                    </div>
                </div>
                <div id="div_aba3" class="hidden">
                    <div id="containerProduto">
                        <div id="caixaProduto1">
                            <div class="caixaCadastroProduto">
                                <form name="frmCadastroCategoria" method="POST" action="../site/bd/categorias/inserirCategoria.php">
                                    <table class="tblProdutos">
                                        <tr>
                                            <td class="tblProdutosTitulo" colspan="2">
                                                <h1>Categoria</h1>
                                            </td>
                                        </tr>
                                        <tr class="tblProdutosLinha">
                                            <td class="tblProdutosColunaFixa"> 
                                                Nome: 
                                            </td>
                                            <td class="tblProdutosColunaFixa">
                                                <input type="text" name="txtNome" value="" placeholder="Ex. Masculino, Feminino">
                                            </td>
                                        </tr>
                                        <tr class="tblProdutosLinha">
                                            <td class="tblProdutosColuna" colspan="2">
                                                <input name="sbtCadastrar" type="submit" value="Cadastrar">
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </div>

                            <div class="caixaCadastroProduto">
                                <form name="frmCadastroSubCategoria" method="POST" action="../site/bd/categorias/inserirSubCategoria.php">
                                    <table class="tblProdutos">
                                        <tr>
                                            <td class="tblProdutosTitulo" colspan="2">
                                                <h1>Sub-Categoria</h1>
                                            </td>
                                        </tr>
                                        <tr class="tblProdutosLinha">
                                            <td class="tblProdutosColunaFixa"> 
                                                Nome:
                                            </td>
                                            <td class="tblProdutosColunaFixa">
                                                <input type="text" name="txtName" value="" placeholder="Ex. camisaMasculina, calcaFeminina">
                                            </td>
                                        </tr>
                                        <tr class="tblProdutosLinha">
                                            <td class="tblProdutosColunaFixa"> 
                                                Categoria:
                                            </td>
                                            <td class="tblProdutosColunaFixa">
                                                <select name="sltSubcategoria">
                                                    <option value="">Selecione a categoria do item</option>

                                                        <?php
                                                        $sql = "select * from tblcategoria";


                                                        $select = mysqli_query($conex, $sql);
                                                        while($rsCategoria = mysqli_fetch_assoc($select)){

                                                            
                                                        ?>
                                                            <option value="<?=$rsCategoria['idCategoria']?>"> <?=$rsCategoria['nome'];?> </option>
                                                    
                                                        <?php
                                                            }
                                                        ?>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr class="tblProdutosLinha">
                                            <td class="tblProdutosColuna" colspan="2">
                                                <input name="sbtCadastrar" type="submit" value="Cadastrar">
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>
                        
                        <div id="caixaProduto2">
                            <table class="tblProdutos">
                                <tr>
                                    <td class="tblProdutosTitulo" colspan="2">
                                        <h1>Categoria</h1>
                                    </td>
                                </tr>
                                <tr class="tblProdutosLinha">
                                    <td class="tblProdutosColunaFixa"> Nome </td>
                                    <td class="tblProdutosColunaFixa"> Opcões </td>
                                </tr>
                                    <?php
                                        // Script para buscar todos os dados no banco de dados
                                        $sql = "
                                                select tblcategoria.idCategoria, 
                                                tblcategoria.nome, tblcategoria.statusCategoria from tblcategoria order 
                                                by tblcategoria.idCategoria desc;
                                                ";

                                        $select = mysqli_query($conex, $sql);
                                        
                                        while($rsCategoria= mysqli_fetch_assoc($select))
                                        {  
                                        ?>
                                        <tr class="tblProdutosLinha">
                                            <td class="tblProdutosColuna"> <?=$rsCategoria['nome']?> </td>
                                            <td class="tblProdutosColuna">
                                                <a href="../site/bd/categorias/excluirCategoria.php?modo=excluir&id=<?=$rsCategoria['idCategoria']?>" onclick="return confirm('Deseja realmente excluir esse Registro?')">
                                                    <img src="img/icons/trash.png" class="imgicon" alt="Excluir">
                                                </a>
                                                <a href="../site/bd/categorias/ativarDesativarCategoria.php?modo=status&id=<?=$rsCategoria['idCategoria']?>&status=<?=$rsCategoria['statusCategoria']?>">
                                                    <img src="img/icons/<?=$rsCategoria['statusCategoria']?>.png" class="imgicon" alt="ativar/desativar">
                                                </a>
                                            </td>
                                        </tr>
                                    <?php
                                        }
                                    ?>
                            </table>
                        </div>
                        <div id="caixaProduto3">
                            <table class="tblProdutos">
                                <tr>
                                    <td class="tblProdutosTitulo" colspan="3">
                                        <h1>Categoria</h1>
                                    </td>
                                </tr>
                                <tr class="tblProdutosLinha">
                                    <td class="tblProdutosColunaFixa"> Nome </td>
                                    <td class="tblProdutosColunaFixa"> Nome da Categoria </td>
                                    <td class="tblProdutosColunaFixa"> Opcões </td>
                                </tr>
                                    <?php
                                        // Script para buscar todos os dados no banco de dados
                                        $sql = "
                                                select tblsubcategoria.idSubcategoria, tblsubcategoria.nomesub, 
                                                tblsubcategoria.statusSubcategoria, tblsubcategoria.idCategoria,
                                                tblcategoria.nome
                                                from tblsubcategoria, tblcategoria
                                                where tblsubcategoria.idCategoria = tblcategoria.idCategoria
                                                order by tblsubcategoria.idSubcategoria desc;
                                                ";

                                        $select = mysqli_query($conex, $sql);
                                        
                                        while($rsCategoria= mysqli_fetch_assoc($select))
                                        {
                                        ?>
                                        <tr class="tblProdutosLinha">
                                            <td class="tblProdutosColuna"> <?=$rsCategoria['nomesub']?> </td>
                                            <td class="tblProdutosColuna"> <?=$rsCategoria['nome']?> </td>
                                            <td class="tblProdutosColuna">
                                                <a href="../site/bd/categorias/excluirSubcategoria.php?modo=excluir&id=<?=$rsCategoria['idSubcategoria']?>" onclick="return confirm('Deseja realmente excluir esse Registro?')">
                                                    <img src="img/icons/trash.png" class="imgicon" alt="Excluir">
                                                </a>
                                                <a href="../site/bd/categorias/ativarDesativarSubcategoria.php?modo=status&id=<?=$rsCategoria['idSubcategoria']?>&status=<?=$rsCategoria['statusSubcategoria']?>">
                                                    <img src="img/icons/<?=$rsCategoria['statusSubcategoria']?>.png" class="imgicon" alt="ativar/desativar">
                                                </a>
                                            </td>
                                        </tr>
                                    <?php
                                        }
                                    ?>
                            </table>
                        </div>
                    </div>
                </div>
                <div id="div_aba4" style="display: none;">
                    <div id="containerCadastro">
                        <div id="center1">
                            <div class="divUsuario">
                                <a href="#div_usuario1" onclick="abrirfechar_div(this);" id="mostrar_div1">
                                    Cadastro de Usuario
                                </a>
                            </div>
                            <div class="divUsuario">
                                <a href="#div_usuario2" onclick="abrirfechar_div(this);" id="mostrar_div2">
                                    Gerereciamento de Usuario
                                </a>
                            </div>
                            <div class="divUsuario">
                                <a href="#">
                                    ...
                                </a>
                            </div>
                        </div>

                        <div class="caixaCadastro hidden" id="div_usuario1" >
                            <div class="fechar">
                                <a href="#fechar_div1" onclick="abrirfechar_div(this);">
                                    Fechar
                                </a>
                            </div>
                            <form name="frmCadatroUsuario" method="POST" action="../site/bd/inserirUsuario.php">
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
                                            <input name="txtNome" type="text" value="" placeholder="Digite seu nome" class="tblInput" required> 
                                        </td>
                                    </tr>
                                    <tr class="tblLinhaTituloCadastro">
                                        <td class="tblColunaCadastroFixa">
                                            Usuario:
                                        </td>
                                        <td class="tblColunaCadastro">
                                            <input name="txtUser" type="text" value="" class="tblInput" required placeholder="Digite seu Usuario">
                                        </td>
                                    </tr>
                                    <tr class="tblLinhaTituloCadastro">
                                        <td class="tblColunaCadastroFixa">
                                            Senha:
                                        </td>
                                        <td class="tblColunaCadastro">
                                            <input name="passSenha" type="text" value="" minlength="8" placeholder="Minimo 8 caracteres" class="tblInput" required>
                                        </td>
                                    </tr>
                                    <tr class="tblLinhaTituloCadastro">
                                        <td class="tblColunaCadastroFixa">
                                            E-mail:
                                        </td>
                                        <td class="tblColunaCadastro">
                                            <input name="txtEmail" type="email" value="" class="tblInput" placeholder="example@example.com" required>
                                        </td>
                                    </tr>
                                    <tr class="tblLinhaTituloCadastro">
                                        <td class="tblColunaCadastroFixa">
                                            CPF:
                                        </td>
                                        <td class="tblColunaCadastro">
                                            <input name="txtCPF" type="text" value="" class="tblInput" maxlength="14" id="cpf_register" onkeypress="mascara_cpf();" placeholder="xxx.xxx.xxx-xx"  required>
                                        </td>
                                    </tr>
                                    <tr class="tblLinhaTituloCadastro">
                                        <td class="tblColunaCadastroFixa">
                                            Celular:
                                        </td>
                                        <td class="tblColunaCadastro">
                                            <input name="telCelular" type="tel" value="" class="tblInput" pattern="[(][0-9]{2}[)][0-9]{5}-[0-9]{4}" placeholder="(99)99999-9999" onkeypress="Mascara(this);" maxlength="14" required>
                                        </td>
                                    </tr>
                                    <tr class="tblLinhaTituloCadastro">
                                        <td class="tblColunaCadastroFixa">
                                            Genero:
                                        </td>
                                        <td class="tblColunaCadastro">
                                            <!-- <select name="sltgenero" id="tblSelect">
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
                                            </select> -->
                                            <select name="sltgenero" id="tblSelect">
                                                <option value="">Selecione Um Item</option>

                                                <?php
                                                    $sql = "select * from tblgeneros";
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
                                            <input name="sbtEnviar" type="submit" value="Enviar" class="tblInputEnviar">
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                        <div class="caixaCadastro hidden" id="div_usuario2">
                            <div class="fechar">
                                <a href="#fechar_div2" onclick="abrirfechar_div(this);">
                                    Fechar
                                </a>
                            </div>
                            <table class="tblConsulta">
                                <tr>
                                    <td class="tblTitulo" colspan="8">
                                        <h1> Consulta de Cadastro de Usuario</h1>
                                    </td>
                                </tr>
                                <tr class="tblLinhas">
                                    <td class="tblColunaFixa"> Nome </td>
                                    <td class="tblColunaFixa"> Usuario </td>
                                    <td class="tblColunaFixa"> Senha </td>
                                    <td class="tblColunaFixa"> E-mail </td>
                                    <td class="tblColunaFixa"> CPF </td>
                                    <td class="tblColunaFixa"> Celular </td>
                                    <td class="tblColunaFixa"> Genero </td>
                                    <td class="tblColunaFixa"> Opcões </td>
                                </tr>
                                <tr id="tblLinhas">
                                    <?php
                                        // Script para buscar todos os dados no banco de dados
                                        $sql = "
                                                select tbluser.idUser, 
                                                tbluser.nome,
                                                tbluser.nomeUser, 
                                                tbluser.senha, 
                                                tbluser.email, 
                                                tbluser.cpf,  
                                                tbluser.celular,
                                                tbluser.statusUser,
                                                tblgeneros.sigla from tbluser,
                                                tblgeneros where tbluser.idgeneros = tblgeneros.idgeneros 
                                                order by tbluser.idUser desc;
                                                ";

                                        $select = mysqli_query($conex, $sql);
                                        
                                        while($rsContatos= mysqli_fetch_assoc($select))
                                        {  
                                        ?>
                                        <tr class="tblLinhas">
                                            <td class="tblColunas"> <?=$rsContatos['nome']?> </td>
                                            <td class="tblColunas"> <?=$rsContatos['nomeUser']?> </td>
                                            <td class="tblColunas"> <?=$rsContatos['senha']?> </td>
                                            <td class="tblColunas"> <?=$rsContatos['email']?> </td>
                                            <td class="tblColunas"> <?=$rsContatos['cpf']?> </td>
                                            <td class="tblColunas"> <?=$rsContatos['celular']?> </td>
                                            <td class="tblColunas"> <?=$rsContatos['sigla']?> </td>
                                            <td class="tblColunas">
                                                <a href="../site/bd/excluirUser.php?modo=excluir&id=<?=$rsContatos['idUser']?>" onclick="return confirm('Deseja realmente excluir esse Registro?')">
                                                    <img src="img/icons/trash.png" class="imgicon" alt="Excluir">
                                                </a>
                                                <a href="visualizar.php?modo=consultar&id=<?=$rsContatos['idUser']?>">
                                                    <img src="img/icons/edit.png" class="imgicon" alt="Editar">
                                                </a>
                                                <a href="../site/bd/ativarDesativarUser.php?modo=status&id=<?=$rsContatos['idUser']?>&status=<?=$rsContatos['statusUser']?>">
                                                    <img src="img/icons/<?=$rsContatos['statusUser']?>.png" class="imgicon" alt="Editar">
                                                </a>
                                            </td>
                                        </tr>
                                    <?php
                                        }
                                    ?>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <footer id="footer" class="centerObject">
                Desenvolvido por: Lucas Alves Mendes
            </footer>
        </div>

        <script src="js/mostrarDiv.js"></script>
        <script src="js/mascaraCelular.js"></script>
        <script src="js/mascaraCPF.js"></script>
        <script src="js/viacep.js"></script>
    </body>
</html>