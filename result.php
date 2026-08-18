<?php
    include_once("User.php");

    $user = new User();
    $res = $user->allUser();

    echo "<pre>";
    var_dump($res);
    echo "</pre>";
?>