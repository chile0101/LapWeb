<?php

    $UserName=$Password="";
    $Err = $UserNameErr=$PasswordErr="";
    session_start();

    if (isset($_POST["submit"])){
        if(empty($_POST["UserName"])){
            $UserNameErr="User Name is required";
        }else
            $UserName=test_input($_POST["UserName"]) ;
        
            
            
        if(empty($_POST["Password"])){
            $PasswordErr="Password is required";
        }else  
            $Password=test_input($_POST["Password"]);

        if($UserNameErr=="" && $PasswordErr==""){
            
           
            if($UserName=="admin" && $Password=="123456"){
                $_SESSION["UserName"]=$UserName;
                header("Location: info.php"); 
                exit();
            }else{
                $Err="UserName or Password incorrect";

            }
        }
    }
    function test_input($data){
        $data=trim($data);
        $data= stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Lab11_1510289_LeVanChi</title>
    <style>
        .form{
            text-align: center;
            margin-top: 50px;
            
        }
        p{
            font-size:12px;
            color:red;
        }
    </style>
   
</head>
<body>

    

    <div class="form">
        <h3> Welcom to My Website </h3>
        <br><br>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
            <p >*<?php echo $Err;?></p>
            UserName : <input type="text" name ="UserName" value="<?php echo $UserName; ?>" >
            <br>
            <p >*<?php echo $UserNameErr;?></p>
        
            PassWord : <input type="password" name="Password" value="<?php echo $Password; ?>">
            <br>
            <p >*<?php echo $PasswordErr;?></p>
            
            <input type="submit" name = "submit" value="SIGN IN">
            <br><br>
            <p>For test: Username is "admin" , Password is "123456"
        </form>
    </div>

</body>
</html>