<?php
    include_once("App.php");

    class User {
        use App;

        function getUser($data){
            $sql = "SELECT * FROM users WHERE id = ?";
            $res = $this->fetchSingle($sql, $data);
            //var_dump($res);
            return $res;
        }

        function allUser(){
            $sql = "SELECT * FROM users";
            $res = $this->fetchMultiple($sql);
            return $res;
        }
    }
?>