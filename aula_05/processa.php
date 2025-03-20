<?php
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if ($email == "etec@gmail.com" && $senha == "TI"){
        $nome = "Prof Anderson";
        header('Location: privada.php?nome='.$nome );
    }else{
        
        header('Location: erro.php');
    }


?>