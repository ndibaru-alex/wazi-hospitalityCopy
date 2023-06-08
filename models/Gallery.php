<?php
    class Gallery {
        private $conn;

        public function __construct($db)
        {
            $this -> conn = $db;
        }

        public function getGallery()
        {
            $sql = "SELECT * FROM Gallery ORDER BY id DESC";
            $query = $this -> conn -> prepare($sql);
            $query -> execute();

            if($query -> rowCount() > 0){
                while($results = $query -> fetchAll(PDO::FETCH_ASSOC)){
                    return $results;
                }
            }else{
                return false;
            }
        }
    }
?>