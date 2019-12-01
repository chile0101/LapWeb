<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Lab08-LeVanChi</title>
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" /> -->
    <script src="main.js"></script>
</head>
<body>

	<?php 
		// Cau 1
		echo "<h3> Cau 1: </h3>";
		$x=10;
		$y=7;
		echo "$x + $y = " . ($x+$y) . "<br>" ;
		echo "$x - $y = " . ($x-$y) . "<br>";
		echo "$x * $y = " . ($x*$y) . "<br>" ;
		echo "$x / $y = " . ($x/$y) . "<br>" ;
		echo "$x % $y = " . ($x%$y) . "<br>" ;

		// Cau 2
		echo "<h3> Cau 2: </h3>";
	
		function message($n){
				switch ($n%5){
					case 0:
							echo "Hello";
							break;
					case 1: 
							echo "How are you ?";
							break;
					case 2:
							echo "I'm doing well thank you ";
							break;
					case 3:
							echo "Say you later ";
							break;
					default:
							echo "Good-bye !";
				}
		}
		echo "Voi n = 7 : ";
		message(7);
	

		// Cau 3:
		echo "<h3> Cau 3: </h3>";
		echo " <br> Số lẻ từ 0 - 100 : <br>";
		echo "Dùng for loop : <br>";
		for ($x=0;$x<100;$x++){
				if($x % 2 == 1){
						echo $x . " ";
				}
		}
		echo "<br> Dùng while loop <br>";
		$x=1;
			while ($x < 100){
				echo $x . " ";
				$x=$x+2;
			}
		
	
		// Cau 4 
		echo "<h3> Cau 4: </h3>";
		echo "<table border ='1' style = 'border-collapse: collapse; background-color: yellow'	>";
		for ($row=1; $row <= 7; $row++) { 
			echo "<tr>";
			for ($col=1; $col <= 7; $col++) { 
					$p = $col * $row;
					echo "<td>$p</td> \n";
					}
						echo "</tr>";
			}
			echo "</table>";

		// Cau 6
		echo "<h3> Cau 6: </h3>";
		$fName = $lName = $email = $password  = $about="";
		$fNameErr = $lNameErr = $emailErr = $passwordErr = $aboutErr ="";
		$status="";

		if ($_SERVER["REQUEST_METHOD"]== "POST"){
			// validate firstname
			if(empty($_POST["fName"]))
			{  				
				$fNameErr = "First name is required";
			}
			elseif(strlen($_POST["fName"]) < 2 || strlen($_POST["fName"]) > 30 ){
				$fNameErr="First Name must be between 2 and 30 characters";
			}
			else {
				$fName=test_input($_POST["fName"]);
			}
				//lastname
			if(empty($_POST["lName"])){ 		
				$lNameErr = "Last name is required";
			}
			elseif (strlen($_POST["lName"]) < 2 || strlen($_POST["lName"]) > 30 ){
				$lNameErr="Last Name must be between 2 and 30 characters";
			}
			else
				$lName=test_input($_POST["lName"]);
				//email
			if(empty($_POST["email"])){ 		
				$emailErr="Email is required";
			}
			elseif(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
				$emailErr="Invalid email format";
			}
			else 
				$email = test_input($_POST["email"]);
			//password
			if (empty($_POST["password"]))
			{			
				$passwordErr="Password is required";
			}
			elseif(strlen($_POST["password"]) < 2 || strlen($_POST["password"]) > 30 )
			{
				$passwordErr = "Password must be between 2 and 30 characters";
			}
			else
				$password=test_input($_POST["password"]);
			//about
			if (strlen($_POST["about"] > 10000))
			{  			
				$aboutErr="About must be less than 10000 characters";
			}
			else
				$about = test_input($_POST["about"]);
			
			if ($fNameErr==""&& $lNameErr == "" && $emailErr == "" && $passwordErr =="" && $aboutErr== "" )
				$status ="Complete !!!";
				
			
		}
		function test_input($data){
			$data=trim($data);
			$data= stripslashes($data);
			$data=htmlspecialchars($data);
			return $data;
        }
	

	?>

  <div style="padding: 0px">
		<h1>Php validate</h1>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

			First Name: <input type="text" name="fName" value="<?php echo $fName; ?>"> 
			<span style="color:red">* <?php echo $fNameErr;?></span>
			<br><br>
			
			Last Name: <input type="text" name="lName" value="<?php echo $lName; ?>" >
			<span style="color:red">* <?php echo $lNameErr;?></span>
			<br><br>

			Email: <input type="text" name="email" value="<?php echo $email; ?>" >
			<span style="color:red">* <?php echo $emailErr;?></span>
			<br><br>

			Password: <input type="password" name="password" value="<?php echo $password; ?>">
			<span style="color:red">* <?php echo $passwordErr;?></span>
			<br><br>

			Birthday: 
						Ngày: <select name="day">
										<option value= "1" >1 </option>
										<option value= "2" >2 </option>
										<option value= "3" >3 </option>
										<option value= "4" >4 </option>
										<option value= "5" >5 </option>
									</select>
						Tháng: <select name="month">
										<option value= "1" >1 </option>
										<option value= "2" >2 </option>
										<option value= "3" >3 </option>
										<option value= "4" >4 </option>
										<option value= "5" >5 </option>
									</select>
						Năm: <select name="year">
										<option value= "1995" >1995 </option>
										<option value= "1996" >1996 </option>
										<option value= "1997" >1997 </option>
										<option value= "1998" >1998 </option>
										<option value= "1999" >1999 </option>
									</select>
						<br><br>
			
			Gender: 
						<input type="radio" name="gender" value="male" checked> Male
						<input type="radio" name="gender" value="female"> Female
						<input type="radio" name="gender" value="other"> Other
						<br><br>

			Country: 
						<select name="country" >
							<option value="vietnam">VietNam</option>
							<option value="australial">Australial</option>
							<option value="united states">United States</option>
							<option value="india">India</option>
							<option value="other">Other</option>
						</select>
						<br><br>

			About: <textarea name="about" rows="4" cols="30" ><?php echo $about; ?></textarea>
			<span style="color:red">* <?php echo $aboutErr;?></span>
			<br><br>
			
			<input type="submit" value="Submit">
			<input type="reset">
		</form>
		<h4>*<?php  echo $status; ?></h4>
	</div>

	<?php 
		echo "<h2> Your Inputs: </h2>";
		echo $fName . "<br>";
		echo $lName . "<br>";
		echo $email . "<br>";
		echo $about . "<br>";
	
	?>
    
</body>
</html>