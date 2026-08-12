<?php

    function hi(){
        //echo 'hello';
    }  

    hi();
    // with parameters
    /*
    function greet($name){
        echo "hi $name";
    }
    greet('musa');
    */
    // with default value
    function greet($name='Abu'){
        //echo "hi $name";
    }
    greet();
    // with return
    function multiply($a, $b){
        return $a * $b;
    }
    $res = multiply(2, 3);
    // echo $res;
// function that print a matric no
    function printmatricNo ($matricNo){
        echo $matricNo;
    }
    printmatricNo("AKU24/FCDA/CYS/1001");