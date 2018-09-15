<?php
	$userName = "18php04";
	echo $userName;
	// + - * / % = == !=
	function myFunction(){
		echo "<br>";
		$a = 5;
		return $a;
	}
	echo myFunction();
	function tinhtong(){
		echo "<br>";
		$a = 10;
		$b = 20;
		$c = $a + $b;
		return $c;
	}
	echo tinhtong();
	function mySum($a, $b){
		return $a + $b;
	}
	echo"<br>";
	echo mySum(10,7);
	echo "<br>";
	$total = mySum(10,5);
	if ($total % 2 == 0) {
		echo "tong chia het cho 2";
	}elseif ($total % 3 == 0) {
		echo "la so le va chia het cho 3";
	}else{
		echo "tong la so le va khong chia het cho 3";
	}
	echo "<br>";
	$n = 3;
	switch ($n) {
		case 1:
		case 3:
		case 5:
		case 7:
		case 8:
		case 10:
		case 12:
			echo "thang $n la thang co 31 ngay";
			break;
		
		case 4:
		case 6:
		case 9:
		case 11:
			echo " thang $nla thang co 30 ngay";
			break;

		case 2:
			echo " thang $nla thang co 28 ngay";
	}
	<form action="check.php" method="post">
    	<input type="text" name="number" size="25" /> <br />
    	<input type="text" name="number" size="25"/> <br/>
   		<input type="submit" name="sum" value="OK" />
	</form>
?>