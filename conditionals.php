<?php

    // logical operators
    // && AND
    // || OR
    // ! NOT

    //Comparism
    // ==
    // ===
    // !=
    // >
    // <
    // >=
    // <= 
    // --
    // ++
    /*
    $age = 10;
    if ( $age <= 10) {
        echo "Too young to Harry Potter.";
    } else if ( $age <= 15 ) {
        echo "You may watch Harry Potter.";
    } else {
     echo "Should watch Harry Potter.";
    }
    */
    $age = 15;
    $watched = false;
    
    if ( $age >= 12 && !$watched ) {
        echo "You must watch Harry Potter.";
    } elseif ( $age >= 15 || !$watched) {
        echo "You may watch Harry Potter.";
    }