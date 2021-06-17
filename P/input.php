<?php
require_once ('db/dbhelper.php');
require_once ('utils/utility.php');

$s_name = $s_username = $s_phone = $s_email = $s_address = $s_birthday = $s_gender = $s_membershipdate = $s_password = '';
if (!empty($_POST)) {
	$s_id = '';
	$s_name = getPOST('name');
	$s_username = getPOST('username');
	$s_password = getPOST('password');
	$s_phone = getPOST('phone');
	$s_email = getPOST('email');
	$s_address = getPOST('address');
	$s_birthday = getPOST('birthday');
	$s_gender = getPOST('gender');
	$s_membershipdate = getPOST('membershipdate');
	$s_id = getPOST('id');
	$s_password = getPwdSecurity($s_password);
	if ($s_id != '') {
		
		$sql = "update member set name ='$s_name', username ='$s_username',password='$s_password' , phone = '$s_phone' , email = '$s_email' , address = '$s_address' , birthday = '$s_birthday' , gender = '$s_gender' , membership_end = '$s_membershipdate' where id = " .$s_id;
	} else {
		
		$sql = "insert into member (username,password,email,name,phone,address,birthday,gender,membership_end) 
		values ('$s_username','$s_password','$s_email','$s_name','$s_phone','$s_address','$s_birthday','$s_gender','$s_membershipdate')";
	}

	
	execute($sql);

	header('Location: memberList.php');
	die();
} 
$id = '';
if (isset($_GET['id'])) {
	$id          = $_GET['id'];
	$sql         = 'select * from member where id = '.$id;
	$memberList = executeResult($sql);
	if ($memberList != null && count($memberList) > 0) {
		$item        = $memberList[0];
		$s_name = $item['name'];
		$s_username = $item['username'];
		$s_password = $item['password'];
		$s_phone = $item['phone'];
		$s_email = $item['email'];
		$s_address = $item['address'];
		$s_birthday = $item['birthday'];
		$s_gender = $item['gender'];
		$s_membershipdate = $item['membership_end'];
	} else {
		$id = '';
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>SA</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Add </h2>
			</div>
			<div class="panel-body">
				<form method="post">
					<div class="form-group">
                                     <label for="usr"><b>Tên đăng nhập:</b></label>
                                     <input type="number" name="id" value="<?=$id?>">
                                     <input required="true" type="text" class="form-control" id="usr" name="username" value="<?=$s_username?>">
                                </div>
                                <div class="form-group">
                                     <label for="email"><b>Email:</b></label>
                                     <input required="true" type="email" class="form-control" id="email" name="email" value="<?=$s_email?>">
                                </div>
                                <div class="form-group">
                                    <label for="pwd"><b>Mật khẩu:</b></label>
                                    <input required="true" type="text" class="form-control" id="pwd" name="password" value="<?=$s_password?>">
                                </div>
                                
                                <div class="form-group">
                                    <label for="name"><b>Họ và tên</b></label>
                                    <input required="true" type="text" class="form-control" name="name" value="<?=$s_name?>"> 
                                </div>
                                <div class="form-group">
                                    <label for="phone"><b>Số điện thoại</b></label>
                                    <input required="true" type="text" class="form-control" name="phone" value="<?=$s_phone?>"> 
                                </div>
                                <div class="form-group">
                                    <label for="address"><b>Địa chỉ</b></label>
                                    <input required="true" type="text" class="form-control" name="address" value="<?=$s_address?>"> 
                                </div>
                                <div class="form-group">
                                    <label for="birthday"><b>Ngày sinh</b></label>
                                    <input required="true" type="date" class="form-control" name="birthday" value="<?=$s_birthday?>"> 
                                </div>
                                <div class="form-group">
                                    <label for="gender"><b>Giới tính</b></label>
                                    <input required="true" type="text" class="form-control" name="gender" value="<?=$s_gender?>"> 
                                </div>
                                <div class="form-group">
                                    <label for="membershipdate"><b>Ngày hết hạn</b></label>
                                    <input required="true" type="date" class="form-control" name="membershipdate" value="<?=$s_membershipdate?>"> 
                                </div>
					</div>
					<button class="btn btn-success">Lưu</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>