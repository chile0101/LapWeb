<?php
    include "/LabWeb/crud/action.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New User</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        First Name: <input type="text" name = "fname"><br><br>
        Last Name: <input type="text" name="lname"><br><br>
        Gender: <input type="text" name="sex"><br><br>
        Email: <input type="text" name="email"><br><br>
        Birthday <input type="text" name="day"><br><br>
        <input type="submit" name ="submit" value="create" >
    </form>
</body>
</html>