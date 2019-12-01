<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname="examples";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";

    $sql = "SELECT * FROM cars";
    $result = mysqli_query($conn, $sql);
    
    // CAU 1
    echo "<table border ='1' style = 'border-collapse: collapse; background-color: yellow'	>";
            for ($r=0; $r < mysqli_num_rows($result); $r++) { 
                echo "<tr>";
                $row= mysqli_fetch_array($result,MYSQLI_NUM);
                for ($c=0; $c < 3; $c++) { 
                echo "<td>" . $row[$c] ."</td>";
                }
                echo "</tr>";
            }
    echo "</table></br>";

    // CAU 2

    $idCar=$nameCar = $yearCar="";
    $idCarErr=$nameCarErr = $yearCarErr="";
   
   if (isset($_POST["submit"])){

       if(empty($_POST["idCar"])){
           $idCarErr="ID Car is required";
       }
       elseif(!is_numeric($_POST["idCar"])  && $_POST["idCar"] <= 0 ){
           $idCarErr="ID must be number greater than 0";
       }else
       {
        $idCar=test_input($_POST["idCar"]);
       }

       if(empty($_POST["nameCar"])){
           $nameCarErr="Name Car is required";
       }
        elseif( strlen($_POST["nameCar"] ) < 5 ||  strlen($_POST["nameCar"] ) >40  ){
            $nameCarErr="Name Car must be between 5 and 40 characters";
        }
        else{
            $nameCar = test_input($_POST["nameCar"]);
        }

        if(empty($_POST["yearCar"])){
            $yearCarErr="Year Car is required";
        }
        elseif( (int)$_POST["yearCar"]  < 1990 ){
            $yearCarErr="Year Car must be in a range 1990 and 2015";
        }
        else{
            $yearCar = test_input($_POST["yearCar"]);
        }
       
        if($idCarErr=="" && $nameCarErr=="" && $yearCarErr==""){
            
            $sql = "INSERT INTO cars(id,name,year) VALUES ('".$idCar."','".$nameCar."','".$yearCar."')";
        
            if (mysqli_query($conn, $sql)) {
                echo "New record created successfully";
                header("Refresh:0");
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
   }

   // CAU 3

    $idCarUpdateErr="";
    if (isset($_POST["update"])){

        if(empty($_POST["idCar"])){
            $idCarUpdateErr="ID Car is required";
        }
        else{
            $idUpdate=test_input($_POST["idCar"]);
            $nameCar=test_input($_POST["nameCar"]);
            $yearCar=test_input($_POST["yearCar"]);

            $sql = " UPDATE cars 
                    SET name = '".$nameCar."', year= '".$yearCar."'
                    WHERE id= $idUpdate"  ;

            if (mysqli_query($conn, $sql)) {
                header("Refresh:0");
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
    }

    // CAU 4

    $idCarDeleteErr="";
    if(isset($_POST["delete"])){
        if(empty($_POST["idCar"])){
            $idCarDeleteErr="ID Car is required";
        }else{
            $idCar=test_input( $_POST["idCar"]);

            $sql = "DELETE FROM cars
                    WHERE id=$idCar ";
            if(mysqli_query($conn,$sql)){
                header("Refresh:0");
            }else{
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }

    }
    function test_input($data){
        $data=trim($data);
        $data= stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
mysqli_close($conn);
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Lab09-LeVanChi-1510289</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        ID : <input type="text" name ="idCar">
        <span style="color:red">*<?php echo $idCarErr;?></span>
        <br><br>
        NAME CAR: <input type="text" name="nameCar" >
        <span style="color:red">*<?php echo $nameCarErr;?></span>
        <br><br>
        YEAR CAR: <input type="text" name="yearCar">
        <span style="color:red">* <?php echo $yearCarErr;?></span>
        <br><br>
        <input type="submit" name = "submit" value="CREATE">
        <br><br>
    </form>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        ID : <input type="text" name ="idCar">
        NAME CAR: <input type="text" name="nameCar" >
        YEAR CAR: <input type="text" name="yearCar">
        <input type="submit" name = "update" value="UPDATE">
        <br><br>
        <span style="color:red">* <?php echo $idCarUpdateErr;?></span>
        <br><br>
    </form>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Nhập ID record muốn xóa : <input type="text" name="idCar">
        <input type="submit" name="delete" value="DELETE">
        <br><br>
        <span style="color:red">* <?php echo $idCarDeleteErr;?></span>
    </form>
</body>
</html>
