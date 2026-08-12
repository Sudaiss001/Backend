<?php
    include_once("User.php");
    //
    $user = new User();
    $id = 1;
    $res = $user->getUser($id);
    var_dump($res);