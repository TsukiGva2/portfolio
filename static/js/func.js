

function copyToClipboard(text) {
    if (!navigator.clipboard) {
        // A API Clipboard não é suportada no navegador
        alert("A API Clipboard não é suportada no seu navegador.");
        return;
    }

    navigator.clipboard.writeText(text)
        .then(() => {
            console.log("Texto copiado com sucesso para a área de transferência: " + text);
            document.querySelector('.transferarea').classList.remove('d-none')
            setTimeout(() => {
                document.querySelector('.transferarea').classList = 'd-none'
            }, 3000);
        })
        .catch(err => {
            console.error("Erro ao copiar texto para a área de transferência: ", err);
        });

}

