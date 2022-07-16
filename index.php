<?php
    /* MANIPULAÇÃO  DE STRINGS*/
    //STRINGS SÃO TEXTOS
    $palavra = 'beleza';
    $frase = "eu acho esse negocio divertido até.";
    $data = "25-08-2021";


    //STR LEN MOSTRA A QUANTIDADE DE CARCTERES QUE TEM DENTRO DAS STRINGS
    //echo strlen("oi pessoal   ");

    //str_word_count()    conta o números de palavras que eu tenho
    //echo str_word_count($palavra);

    //strerev(); string reversa le a palavra de tras para frente

    //echo strrev($palavra);


    //strpos() localica a palavra 
    //echo strpos("oi tudo bom", "tudo");

    //str_replace(); substitui um caracter dentro do meu codigo

    $data_formatada = str_replace("-", "/",$data);
    echo "Data antiga:  $data<br>", "Data Formatada: $data_formatada";
?>