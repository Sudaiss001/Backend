<?php
    //encrypt paasword
    $pword = 'abc12345dfghj';
    function encryptPword($pword){
        return md5($pword);
    }
    //$hashed = encryptPword($pword);
    function encryptPword2($pword){
        return password_hash($pword,PASSWORD_DEFAULT);// PASSWORD_BCRIPT
    }
    $hashed = encryptPword2($pword);
    
    function decPword($pword, $hashed){
        return password_verify($pword, $hashed);
    }
    $p = decPword($pword, $hashed);

    echo $p;

    
