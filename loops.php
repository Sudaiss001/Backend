<?php
    
    // for loop
    for ( $i = 1; $i <= 5; $i++){
        //echo $i;
    }
    //  while
    $i = 1;
    while( $i <= 5 ) {
        // echo $i;
        $i++;
    }
    // foreach
 $fruits = ['banana', 'apple', 'orange'];
    foreach ( $fruits as $fruit) {
        echo $fruit . ' ';
    }
    $arr_1 = [1, 'Musa'];
    $arr_2 = ['John'];
    $res = array_merge($arr_1, $arr_2);
    //var_dump($res);
    array_push($arr_1, 'apple');
    var_dump(Count($arr_1);
