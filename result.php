<?php
    include_once("User.php");
    include_once("StateLga.php");

    $user = new User();
    $stateLga = new StateLga();

    // --- Testing User.php ---
    $res = $user->allUser();
    echo "<h3>All Users</h3>";
    echo "<pre>";
    var_dump($res);
    echo "</pre>";

    // --- Testing StateLga.php ---
    $states = $stateLga->getAllStates();
    echo "<h3>All States</h3>";
    echo "<pre>";
    var_dump($states);
    echo "</pre>";

    $lgas = $stateLga->getLGAsByStateId([1]);
    echo "<h3>LGAs for State ID 1</h3>";
    echo "<pre>";
    var_dump($lgas);
    echo "</pre>";
?>