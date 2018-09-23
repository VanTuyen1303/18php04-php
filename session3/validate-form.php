<!DOCTYPE html>
<html>
<head>
	<title>ValidateForm</title>
</head>
<body>
	<?php
		if (isset($_POST['submit'])){
			var_dump($_FILES);
			$name = $_POST['name'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$enterpassword = $_POST['enterpassword'];
			$gender = $_POST['gender'];
			$town = $_POST['town'];
			$information = $_POST['information'];
			/*$avatar = $_POST['avatar'];*/
			echo $name;
			echo "<br>";
			echo $email;
			echo "<br>";
			echo $password;
			echo "<br>";
			echo $enterpassword;
			echo "<br>";
			echo $gender;
			echo "<br>";
			echo $town;
			echo "<br>";
			echo $information;
			echo "<br>";
			/*echo $avatar;*/
		}
	?>
	<?php
		$nameErr = $emailErr = $passwordErr = $enterpasswordErr = $genderErr = $townErr = $information = $avatarErr = '';
		$check = true;
		if (isset($name)) {
			if ($name =='') {
				$check = false;
				$nameErr = "Name is required";
			}
		}
		if (isset($email)) {
			if ($email =='') {
				$check = false;
				$emailErr = "Email is required";
			}
		}
		if (isset($password)) {
			if ($password =='') {
				$check = false;
				$passwordErr = "Password is requirred";
			}
			$email = test_input($_POST["email"]);
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			  $emailErr = "Invalid email format"; 
			}
		}
		if (isset($enterpassword)) {
			if ($enterpassword =='') {
				$check = false;
				$enterpasswordErr = 'Enter the password is required';
			}
		}
		if (isset($gender)) {
			if (empty($_POST["gender"])) {
				$check = false;
   				 $genderErr = "Gender is required";
  			} else {
    				$gender = test_input($_POST["gender"]);
  			}
		}
		if (isset($town)) {
			if ($town =='') {
				$check = false;
				$townErr = 'Choose the town';
			}
		}
		if (isset($information)) {
			if ($information =='') {
				$check = false;
				$informationErr = 'Information is required';
			}
		}
		if ($check) {
			echo "<br>";
			echo "Register succes!";
		}
	?>
	<h1>Register Form</h1>
	<!--Tạo form đăng ký gồm:
		Họ và tên
		Email
		Mật khẩu
		Nhập lại mật khẩu
		Gioi tính (radio)
		Quê quán (tỉnh/thành phố) (select)
		Thông tin mô tả bản thân (textarea)
		Avatar (file)
		1. Validate phải điền đẩy đủ các thông tin mới cho đăng ký
		2. Email phải đúng định dạng
		3. Mật khẩu và mật khẩu nhập lại phải khớp
		4. Upload avatar lên một thư mục
		5. Show thông tin đã đăng ky thành công lên

		-->
	<form action="#" method="post" name="ValidateForm" enctype="multipart/form-data">
		<p>Name: 
			<span class="error">* <?php echo $nameErr;?></span>
			<input type="text" name="name">
		</p>
		<p>Email:
			<input type="email" name="email">
			<span class="error">* <?php echo $emailErr;?> </span>
		</p>
		<p>Password: 
			<input type="password" name="password">
			<span class="error">* <?php echo $passwordErr;?> </span>
		</p>
		<p>Enter the Password: 
			<input type="password" name="enterpassword">
			<span class="error">* <?php echo $enterpasswordErr;?> </span>
		</p>
		<div class="input-radio">Gender:
					<input type="radio" name="gender" id="male">Nam
					<input type="radio" name="gender" id="female">Nữ
					<input type="radio" name="gender" id="other">Khác
		</div>
		<span id="genderErr"></span>
		<p>Town: 
			<input type="select" name="town">
			<span class="error">* <?php echo $townErr;?> </span>
		</p>
		<p>Information: 
			<input type="textarea" name="information">
			<span class="error">* <?php echo $informationErr;?> </span>
		</p>
		<p>Avatar: 
			<input type="file" name="avatar">
			<span class="error">* <?php echo $avatarErr;?> </span>
		</p>
		<input type="submit" name="submit" value="Register">
	</form>
</body>
</html>