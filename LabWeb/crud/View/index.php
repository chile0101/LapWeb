<?php
    $RootPath = $_SERVER["DOCUMENT_ROOT"];
    include($RootPath . '/LabWeb/crud/action.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    
    
    <!-- <script src="main.js"></script> -->
</head>
<body>
    <h3>List User</h3>
    
    <a href="new.php" class="btn btn-primary">New User</a>
    <table border="1" class="table">
    <tr>
        <th>ID</th>
        <th>fname</th>
        <th>lname</th>
        <th>sex</th>
        <th>email</th>
        <th>BirthDay</th>
        <th>#</th>
        <th>#</th>
        <th>#</th>
    </tr>

    <?php
        $myrow = $obj->fetch_record("user");
        foreach ($myrow as $row) {
    ?>
    <tr>
        <td> <?php echo $row["id"] ?> </td>
        <td> <?php echo $row["fname"] ?> </td>
        <td> <?php echo $row["lname"] ?> </td>
        <td> <?php echo $row["sex"] ?> </td>
        <td> <?php echo $row["email"] ?> </td>
        <td> <?php echo $row["date"] ?> </td>
        <td><a href="show.php?get&id=<?php echo $row["id"]; ?>">Show</a></td>
        <td><a href="edit.php?get&id=<?php echo $row["id"]; ?>">Edit</a></td>
        <td><a href="index.php?delete&id=<?php echo $row["id"]; ?>">Delete</a></td>
        
    </tr>

    <?php }?>
    </table>




</body>
</html>
<?php

    if(isset($_GET["delete"])){
        $id = $_GET["id"] ?? null;
        $where = array("id"=>$id);
        if($obj->delete_record("user",$where)){
            header("location:index.php?msg=Deteted success");
        }
    }

?>