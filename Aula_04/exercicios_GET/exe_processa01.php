<?php

    $nome = $_GET['cxnome'] ;
    $nota01 = $_GET['cxnota01'] ;
    $nota02 = $_GET['cxnota02'] ; 
    $nota03 = $_GET['cxnota03'] ;

    $media = ($nota01+$nota02+$nota03) / 3;

    if (is_numeric ( $nota01 ) && is_numeric ( $nota02 ) &&is_numeric ( $nota03 ) ) {
        echo "numérico ";
    } else {
        echo "nao numerico";
    }

    echo " sua média final foi : $media <br>";
?>

