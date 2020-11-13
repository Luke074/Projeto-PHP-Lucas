<?php

//variaveis e constantes
require_once('modulo/config.php');

//conexão com o banco de dados
require_once('bd/conexaoMysql.php');

if(!$conex = conexaoMysql())
{
    echo("<script> alert('".ERRO_CONEX_BD_MYSQL."'); </script>");
}

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>DressClothes</title>
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="css/slider.css" type="text/css">
        <link rel="stylesheet" href="css/contato.css" type="text/css">
        <link rel="shortcut icon" href="img/camisaLogo.png">
    </head>
<body>
    <!-- Caixa cabeçalho -->
    <header id="header">
        <div class=centerheader>
            <a href="#slideshow">
                <div class="logoHeader">
                    <img src="img/camisaLogo.png" alt="logo">
                </div>
            </a>
            <div class="tituloLoja">
                DressClothes
            </div>
            <div class="topicosMenu">
                <a href="#detalhesLoja">A empresa</a>
            </div>
            <div class="topicosMenu">
                <a href="#lojasCaixaContatos">Contatos</a>
            </div>
            <div class="topicosMenu">
                <a href="#nossasLojas">Lojas</a>
            </div>

            <!-- Login -->
            <div id="login">
                <form name="frmLogin" method="POST" action="index.php">
                    <div class="caixaLogin">
                        Usuário: <br>
                        <input type="email" name="textUsuario" value="" class="barraLogin">
                    </div>
                    <div class="caixaLogin">
                        Senha: <br>
                        <input type="password" name="textSenha" value="" class="barraLogin">
                    </div>
                    <div id="caixaBotao">
                        <input type="submit" name="botaoOk" value="Entrar">
                    </div>
                </form>
            </div>
        </div>
    </header>

    <!-- Caixa do Conteudo -->
    <div id="caixaConteudo">
        <div id="containerRedesSociais">
            <div id=caixaFixa>
                <div class="animacaoSocial" id="facebook">

                </div>
                <div class="animacaoSocial" id="instagram">

                </div>
                <div class="animacaoSocial" id="google">

                </div>
                <div class="animacaoSocial" id="linkedIn">

                </div>
            </div>
        </div>
        <div id="slideShow">
            <div id="home">
                <div id="slideshow">
                    <div class="slide active" style="background-image: url('img/moleton1.jpg');">
                    </div>

                    <div class="slide" style="background-image: url('img/moleton2.jpg');">

                    </div>
                    <div class="slide" style="background-image: url('img/moleton3.jpg');">

                    </div>

                    <div class="slide" style="background-image: url('img/moleton4.jpg');">

                    </div>
                    <div class="slide" style="background-image: url('img/moleton5.jpg');">

                    </div>
                </div>
                <div id="controls">
                    <div id="prev"> &laquo; </div>
                    <div id="next"> &raquo; </div>
                    <div id="balls-indicator">
                    </div>
                </div>
            </div>
        </div>
            <div id="lateralMenu">
                <div class="items"> 
                    Item 1
                    <div class="subItems">
                        <ul>
                            <li>Homens</li>
                            <li>Mulheres</li>
                        </ul>
                    </div>
                </div>
                <div class="items"> 
                    Item 2 
                    <div class="subItems">
                        <ul>
                            <li>Meninos</li>
                            <li>Meninas</li>
                            <li>Bebês</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="barraPesquisa">
                <form name="frmPesquisa" method="GET" action="index.php">
                    Pesquisa: <input type="text" name="txtPesquisa" value="" placeholder="Qual roupa que você procura?"
                        id="inputPesquisa">
                    <input type="submit" name="submPesquisar" value="Buscar" id="inputBuscar">
                </form>
            </div>
            <div id="produtos">
                <h2>Pordutos encontrados: xxxx</h2>

                <div class="containerProduto">
                    <div class="imgProduto">

                    </div>
                    <ul>
                        <li>Nome:</li>
                        <li>Descrição</li>
                        <li>Preço:</li>
                    </ul>
                    <div class="saibaMais">
                        <a href="index.php">Saiba Mais</a>
                    </div>
                </div>
                <div class="containerProduto">
                    <div class="imgProduto">

                    </div>
                    <ul>
                        <li>Nome:</li>
                        <li>Descrição</li>
                        <li>Preço:</li>
                    </ul>
                    <div class="saibaMais">
                        <a href="index.php">Saiba Mais</a>
                    </div>
                </div>
                <div class="containerProduto">
                    <div class="imgProduto">

                    </div>
                    <ul>
                        <li>Nome:</li>
                        <li>Descrição</li>
                        <li>Preço:</li>
                    </ul>
                    <div class="saibaMais">
                        <a href="index.php">Saiba Mais</a>
                    </div>
                </div>
                <div class="containerProduto">
                    <div class="imgProduto">

                    </div>
                    <ul>
                        <li>Nome:</li>
                        <li>Descrição</li>
                        <li>Preço:</li>
                    </ul>
                    <div class="saibaMais">
                        <a href="index.php">Saiba Mais</a>
                    </div>
                </div>
                <div class="containerProduto">
                    <div class="imgProduto">

                    </div>
                    <ul>
                        <li>Nome:</li>
                        <li>Descrição</li>
                        <li>Preço:</li>
                    </ul>
                    <div class="saibaMais">
                        <a href="index.php">Saiba Mais</a>
                    </div>
                </div>
                <div class="containerProduto">
                    <div class="imgProduto">

                    </div>
                    <ul>
                        <li>Nome:</li>
                        <li>Descrição</li>
                        <li>Preço:</li>
                    </ul>
                    <div class="saibaMais">
                        <a href="index.php">Saiba Mais</a>
                    </div>
                </div>
            </div>

            <div id="detalhesLoja">
                <h2>Sobre a Empresa</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Est incidunt aliquid quod obcaecati ea
                    fugit?
                    Amet nulla facilis, quia rem libero explicabo. Hic dolorum nulla sapiente et accusantium id qui?
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus harum, aliquid consequuntur
                    obcaecati quos dolor quidem qui! Doloribus, sed sint ullam incidunt culpa sapiente maxime velit
                    adipisci
                    commodi quasi sequi!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, illum dicta. Voluptate, eos
                    perferendis
                    tempora totam alias animi sed facilis cum, inventore suscipit itaque blanditiis dolorem nisi?
                    Deserunt,
                    ipsum et?
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse libero inventore pariatur eius.
                    Eveniet, hic. Ipsum excepturi aliquid quam delectus quod sit exercitationem, autem rem eaque illo in
                    ducimus officiis.
                </p>
            </div>
            <div id="produtosDestaque">
                <h2>Nossos Produtos em Destaque!</h2>
                <div class="containerDestaque">
                    <div class="circulo">
                    </div>
                    <h3>
                        Nome do produto
                    </h3>
                    <div class="saibaMais">
                        <a href="index.php">Saiba Mais</a>
                    </div>
                </div>
                <div class="containerDestaque">
                    <div class="circulo">

                    </div>
                    <h3>
                        Nome do produto
                    </h3>
                    <div class="saibaMais">
                        <a href="index.php">Saiba Mais</a>
                    </div>
                </div>
                <div class="containerDestaque">
                    <div class="circulo">

                    </div>
                    <h3>
                        Nome do produto
                    </h3>
                    <div class="saibaMais">
                        <a href="index.php">Saiba Mais</a>
                    </div>
                </div>
                <div class="containerDestaque">
                    <div class="circulo">

                    </div>
                    <h3>
                        Nome do produto
                    </h3>
                    <div class="saibaMais">
                        <a href="index.php">Saiba Mais</a>
                    </div>
                </div>
            </div>
            <div id="promocao">
                <h2>Produtos em Promoção</h2>
                <div class="containerPromocao">
                    <div class="imgDesconto">

                    </div>
                    <h3>
                        Nome: xxxxxxxxx
                    </h3>
                    <h5>de R$xxx,xx</h5>
                    <h4>Por R$ xxx,xx</h4>
                    <div class="saibaMais">
                        <a href="index.php">Saiba Mais</a>
                    </div>
                </div>
                <div class="containerPromocao">
                    <div class="imgDesconto">

                    </div>
                    <h3>
                        Nome: xxxxxxxxx
                    </h3>
                    <h5>de R$xxx,xx</h5>
                    <h4>Por R$ xxx,xx</h4>
                    <div class="saibaMais">
                        <a href="index.php">Saiba Mais</a>
                    </div>
                </div>
                <div class="containerPromocao">
                    <div class="imgDesconto">

                    </div>
                    <h3>
                        Nome: xxxxxxxxx
                    </h3>
                    <h5>de R$xxx,xx</h5>
                    <h4>Por R$ xxx,xx</h4>
                    <div class="saibaMais">
                        <a href="index.php">Saiba Mais</a>
                    </div>
                </div>
                <div class="containerPromocao">
                    <div class="imgDesconto">

                    </div>
                    <h3>
                        Nome: xxxxxxxxx
                    </h3>
                    <h5>de R$xxx,xx</h5>
                    <h4>Por R$ xxx,xx</h4>
                    <div class="saibaMais">
                        <a href="index.php">Saiba Mais</a>
                    </div>
                </div>
                <div class="containerPromocao">
                    <div class="imgDesconto">

                    </div>
                    <h3>
                        Nome: xxxxxxxxx
                    </h3>
                    <h5>de R$xxx,xx</h5>
                    <h4>Por R$ xxx,xx</h4>
                    <div class="saibaMais">
                        <a href="index.php">Saiba Mais</a>
                    </div>
                </div>
                <div class="containerPromocao">
                    <div class="imgDesconto">

                    </div>
                    <h3>
                        Nome: xxxxxxxxx
                    </h3>
                    <h5>de R$xxx,xx</h5>
                    <h4>Por R$ xxx,xx</h4>
                    <div class="saibaMais">
                        <a href="index.php">Saiba Mais</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="LojasContatos">
            <div id="lojasCaixaContatos">
                <div class="contact">
                    <form name="frmcontato" method="post" action="bd/inserirContato.php">
                        <h2>
                            Entre em contato conosco
                        </h2>
                        <div class="areaTitle-contato">
                            
                            <div class="contactUs">
                                Nome:  
                            </div>
                            <div class="contactUs">
                                Celular:     
                            </div>
                            <div class="contactUs">
                                Email:  
                            </div>
                            <div class="contactUs">
                                Home Page:  
                            </div>
                            <div class="contactUs">
                                Profissão:  
                            </div>
                            <div class="contactUs">
                                Genero:  
                            </div>
                            
                            <div class="contactUs">
                                Mensagem:  
                            </div>
                        </div>
                        <div class="areaForm-contato">
                            <div class="contactUs">
                                <input type="text" name="txtnome" value="" class="inputSize" placeholder="Digite o seu nome!" required> 
                            </div>
                            <div class="contactUs">
                                <input type="text" name="txtcelular" value="" class="inputSize" pattern="[(][0-9]{2}[)][0-9]{5}-[0-9]{4}" placeholder="(99)99999-9999" onkeypress="Mascara(this);" maxlength="14" required> 
                            </div>
                            <div class="contactUs">
                                <input type="text" name="txtEmail" value="" class="inputSize" placeholder="email@email.com" required> 
                            </div>
                            <div class="contactUs">
                                <input type="text" name="txtHome" value="" class="inputSize" placeholder="example.com.br"> 
                            </div>
                            <div class="contactUs">
                                <input type="text" name="txtProfissao" value="" class="inputSize" required placeholder="Ex. tecnico, engenheiro, medico"> 
                            </div>
                            <div class="contactUs">
                                <select name="sltgenero">
                                    <option value="">Selecione um Item</option>

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
                            </div>
                            <div class="message">
                                <textarea name="txtComentario" cols="45" rows="3" required></textarea>
                            </div>
                            <input type="submit" name="btnEnviar" value="Enviar" id="enviar">
                        </div>
                    </form>
                </div>
                <div id="caixaNossasLojas">
                    <div id="nossasLojas">
                        <h3> Nossas Lojas </h3>

                        <img src="img/local.png" class="imagemLocal" alt="imagem sobre a localização">
                        <div class="endereco">
                            Av. Rui Barbosa, 619 - Centro, Carapicuíba - SP, 06311-000
                        </div>
                        <img src="img/local.png" class="imagemLocal" alt="imagem sobre a localização">
                        <div class="endereco">
                            Av. Rui Barbosa, 619 - Centro, Carapicuíba - SP, 06311-000
                        </div>
                        <img src="img/local.png" class="imagemLocal" alt="imagem sobre a localização">
                        <div class="endereco">
                            Av. Piracema, 1231 - Tamboré, Barueri - SP, 06460-000
                        </div>
                        <img src="img/local.png" class="imagemLocal" alt="imagem sobre a localização">
                        <div class="endereco">
                            Av. Piracema, 1231 - Tamboré, Barueri - SP, 06460-000
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class=centerheader>
                <div class="logoHeader">

                </div>
                <div class="tituloLoja">
                    DressClothes
                </div>
                <div id="textFooter">
                    @copyright 2020 <br>
                    Todos os direitos reservados - Política de Privacidade
                </div>
            </div>
        </footer>
        <script src="Js/main.js"></script>
        <script src="Js/mascaraCelular.js"></script>
        <script src="Js/jquery.js"></script>
</body>
</html>