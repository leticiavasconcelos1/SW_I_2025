<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 3</title>
</head>
<body>
    <style>
        h1{
            text-align: center;
        }

        table{
            width: 70%;
            border-collapse: collapse;
            margin: 20px auto;
            text-align: center;
        }

        th, td{
            border: 1px solid black;
            padding: 10px;
        }

        th {
            background-color: #ffd6ff;
        }

        .eletronico{
            background-color: #c8b6ff;
        }

        .papelaria{
            background-color: #bbd0ff;
        }

        .cosmeticos{
            background-color: #7FFFD4;
        }
        .roupas{
            background-color: #89c2d9;
        }
        .casa{
            background-color: #5e548e;
        }
</style>

    <h1>Exercicio 3</h1>

    <table>
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Categoria</th>
        </tr>
        <?php

            $dados = [
                ["nome" => "celular", "preco" => "R$2.500,00", "categoria" => "eletronico"],
                ["nome" => "caderno", "preco" => "R$50,00", "categoria" => "papelaria"],
                ["nome" => "batom", "preco" => "R$30,00", "categoria" => "cosmeticos"],
                ["nome" => "calça", "preco" => "R$150,00", "categoria" => "roupas"],
                ["nome" => "cobertor", "preco" => "R$100,00", "categoria" => "casa"],
            ];

            foreach ($dados as $produto) {
                echo "<tr class='". $produto['categoria'] ."'>"; 
                echo "<td>". $produto['nome'] ."</td>";
                echo "<td>". $produto['preco'] ."</td>";
                echo "<td>". $produto['categoria'] ."</td>";
                echo "</tr>";
            }

        ?>
    </table>
</body>
</html>