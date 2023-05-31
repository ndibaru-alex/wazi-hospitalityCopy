<?php
    class Contact {
        private $conn;
        public $fullname;
        public $email;
        public $message;

        public function __construct($db)
        {
            $this -> conn = $db;
        }

        public function saveMessage()
        {
            $sql = "INSERT INTO Contact(`FullName`,`Email`,`Message`) VALUES(?,?,?)";
            $query = $this -> conn -> prepare($sql);
            $query -> execute([$this -> fullname, $this -> email, $this -> message]);

            if($query){
                return true;
            }else{
                return false;
            }
        }
    }
?>