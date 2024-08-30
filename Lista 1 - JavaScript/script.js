function verificarIdade() {
    const idade = document.getElementById('idade').value;
    let mensagem;

    if (idade >= 18) {
        mensagem = "Você é maior de idade.";
    } else {
        mensagem = "Você é menor de idade.";
    }

    document.getElementById('resultado').innerText = mensagem;
}