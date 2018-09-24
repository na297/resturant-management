
<html>
<head>
	<title>show bookings</title>
	<link rel="stylesheet" type="text/css" href="css/bookstyle.css">
</head>
<body>
	<center>
	<div><h1>My Bookings</h1>
	<table border="1" cellpadding="5px" cellspacing="0px">
		<tr><th>Table No. </th><th>Date</th><th>booking time</th><th>Name</th><th>location</th><th>phone no.</th><th>No. of Visitors</th></tr>
<?php

	$conn=new mysqli("localhost","root","","hotel");
		if( $conn->connect_error ){
			die("connection failed"). $conn->connect_error;
		}
		$query="SELECT * from bookings;";

		$qu=mysqli_query($conn,$query);

		$rows= mysqli_num_rows($qu);

		while($row = $qu->fetch_assoc()) {
			?>
			<tr>
				
				<td><?php echo $row['table_no'];?></td>
				<td><?php echo $row['date'];?></td>
				<td><?php echo $row['time'];?></td>
				<td><?php echo $row['name'];?></td>
				<td><?php echo $row['location'];?></td>
				<td><?php echo $row['phone_no'];?></td>
				<td><?php echo $row['no_of_visitor'];?></td>
			</tr>
			<?php
		}
		?>
	</table>
</div>
</center>
</table>
</body>
</html>
