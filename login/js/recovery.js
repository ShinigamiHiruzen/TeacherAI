function enviarMensagem() {
    // Remove o formulário
    var formulario = document.getElementById('formulario');
    formulario.parentNode.removeChild(formulario);

    // Substitui o conteúdo da div com a mensagem desejada
    var mensagemDiv = document.getElementById('mensagem');
    mensagemDiv.innerHTML = "Enviamos uma mensagem para o seu email, por favor verifique a caixa de entrada!";

    // Exibe o botão de voltar
    var voltarBtn = document.getElementById('voltarBtn');
    voltarBtn.style.display = 'inline-block';
}
