<?php
    include "db.php";

    $errors = array();
    $data   = array();

    // Varidate the variables 

    if( strlen($_POST["name"] ) < 5 ){
        $errors["name"]="Name Car at least 5 characters";
    }
    if(strlen($_POST["name"] ) > 40){
        $error["name"]="Name Car must be less than 40 characters";
    }
    if( (int)$_POST["year"] < 1990 ||  (int)$_POST["year"] > 2015 )
        $errors["year"]="Year Car must be in a range 1990 and 2015";

    
    // return response

    if(!empty($errors)){
        $data["success"]= false;
        $data["errors"]=$errors;
    }else{
        $data["success"]=true;
        $data["message"]="Success";

        $name = filter_data($_POST['name']);
        $year = filter_data($_POST['year']);

        $sql = "INSERT INTO cars(id,name,year) VALUES (NULL,'".$name."','".$year."')";
        mysqli_query($conn, $sql);
        
    }
    function filter_data($data){  
        return trim(stripslashes(htmlspecialchars($data)));
    }

    // return all data to an AJAX call
    echo json_encode($data);
?>