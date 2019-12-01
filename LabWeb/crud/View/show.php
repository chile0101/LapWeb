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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>
<body>
  
    <h3> Information User </h3>
    <table class="table">
        <tr>
            <td>ID</td>
            <td class="text-gray"><?php echo $row["id"] ?></td>
        </tr>
        <tr>
            <td>Fname</td>
            <td class="text-gray"><?php echo $row["fname"] ?></td>
        </tr>
        <tr>
            <td>Lname</td>
            <td class="text-gray"><?php echo $row["fname"] ?></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td class="text-gray"><?php echo $row["sex"] ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td class="text-gray"><?php echo $row["email"] ?></td>
        </tr>
        <tr>
            <td>Birthday</td>
            <td class="text-gray"><?php echo $row["date"] ?></td>
        </tr>

    </table>

</body>
</html>
