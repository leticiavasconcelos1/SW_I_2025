<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercício 1</title>
</head>
<body>

    <style>
        h1{
            text-align: center;
        }

        table, th, td {
            text-align: center;
            margin: 20px auto;

            border: 1px solid black;
            border-collapse: collapse;
            padding: 4px;
        }

    </style>

    <h1>Exercicio 01</h1>
    
    <table>
        <tr>
            <td>col 1</td>
            <td>col 2</td>
            <td>col 3</td>
            <td>col 4</td>
        </tr>

        <?php


            for ($i = 1; $i <= 8; $i++) { 

                if ($i % 2 == 0) {
                    echo "<tr style='background-color: #ffc8dd;'>";
                } else {
                    echo "<tr style='background-color: #ade8f4;'>";
                }
                
                for ($x = 1; $x <= 4; $x++) { 
                    echo "<td>coluna $x da linha $i</td>";
                }
                echo "</tr>";
            }



        ?>
    </table>
   
</body>
</html>