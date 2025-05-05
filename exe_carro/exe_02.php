<?php
    include_once 'carro.class.php';

    $Carro1 = new Carro();

    $Carro1->Marca = " Volkswagen";
    $Carro1->Modelo = "Hatch";
    $Carro1-> Combustivel = "Gasolina";
    $Carro1->Portas = 2 ;
    $Carro1->Capacidade_tanque = 50;


    $Carro1->MostrarDados();

    

    $Carro2 = new Carro();

    $Carro2->Marca = " Chevrolet";
    $Carro2->Modelo = "Sedan";
    $Carro2-> Combustivel = "Gasolina";
    $Carro2->Portas = 4 ;
    $Carro2->Capacidade_tanque = 80;


    $Carro2->MostrarDados();

    

    $Carro3 = new Carro();

    $Carro3->Marca = " Fiat";
    $Carro3->Modelo = "SUV";
    $Carro3-> Combustivel = "Gasolina";
    $Carro3->Portas = 6 ;
    $Carro3->Capacidade_tanque = 45;


    $Carro3->MostrarDados();

    

    $Carro4 = new Carro();

    $Carro4->Marca = " Ford";
    $Carro3->Modelo = "SUV";
    $Carro3-> Combustivel = "Gasolina";
    $Carro3->Portas = 6 ;
    $Carro3->Capacidade_tanque = 45;


    $Carro3->MostrarDados();

    


   
    
?>