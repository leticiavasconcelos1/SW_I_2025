<?php
    class Carro{
        public $Marca;
        public $Modelo;
        public $Combustivel;
        public $Portas;
        public $Capacidade_tanque;



        public function MostrarDados(){
            echo "Marca: " . $this ->Marca . "<br>";
            echo "Modelo: " . $this ->Modelo . "<br>";
            echo "Combustivel: " . $this ->Combustivel . "<br>";
            echo "Portas: " . $this ->Portas . "<br>";
            echo "Capaciadade do tanque: " . $this ->Capacidade_tanque . "<br>";
            echo "<hr>";
    }
    
}




?>  