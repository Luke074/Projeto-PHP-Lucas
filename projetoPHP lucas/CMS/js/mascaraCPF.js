function mascara_cpf (){
    const cpf1 = document.getElementById('cpf_register')
    const cpf2 = document.getElementById('cpf_update')

    if(cpf1.value.length == 3 || cpf1.value.length == 7){
        cpf1.value += "."
    } else if (cpf1.value.length == 11) {
        cpf1.value += "-"
    }

    if(cpf2.value.length == 3 || cpf2.value.length == 7){
        cpf2.value += "."
    } else if (cpf2.value.length == 11) {
        cpf2.value += "-"
    }
}