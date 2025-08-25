<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php
        require 'conexao.php';
        include_once 'pedaco.php';
    ?>

    <h2 style = "text-align: center">Lista de Livros Disponíveis</h2>

    <div class='container'>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Título</th>
                    <th scope="col">Genêro</th>
                    <th scope="col">ano</th>
                    <th scope="col">autor</th>
                    <th scope="col">Páginas</th>
                    <th scope="col">opções</th>
                </tr>   
            </thead>
            <tbody>
                <?php                
                    $sql = "SELECT * FROM livros";
                    $stmt = $pdo->query($sql);
                    while ($livros = $stmt->fetch(PDO::FETCH_ASSOC)) {

                        echo"<tr>";
                        echo "<th scope='row'>".$livros['id_livro']."</th>";
                        echo "<td>".$livros['titulo']."</td>";
                        echo "<td>".$livros['genero']."</td>";
                        echo "<td>".$livros['ano']."</td>";
                        echo "<td>".$livros['autor']."</td>";
                        echo "<td>".$livros['paginas']."</td>";
                        echo "
                        <td>
                             <div class='btn-group centro' role='group'>
                                <a href='form_atualizar.php?id=".$livros['id_livro']." ' type='button' class='btn btn-outline-info'>atualizar</a>
                                <a href='#' type=' button' class='btn btn-outline-info'>apagar</a>
                             </div>

                        </td>
                        ";

                        echo "ID: " . $livros['id_livro'] . "<br>";
                        echo "Titulo: " . $livros['titulo'] . "<br>";
                        echo "Gênero: " . $livros['genero'] . "<br>";
                        echo "Ano:" . $livros['ano'] . "<br>";
                        echo "Autor: " . $livros['autor'] . "<br>";
                        echo "Páginas: " . $livros['paginas'] . "<br><hr>";
                        

                        echo"<tr>";
                    }
                ?>
            </tbody>


        </table>

         <a href="index.php" type="button" class="btn btn-info">Voltar</a>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>