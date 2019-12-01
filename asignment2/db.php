<?php 
    class Database{
        public $conn;
        public function __construct(){
            $this->conn = mysqli_connect("localhost","root","");
            if (!$this -> conn){
                echo "Error in Connecting" . mysqli_connect_error();
            }
        }
    }
?>