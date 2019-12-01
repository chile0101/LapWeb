<?php 
    include "db.php";

    $sql = "SELECT * FROM cars";
    $result = mysqli_query($conn, $sql);


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

?>