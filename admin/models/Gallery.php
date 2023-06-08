<?php
    class Gallery {
        private $conn;
        public $fileName;
        

        public function __construct($db)
        {
            $this -> conn = $db;
        }

        public function saveGallery()
        {
            $sql = "INSERT INTO Gallery(`Image`) VALUES(?)";
            $query = $this -> conn -> prepare($sql);
            $query -> execute([$this -> fileName]);

            if($query){
                return true;
            }else{
                return false;
            }
        }
    }
?>