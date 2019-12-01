<?php

    $RootPath = $_SERVER["DOCUMENT_ROOT"];
    include($RootPath . '/LabWeb/crud/action.php');

    // Create
    if(isset($_POST["submit"])){
       
        $user_arr = array(   "id"=>"null",
                            "fname" => $_POST["fname"],
                            "lname" => $_POST["lname"],
                            "sex" => $_POST["sex"],
                            "email"=>$_POST["email"],
                            "date"=>$_POST["date"]
                        );
        if($obj->insert_record("user",$user_arr)){
            header("location:../View/index.php?msg=Record Inserted");
        }
    } 
    
    // Update
    if(isset($_POST["update"])){
        $id = $_POST["id"];
        $where = array("id"=>$id);
        $user_arr = array( 
                            "fname" => $_POST["fname"],
                            "lname" => $_POST["lname"],
                            "sex" => $_POST["sex"],
                            "email"=>$_POST["email"],
                            "date"=>$_POST["date"]
                        );
        if($obj->update_record("user",$where,$user_arr)){
            header("location:../View/index.php?msg=Record Updated Successfully");
        }
        
    }
    
    if(isset($_GET["delete"])){
        $id = $_GET["id"] ?? null;
        $where = array("id"=>$id);
        if($obj->delete_record("user",$where)){
            header("location:index.php?msg=Deteted success");
        }
    }


?>
