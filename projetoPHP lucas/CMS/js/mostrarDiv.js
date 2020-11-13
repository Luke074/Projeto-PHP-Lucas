function mostrar_abas(obj) {

    document.getElementById('div_aba1').style.display = "none";
    document.getElementById('div_aba2').style.display = "none";
    document.getElementById('div_aba3').style.display = "none";
    document.getElementById('div_aba4').style.display = "none";
    document.getElementById('footer').style.display = "none";

    switch (obj.id) {
        case 'mostra_aba1':
            document.getElementById('div_aba1').style.display = "block";
            document.getElementById('footer').style.display = "none";
            break

        case 'mostra_aba2':
            document.getElementById('div_aba2').style.display = "block";
            document.getElementById('footer').style.display = "none";
            break

        case 'mostra_aba3':
            document.getElementById('div_aba3').style.display = "block";
            document.getElementById('footer').style.display = "none";
            break

        case 'mostra_aba4':
            document.getElementById('div_aba4').style.display = "block";
            document.getElementById('footer').style.display = "none";
            break
    }
}

function abrirfechar_div(obj) {
    document.getElementById('div_usuario1').style.display = "none";
    document.getElementById('div_usuario2').style.display = "none";
    document.getElementById('center1').style.display = "flex";

    switch (obj.id) {
        case 'mostrar_div1':
            document.getElementById('div_usuario1').style.display = "block";
            document.getElementById('center1').style.display = "none";
            break
        case 'fechar_div1':
            document.getElementById('div_usuario1').style.display = "none";
            document.getElementById('center1').style.display = "flex";
            break

        case 'mostrar_div2':
            document.getElementById('div_usuario2').style.display = "block";
            document.getElementById('center1').style.display = "none";
            break
        case 'fechar_div2':
            document.getElementById('div_usuario2').style.display = "none";
            document.getElementById('center1').style.display = "flex";
            break
    }
}