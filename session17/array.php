<?php
//khai bao mang
	$arr = [];
	$arr = ['cho','meo','vit','ga'];
	$arr1 = [0 => 'cho', 1 => 'meo', 2 => 'vit', 3 =>'ga'];
	$arr2 = ['cho' =>'Cho', 'meo' => 'Meo', 'vit' =>'Vit', 'ga' => 'Ga'];
	// var dump($arr);
	// var dump($arr1);
	// var dump($arr2);
	foreach ($arr as $key => $value) {
		echo $key.', '.$value;
		echo "<br>";
	}
	// console.log();
	array_push($arr, 'bo');
	var_dump($arr);
	echo "<br>";

	array_pop($arr1);
	var_dump($arr1);
	echo "<br>";

	unset($arr2['cho']);
	var_dump($arr2);
	echo "<br>";

	$arr3 = array_merge($arr1,$arr2);
	var_dump($arr3); 
	echo "<br>";
	foreach ($arr3 as $key => $value) {
		echo $key. ', '.$value;
		echo "<br>";
	}
	echo "<br>";
	$myClass = array();
	array_push($myClass, 'Tuyen');
	array_push($myClass, 'Vu');
	var_dump($myClass);
	echo "<br>";
	$arrMyClass = array(
		'tuyen' => array(
			'name' => 'Tuyen',
			'age' => 20,
			'gender' => 'male',
			'phone' => '0899...'
		),
		'vu' => array(
			'name' => 'Vu',
			'age' => 20,
			'gender' => 'male',
			'phone' => '0999...'
		),
		'nam' => array(
			'name' => 'Nam',
			'age' => 20,
			'gender' => 'male',
			'phone' => '0168...'
		),
		'nguyen' => array(
			'name' => 'Nguyen',
			'age' => 20,
			'gender' => 'male',
			'phone' => '0876...'
		)
	);
	//var_dump($arrMyClass);
	echo "<br>";
	function changeGenderVi($gender){
		return $gender == 'male' ? "Nam":"Nu";
	}
	function listClass($arrMyClass){
	$i = 1;
	foreach ($arrMyClass as $key => $value) {
		echo $i.' - '.$value['name']. ' - '.$value['age']. ' tuoi '. ' - '.changeGenderVi($value['gender']). ' - '.$value['phone'] ;
		echo "<br>";
		$i++;
		//var_dump($key);
		//var_dump($value);
	}
}
	$arrayNewMember = array(
		'vuong' => array(
			'name' => 'Vuong',
			'age' => 20,
			'gender' => 'male',
			'phone' => '0852'
		)
	)
?>