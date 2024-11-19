<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora Simples</title>
</head>
<body>
    <div class="container">
        <h1>Calculadora Simples</h1>
        <form id="calculadora">
            <label for="num1">Número 1:</label>
            <input type="number" id="num1" name="num1" placeholder="Digite o número 1" required>
            
            <label for="num2">Número 2:</label>
            <input type="number" id="num2" name="num2" placeholder="Digite o número 2" required>
            
            <label for="operacao">Operação:</label>
            <select id="operacao" name="operacao">
                <option value="soma">Soma</option>
                <option value="subtracao">Subtração</option>
            </select>
            
            <button type="button" onclick="calcular()">Calcular</button>
        </form>

        <div class="result">
            <h2>Resultado:</h2>
            <p id="resultado">-</p>
        </div>
    </div>

    <script>
        function calcular() {
            const num1 = parseFloat(document.getElementById('num1').value);
            const num2 = parseFloat(document.getElementById('num2').value);
            const operacao = document.getElementById('operacao').value;
            let resultado;

            if (isNaN(num1) || isNaN(num2)) {
                resultado = "Por favor, insira valores válidos.";
            } else {
                if (operacao === "soma") {
                    resultado = num1 + num2;
                } else if (operacao === "subtracao") {
                    resultado = num1 - num2;
                } else {
                    resultado = "Operação inválida.";
                }
            }

            document.getElementById('resultado').textContent = resultado;
        }
    </script>
</body>
</html>


    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['n1']) && isset($_GET['n2'])) {
        $n1 = floatval($_GET['n1']);
        $n2 = floatval($_GET['n2']);
        $op = $_GET['op'];

        function soma($a, $b) {
            return $a + $b;
        }


        if ($op == 'soma') {
            echo "<h1>$n1 + $n2 = " . soma($n1, $n2) . "</h1>";
        }
    }
    ?>
</body>
</html>
