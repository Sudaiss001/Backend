<?php
    include_once("User.php");
    include_once("StateLga.php");

    $user = new User();
    $stateLga = new StateLga();

   /* $user->addNew([
    "first_name" => "Test",
        "last_name"  => "User",
        "email"      => "testuser@example.com",
        "gender"     => "male"
       ]);
   */

   /*
    $user->updateById(1, [
        "first_name" => "Saabiq Updated",
        "email"      => "saabiq_new@gmail.com"
    ]);
    */

    $user->deleteById(17); 

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

   $lgas = $stateLga->getLGAsByStateId(1);
    echo "<h3>LGAs for State ID 1</h3>";
    echo "<pre>";
    var_dump($lgas);
    echo "</pre>";

   
?>