<?php
    include_once 'conta.class.php';

    $conta1 = new Conta();

    $conta1->Nome = " Lele";
    $conta1->Cpf= "158.109.183.76";

    $conta1->MostrarSaldo();

    echo"<hr>";

    echo $conta1->Depositar(500);
    echo "<br>";
    $conta1->MostrarSaldo();

    echo"<hr>";
    
    echo $conta1->Sacar(700);
    echo "<br>";
    $conta1->MostrarSaldo();



?>
