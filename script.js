document.addEventListener("DOMContentLoaded", () => {
    carregarEstados();
});

function carregarEstados() {
    fetch('getEstados.php')
        .then(response => response.json())
        .then(data => {
            const estadoSelect = document.getElementById('estado');
            data.estados.forEach(estado => {
                const option = document.createElement('option');
                option.value = estado.sigla;
                option.textContent = estado.nome;
                estadoSelect.appendChild(option);
            });
        })
        .catch(error => console.error('Erro ao carregar os estados:', error));
}

function carregarCidades() {
    const estado = document.getElementById('estado').value;
    const cidadeSelect = document.getElementById('cidade');

    // Limpa as opções anteriores
    cidadeSelect.innerHTML = '<option value="">Selecione uma cidade</option>';

    if (estado) {
        fetch(`getCidades.php?estado=${estado}`)
            .then(response => response.json())
            .then(data => {
                data.cidades.forEach(cidade => {
                    const option = document.createElement('option');
                    option.value = cidade.nome;
                    option.textContent = cidade.nome;
                    option.dataset.codigoIbge = cidade.id; // Armazena o código IBGE como um atributo de dados
                    cidadeSelect.appendChild(option);
                });
            })
            .catch(error => console.error('Erro ao carregar as cidades:', error));
    }
}

// Captura o código IBGE da cidade selecionada e define-o no campo oculto
document.getElementById('cidade').addEventListener('change', function() {
    const selectedOption = this.options[this.selectedIndex];
    const codigoIbge = selectedOption.dataset.codigoIbge || '';
    document.getElementById('codigo_ibge').value = codigoIbge;
});
