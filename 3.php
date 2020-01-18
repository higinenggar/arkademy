<?php

$cekkata = "ini adalah sebuah kata";

    if(is_numeric($cekkata)==FALSE){
        echo (str_word_count($cekkata,0));
        print '/';
        echo (str_word_count($cekkata,0,"2"));
    }
    else{
        echo"PARAMETER HARUS STRING";
    }
?>