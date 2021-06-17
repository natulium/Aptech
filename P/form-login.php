<?php
require_once ('db/dbhelper.php');
require_once ('utils/utility.php');

$username = $password = '';

if (!empty($_POST)) {
	$username = getPOST('username');
	$password = getPOST('password');

	if ($username != '' && $password != '') {

		$password = getPwdSecurity($password);

		$sql   = "select * from member where username = '$username' and password = '$password'";
		$users = executeResult($sql);
		if($users != null && count($users) > 0){
			$token = getPwdSecurity(time().$data[0]['ussername']);
			setcookie('token',$token,time()+7*24/60*60,'/');

			$sql = "update member set token = '$token' where id = ".$data[0]['id'];
			execute($sql);
		header('Location: a.php');
		die();
		}
	}
}