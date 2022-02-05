<?php 

include "logindb.php";

if (isset($_POST['username']) && isset($_POST['pw'])) {
	
	function validate($data){
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$username = validate($_POST['username']);
	$password = validate($_POST['pw']);
	$email = validate($_POST['email']);

	if (empty($username)) {
		header("location:login.php?error=Username is required");
		exit();
	}else if (empty($password)){
		header("location:login.php?error=Password is required");
		exit();
	}else if (empty($email)){
		header("location:login.php?error=Email is required");
		exit();
	}else{
		$sql = "SELECT * FROM login WHERE Username='$username' AND Password='$password' AND Email='$email'";
		$result = mysqli_query($koneksi, $sql);

		if (mysqli_num_rows($result)) {
			$row = mysqli_fetch_assoc($result);
			if ($row['Username'] === $username && $row['Password'] === $password && $row['Email'] === $email ) {
				header("location:home.html");
				exit();
			}else {
				header("location:login.php?error=Incorect Username or Password or Email");
				exit();
			}
		
		}else {
			header("location:login.php?error=Incorect Username or Password or Email");
			exit();
		}
	}

}else{
	header("location: login.php");
	exit();
}
 