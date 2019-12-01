<?php 
    include "db.php";
    class DataOperation extends Database{
        public function insert_record($table,$fileds){
           // INSERT INTO table_name (column1, column2, column3, ...) VALUES ('value1',' value2', value3, ...);
           $sql = "";
           $sql .= "INSERT INTO " .$table;
           $sql .= "(" .implode(",", array_keys($fileds)) . ") VALUES";
          

           $sql .= "('" .implode("','", array_values($fileds))."')"; 
  
           $query=  mysqli_query($this->conn,$sql);
         
           if($query){
               return true;
           }        
        }

        // public function fetch_record($table){
        //     // SELECT * FROM table;
        //     $sql="SELECT * FROM ".$table;
        //     $query = mysqli_query(this->conn, $sql);
        //     $array = array();
        //     $query = mysqli_query($this->con,$sql);
        //     while($row = mysqli_fetch_assoc($query)){
        //         $array[] = $row;
        //     }
        //     return $array;
        // }
        

        // public function select_record($table,$where){
        // }
        
       


    }
    $obj = new DataOperation;


    if(isset($_POST["submit"])){
        $myArray = array(
                        "name" => $_POST["name"],
                        "year" => $_POST["year"] 
                    );
    if($obj->insert_record("cars",$myArray)){
    header("location:index.php?msg=Record Inserted");
    }

    }

?>