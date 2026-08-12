<?php
    trait App {
        private $con;
        //initializing database
        public function __construct(){
            $this->con = $this->connect();
        }

        function connect(){
            $this->con = new PDO('mysql:host=localhost;dbname=abdul', 'root', '');
            // var_dump($this->con);
            // exit();
            return $this->con;
        }

        function fetchSingle($sql, $data = []){
            $query = $this->con->prepare($sql);
            $query->execute([$data]);
            return $query->fetch(PDO::FETCH_ASSOC);
        }

        //fetchMultiple
        //$dt = [];

    }
 

                    
?> 
