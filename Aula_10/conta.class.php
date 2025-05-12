<?php

class Conta{
     public $Nome;
     public $Cpf;
     private $Saldo;

     public function Sacar($Valor){
        if ($this->Saldo < $Valor){
            return "Saldo insuficiente";
        }
        else{
            $this->Saldo = $this->Saldo - $Valor;
            $texto = "Saque realizado com sucesso. Saldo atual é de: R$".$this->Saldo;
            return $texto;
        }







        return $this->Saldo;
     }

     public function Depositar($Valor){
        $this->Saldo += $Valor;
        $texto = "deposito realizado com sucesso. Saldo atual é de: R$".$this->Saldo;
        return $texto;
     }


     public function MostrarSaldo(){
        echo $this->Nome. " Seu saldo atual é de: R$".$this->Saldo;     
     }

}


?>