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
        function addNew($data){
            $columns = array_keys($data);
            $sql = "INSERT INTO users (" . implode(", ", $columns) . ") VALUES (" . implode(", ", array_fill(0, count($columns), "?")) . ")";
            return $this->runQuery($sql, array_values($data));
        }

        function updateById($id, $data = []){
            if (is_array($id) && empty($data)) {
                $data = $id;
                $id = $data["id"];
                unset($data["id"]);
            }

            $fields = [];
            foreach (array_keys($data) as $column) {
                $fields[] = $column . " = ?";
            }

            $values = array_values($data);
            $values[] = $id;

            $sql = "UPDATE users SET " . implode(", ", $fields) . " WHERE id = ?";
            return $this->runQuery($sql, $values);
        }

        function deleteById($data){
            $sql = "DELETE FROM users WHERE id = ?";
            return $this->runQuery($sql, is_array($data) ? $data : [$data]);
        }
    }
    
?>
