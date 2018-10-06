<?php 
	include("user/user.php");
	class Model {
		function getListuser() {
			
			return array(
			"tuyen131998" => new user("tuyen131998@gmail.com", "123456"),
			"bk01" => new user("bk01@gmail.com", "25251325"),
			"tinhpham" => new user("tinhpham@gmail.com", "130325")
			);

		}
		function getListuserdata($email)
		{
			$alluser = $this->getListuser();
			return $alluser[$email];
		}
}
?>
	
	
