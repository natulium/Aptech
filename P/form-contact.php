<?php
require_once ('db/dbhelper.php');
require_once ('utils/utility.php');

$name = $phone = $email = $title = $message ='';

if (!empty($_POST)) {
 $name = getPOST('name');

 $phone = getPOST('phone');

 $email = getPOST('email');

 $title = getPOST('title');

 $message = getPOST('message');




 if($name != '' && $phone != '' && $email != '' && $title != '' && $message != ''){
 	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$date = date('m/d/Y H:i:s', time());
 	$sql = "insert into feedback (name,email,phone,title,message,upload_Date) 
		values ('$name','$email','$phone','$title','$message','$date')";

		execute($sql);
		header('Location: a.php');
		die();
 }
}