<?php
    class Myclass {
        public $pub = "public";
        protected $pro = "protected";
        private $priv = "private";
        public $lang;
        function __construct($lang){
            $this->lang = $lang;
        }

        function hello(){
            echo $pub."\n";
            echo $pro."\n";
            echo $priv."\n";
        }
    }
    class Myclass2 extends Myclass {

        //methods
        // function hello(){
        //     echo $pub."\n";
        //     echo $pro."\n";
        //     echo $priv."\n";
        // }

    }
    trait Encryption {
         //function
         //decryptPword   
    }

    trait App {
        //DB
    }
    //include_once(App.php);
    //use App;
    // dog instance
    $class_1 = new Myclass2('en');
    $pub = $class_1->lang;
    //$pro = $class_1->pro;
    //$priv = $class_1->priv;

    echo $pub;
    //echo $pro;
    //echo $priv;

?>