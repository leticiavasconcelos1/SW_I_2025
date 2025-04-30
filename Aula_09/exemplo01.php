<?php 
    include_once 'Pessoa.class.php';

    //Criar um objeto - Instancia da classe pessoa
    $Le = new Pessoa();
    $Bea = new Pessoa();


    // var_dump($Lebea);

    //atribuir valores 

    $Le->Nome = " Lele";
    $Le->Peso = 50;
    $Le->Altura = 1.58;

    $Bea->Nome = " Bea";
    $Bea->Peso = 60;
    $Bea->Altura = 1.60;

    // Chamando o metodo da classe do fulaninho
    $Le->MostrarDados();
    $Bea->MostrarDados();

    $Le->Apresentar();
    $Bea->Apresentar();




?>