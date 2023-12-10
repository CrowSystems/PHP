<?php
    $palabras =  array("sol", "luna", "cielo");
    $palabraDesordenada = array();

    for($i=0; $i < 3; $i++){
        $palabraDesordenada[$i] = str_shuffle($palabras[$i]);
    }

    print_r($palabraDesordenada);
    echo "
    <form action='analisis.php'>
        <input type='text' name='palabra0'>
        <input type='text' name='palabra1'>
        <input type='text' name='palabra2'>
        <button type='submit'>Enviar</button>
    </form>
    ";
?>