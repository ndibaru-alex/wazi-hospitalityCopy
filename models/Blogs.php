<?php
    class Blogs {
        private $conn;
        public  $id;
        public  $limit;
        public  $search;

        public function __construct($db)
        {
            $this -> conn = $db;
        }

        public function getBlogs()
        {
            if($this -> limit){
                $sql = "SELECT * FROM Blogs ORDER BY id DESC LIMIT  {$this -> limit}";
            }else{
                $sql = "SELECT * FROM Blogs ORDER BY id DESC";
            }
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

        public function getBlog()
        {
            $sql = "SELECT * FROM Blogs WHERE id = ? ORDER BY id DESC";
            $query = $this -> conn -> prepare($sql);
            $query -> execute([$this -> id]);

            if($query -> rowCount() > 0){
                while($results = $query -> fetch(PDO::FETCH_ASSOC)){
                    return $results;
                }
            }else{
                return false;
            }
        }

        public function searchBlog()
        {
            $sql = "SELECT * FROM Blogs WHERE `blog_title` LIKE ?  OR `language` LIKE ? OR `blog_content` LIKE ? ORDER BY id DESC";
            $query = $this -> conn -> prepare($sql);
            $query -> execute(['%'.$this -> search.'%','%'.$this -> search.'%','%'.$this -> search.'%']);

            if($query -> rowCount() > 0){
                while($results = $query -> fetchAll(PDO::FETCH_ASSOC)){
                    return $results;
                }
            }else{
                return false;
            }
        }

        public function getRelatedBlogs()
        {
            $sql = "SELECT * FROM Blogs WHERE `language` = ? ORDER BY id DESC LIMIT 4";
            $query = $this -> conn -> prepare($sql);
            $query -> execute([$this -> search]);

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