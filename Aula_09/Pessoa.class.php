<?php
      class Pessoa{
        //Atributos
        public $Nome;
        public $Peso;
        public $Altura;

        //Metodos
        public function MostrarDados(){
            echo "O nome é: ".$this->Nome ."<br>";
            echo "O peso é: ".$this->Peso ."<br>";
            echo "O altura é: ".$this->Altura ."<br>";
            echo "<hr>";
        
        }
        public function Apresentar(){
            echo "Meu nome é: ".$this->Nome." meu peso é ". $this->Peso." e minha altura é ". $this->Altura. "<br>";
        }

    }

    
?>