<html>
<head>
	<title>delete</title>
	<link rel="stylesheet" type="text/css" href="css/detailsstyle.css">
</head>
</head>
<body>
	<form action="" method="post">
		<center>

		<div>
				<h1>Enter Details To Delete Table</h1>
				<h3>Enter table no:</h3><br>
				<input type="number" name="tnumber">
			<h3>Enter Date:</h3><br>
				<input type="date" name="date">
			
				<input type="submit" name="submit" value="submit">
			</div>
		</center>
			
	</form>
	<?php
		if(isset($_POST['submit'])){
			if(empty($_POST['tnumber'] || empty($_POST['date']))){
				?><script type="text/javascript">alert("please enter all value");</script>
				<?php

			}
			else{
				$conn=new mysqli('localhost','root','','hotel');

				if($conn->connect_error)
				{
					die ("connection failed" . $conn->connect_error);
				}

				$tno=$_POST['tnumber'];
				$date=$_POST['date'];
		
				$q2="DELETE FROM `bookings` WHERE `table_no`= AND `date`='$date'";
				
				$r1=mysqli_query($conn,$q2);

				if($r1){
					echo "booking deleted";

				}
				else {
					echo "could not delete";
				}

			}
		}

	?>

</body>
</html>