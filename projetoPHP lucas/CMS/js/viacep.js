'use strict';

// const url = 'https://viacep.com.br/ws/06364570/json/';
// fetch(url).then(response => console.log(response.json())
//     .then(data => console.log(data)));



const cep = document.getElementById('cep');

const preecherForm = (data) => {
    document.getElementById('rua').value = data.logradouro;
    document.getElementById('bairro').value = data.bairro;
    document.getElementById('cidade').value = data.localidade;

}

const ViaCep = (cep) => {
    const url = `https://viacep.com.br/ws/${cep}/json/`;
    fetch(url).then(response => response.json())
        .then(data => preecherForm(data));
}

const pesquisarCep = (evento) => {
    ViaCep(cep.value);
}

cep.addEventListener('blur', pesquisarCep);