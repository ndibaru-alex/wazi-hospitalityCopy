<?php
    class Database {
        private $db_host;
        private $db_user;
        private $db_password;
        private $db_name;
        private $conn;


        public function __construct()
        {
            if($_SERVER['HTTP_HOST'] == "127.0.0.1" || $_SERVER['HTTP_HOST'] == "localhost"){
                // $this -> db_host     = "127.0.0.1";
                // $this -> db_user     = "root";
                // $this -> db_password = "";
                // $this -> db_name     = "Wazi";

                $this -> db_host     = "localhost";
                $this -> db_user     = "rc5";
                $this -> db_password = "Ntheketha26*";
                $this -> db_name     = "wazi";


            }else{
                // $this -> db_host     = "127.0.0.1";
                // $this -> db_user     = "techroll_techroll";
                // $this -> db_password = "BNv!A@sAdTm0";
                // $this -> db_name     = "techroll_techroll";
            }
            
        }

        public function connection()
        {
            $sql = "mysql:host=".$this -> db_host.";dbname=".$this -> db_name;
            $db = new PDO($sql,$this -> db_user,$this -> db_password);
            if($db){
                $this -> conn = $db;
                return $this -> conn;
            }else{
                return false;
            }
        }
    }
?>