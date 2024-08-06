# Formulário Dinâmico de Estados e Cidades

Formulário dinâmico onde a seleção de um estado brasileiro atualiza as opções de cidades correspondentes, foi usado JavaScript, PHP e Bootstrap 5.

## Explicação sobre os arquivos
* **index.php** Contém o formulário com os selects de estados e cidades, ao submeter o formulário é exibida uma mensagem informando o estado, a cidade e código IBGE da cidade escolida.
* **script.js** JavaScript para carregar dinamicamente os estados e cidades com base na API do IBGE.
* **getEstados.php** PHP que retorna os estados do Brasil em formato JSON.
* **getCidades.php** PHP que retorna as cidades de um estado específico em formato JSON.

Certifique-se de ter o servidor PHP em execução para testar este exemplo.
