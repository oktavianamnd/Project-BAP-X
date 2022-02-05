<!DOCTYPE html>
<html>
<head>
	<title>Login Sign Up</title>
	<style type="text/css">
		body {
			background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(image/login3.jpeg);
			background-size: cover;
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}
		* {
			font-family: sans-serif;
			box-sizing: border-box;
		}
		form {
			width: 500px;
			border: 2px solid #ccc;
			padding: 30px;
			background: #fff;
			border-radius: 15px;
		}
		h2 {
			text-align: center;
			margin-bottom: 40px;
		}
		input {
			display: block;
			border: 2px solid grey;
			width: 95%;
			padding: 10px;
			margin: 10px auto;
		}
		span {
			font-family: sans-serif;
		}
		a {
			color: red;
		}
		button {
			float: right;
			background: #555;
			padding: 10px 15px;
			color: #fff;
			border-radius: 5px;
			margin-right: 10px;
		}
		button:hover {
			opacity: .7;
		}
		footer {
			position: fixed;
			left: 0;
			bottom: 0;
			padding-bottom: 10px;
			padding-top: 10px;
			width: 100%;
			background-color: black;
			font-weight: bold;
			font-family: 'Courier New', Courier, monospace;
			color: white;
			text-align: center;
		}
	</style>
</head>
<body>
	<form action="signindb.php" method="post">
		<h2>Sign Up Dahulu</h2>
		<input type="text" name="nama" placeholder="Nama"><br>
		<input type="text" name="username" placeholder="Username"><br>
		<input type="Password" name="pw" placeholder="Password"><br>
		<input type="text" name="email" placeholder="Email"><br>
		<button type="submit">Sign Up</button>
	</form>
	<footer>
		&copy; dCopyright 2021 by TIM FOUR SMK WIKRAMA BOGOR
	</footer>
</body>
</html>