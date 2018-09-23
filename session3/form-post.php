<!DOCTYPE html>
<html>
<head>
	<title>Form post - session 3</title>
</head>
<body>
	<?php
		if (isset($_POST['submit'])){
			var_dump($_FILES);
			$name = $_POST['name'];
			$password = $_POST['password'];
			echo $name;
			echo "<br>";
			echo $password;
		}
	?>
	<?php
		$nameErr = $passwordErr = '';
		$check = true;
		if (isset($name)){
			if ($name == '') {
				$check = false;
				$nameErr = "Name is required";
			}}
		if (isset($password)){
			if ($password == '') {
				$check = false;
				$passwordErr = "Password is required";
			}}
			if ($check){
				echo "<br>";
				echo "Register succes!";
			}
	?>
	<h1>Register Form</h1>
	<form action="#" method="post" name="RegisterForm" enctype=multipart/form-data>
		<p>Name : <input type="text" name="name"></p>
		<span class="error">* <?php echo $nameErr;?></span>
		<p>Password : <input type="password" name="password"></p>
		<span class="error">* <?php echo $passwordErr;?></span>
		<br>
		<p>Avatar : <input type="file" name="avatar"></p>
		<input type="submit" name="submit" value="Register">
	</form>
</body>
</html>