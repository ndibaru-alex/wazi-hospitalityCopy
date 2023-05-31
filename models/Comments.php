<?php
    class Comments {
        private $conn;
        public $Fname;
        public $Email;
        public $Message;
        public $Ip;
        public $Blog;

        public function __construct($db)
        {
            $this -> conn = $db;
        }

        public function saveComment()
        {
            $sql = "INSERT INTO Comments(post_id,user_name,Email,comment) VALUES(?,?,?,?)";
            $query = $this -> conn -> prepare($sql);
            $query -> execute([$this -> Blog, $this -> Fname, $this -> Email, $this -> Message]);

            if($query){
                return true;
            }else{
                return false;
            }
        }


        public function saveLike(){
            $sql = "SELECT * FROM Likes WHERE Blog = ? AND Ipaddress = ?";
            $query = $this -> conn -> prepare($sql);
            $query -> execute([$this -> Blog, $this -> Ip]);

            if($query -> rowCount() > 0){
                return false;
            }else{
                $sql = "INSERT INTO Likes(Blog,Ipaddress,likes) VALUES(?,?,?)";
                $query = $this -> conn -> prepare($sql);
                $query -> execute([$this -> Blog, $this -> Ip,1]);

                if($query){
                    return true;
                }else{
                    return false;
                }
            }
        }


        public function countComments()
        {
            $sql = "SELECT * FROM Comments WHERE post_id = ?";
            $query = $this -> conn -> prepare($sql);
            $query -> execute([$this -> Blog]);

            return $query -> rowCount();
        }

        public function countLikes()
        {
            $sql = "SELECT * FROM Likes WHERE Blog = ?";
            $query = $this -> conn -> prepare($sql);
            $query -> execute([$this -> Blog]);

            return $query -> rowCount();
        }


        public function getBlogComments()
        {
            $status = "Yes";
            $sql = "SELECT * FROM Comments WHERE post_id = ? AND is_approved = ?";
            $query = $this -> conn -> prepare($sql);
            $query -> execute([$this -> Blog, $status]);

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