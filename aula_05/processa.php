<?php
$confirmauser = $_POST['cxuser1'] ;
$confirmasenha = $_POST['cxsenha1'] ; 
$usuario = $_POST['cxuser'] ;
$senha = $_POST['cxsenha'] ; 

if ($confirmauser == $usuario  && $confirmasenha == $senha){
    echo " logado com sucesso";
}
else {
    echo " usuario e(ou) senha invalido";
}

?>