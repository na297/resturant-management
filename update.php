<html>
<head>
	<title>update</title>
	<link rel="stylesheet" type="text/css" href="css/detailsstyle.css">
</head>
</head>
<body>
	<form action="" method="post">
		<center>
			<div>
				<h1>Enter Details To Update Bookings</h1> <br>
				<h3>Enter table no:</h3>
		<input type="number" name="tno"><br>
		<h3>Enter date:</h3>
		<input type="date" name="date"><br>
		<h3>Enter name:</h3>
		<input type="text" name="name"><br>
			<h3>Enter location:</h3>
		<input type="text" name="loc"><br>
		<h3>Enter phone number:</h3>
		<input type="number" name="pno"><br>
		<h3>Enter no. of visitors:</h3>
		<input type="number" name="nov"><br>
		<input type="submit" name="submit" value="submit">
</div>
</center>
</form>
	<?php
		if(isset($_POST['submit'])){
			if(empty($_POST['tno']) || empty($_POST['date'])){
				?><script type="text/javascript">alert("please enter all value");</script>
				<?php

			}
			else{
				$conn=new mysqli('localhost','root','','hotel');

				if($conn->connect_error)
				{
					die ("connection failed" . $conn->connect_error);
				}

				$tno=$_POST['tno'];
				$date=$_POST['date'];
				$name=$_POST['name'];
				$loc=$_POST['loc'];
				$pno=$_POST['pno'];
				$nov=$_POST['nov'];

				$q1="UPDATE `bookings` SET `name`=$name,`location`=$loc,`phone_no`=$pno,`no_of_visitor`=$nov WHERE `table_no`=$tno  AND `date`='$date'";
				$r=mysqli_query($conn,$q1);

				if($r){
					echo "bookings updated successfully";
				}
				else{
					echo "booking cannot be updated successfully";
				}
			}
		}
		?>


</body>
</html>


