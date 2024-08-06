<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Dinâmico de Estados e Cidades</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Selecione o Estado e a Cidade</h1>

        <?php
       if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $estadoSelecionado = $_POST['estado'];
            $cidadeSelecionada = $_POST['cidade'];
            $codigoIBGE = $_POST['codigo_ibge'];
            echo "<div class='alert alert-success'>Você selecionou o estado: <strong>$estadoSelecionado</strong>, a cidade: <strong>$cidadeSelecionada</strong> e o código IBGE: <strong>$codigoIBGE</strong></div>";
        }
        ?>

        <form method="POST" action="">
            <div class="mb-3">
                <label for="estado" class="form-label">Estado:</label>
                <select id="estado" name="estado" class="form-select" onchange="carregarCidades()" required>
                    <option value="">Selecione um estado</option>
                    <!-- As opções de estados serão carregadas aqui -->
                </select>
            </div>
            <div class="mb-3">
                <label for="cidade" class="form-label">Cidade:</label>
                <select id="cidade" name="cidade" class="form-select" required>
                    <option value="">Selecione uma cidade</option>
                    <!-- As opções de cidades serão carregadas aqui -->
                </select>
            </div>
            <input type="hidden" id="codigo_ibge" name="codigo_ibge" value="">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- JS personalizado -->
    <script src="script.js"></script>
</body>
</html>
