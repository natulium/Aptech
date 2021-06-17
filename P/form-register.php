<?php
require_once ('db/dbhelper.php');
require_once ('utils/utility.php');

$username = $password = $email = $fullname = $phone = $address = $birthday = $gender = '';
if (!empty($_POST)) {
	$username = getPOST('username');

	$password = getPOST('password');

	$email = getPOST('email');

	$fullname = getPOST('fullname');

	$phone = getPOST('phone');

	$address = getPOST('address');

	$birthday = getPOST('birthday');

	$gender =getPOST('gender');

	if ($username != '' && $password != '' && $email != '' && $fullname != '' && $phone != '' && $address != '' && $birthday != '' && $gender != ''){

		$password = getPwdSecurity($password);

		$sql = "insert into member (username,password,email,name,phone,address,birthday,gender) 
		values ('$username','$password','$email','$fullname','$phone','$address','$birthday','$gender')";

		execute($sql);
		header('Location: a.php');
		die();
	}
}