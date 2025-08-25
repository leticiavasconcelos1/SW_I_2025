<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca ETEC MCM</title>
    <link rel="stylesheet" href="estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <?php
        include_once 'pedaco.php';

         $id_livro = $_GET['id'];

        echo " valor do id: " . $id_livro;

        include_once 'conexao.php';
    ?>

    <h2> Formulario  para atualização de livros</h2>

    <div class ="container" >
        <form action="#" method="POST">

        <?php             
            $sql = "SELECT * FROM livros WHERE id_livro = $id_livro";
            $stmt = $pdo->query($sql);
            while ($livros = $stmt->fetch(PDO::FETCH_ASSOC)) {
            
                echo "Titulo: " . $livros['titulo'] . "<br>";
                echo "Gênero: " . $livros['genero'] . "<br>";
                echo "Ano:" . $livros['ano'] . "<br>";
                echo "Autor: " . $livros['autor'] . "<br>";
                echo "Páginas: " . $livros['paginas'] . "<br><br>";
            }
        ?>

            <div class="mb-3">
                <input  type="text" value =
                "
                <?php
                    echo $livros['titulo'];
                ?>
                "
                name="titulo" class="form-control">
            </div>

            <div class="mb-3">
                <input  type="text"  name= "genero" class="form-control">
            </div>

            <div class="mb-3">
                <input  type="text"  name= "ano" class="form-control">
            </div>

            <div class="mb-3">
                <input  type="text" name= "autor" class="form-control">
            </div>

            <div class="mb-3">
                <input  type="text"  name= "paginas" class="form-control">
            </div>

            <button type="submit" class="btn btn-info"> atualizar </button>
    
            <a href="index.php" type="submit" class="btn btn-info">Voltar</a>
        </form>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>