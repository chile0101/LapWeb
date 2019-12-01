<?php
    $RootPath = $_SERVER["DOCUMENT_ROOT"];
    include($RootPath . '/LabWeb/crud/action.php');

    $id=$_GET["id"];
    $where = array("id"=>$id,);
    $row = $obj->select_record("user",$where);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <form method="post" action="../Controller/UserController.php">
        ID: <input type="text" name="id" value="<?php echo $row["id"] ?>"><br><br>
        First Name: <input type="text" name = "fname" value="<?php echo $row["fname"] ?>"><br><br>
        Last Name: <input type="text" name="lname" value="<?php echo $row["lname"] ?>"><br><br>
        Gender: <input type="text" name="sex" value="<?php echo $row["sex"] ?>"><br><br>
        Email: <input type="text" name="email" value="<?php echo $row["email"] ?>"><br><br>
        Birthday <input type="text" name="date" value="<?php echo $row["date"] ?>"><br><br>
        <input type="submit" name ="update" value="Update" >

    </form>
</body>
</html>