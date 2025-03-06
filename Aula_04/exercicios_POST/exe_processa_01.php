<?php
$usuario = $_POST['cxnome'] ;
$senha = $_POST['cxsenha'] ; 

if ($usuario == "etec" && $senha == "informatica"){
    echo " logado com sucesso";
}
else {
    echo " usuario e(ou) senha invalido";
}

?>