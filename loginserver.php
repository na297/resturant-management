<?php


if(isset($_POST['submit'])){
	if(empty($_POST['uname']) || empty($_POST['password'])){

		?> <script type="text/javascript">alert("username or password is blank");</script><?php
	}
	else{
		$ur=$_POST['uname'];
		$ps=$_POST['password'];

		$servername='localhost';
		$pass='';
		$dbname='hotel';
		$username='root';
		$conn= new mysqli($servername,$username,$pass,$dbname);

			if ($conn->connect_error) {
				die ("connection failed" . $conn->connect_error);

			}
		$query="SELECT * from login where uname='$ur' and password='$ps'";

		$qu=mysqli_query($conn,$query);

		$rows= mysqli_num_rows($qu);
		if($rows==1) {
			if($ur=="manager")
				header("Location: dashboard.php");
		} else {
			?><script type="text/javascript">alert("login unsccessful");</script> ;<?php
		}
		mysqli_close($conn);//close connection
}
}

?>