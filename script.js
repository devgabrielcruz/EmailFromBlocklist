function removeBloqueio() {
    const emailPaciente = document.querySelector('#emailPct');

    // validações
    if (emailPaciente.value == '') {
        alert('Por favor, digite um endereço de e-mail para verificação!');

    } else if (emailPaciente == null) {
        alert('Digite um e-mail válido!');

    } else if () {
        alert('Este e-mail não consta na lista de bloqueio!');

    } else {
        alert('E-mail não identificado!');
    }
}


