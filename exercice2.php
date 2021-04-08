<?php
    $password="aa5gRTee";
    if(preg_match("#[A-Za-z]+[0-9]+#",$password) && strlen($password)>=8){
        echo "password est validé!!!";
 
    }else{
        echo "password n'est pas validé!!!";

    }
?>