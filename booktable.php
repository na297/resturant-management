<html>
<head>
	<title>Enter details</title>
	<link rel="stylesheet" type="text/css" href="css/detailsstyle.css">
</head>
<body><form action="" method="post">
	<center>
	<div>
		<h1> Enter Details:</h1>
		<br><h3>Table No.:</h3> <input type="number" name="tbno" placeholder="table no."><br>
		<h3>Date:</h3><input type="date" name="date" placeholder="Enter Date" ><br/>
		<h3>Name:</h3><input type="textbox" name="cname" placeholder="Enter name" ><br/>
		<h3>Location:</h3><input type="textbox" name="cloc" placeholder="Enter Location"><br/>
		<h3>Phone No:</h3> <input type="number" name="cphno" placeholder="Enter Phone number"><br/>
		<h3>No. of visitors:</h3><input type="number" name="nov" placeholder="Number of visitors" ><br/>
			<input type="submit" name="submit" value="submit">
	</div>
	</center>
</form>

<?php

	$conn=new mysqli('localhost','root','','hotel');
	if($conn->connect_error){
		die ("connection failed". $conn->connect_error);
	}
	else{
		if(isset($_POST['submit'])){
		$date=$_POST['date'];
		$tno=$_POST['tbno'];
		$nm=$_POST['cname'];
		$loc=$_POST['cloc'];
		$pno=$_POST['cphno'];
		$nov=$_POST['nov'];


		$q1="SELECT  `table_no` FROM `bookings` WHERE `date`='$date'";

		$qu= mysqli_query($conn,$q1);

		while($row=$qu->fetch_assoc()){
			if($row['table_no'] == $tno){
				header("Location: tbbkd.php");
			}
		}
		$q2="INSERT INTO `bookings`( `table_no`, `date`, `name`, `location`, `phone_no`, `no_of_visitor`) VALUES ($tno,'$date','$nm','$loc',$pno,$nov)";

		$r2=mysqli_query($conn,$q2);

		if($r2){
			echo "Table Booked Successfully";
		}
		else{
			echo "booking unsuccessful ";
		}
		}
	}
		?>
	</body>
	</html>