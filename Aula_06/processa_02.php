<style>
    table {
        width: 50%;
        border-collapse: collapse;
        text-align: center;
    }
    th{
        background-color:#cdb4db;
    }
    
    table, th, td {
            text-align: center;
            margin: 20px auto;

            border: 1px solid black;
            border-collapse: collapse;
            padding: 4px;
        }
           


</style>


<?php
    $linhas = $_POST['linhas'];
    $colunas = $_POST['colunas'];

    if ($linhas > 0 && $colunas > 0){
        echo "<table>";
    }else{
        echo" Digite números maiores que 0 ";
    }

    echo "<tr>";
    for ($c = 1; $c <= $colunas; $c++) {
        echo "<th>Título $c</th>";
    }

    $l = 0;
    while ($l < $linhas){
        echo "<tr>";
        $l++;

        $c = 0;
        while ($c < $colunas){
            echo "<td>Linha ".($l+1)."- Coluna ".($c+1)."</td>";
            $c++;
        }
    }

    echo "<table>";
    
?>

