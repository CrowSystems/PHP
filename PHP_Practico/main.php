<?php
    $palabras =  array("sol", "luna", "cielo");
    $palabraDesordenada = array();

    for($i=0; $i < 3; $i++){
        $palabraDesordenada[$i] = str_shuffle($palabras[$i]);
    }

    echo "
    <form>
        <intput type='text' name="
?>